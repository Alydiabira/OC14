<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;

/** Caching to an entity or a collection. */
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_PROPERTY)]
final class Cache implements MappingAttribute
{
<<<<<<< HEAD
    /** @psalm-param 'READ_ONLY'|'NONSTRICT_READ_WRITE'|'READ_WRITE' $usage */
=======
    /** @phpstan-param 'READ_ONLY'|'NONSTRICT_READ_WRITE'|'READ_WRITE' $usage */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        public readonly string $usage = 'READ_ONLY',
        public readonly string|null $region = null,
    ) {
    }
}
