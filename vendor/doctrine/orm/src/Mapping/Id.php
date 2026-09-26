<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final class Id implements MappingAttribute
{
<<<<<<< HEAD
=======
    public function __construct(
        public readonly int $position = 0,
    ) {
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
