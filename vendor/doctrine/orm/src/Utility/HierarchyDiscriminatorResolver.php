<?php

declare(strict_types=1);

namespace Doctrine\ORM\Utility;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\Mapping\ClassMetadata;

/** @internal This class exists only to avoid code duplication, do not reuse it externally */
final class HierarchyDiscriminatorResolver
{
    private function __construct()
    {
    }

    /**
     * This method is needed to make INSTANCEOF work correctly with inheritance: if the class at hand has inheritance,
     * it extracts all the discriminators from the child classes and returns them
     *
     * @return null[]
<<<<<<< HEAD
     * @psalm-return array<array-key, null>
=======
     * @phpstan-return array<array-key, null>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public static function resolveDiscriminatorsForClass(
        ClassMetadata $rootClassMetadata,
        EntityManagerInterface $entityManager,
    ): array {
        $hierarchyClasses   = $rootClassMetadata->subClasses;
        $hierarchyClasses[] = $rootClassMetadata->name;

        $discriminators = [];

        foreach ($hierarchyClasses as $class) {
            $currentMetadata      = $entityManager->getClassMetadata($class);
            $currentDiscriminator = $currentMetadata->discriminatorValue;

            if ($currentDiscriminator !== null) {
                $discriminators[$currentDiscriminator] = null;
            }
        }

        return $discriminators;
    }
}
