<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Unit;

use Composer\InstalledVersions;
use PHPUnit\Framework\TestCase;
use Shellrent\Sdk\ApiException;
use Shellrent\Sdk\Auth\ClientCredentials;
use Shellrent\Sdk\Client;
use Shellrent\Sdk\Model\ApiError;
use Shellrent\Sdk\Model\HealthStatusResponse;
use Shellrent\Sdk\Tests\Support\FakeHandler;

final class ClientTest extends TestCase
{
    public function testSendsTheSdkUserAgent(): void
    {
        $handler = new FakeHandler(FakeHandler::token(), FakeHandler::health());

        $this->client($handler)->health()->getHealth();

        $version = ltrim((string) InstalledVersions::getPrettyVersion('shellrent/sdk'), 'v');
        foreach ($handler->requests as $request) {
            self::assertSame('shellrent-sdk-php/' . $version, $request->getHeaderLine('User-Agent'));
        }
    }

    public function testCallsTheApiOfTheCredentials(): void
    {
        $handler = new FakeHandler(FakeHandler::token(), FakeHandler::health());
        $credentials = new ClientCredentials('client-id', 'client-secret', apiUrl: 'https://api.staging.example');

        $health = Client::create($credentials, options: ['handler' => $handler])->health()->getHealth();

        self::assertInstanceOf(HealthStatusResponse::class, $health);
        self::assertSame('ok', $health->getData()?->getStatus());
        self::assertSame('https://api.staging.example/oauth/token', (string) $handler->requests[0]->getUri());
        self::assertSame('https://api.staging.example/api/health', (string) $handler->requests[1]->getUri());
    }

    public function testCreatesEachApiClassOnce(): void
    {
        $client = $this->client(new FakeHandler());

        self::assertSame($client->purchases(), $client->purchases());
        self::assertSame($client->getConfig(), $client->purchases()->getConfig());
    }

    public function testTurnsApiErrorsIntoApiException(): void
    {
        $handler = new FakeHandler(FakeHandler::token(), FakeHandler::error(404, 'Purchase not found'));

        try {
            $this->client($handler)->purchases()->getPurchase(123);
            self::fail('ApiException expected');
        } catch (ApiException $e) {
            self::assertSame(404, $e->getCode());
            $error = $e->getResponseObject();
            self::assertInstanceOf(ApiError::class, $error);
            self::assertSame('Purchase not found', $error->getMessage());
        }
    }

    private function client(FakeHandler $handler): Client
    {
        return Client::create(new ClientCredentials('client-id', 'client-secret'), options: ['handler' => $handler]);
    }
}
