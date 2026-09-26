<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Attribute;

use Attribute;

/**
 * Service tag to autoconfigure event listeners.
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class AsDoctrineListener
{
    public function __construct(
        public string $event,
<<<<<<< HEAD
        public ?int $priority = null,
        public ?string $connection = null,
=======
        public int|null $priority = null,
        public string|null $connection = null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
    }
}
