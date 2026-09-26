<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures;

use BadMethodCallException;
<<<<<<< HEAD
use Doctrine\Deprecations\Deprecation;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

use function assert;

/**
 * Abstract Fixture class helps to manage references
 * between fixture classes in order to set relations
 * among other fixtures
 */
abstract class AbstractFixture implements SharedFixtureInterface
{
    /**
     * Fixture reference repository
<<<<<<< HEAD
     *
     * @var ReferenceRepository|null
     */
    protected $referenceRepository;

    /**
     * {@inheritDoc}
     */
    public function setReferenceRepository(ReferenceRepository $referenceRepository)
=======
     */
    protected ReferenceRepository|null $referenceRepository = null;

    public function setReferenceRepository(ReferenceRepository $referenceRepository): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->referenceRepository = $referenceRepository;
    }

    private function getReferenceRepository(): ReferenceRepository
    {
        assert($this->referenceRepository !== null);

        return $this->referenceRepository;
    }

    /**
     * Set the reference entry identified by $name
     * and referenced to managed $object. If $name
     * already is set, it overrides it
     *
<<<<<<< HEAD
     * @see Doctrine\Common\DataFixtures\ReferenceRepository::setReference
     *
     * @param string $name
     * @param object $object - managed object
     *
     * @return void
     */
    public function setReference($name, $object)
=======
     * @see ReferenceRepository::setReference()
     *
     * @param object $object - managed object
     */
    public function setReference(string $name, object $object): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->getReferenceRepository()->setReference($name, $object);
    }

    /**
     * Set the reference entry identified by $name
     * and referenced to managed $object. If $name
     * already is set, it throws a
     * BadMethodCallException exception
     *
<<<<<<< HEAD
     * @see Doctrine\Common\DataFixtures\ReferenceRepository::addReference
     *
     * @param string $name
     * @param object $object - managed object
     *
     * @return void
     *
     * @throws BadMethodCallException - if repository already has a reference by $name.
     */
    public function addReference($name, $object)
=======
     * @see ReferenceRepository::addReference()
     *
     * @param object $object - managed object
     *
     * @throws BadMethodCallException - if repository already has a reference by $name.
     */
    public function addReference(string $name, object $object): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->getReferenceRepository()->addReference($name, $object);
    }

    /**
     * Loads an object using stored reference
     * named by $name
     *
<<<<<<< HEAD
     * @see Doctrine\Common\DataFixtures\ReferenceRepository::getReference
     *
     * @param string $name
     * @psalm-param class-string<T>|null $class
     *
     * @return object
     * @psalm-return ($class is null ? object : T)
     *
     * @template T of object
     */
    public function getReference($name, ?string $class = null)
    {
        if ($class === null) {
            Deprecation::trigger(
                'doctrine/data-fixtures',
                'https://github.com/doctrine/data-fixtures/pull/409',
                'Argument $class of %s() will be mandatory in 2.0.',
                __METHOD__,
            );
        }

=======
     * @see ReferenceRepository::getReference()
     *
     * @phpstan-param class-string<T> $class
     *
     * @phpstan-return T
     *
     * @template T of object
     */
    public function getReference(string $name, string $class): object
    {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return $this->getReferenceRepository()->getReference($name, $class);
    }

    /**
     * Check if an object is stored using reference
     * named by $name
     *
<<<<<<< HEAD
     * @see Doctrine\Common\DataFixtures\ReferenceRepository::hasReference
     *
     * @param string $name
     * @psalm-param class-string $class
     *
     * @return bool
     */
    public function hasReference($name, ?string $class = null)
    {
        if ($class === null) {
            Deprecation::trigger(
                'doctrine/data-fixtures',
                'https://github.com/doctrine/data-fixtures/pull/409',
                'Argument $class of %s() will be mandatory in 2.0.',
                __METHOD__,
            );
        }

=======
     * @see ReferenceRepository::hasReference()
     *
     * @phpstan-param class-string $class
     */
    public function hasReference(string $name, string $class): bool
    {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return $this->getReferenceRepository()->hasReference($name, $class);
    }
}
