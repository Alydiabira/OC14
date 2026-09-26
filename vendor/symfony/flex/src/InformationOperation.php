<?php

namespace Symfony\Flex;

use Composer\DependencyResolver\Operation\OperationInterface;
use Composer\Package\PackageInterface;

/**
 * @author Maxime Hélias <maximehelias16@gmail.com>
 */
class InformationOperation implements OperationInterface
{
    private $package;
<<<<<<< HEAD
    private $recipeRef = null;
    private $version = null;
=======
    private $recipeRef;
    private $version;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(PackageInterface $package)
    {
        $this->package = $package;
    }

    /**
     * Call to get information about a specific version of a recipe.
     *
     * Both $recipeRef and $version would normally come from the symfony.lock file.
     */
    public function setSpecificRecipeVersion(string $recipeRef, string $version)
    {
        $this->recipeRef = $recipeRef;
        $this->version = $version;
    }

    /**
     * Returns package instance.
     *
     * @return PackageInterface
     */
    public function getPackage()
    {
        return $this->package;
    }

    public function getRecipeRef(): ?string
    {
        return $this->recipeRef;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function getJobType()
    {
        return 'information';
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
     *
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return string
     */
    public function getOperationType()
    {
        return 'information';
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
     *
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return string
     */
    public function show($lock)
    {
        $pretty = method_exists($this->package, 'getFullPrettyVersion') ? $this->package->getFullPrettyVersion() : $this->formatVersion($this->package);

        return 'Information '.$this->package->getPrettyName().' ('.$pretty.')';
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __toString()
    {
        return $this->show(false);
    }

    /**
     * Compatibility for Composer 1.x, not needed in Composer 2.
     */
    public function getReason()
    {
        return null;
    }
}
