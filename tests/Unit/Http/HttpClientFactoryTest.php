<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Unit\Http;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Shellrent\Sdk\Auth\ClientCredentials;
use Shellrent\Sdk\Auth\TokenException;
use Shellrent\Sdk\Http\HttpClientFactory;
use Shellrent\Sdk\Tests\Support\FakeHandler;

final class HttpClientFactoryTest extends TestCase
{
    private const URL = 'https://api.shellrent.com/api/health';

    public function testSendsTheAccessTokenAsBearer(): void
    {
        $handler = new FakeHandler(FakeHandler::token('token-1'), FakeHandler::health());

        $this->client($handler)->request('GET', self::URL);

        [$tokenRequest, $apiRequest] = $handler->requests;
        self::assertFalse($tokenRequest->hasHeader('Authorization'));
        self::assertSame('Bearer token-1', $apiRequest->getHeaderLine('Authorization'));
    }

    public function testRetriesOnceWithANewTokenAfter401(): void
    {
        $handler = new FakeHandler(
            FakeHandler::token('token-1'),
            FakeHandler::error(401, 'Not authorized'),
            FakeHandler::token('token-2'),
            FakeHandler::health(),
        );

        $response = $this->client($handler)->request('GET', self::URL);

        self::assertSame(200, $response->getStatusCode());
        self::assertSame('Bearer token-1', $handler->requests[1]->getHeaderLine('Authorization'));
        self::assertSame('Bearer token-2', $handler->requests[3]->getHeaderLine('Authorization'));
    }

    public function testReturnsTheSecond401(): void
    {
        $handler = new FakeHandler(
            FakeHandler::token('token-1'),
            FakeHandler::error(401, 'Not authorized'),
            FakeHandler::token('token-2'),
            FakeHandler::error(401, 'Not authorized'),
        );

        try {
            $this->client($handler)->request('GET', self::URL);
            self::fail('ClientException expected');
        } catch (ClientException $e) {
            self::assertSame(401, $e->getResponse()->getStatusCode());
        }
        self::assertCount(4, $handler->requests);
    }

    public function testKeepsAnAuthorizationHeaderSetByTheCaller(): void
    {
        $handler = new FakeHandler(FakeHandler::health());

        $this->client($handler)->request('GET', self::URL, ['headers' => ['Authorization' => 'Bearer mine']]);

        self::assertCount(1, $handler->requests);
        self::assertSame('Bearer mine', $handler->requests[0]->getHeaderLine('Authorization'));
    }

    public function testDoesNotSendTheTokenToAnotherHostAfterARedirect(): void
    {
        $handler = new FakeHandler(
            FakeHandler::token('token-1'),
            new Response(302, ['Location' => 'https://elsewhere.example/file']),
            new Response(200),
        );

        $this->client($handler)->request('GET', self::URL);

        self::assertSame('elsewhere.example', $handler->requests[2]->getUri()->getHost());
        self::assertFalse($handler->requests[2]->hasHeader('Authorization'));
    }

    public function testRetriesA429AfterRetryAfterSeconds(): void
    {
        $handler = new FakeHandler(
            FakeHandler::token(),
            FakeHandler::error(429, 'Too Many Requests', ['Retry-After' => '3']),
            FakeHandler::health(),
        );

        $response = $this->client($handler)->request('GET', self::URL);

        self::assertSame(200, $response->getStatusCode());
        self::assertSame([null, null, 3000], $handler->delays);
    }

    public function testRetriesA429AfterRetryAfterDate(): void
    {
        $handler = new FakeHandler(
            FakeHandler::token(),
            FakeHandler::error(429, 'Too Many Requests', ['Retry-After' => gmdate('D, d M Y H:i:s \G\M\T', time() + 2)]),
            FakeHandler::health(),
        );

        $this->client($handler)->request('GET', self::URL);

        self::assertGreaterThanOrEqual(1000, $handler->delays[2]);
        self::assertLessThanOrEqual(2000, $handler->delays[2]);
    }

    public function testBacksOffWithoutRetryAfter(): void
    {
        $handler = new FakeHandler(
            FakeHandler::token(),
            FakeHandler::error(429, 'Too Many Requests'),
            FakeHandler::error(429, 'Too Many Requests'),
            FakeHandler::health(),
        );

        $this->client($handler)->request('GET', self::URL);

        self::assertSame([null, null, 1000, 2000], $handler->delays);
    }

    public function testGivesUpAfterTwoRetries(): void
    {
        $handler = new FakeHandler(
            FakeHandler::token(),
            FakeHandler::error(429, 'Too Many Requests', ['Retry-After' => '1']),
            FakeHandler::error(429, 'Too Many Requests', ['Retry-After' => '1']),
            FakeHandler::error(429, 'Too Many Requests', ['Retry-After' => '1']),
        );

        try {
            $this->client($handler)->request('GET', self::URL);
            self::fail('ClientException expected');
        } catch (ClientException $e) {
            self::assertSame(429, $e->getResponse()->getStatusCode());
        }
        self::assertCount(4, $handler->requests);
    }

    public function testDoesNotWaitLongerThanTheMaximumDelay(): void
    {
        $handler = new FakeHandler(
            FakeHandler::token(),
            FakeHandler::error(429, 'Too Many Requests', ['Retry-After' => (string) (HttpClientFactory::MAX_RETRY_DELAY + 1)]),
        );

        $this->expectException(ClientException::class);

        try {
            $this->client($handler)->request('GET', self::URL);
        } finally {
            self::assertCount(2, $handler->requests);
        }
    }

    public function testRetriesTheTokenRequestToo(): void
    {
        $handler = new FakeHandler(
            FakeHandler::tokenRateLimited('2'),
            FakeHandler::token('token-1'),
            FakeHandler::health(),
        );

        $this->client($handler)->request('GET', self::URL);

        self::assertSame([null, 2000, null], $handler->delays);
        self::assertSame('Bearer token-1', $handler->requests[2]->getHeaderLine('Authorization'));
    }

    public function testRetryCanBeDisabled(): void
    {
        $handler = new FakeHandler(FakeHandler::tokenRateLimited('2'));

        try {
            $this->client($handler, ['retry' => false])->request('GET', self::URL);
            self::fail('TokenException expected');
        } catch (TokenException $e) {
            self::assertSame(429, $e->getCode());
            self::assertSame('rate_limited', $e->getError());
            self::assertSame('Too many requests.', $e->getErrorDescription());
        }
        self::assertCount(1, $handler->requests);
    }

    /**
     * @param array<string, mixed> $options
     */
    private function client(FakeHandler $handler, array $options = []): ClientInterface
    {
        return HttpClientFactory::create(new ClientCredentials('client-id', 'client-secret'), options: ['handler' => $handler] + $options);
    }
}
