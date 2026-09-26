<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Mapping;

use Doctrine\ORM\Id\AbstractIdGenerator;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\ClassMetadataFactory as BaseClassMetadataFactory;

use function assert;

class ClassMetadataFactory extends BaseClassMetadataFactory
{
    /**
     * {@inheritDoc}
     */
    protected function doLoadMetadata($class, $parent, $rootEntityFound, array $nonSuperclassParents): void
    {
        parent::doLoadMetadata($class, $parent, $rootEntityFound, $nonSuperclassParents);

        $customGeneratorDefinition = $class->customGeneratorDefinition;

        if (! isset($customGeneratorDefinition['instance'])) {
            return;
        }

<<<<<<< HEAD
=======
        /** @phpstan-ignore function.impossibleType, instanceof.alwaysFalse */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        assert($customGeneratorDefinition['instance'] instanceof AbstractIdGenerator);

        $class->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_CUSTOM);
        $class->setIdGenerator($customGeneratorDefinition['instance']);
        unset($customGeneratorDefinition['instance']);
        $class->setCustomGeneratorDefinition($customGeneratorDefinition);
    }
}
