<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Mapping;

use Doctrine\ORM\Mapping\ClassMetadata as OrmClassMetadata;
use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\Mapping\Driver\MappingDriver as MappingDriverInterface;
use Psr\Container\ContainerInterface;

class MappingDriver implements MappingDriverInterface
{
<<<<<<< HEAD
    private MappingDriverInterface $driver;
    private ContainerInterface $idGeneratorLocator;

    public function __construct(MappingDriverInterface $driver, ContainerInterface $idGeneratorLocator)
    {
        $this->driver             = $driver;
        $this->idGeneratorLocator = $idGeneratorLocator;
=======
    public function __construct(
        private readonly MappingDriverInterface $driver,
        private readonly ContainerInterface $idGeneratorLocator,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * {@inheritDoc}
     */
<<<<<<< HEAD
    public function getAllClassNames()
=======
    public function getAllClassNames(): array
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->driver->getAllClassNames();
    }

    /**
     * {@inheritDoc}
     */
    public function isTransient($className): bool
    {
        return $this->driver->isTransient($className);
    }

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass($className, ClassMetadata $metadata): void
    {
        $this->driver->loadMetadataForClass($className, $metadata);

        if (
            ! $metadata instanceof OrmClassMetadata
            || $metadata->generatorType !== OrmClassMetadata::GENERATOR_TYPE_CUSTOM
            || ! isset($metadata->customGeneratorDefinition['class'])
            || ! $this->idGeneratorLocator->has($metadata->customGeneratorDefinition['class'])
        ) {
            return;
        }

        $idGenerator = $this->idGeneratorLocator->get($metadata->customGeneratorDefinition['class']);
        $metadata->setCustomGeneratorDefinition(['instance' => $idGenerator] + $metadata->customGeneratorDefinition);
        $metadata->setIdGeneratorType(OrmClassMetadata::GENERATOR_TYPE_NONE);
    }

    /**
     * Returns the inner driver
     */
    public function getDriver(): MappingDriverInterface
    {
        return $this->driver;
    }
}
