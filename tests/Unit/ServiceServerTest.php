<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Shellrent\Sdk\Model\Amount;
use Shellrent\Sdk\Model\Service;
use Shellrent\Sdk\Model\ServiceServer;
use Shellrent\Sdk\ObjectSerializer;

/**
 * ServiceServer is an allOf of Service: the normalizer rule REF_AS_PARENT_IN_ALLOF makes it a subclass,
 * so that the inherited properties keep the nullability that OpenAPI 3.1 would otherwise lose.
 */
final class ServiceServerTest extends TestCase
{
    private const RESPONSE = <<<'JSON'
        {
            "service_id": 12,
            "service_category": {"category_code": "cloud-vps", "category_name": "Cloud VPS", "area_code": "server", "area_name": "Server"},
            "service_name": "Cloud VPS S",
            "recurrence": {
                "recurrence_id": 1,
                "frequency": {"family": "month", "value": 1},
                "days_renew": 30,
                "days_autorenew": 7,
                "days_suspension": null,
                "days_restore": null,
                "days_dismission": null,
                "days_cancel": 0,
                "days_renew_dismission": null,
                "days_no_secondary": null,
                "days_no_service_change": null
            },
            "recurrences_available": [],
            "tld_id": null,
            "service_code": "cloud-vps-s",
            "service_url": "https://www.shellrent.com/cloud-vps",
            "activation_price": {"amount": 10.5, "currency": "EUR", "tax_rate": 22.5, "tax": 2.5, "total": 13.5},
            "renew_price": null,
            "restore_price": null,
            "transfer_price": null,
            "is_primary": true,
            "is_secondary": false,
            "is_presale": false,
            "is_aftersale": false,
            "is_quantifiable": false,
            "quantity_min": null,
            "quantity_max": null,
            "templates": [{
                "template_code": "ubuntu-24",
                "template_name": "Ubuntu 24.04",
                "template_name_alternative": null,
                "min_ram": 1,
                "min_cpu": 1,
                "min_disk": 20,
                "operative_systems": []
            }]
        }
        JSON;

    public function testExtendsService(): void
    {
        self::assertInstanceOf(Service::class, new ServiceServer());
    }

    public function testDeserializesTheInheritedAndTheOwnProperties(): void
    {
        $server = ObjectSerializer::deserialize(self::RESPONSE, ServiceServer::class, []);

        self::assertInstanceOf(ServiceServer::class, $server);
        self::assertSame(12, $server->getServiceId());
        self::assertSame('Cloud VPS', $server->getServiceCategory()->getCategoryName());
        self::assertSame(13.5, $server->getActivationPrice()->getTotal());
        self::assertNull($server->getTldId());
        self::assertNull($server->getRenewPrice());
        self::assertSame('ubuntu-24', $server->getTemplates()[0]->getTemplateCode());
        self::assertSame([], $server->listInvalidProperties());
    }

    public function testKeepsTheNullabilityOfTheInheritedProperties(): void
    {
        foreach (['tld_id', 'renew_price', 'is_primary', 'quantity_max'] as $property) {
            self::assertTrue(ServiceServer::isNullable($property), $property);
        }
        self::assertFalse(ServiceServer::isNullable('service_id'));

        $server = (new ServiceServer())->setTldId(null)->setRenewPrice(null)->setQuantityMax(null);

        self::assertNull($server->getTldId());
    }

    public function testSerializesBackTheSameJson(): void
    {
        $server = ObjectSerializer::deserialize(self::RESPONSE, ServiceServer::class, []);
        $server->setRenewPrice(new Amount(['amount' => 8.5, 'currency' => 'EUR', 'tax_rate' => 22.5, 'tax' => 2.5, 'total' => 11]));
        $expected = json_decode(self::RESPONSE, true, 512, JSON_THROW_ON_ERROR);
        $expected['renew_price'] = ['amount' => 8.5, 'currency' => 'EUR', 'tax_rate' => 22.5, 'tax' => 2.5, 'total' => 11];

        self::assertJsonStringEqualsJsonString(
            json_encode($expected, JSON_THROW_ON_ERROR),
            json_encode(ObjectSerializer::sanitizeForSerialization($server), JSON_THROW_ON_ERROR),
        );
    }
}
