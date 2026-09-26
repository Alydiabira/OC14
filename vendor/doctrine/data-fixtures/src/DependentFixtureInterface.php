<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures;

/**
 * DependentFixtureInterface needs to be implemented by fixtures which depend on other fixtures
 */
interface DependentFixtureInterface
{
    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
<<<<<<< HEAD
     * @psalm-return array<class-string<FixtureInterface>>
     */
    public function getDependencies();
=======
     * @phpstan-return array<class-string<FixtureInterface>>
     */
    public function getDependencies(): array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
