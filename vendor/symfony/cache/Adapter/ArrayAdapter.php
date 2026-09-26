<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\Adapter;

use Psr\Cache\CacheItemInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
use Symfony\Component\Cache\ResettableInterface;
use Symfony\Contracts\Cache\CacheInterface;

/**
 * An in-memory cache storage.
 *
 * Acts as a least-recently-used (LRU) storage when configured with a maximum number of items.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ArrayAdapter implements AdapterInterface, CacheInterface, LoggerAwareInterface, ResettableInterface
{
    use LoggerAwareTrait;

    private bool $storeSerialized;
    private array $values = [];
    private array $tags = [];
    private array $expiries = [];
<<<<<<< HEAD
=======
    private array $explicitExpiries = [];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private int $defaultLifetime;
    private float $maxLifetime;
    private int $maxItems;

    private static \Closure $createCacheItem;

    /**
     * @param bool $storeSerialized Disabling serialization can lead to cache corruptions when storing mutable values but increases performance otherwise
     */
    public function __construct(int $defaultLifetime = 0, bool $storeSerialized = true, float $maxLifetime = 0, int $maxItems = 0)
    {
        if (0 > $maxLifetime) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('Argument $maxLifetime must be positive, %F passed.', $maxLifetime));
        }

        if (0 > $maxItems) {
            throw new InvalidArgumentException(sprintf('Argument $maxItems must be a positive integer, %d passed.', $maxItems));
=======
            throw new InvalidArgumentException(\sprintf('Argument $maxLifetime must be positive, %F passed.', $maxLifetime));
        }

        if (0 > $maxItems) {
            throw new InvalidArgumentException(\sprintf('Argument $maxItems must be a positive integer, %d passed.', $maxItems));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->defaultLifetime = $defaultLifetime;
        $this->storeSerialized = $storeSerialized;
        $this->maxLifetime = $maxLifetime;
        $this->maxItems = $maxItems;
        self::$createCacheItem ??= \Closure::bind(
<<<<<<< HEAD
            static function ($key, $value, $isHit, $tags) {
=======
            static function ($key, $value, $isHit, $tags, $expiry = null) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $item = new CacheItem();
                $item->key = $key;
                $item->value = $value;
                $item->isHit = $isHit;
                if (null !== $tags) {
                    $item->metadata[CacheItem::METADATA_TAGS] = $tags;
                }
<<<<<<< HEAD
=======
                if (null !== $expiry) {
                    $item->metadata[CacheItem::METADATA_EXPIRY] = $expiry;
                }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                return $item;
            },
            null,
            CacheItem::class
        );
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null): mixed
    {
        $item = $this->getItem($key);
        $metadata = $item->getMetadata();

        // ArrayAdapter works in memory, we don't care about stampede protection
        if (\INF === $beta || !$item->isHit()) {
            $save = true;
            $item->set($callback($item, $save));
            if ($save) {
                $this->save($item);
            }
        }

        return $item->get();
    }

    public function delete(string $key): bool
    {
        return $this->deleteItem($key);
    }

    public function hasItem(mixed $key): bool
    {
        if (\is_string($key) && isset($this->expiries[$key]) && $this->expiries[$key] > microtime(true)) {
            if ($this->maxItems) {
                // Move the item last in the storage
                $value = $this->values[$key];
                unset($this->values[$key]);
                $this->values[$key] = $value;
            }

            return true;
        }
        \assert('' !== CacheItem::validateKey($key));

        return isset($this->expiries[$key]) && !$this->deleteItem($key);
    }

    public function getItem(mixed $key): CacheItem
    {
        if (!$isHit = $this->hasItem($key)) {
            $value = null;

            if (!$this->maxItems) {
                // Track misses in non-LRU mode only
                $this->values[$key] = null;
            }
        } else {
            $value = $this->storeSerialized ? $this->unfreeze($key, $isHit) : $this->values[$key];
        }

<<<<<<< HEAD
        return (self::$createCacheItem)($key, $value, $isHit, $this->tags[$key] ?? null);
=======
        return (self::$createCacheItem)($key, $value, $isHit, $this->tags[$key] ?? null, $this->explicitExpiries[$key] ?? null);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getItems(array $keys = []): iterable
    {
        \assert(self::validateKeys($keys));

        return $this->generateItems($keys, microtime(true), self::$createCacheItem);
    }

    public function deleteItem(mixed $key): bool
    {
        \assert('' !== CacheItem::validateKey($key));
<<<<<<< HEAD
        unset($this->values[$key], $this->tags[$key], $this->expiries[$key]);
=======
        unset($this->values[$key], $this->tags[$key], $this->expiries[$key], $this->explicitExpiries[$key]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return true;
    }

    public function deleteItems(array $keys): bool
    {
        foreach ($keys as $key) {
<<<<<<< HEAD
=======
            \assert('' !== CacheItem::validateKey($key));
        }

        foreach ($keys as $key) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $this->deleteItem($key);
        }

        return true;
    }

    public function save(CacheItemInterface $item): bool
    {
        if (!$item instanceof CacheItem) {
            return false;
        }
        $item = (array) $item;
        $key = $item["\0*\0key"];
        $value = $item["\0*\0value"];
        $expiry = $item["\0*\0expiry"];

        $now = microtime(true);

        if (null !== $expiry) {
            if (!$expiry) {
                $expiry = \PHP_INT_MAX;
            } elseif ($expiry <= $now) {
                $this->deleteItem($key);

                return true;
            }
        }
        if ($this->storeSerialized && null === $value = $this->freeze($value, $key)) {
            return false;
        }
        if (null === $expiry && 0 < $this->defaultLifetime) {
            $expiry = $this->defaultLifetime;
            $expiry = $now + ($expiry > ($this->maxLifetime ?: $expiry) ? $this->maxLifetime : $expiry);
        } elseif ($this->maxLifetime && (null === $expiry || $expiry > $now + $this->maxLifetime)) {
            $expiry = $now + $this->maxLifetime;
        }

        if ($this->maxItems) {
            unset($this->values[$key], $this->tags[$key]);

            // Iterate items and vacuum expired ones while we are at it
            foreach ($this->values as $k => $v) {
                if ($this->expiries[$k] > $now && \count($this->values) < $this->maxItems) {
                    break;
                }

<<<<<<< HEAD
                unset($this->values[$k], $this->tags[$k], $this->expiries[$k]);
=======
                unset($this->values[$k], $this->tags[$k], $this->expiries[$k], $this->explicitExpiries[$k]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        $this->values[$key] = $value;
        $this->expiries[$key] = $expiry ?? \PHP_INT_MAX;

<<<<<<< HEAD
=======
        if (null !== $item["\0*\0expiry"] && \PHP_INT_MAX !== $this->expiries[$key]) {
            $this->explicitExpiries[$key] = $this->expiries[$key];
        } else {
            unset($this->explicitExpiries[$key]);
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (null === $this->tags[$key] = $item["\0*\0newMetadata"][CacheItem::METADATA_TAGS] ?? null) {
            unset($this->tags[$key]);
        }

        return true;
    }

    public function saveDeferred(CacheItemInterface $item): bool
    {
        return $this->save($item);
    }

    public function commit(): bool
    {
        return true;
    }

    public function clear(string $prefix = ''): bool
    {
        if ('' !== $prefix) {
            $now = microtime(true);

            foreach ($this->values as $key => $value) {
                if (!isset($this->expiries[$key]) || $this->expiries[$key] <= $now || str_starts_with($key, $prefix)) {
<<<<<<< HEAD
                    unset($this->values[$key], $this->tags[$key], $this->expiries[$key]);
=======
                    unset($this->values[$key], $this->tags[$key], $this->expiries[$key], $this->explicitExpiries[$key]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            }

            if ($this->values) {
                return true;
            }
        }

<<<<<<< HEAD
        $this->values = $this->tags = $this->expiries = [];
=======
        $this->values = $this->tags = $this->expiries = $this->explicitExpiries = [];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return true;
    }

    /**
     * Returns all cached values, with cache miss as null.
     */
    public function getValues(): array
    {
        if (!$this->storeSerialized) {
            return $this->values;
        }

        $values = $this->values;
        foreach ($values as $k => $v) {
            if (null === $v || 'N;' === $v) {
                continue;
            }
            if (!\is_string($v) || !isset($v[2]) || ':' !== $v[1]) {
                $values[$k] = serialize($v);
            }
        }

        return $values;
    }

    /**
     * @return void
     */
    public function reset()
    {
        $this->clear();
    }

    private function generateItems(array $keys, float $now, \Closure $f): \Generator
    {
        foreach ($keys as $i => $key) {
            if (!$isHit = isset($this->expiries[$key]) && ($this->expiries[$key] > $now || !$this->deleteItem($key))) {
                $value = null;

                if (!$this->maxItems) {
                    // Track misses in non-LRU mode only
                    $this->values[$key] = null;
                }
            } else {
                if ($this->maxItems) {
                    // Move the item last in the storage
                    $value = $this->values[$key];
                    unset($this->values[$key]);
                    $this->values[$key] = $value;
                }

                $value = $this->storeSerialized ? $this->unfreeze($key, $isHit) : $this->values[$key];
            }
            unset($keys[$i]);

<<<<<<< HEAD
            yield $key => $f($key, $value, $isHit, $this->tags[$key] ?? null);
=======
            yield $key => $f($key, $value, $isHit, $this->tags[$key] ?? null, $this->explicitExpiries[$key] ?? null);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        foreach ($keys as $key) {
            yield $key => $f($key, null, false);
        }
    }

    private function freeze($value, string $key): string|int|float|bool|array|\UnitEnum|null
    {
        if (null === $value) {
            return 'N;';
        }
        if (\is_string($value)) {
            // Serialize strings if they could be confused with serialized objects or arrays
            if ('N;' === $value || (isset($value[2]) && ':' === $value[1])) {
                return serialize($value);
            }
        } elseif (!\is_scalar($value)) {
            try {
                $serialized = serialize($value);
            } catch (\Exception $e) {
<<<<<<< HEAD
                unset($this->values[$key], $this->tags[$key]);
                $type = get_debug_type($value);
                $message = sprintf('Failed to save key "{key}" of type %s: %s', $type, $e->getMessage());
=======
                if (!isset($this->expiries[$key])) {
                    unset($this->values[$key]);
                }
                $type = get_debug_type($value);
                $message = \sprintf('Failed to save key "{key}" of type %s: %s', $type, $e->getMessage());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                CacheItem::log($this->logger, $message, ['key' => $key, 'exception' => $e, 'cache-adapter' => get_debug_type($this)]);

                return null;
            }
            // Keep value serialized if it contains any objects or any internal references
            if ('C' === $serialized[0] || 'O' === $serialized[0] || preg_match('/;[OCRr]:[1-9]/', $serialized)) {
                return $serialized;
            }
        }

        return $value;
    }

    private function unfreeze(string $key, bool &$isHit): mixed
    {
        if ('N;' === $value = $this->values[$key]) {
            return null;
        }
        if (\is_string($value) && isset($value[2]) && ':' === $value[1]) {
            try {
<<<<<<< HEAD
                $value = unserialize($value);
=======
                $value = unserialize($value, ['allowed_classes' => true]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            } catch (\Exception $e) {
                CacheItem::log($this->logger, 'Failed to unserialize key "{key}": '.$e->getMessage(), ['key' => $key, 'exception' => $e, 'cache-adapter' => get_debug_type($this)]);
                $value = false;
            }
            if (false === $value) {
                $value = null;
                $isHit = false;

                if (!$this->maxItems) {
                    $this->values[$key] = null;
                }
            }
        }

        return $value;
    }

    private function validateKeys(array $keys): bool
    {
        foreach ($keys as $key) {
            if (!\is_string($key) || !isset($this->expiries[$key])) {
                CacheItem::validateKey($key);
            }
        }

        return true;
    }
}
