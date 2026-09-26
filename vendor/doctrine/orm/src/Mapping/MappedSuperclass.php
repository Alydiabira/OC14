<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;
use Doctrine\ORM\EntityRepository;

#[Attribute(Attribute::TARGET_CLASS)]
final class MappedSuperclass implements MappingAttribute
{
<<<<<<< HEAD
    /** @psalm-param class-string<EntityRepository>|null $repositoryClass */
=======
    /** @param class-string<EntityRepository>|null $repositoryClass */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        public readonly string|null $repositoryClass = null,
    ) {
    }
}
