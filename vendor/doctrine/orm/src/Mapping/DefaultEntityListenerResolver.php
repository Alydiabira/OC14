<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use function trim;

/**
 * The default DefaultEntityListener
 */
class DefaultEntityListenerResolver implements EntityListenerResolver
{
<<<<<<< HEAD
    /** @psalm-var array<class-string, object> Map to store entity listener instances. */
=======
    /** @var array<class-string, object> Map to store entity listener instances. */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private array $instances = [];

    public function clear(string|null $className = null): void
    {
        if ($className === null) {
            $this->instances = [];

            return;
        }

        $className = trim($className, '\\');
        unset($this->instances[$className]);
    }

    public function register(object $object): void
    {
        $this->instances[$object::class] = $object;
    }

    public function resolve(string $className): object
    {
        $className = trim($className, '\\');

        return $this->instances[$className] ??= new $className();
    }
}
