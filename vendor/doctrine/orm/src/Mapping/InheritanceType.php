<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final class InheritanceType implements MappingAttribute
{
<<<<<<< HEAD
    /** @psalm-param 'NONE'|'JOINED'|'SINGLE_TABLE' $value */
=======
    /** @phpstan-param 'NONE'|'JOINED'|'SINGLE_TABLE' $value */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        public readonly string $value,
    ) {
    }
}
