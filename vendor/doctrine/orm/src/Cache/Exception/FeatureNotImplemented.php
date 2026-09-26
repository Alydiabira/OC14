<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache\Exception;

class FeatureNotImplemented extends CacheException
{
    public static function scalarResults(): self
    {
        return new self('Second level cache does not support scalar results.');
    }

    public static function multipleRootEntities(): self
    {
        return new self('Second level cache does not support multiple root entities.');
    }

    public static function nonSelectStatements(): self
    {
        return new self('Second-level cache query supports only select statements.');
    }
<<<<<<< HEAD
=======

    public static function partialEntities(): self
    {
        return new self('Second level cache does not support partial entities.');
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
