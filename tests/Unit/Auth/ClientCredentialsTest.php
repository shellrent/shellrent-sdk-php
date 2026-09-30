<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Unit\Auth;

use PHPUnit\Framework\TestCase;
use Shellrent\Sdk\Auth\ClientCredentials;

final class ClientCredentialsTest extends TestCase
{
    private const VARIABLES = ['SHELLRENT_CLIENT_ID', 'SHELLRENT_CLIENT_SECRET', 'SHELLRENT_SCOPES', 'SHELLRENT_API_URL'];

    /** @var array<string, array{mixed, mixed, string|false}> */
    private array $environment = [];

    protected function setUp(): void
    {
        foreach (self::VARIABLES as $name) {
            $this->environment[$name] = [$_SERVER[$name] ?? null, $_ENV[$name] ?? null, getenv($name)];
            unset($_SERVER[$name], $_ENV[$name]);
            putenv($name);
        }
    }

    protected function tearDown(): void
    {
        foreach ($this->environment as $name => [$server, $env, $value]) {
            unset($_SERVER[$name], $_ENV[$name]);
            if ($server !== null) {
                $_SERVER[$name] = $server;
            }
            if ($env !== null) {
                $_ENV[$name] = $env;
            }
            putenv($value === false ? $name : $name . '=' . $value);
        }
    }

    public function testDefaultsToTheProductionApiAndServerDefaults(): void
    {
        $credentials = new ClientCredentials('client-id', 'client-secret');

        self::assertSame('https://api.shellrent.com', $credentials->apiUrl);
        self::assertSame('https://api.shellrent.com/oauth/token', $credentials->tokenUrl);
        self::assertNull($credentials->scopes);
        self::assertNull($credentials->audience);
    }

    public function testDerivesTheTokenUrlFromTheApiUrl(): void
    {
        $credentials = new ClientCredentials('client-id', 'client-secret', apiUrl: 'https://api.staging.example/');

        self::assertSame('https://api.staging.example', $credentials->apiUrl);
        self::assertSame('https://api.staging.example/oauth/token', $credentials->tokenUrl);
    }

    public function testAcceptsAnExplicitTokenUrl(): void
    {
        $credentials = new ClientCredentials('client-id', 'client-secret', tokenUrl: 'https://auth.example/token');

        self::assertSame('https://auth.example/token', $credentials->tokenUrl);
    }

    public function testTreatsAnEmptyScopeListAsTheServerDefault(): void
    {
        self::assertNull((new ClientCredentials('client-id', 'client-secret', []))->scopes);
    }

    public function testRejectsAnEmptySecret(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        new ClientCredentials('client-id', '');
    }

    public function testKeepsTheSecretOutOfDebugOutput(): void
    {
        $credentials = new ClientCredentials('client-id', 'client-secret');

        self::assertStringNotContainsString('client-secret', print_r($credentials, true));
        self::assertSame('client-secret', $credentials->getClientSecret());
    }

    public function testReadsTheEnvironment(): void
    {
        putenv('SHELLRENT_CLIENT_ID=env-id');
        putenv('SHELLRENT_CLIENT_SECRET=env-secret');
        putenv('SHELLRENT_SCOPES=purchases:read, billing:read domains:read');
        putenv('SHELLRENT_API_URL=https://api.staging.example');

        $credentials = ClientCredentials::fromEnvironment();

        self::assertSame('env-id', $credentials->clientId);
        self::assertSame('env-secret', $credentials->getClientSecret());
        self::assertSame(['purchases:read', 'billing:read', 'domains:read'], $credentials->scopes);
        self::assertSame('https://api.staging.example/oauth/token', $credentials->tokenUrl);
    }

    public function testReadsVariablesLoadedByFrameworksIntoServer(): void
    {
        $_SERVER['SHELLRENT_CLIENT_ID'] = 'server-id';
        $_SERVER['SHELLRENT_CLIENT_SECRET'] = 'server-secret';

        $credentials = ClientCredentials::fromEnvironment();

        self::assertSame('server-id', $credentials->clientId);
        self::assertNull($credentials->scopes);
        self::assertSame('https://api.shellrent.com', $credentials->apiUrl);
    }

    public function testRequiresClientIdAndSecretInTheEnvironment(): void
    {
        putenv('SHELLRENT_CLIENT_ID=env-id');

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('SHELLRENT_CLIENT_SECRET');

        ClientCredentials::fromEnvironment();
    }
}
