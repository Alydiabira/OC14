<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Mapping;

use Doctrine\ORM\Mapping\ClassMetadata;

class ClassMetadataCollection
{
<<<<<<< HEAD
    private ?string $path      = null;
    private ?string $namespace = null;

    /** @var ClassMetadata[] */
    private array $metadata;

    /** @param ClassMetadata[] $metadata */
    public function __construct(array $metadata)
    {
        $this->metadata = $metadata;
=======
    private string|null $path      = null;
    private string|null $namespace = null;

    /** @param ClassMetadata[] $metadata */
    public function __construct(
        private readonly array $metadata,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /** @return ClassMetadata[] */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /** @param string $path */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /** @return string|null */
    public function getPath()
    {
        return $this->path;
    }

    /** @param string $namespace */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    /** @return string|null */
    public function getNamespace()
    {
        return $this->namespace;
    }
}
