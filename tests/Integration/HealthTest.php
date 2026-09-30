<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Shellrent\Sdk\Auth\ClientCredentials;
use Shellrent\Sdk\Client;

/**
 * Calls the real API with the credentials in SHELLRENT_CLIENT_ID and SHELLRENT_CLIENT_SECRET
 * (and SHELLRENT_API_URL for another environment).
 */
final class HealthTest extends TestCase
{
    public function testObtainsATokenAndCallsTheApi(): void
    {
        try {
            $credentials = ClientCredentials::fromEnvironment();
        } catch (\InvalidArgumentException) {
            self::markTestSkipped('Set SHELLRENT_CLIENT_ID and SHELLRENT_CLIENT_SECRET to run the integration test.');
        }

        $health = Client::create($credentials)->health()->getHealth();

        self::assertSame(0, $health->getError());
        self::assertNotEmpty($health->getData()?->getStatus());
    }
}
