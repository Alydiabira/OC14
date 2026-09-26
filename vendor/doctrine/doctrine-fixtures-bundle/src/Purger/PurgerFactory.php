<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Purger;

use Doctrine\Common\DataFixtures\Purger\PurgerInterface;
use Doctrine\ORM\EntityManagerInterface;

interface PurgerFactory
{
<<<<<<< HEAD
    /** @psalm-param list<string> $excluded */
=======
    /** @phpstan-param list<string> $excluded */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function createForEntityManager(
        ?string $emName,
        EntityManagerInterface $em,
        array $excluded = [],
        bool $purgeWithTruncate = false
    ): PurgerInterface;
}
