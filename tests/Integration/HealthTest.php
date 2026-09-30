<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Integration;

final class HealthTest extends IntegrationTestCase
{
    public function testObtainsATokenAndCallsTheApi(): void
    {
        $health = $this->client()->health()->getHealth();

        self::assertSame(0, $health->getError());
        self::assertNotEmpty($health->getData()?->getStatus());
    }
}
