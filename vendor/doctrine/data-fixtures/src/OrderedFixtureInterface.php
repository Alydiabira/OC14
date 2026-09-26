<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures;

/**
 * Ordered Fixture interface needs to be implemented
 * by fixtures, which needs to have a specific order
 * when being loaded by directory scan for example
 */
interface OrderedFixtureInterface
{
    /**
     * Get the order of this fixture
<<<<<<< HEAD
     *
     * @return int
     */
    public function getOrder();
=======
     */
    public function getOrder(): int;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
