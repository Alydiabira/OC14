<?php

namespace Doctrine\DBAL\Cache;

use Doctrine\DBAL\Exception;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
class CacheException extends Exception
{
    /** @return CacheException */
    public static function noCacheKey()
    {
        return new self('No cache key was set.');
    }

    /** @return CacheException */
    public static function noResultDriverConfigured()
    {
        return new self('Trying to cache a query but no result driver is configured.');
    }
}
