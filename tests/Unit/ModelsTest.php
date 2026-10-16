<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Shellrent\Sdk\Model\ModelInterface;

/**
 * The generated constructors set the defaults of the spec: OpenAPI Generator 7.25.0 writes the default of an
 * integer enum as a class constant that does not exist (FOO::NUMBER_1), and the constructor fails.
 */
final class ModelsTest extends TestCase
{
    /**
     * @return iterable<string, array{class-string<ModelInterface>}>
     */
    public static function models(): iterable
    {
        foreach (glob(dirname(__DIR__, 2) . '/src/Model/*.php') ?: [] as $file) {
            $class = 'Shellrent\\Sdk\\Model\\' . basename($file, '.php');
            if (is_subclass_of($class, ModelInterface::class)) {
                yield basename($file, '.php') => [$class];
            }
        }
    }

    /**
     * @param class-string<ModelInterface> $class
     */
    #[DataProvider('models')]
    public function testCanBeCreatedWithoutData(string $class): void
    {
        self::assertInstanceOf($class, new $class());
    }
}
