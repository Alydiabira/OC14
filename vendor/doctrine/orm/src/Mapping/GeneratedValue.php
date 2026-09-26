<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final class GeneratedValue implements MappingAttribute
{
<<<<<<< HEAD
    /** @psalm-param 'AUTO'|'SEQUENCE'|'IDENTITY'|'NONE'|'CUSTOM' $strategy */
=======
    /** @phpstan-param 'AUTO'|'SEQUENCE'|'IDENTITY'|'NONE'|'CUSTOM' $strategy */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        public readonly string $strategy = 'AUTO',
    ) {
    }
}
