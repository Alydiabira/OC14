<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final class ManyToOne implements MappingAttribute
{
    /**
     * @param class-string|null $targetEntity
     * @param string[]|null     $cascade
<<<<<<< HEAD
     * @psalm-param 'LAZY'|'EAGER'|'EXTRA_LAZY' $fetch
=======
     * @phpstan-param 'LAZY'|'EAGER'|'EXTRA_LAZY' $fetch
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(
        public readonly string|null $targetEntity = null,
        public readonly array|null $cascade = null,
        public readonly string $fetch = 'LAZY',
        public readonly string|null $inversedBy = null,
    ) {
    }
}
