<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Shellrent\Sdk\Auth\ClientCredentials;
use Shellrent\Sdk\Client;

/**
 * Tests against the real API with the credentials in SHELLRENT_CLIENT_ID and SHELLRENT_CLIENT_SECRET
 * (and SHELLRENT_API_URL for another environment); skipped when they are not set.
 */
abstract class IntegrationTestCase extends TestCase
{
    protected function client(): Client
    {
        try {
            $credentials = ClientCredentials::fromEnvironment();
        } catch (\InvalidArgumentException) {
            self::markTestSkipped('Set SHELLRENT_CLIENT_ID and SHELLRENT_CLIENT_SECRET to run the integration tests.');
        }

        return Client::create($credentials);
    }
}
