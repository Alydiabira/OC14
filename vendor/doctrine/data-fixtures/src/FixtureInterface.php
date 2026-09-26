<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures;

use Doctrine\Persistence\ObjectManager;

/**
 * Interface contract for fixture classes to implement.
 */
interface FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     */
<<<<<<< HEAD
    public function load(ObjectManager $manager);
=======
    public function load(ObjectManager $manager): void;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
