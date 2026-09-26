<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Purger;

use Doctrine\ORM\EntityManagerInterface;

<<<<<<< HEAD
/**
 * ORMPurgerInterface
 */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
interface ORMPurgerInterface extends PurgerInterface
{
    /**
     * Set the EntityManagerInterface instance this purger instance should use.
<<<<<<< HEAD
     *
     * @return void
     */
    public function setEntityManager(EntityManagerInterface $em);
=======
     */
    public function setEntityManager(EntityManagerInterface $em): void;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
