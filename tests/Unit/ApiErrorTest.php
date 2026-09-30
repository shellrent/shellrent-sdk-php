<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Shellrent\Sdk\Model\ApiError;
use Shellrent\Sdk\ObjectSerializer;

/**
 * The generated setters reject null for the properties the spec does not declare nullable:
 * these tests catch a spec that no longer matches the error responses of the API.
 */
final class ApiErrorTest extends TestCase
{
    private const RESPONSE = '{"error": 404, "message": "Purchase not found", "data": null, "meta": null}';

    public function testDeserializesAnErrorResponseOfTheApi(): void
    {
        $error = ObjectSerializer::deserialize(self::RESPONSE, ApiError::class, []);

        self::assertInstanceOf(ApiError::class, $error);
        self::assertSame(404, $error->getError());
        self::assertSame('Purchase not found', $error->getMessage());
        self::assertNull($error->getData());
        self::assertNull($error->getMeta());
        self::assertSame([], $error->listInvalidProperties());
    }

    public function testAcceptsNullDataAndMeta(): void
    {
        $error = new ApiError(json_decode(self::RESPONSE, true, 512, JSON_THROW_ON_ERROR));
        $error->setData(null)->setMeta(null);

        self::assertTrue($error->valid());
        self::assertJsonStringEqualsJsonString(self::RESPONSE, json_encode(ObjectSerializer::sanitizeForSerialization($error), JSON_THROW_ON_ERROR));
    }
}
