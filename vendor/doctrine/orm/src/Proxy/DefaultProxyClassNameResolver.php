<?php

declare(strict_types=1);

namespace Doctrine\ORM\Proxy;

<<<<<<< HEAD
=======
use Doctrine\Deprecations\Deprecation;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\Persistence\Mapping\ProxyClassNameResolver;
use Doctrine\Persistence\Proxy;

use function strrpos;
use function substr;

<<<<<<< HEAD
=======
use const PHP_VERSION_ID;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Class-related functionality for objects that might or not be proxy objects
 * at the moment.
 */
final class DefaultProxyClassNameResolver implements ProxyClassNameResolver
{
    public function resolveClassName(string $className): string
    {
<<<<<<< HEAD
=======
        if (PHP_VERSION_ID >= 80400) {
            Deprecation::triggerIfCalledFromOutside(
                'doctrine/orm',
                'https://github.com/doctrine/orm/pull/12005',
                'Class "%s" is deprecated. Use native lazy objects instead.',
                self::class,
            );
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $pos = strrpos($className, '\\' . Proxy::MARKER . '\\');

        if ($pos === false) {
            return $className;
        }

        return substr($className, $pos + Proxy::MARKER_LENGTH + 2);
    }

    /** @return class-string */
    public static function getClass(object $object): string
    {
<<<<<<< HEAD
=======
        if (PHP_VERSION_ID >= 80400) {
            Deprecation::triggerIfCalledFromOutside(
                'doctrine/orm',
                'https://github.com/doctrine/orm/pull/12005',
                'Class "%s" is deprecated. Use native lazy objects instead.',
                self::class,
            );
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return (new self())->resolveClassName($object::class);
    }
}
