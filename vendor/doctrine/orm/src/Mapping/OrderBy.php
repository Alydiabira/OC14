<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;
<<<<<<< HEAD
=======
use SortDirection;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

#[Attribute(Attribute::TARGET_PROPERTY)]
final class OrderBy implements MappingAttribute
{
<<<<<<< HEAD
    /** @param array<string> $value */
=======
    /** @param array<string, SortDirection|'ASC'|'DESC'> $value */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        public readonly array $value,
    ) {
    }
}
