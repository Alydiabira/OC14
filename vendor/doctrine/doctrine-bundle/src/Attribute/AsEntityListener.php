<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Attribute;

use Attribute;

/**
 * Service tag to autoconfigure entity listeners.
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class AsEntityListener
{
    public function __construct(
<<<<<<< HEAD
        public ?string $event = null,
        public ?string $method = null,
        public ?bool $lazy = null,
        public ?string $entityManager = null,
        public ?string $entity = null,
        public ?int $priority = null,
=======
        public string|null $event = null,
        public string|null $method = null,
        public bool|null $lazy = null,
        public string|null $entityManager = null,
        public string|null $entity = null,
        public int|null $priority = null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
    }
}
