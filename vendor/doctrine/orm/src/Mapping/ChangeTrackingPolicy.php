<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final class ChangeTrackingPolicy implements MappingAttribute
{
<<<<<<< HEAD
    /** @psalm-param 'DEFERRED_IMPLICIT'|'DEFERRED_EXPLICIT' $value */
=======
    /** @phpstan-param 'DEFERRED_IMPLICIT'|'DEFERRED_EXPLICIT' $value */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        public readonly string $value,
    ) {
    }
}
