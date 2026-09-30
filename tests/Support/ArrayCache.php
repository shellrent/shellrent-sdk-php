<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Support;

use Psr\SimpleCache\CacheInterface;

/**
 * In-memory PSR-16 cache that also records the TTL of each entry.
 *
 * The parameters are untyped (mixed) and the return types are those of psr/simple-cache 3,
 * so that the class is compatible with versions 1, 2 and 3 of the interface.
 */
final class ArrayCache implements CacheInterface
{
    /** @var array<string, array{value: mixed, ttl: int|\DateInterval|null}> */
    public array $items = [];

    public function get(mixed $key, mixed $default = null): mixed
    {
        return array_key_exists($key, $this->items) ? $this->items[$key]['value'] : $default;
    }

    public function set(mixed $key, mixed $value, mixed $ttl = null): bool
    {
        $this->items[$key] = ['value' => $value, 'ttl' => $ttl];

        return true;
    }

    public function delete(mixed $key): bool
    {
        unset($this->items[$key]);

        return true;
    }

    public function clear(): bool
    {
        $this->items = [];

        return true;
    }

    public function getMultiple(mixed $keys, mixed $default = null): iterable
    {
        $values = [];
        foreach ($keys as $key) {
            $values[$key] = $this->get($key, $default);
        }

        return $values;
    }

    public function setMultiple(mixed $values, mixed $ttl = null): bool
    {
        foreach ($values as $key => $value) {
            $this->set($key, $value, $ttl);
        }

        return true;
    }

    public function deleteMultiple(mixed $keys): bool
    {
        foreach ($keys as $key) {
            $this->delete($key);
        }

        return true;
    }

    public function has(mixed $key): bool
    {
        return array_key_exists($key, $this->items);
    }
}
