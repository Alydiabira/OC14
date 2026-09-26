<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

<<<<<<< HEAD
=======
/**
 * @deprecated Using this attribute has no effect, use the `#[JoinColumn]`
 *              attribute instead, it is repeatable.
 */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class JoinColumns implements MappingAttribute
{
    /** @param array<JoinColumn> $value */
    public function __construct(
        public readonly array $value,
    ) {
    }
}
