<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Unit\Auth;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use Shellrent\Sdk\Auth\ClientCredentials;
use Shellrent\Sdk\Auth\TokenException;
use Shellrent\Sdk\Auth\TokenProvider;
use Shellrent\Sdk\Tests\Support\ArrayCache;
use Shellrent\Sdk\Tests\Support\FakeHandler;

final class TokenProviderTest extends TestCase
{
    private int $now = 1_000_000;

    public function testReusesTheTokenUntilSixtySecondsBeforeItExpires(): void
    {
        $handler = new FakeHandler(FakeHandler::token('token-1', 600), FakeHandler::token('token-2', 600));
        $tokens = $this->tokenProvider($handler);

        self::assertSame('token-1', $tokens->getToken());
        $this->now += 539;
        self::assertSame('token-1', $tokens->getToken());
        self::assertCount(1, $handler->requests);

        $this->now += 1;
        self::assertSame('token-2', $tokens->getToken());
        self::assertCount(2, $handler->requests);
    }

    public function testRequestsTheTokenWithTheClientCredentialsGrant(): void
    {
        $handler = new FakeHandler(FakeHandler::token());
        $credentials = new ClientCredentials('client-id', 'client-secret', ['purchases:read', 'billing:read'], 'api-public');

        $this->tokenProvider($handler, $credentials)->getToken();

        $request = $handler->requests[0];
        self::assertSame('POST', $request->getMethod());
        self::assertSame('https://api.shellrent.com/oauth/token', (string) $request->getUri());
        self::assertSame('application/x-www-form-urlencoded', $request->getHeaderLine('Content-Type'));
        parse_str((string) $request->getBody(), $params);
        self::assertSame([
            'grant_type' => 'client_credentials',
            'client_id' => 'client-id',
            'client_secret' => 'client-secret',
            'scope' => 'purchases:read billing:read',
            'audience' => 'api-public',
        ], $params);
    }

    public function testLeavesScopeAndAudienceToTheServerWhenNotSet(): void
    {
        $handler = new FakeHandler(FakeHandler::token());

        $this->tokenProvider($handler)->getToken();

        parse_str((string) $handler->requests[0]->getBody(), $params);
        self::assertArrayNotHasKey('scope', $params);
        self::assertArrayNotHasKey('audience', $params);
    }

    public function testSharesTheTokenThroughThePsr16Cache(): void
    {
        $cache = new ArrayCache();
        $handler = new FakeHandler(FakeHandler::token('token-1', 600));

        self::assertSame('token-1', $this->tokenProvider($handler, cache: $cache)->getToken());
        // Another process with the same credentials.
        self::assertSame('token-1', $this->tokenProvider($handler, cache: $cache)->getToken());

        self::assertCount(1, $handler->requests);
        self::assertCount(1, $cache->items);
        $item = reset($cache->items);
        self::assertSame(540, $item['ttl']);
        self::assertStringNotContainsString('client-secret', serialize($cache->items));
    }

    public function testUsesACacheKeyPerTokenUrlClientAudienceAndScopes(): void
    {
        $cache = new ArrayCache();
        $handler = new FakeHandler(FakeHandler::token('token-1'), FakeHandler::token('token-2'), FakeHandler::token('token-3'));

        $this->tokenProvider($handler, new ClientCredentials('client-id', 'client-secret', ['b', 'a']), $cache)->getToken();
        $this->tokenProvider($handler, new ClientCredentials('client-id', 'client-secret', ['a', 'b']), $cache)->getToken();
        $this->tokenProvider($handler, new ClientCredentials('client-id', 'client-secret', ['a']), $cache)->getToken();
        $this->tokenProvider($handler, new ClientCredentials('client-id', 'client-secret', ['a'], 'api-internal'), $cache)->getToken();

        self::assertCount(3, $handler->requests);
        self::assertCount(3, $cache->items);
        foreach (array_keys($cache->items) as $key) {
            self::assertMatchesRegularExpression('/^[A-Za-z0-9_.]{1,64}$/', $key);
        }
    }

    public function testIgnoresAnExpiredCachedToken(): void
    {
        $cache = new ArrayCache();
        $handler = new FakeHandler(FakeHandler::token('token-1'), FakeHandler::token('token-2'));
        $this->tokenProvider($handler, cache: $cache)->getToken();

        $this->now += 540;

        self::assertSame('token-2', $this->tokenProvider($handler, cache: $cache)->getToken());
    }

    public function testInvalidateDiscardsTheTokenAlsoFromTheCache(): void
    {
        $cache = new ArrayCache();
        $handler = new FakeHandler(FakeHandler::token('token-1'), FakeHandler::token('token-2'));
        $tokens = $this->tokenProvider($handler, cache: $cache);
        $tokens->getToken();

        $tokens->invalidate();

        self::assertSame([], $cache->items);
        self::assertSame('token-2', $tokens->getToken());
    }

    public function testTurnsOAuth2ErrorsIntoTokenException(): void
    {
        $handler = new FakeHandler(FakeHandler::json(401, [
            'error' => 'invalid_client',
            'error_description' => 'Client authentication failed.',
        ]));

        try {
            $this->tokenProvider($handler)->getToken();
            self::fail('TokenException expected');
        } catch (TokenException $e) {
            self::assertSame(401, $e->getCode());
            self::assertSame('invalid_client', $e->getError());
            self::assertSame('Client authentication failed.', $e->getErrorDescription());
            self::assertStringContainsString('invalid_client (Client authentication failed.)', $e->getMessage());
            self::assertStringNotContainsString('client-secret', $e->getMessage());
        }
    }

    public function testTurnsAResponseWithoutTokenIntoTokenException(): void
    {
        $this->expectException(TokenException::class);
        $this->expectExceptionCode(200);

        $this->tokenProvider(new FakeHandler(FakeHandler::json(200, ['token_type' => 'Bearer'])))->getToken();
    }

    public function testTurnsConnectionErrorsIntoTokenException(): void
    {
        $handler = new FakeHandler(new ConnectException('Connection refused', new Request('POST', 'https://api.shellrent.com/oauth/token')));

        try {
            $this->tokenProvider($handler)->getToken();
            self::fail('TokenException expected');
        } catch (TokenException $e) {
            self::assertSame(0, $e->getCode());
            self::assertNull($e->getError());
            self::assertInstanceOf(ConnectException::class, $e->getPrevious());
        }
    }

    private function tokenProvider(FakeHandler $handler, ?ClientCredentials $credentials = null, ?ArrayCache $cache = null): TokenProvider
    {
        return new TokenProvider(
            $credentials ?? new ClientCredentials('client-id', 'client-secret'),
            new Client(['handler' => $handler]),
            $cache,
            fn (): int => $this->now,
        );
    }
}
