<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Purger;

/**
 * PurgerInterface
 */
interface PurgerInterface
{
    /**
     * Purge the data from the database for the given EntityManager.
<<<<<<< HEAD
     *
     * @return void
     */
    public function purge();
=======
     */
    public function purge(): void;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
