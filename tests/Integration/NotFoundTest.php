<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Integration;

use Shellrent\Sdk\ApiException;
use Shellrent\Sdk\Model\ApiError;

/**
 * Checks that the spec matches the real error responses: the credentials need the purchases:read scope.
 */
final class NotFoundTest extends IntegrationTestCase
{
    public function testReadsTheErrorOfAMissingPurchaseAsApiError(): void
    {
        $client = $this->client();

        try {
            $client->purchases()->getPurchase(2147483647);
            self::fail('ApiException expected');
        } catch (ApiException $e) {
            self::assertSame(404, $e->getCode(), (string) $e->getResponseBody());
            $error = $e->getResponseObject();
            self::assertInstanceOf(ApiError::class, $error, (string) $e->getResponseBody());
            self::assertSame(404, $error->getError());
            self::assertNotEmpty($error->getMessage());
        }
    }
}
