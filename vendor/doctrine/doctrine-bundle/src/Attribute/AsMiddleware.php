<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class AsMiddleware
{
    /** @param string[] $connections */
    public function __construct(
        public array $connections = [],
<<<<<<< HEAD
        public ?int $priority = null,
=======
        public int|null $priority = null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
    }
}
