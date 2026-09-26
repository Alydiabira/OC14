<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures;

use BadMethodCallException;
<<<<<<< HEAD
use Doctrine\Deprecations\Deprecation;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ODM\PHPCR\DocumentManager as PhpcrDocumentManager;
use Doctrine\ORM\UnitOfWork as OrmUnitOfWork;
use Doctrine\Persistence\ObjectManager;
use OutOfBoundsException;

use function array_key_exists;
use function array_keys;
<<<<<<< HEAD
use function get_class;
=======
use function array_map;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function sprintf;

/**
 * ReferenceRepository class manages references for
 * fixtures in order to easily support the relations
 * between fixtures
 */
class ReferenceRepository
{
    /**
     * List of named references to the fixture objects
     * gathered during fixure loading
     *
<<<<<<< HEAD
     * @psalm-var array<string, object>
     */
    private array $references = [];

    /**
     * List of named references to the fixture objects
     * gathered during fixure loading
     *
     * @psalm-var array<class-string, array<string, object>>
=======
     * @phpstan-var array<class-string, array<string|int, object>>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    private array $referencesByClass = [];

    /**
     * List of identifiers stored for references
     * in case a reference gets no longer managed, it will
     * use a proxy referenced by this identity
     *
<<<<<<< HEAD
     * @psalm-var array<string, mixed>
     */
    private array $identities = [];

    /**
     * List of identifiers stored for references
     * in case a reference gets no longer managed, it will
     * use a proxy referenced by this identity
     *
     * @psalm-var array<class-string, array<string, mixed>>
=======
     * @phpstan-var array<class-string, array<string, mixed>>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    private array $identitiesByClass = [];

    /**
     * Currently used object manager
     */
    private ObjectManager $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Get identifier for a unit of work
     *
     * @param object $reference Reference object
     * @param object $uow       Unit of work
<<<<<<< HEAD
     *
     * @return array
     */
    protected function getIdentifier($reference, $uow)
    {
        // In case Reference is not yet managed in UnitOfWork
        if (! $this->hasIdentifier($reference)) {
            $class = $this->manager->getClassMetadata(get_class($reference));
=======
     */
    protected function getIdentifier(object $reference, object $uow): mixed
    {
        // In case Reference is not yet managed in UnitOfWork
        if (! $this->hasIdentifier($reference)) {
            $class = $this->manager->getClassMetadata($reference::class);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return $class->getIdentifierValues($reference);
        }

        // Dealing with ORM UnitOfWork
        if ($uow instanceof OrmUnitOfWork) {
            return $uow->getEntityIdentifier($reference);
        }

        // PHPCR ODM UnitOfWork
        if ($this->manager instanceof PhpcrDocumentManager) {
            return $uow->getDocumentId($reference);
        }

        // ODM UnitOfWork
        return $uow->getDocumentIdentifier($reference);
    }

    /**
     * Set the reference entry identified by $name
     * and referenced to $reference. If $name
     * already is set, it overrides it
<<<<<<< HEAD
     *
     * @param string $name
     * @param object $reference
     *
     * @return void
     */
    public function setReference($name, $reference)
    {
        $class = $this->getRealClass(get_class($reference));

        $this->referencesByClass[$class][$name] = $reference;

        // For BC, to be removed in next major.
        $this->references[$name] = $reference;

=======
     */
    public function setReference(string $name, object $reference): void
    {
        $class = $this->getRealClass($reference::class);

        $this->referencesByClass[$class][$name] = $reference;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (! $this->hasIdentifier($reference)) {
            return;
        }

        // in case if reference is set after flush, store its identity
        $uow        = $this->manager->getUnitOfWork();
        $identifier = $this->getIdentifier($reference, $uow);

        $this->identitiesByClass[$class][$name] = $identifier;
<<<<<<< HEAD

        // For BC, to be removed in next major.
        $this->identities[$name] = $identifier;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Store the identifier of a reference
     *
<<<<<<< HEAD
     * @param string            $name
     * @param mixed             $identity
     * @param class-string|null $class
     *
     * @return void
     */
    public function setReferenceIdentity($name, $identity, ?string $class = null)
    {
        if ($class === null) {
            Deprecation::trigger(
                'doctrine/data-fixtures',
                'https://github.com/doctrine/data-fixtures/pull/409',
                'Argument $class of %s() will be mandatory in 2.0.',
                __METHOD__,
            );
        }

        $this->identitiesByClass[$class][$name] = $identity;

        // For BC, to be removed in next major.
        $this->identities[$name] = $identity;
=======
     * @param class-string $class
     */
    public function setReferenceIdentity(string $name, mixed $identity, string $class): void
    {
        $this->identitiesByClass[$class][$name] = $identity;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Set the reference entry identified by $name
     * and referenced to managed $object. $name must
     * not be set yet
     *
     * Notice: in case if identifier is generated after
<<<<<<< HEAD
     * the record is inserted, be sure tu use this method
     * after $object is flushed
     *
     * @param string $name
     * @param object $object - managed object
     *
     * @return void
     *
     * @throws BadMethodCallException - if repository already has a reference by $name.
     */
    public function addReference($name, $object)
    {
        // For BC, to be removed in next major.
        if (isset($this->references[$name])) {
            throw new BadMethodCallException(sprintf(
                'Reference to "%s" already exists, use method setReference() in order to override it',
                $name,
            ));
        }

        $class = $this->getRealClass(get_class($object));
=======
     * the record is inserted, be sure to use this method
     * after $object is flushed
     *
     * @param object $object - managed object
     *
     * @throws BadMethodCallException - if repository already has a reference by $name.
     */
    public function addReference(string $name, object $object): void
    {
        $class = $this->getRealClass($object::class);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (isset($this->referencesByClass[$class][$name])) {
            throw new BadMethodCallException(sprintf(
                'Reference to "%s" for class "%s" already exists, use method setReference() in order to override it',
                $name,
                $class,
            ));
        }

        $this->setReference($name, $object);
    }

    /**
     * Loads an object using stored reference
     * named by $name
     *
<<<<<<< HEAD
     * @param string $name
     * @psalm-param class-string<T>|null $class
     *
     * @return object
     * @psalm-return ($class is null ? object : T)
=======
     * @phpstan-param class-string<T> $class
     *
     * @phpstan-return T
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws OutOfBoundsException - if repository does not exist.
     *
     * @template T of object
     */
<<<<<<< HEAD
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

        if (! $this->hasReference($name, $class)) {
            // For BC, to be removed in next major.
            if ($class === null) {
                throw new OutOfBoundsException(sprintf('Reference to "%s" does not exist', $name));
            }

            throw new OutOfBoundsException(sprintf('Reference to "%s" for class "%s" does not exist', $name, $class));
        }

        $reference = $class === null
            ? $this->references[$name] // For BC, to be removed in next major.
            : $this->referencesByClass[$class][$name];

        $identity = $class === null
            ? ($this->identities[$name] ?? null) // For BC, to be removed in next major.
            : ($this->identitiesByClass[$class][$name] ?? null);

        if ($class === null) { // For BC, to be removed in next major.
            $class = $this->getRealClass(get_class($reference));
        }
=======
    public function getReference(string $name, string $class): object
    {
        if (! $this->hasReference($name, $class)) {
            throw new OutOfBoundsException(sprintf('Reference to "%s" for class "%s" does not exist', $name, $class));
        }

        $reference = $this->referencesByClass[$class][$name];

        $identity = ($this->identitiesByClass[$class][$name] ?? null);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $meta = $this->manager->getClassMetadata($class);

        if (! $this->manager->contains($reference) && $identity !== null) {
            $reference                              = $this->manager->getReference($meta->name, $identity);
<<<<<<< HEAD
            $this->references[$name]                = $reference; // already in identity map
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $this->referencesByClass[$class][$name] = $reference; // already in identity map
        }

        return $reference;
    }

    /**
     * Check if an object is stored using reference
     * named by $name
     *
<<<<<<< HEAD
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

        return $class === null
            ? isset($this->references[$name]) // For BC, to be removed in next major.
            : isset($this->referencesByClass[$class][$name]);
=======
     * @phpstan-param class-string $class
     */
    public function hasReference(string $name, string $class): bool
    {
        return isset($this->referencesByClass[$class][$name]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Searches for reference names in the
     * list of stored references
     *
<<<<<<< HEAD
     * @param object $reference
     *
     * @return array<string>
     */
    public function getReferenceNames($reference)
    {
        $class = $this->getRealClass(get_class($reference));
=======
     * @return array<string>
     */
    public function getReferenceNames(object $reference): array
    {
        $class = $this->getRealClass($reference::class);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (! isset($this->referencesByClass[$class])) {
            return [];
        }

<<<<<<< HEAD
        return array_keys($this->referencesByClass[$class], $reference, true);
=======
        return array_map('strval', array_keys($this->referencesByClass[$class], $reference, true));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Checks if reference has identity stored
     *
<<<<<<< HEAD
     * @param string            $name
     * @param class-string|null $class
     *
     * @return bool
     */
    public function hasIdentity($name, ?string $class = null)
    {
        if ($class === null) {
            Deprecation::trigger(
                'doctrine/data-fixtures',
                'https://github.com/doctrine/data-fixtures/pull/409',
                'Argument $class of %s() will be mandatory in 2.0.',
                __METHOD__,
            );
        }

        return $class === null
            ? array_key_exists($name, $this->identities) // For BC, to be removed in next major.
            : array_key_exists($class, $this->identitiesByClass) && array_key_exists($name, $this->identitiesByClass[$class]);
    }

    /**
     * @deprecated in favor of getIdentitiesByClass
     *
     * Get all stored identities
     *
     * @psalm-return array<string, object>
     */
    public function getIdentities()
    {
        return $this->identities;
=======
     * @param class-string $class
     */
    public function hasIdentity(string $name, string $class): bool
    {
        return array_key_exists($class, $this->identitiesByClass) && array_key_exists($name, $this->identitiesByClass[$class]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Get all stored identities
     *
<<<<<<< HEAD
     * @psalm-return array<class-string, array<string, object>>
=======
     * @phpstan-return array<class-string, array<string, mixed>>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getIdentitiesByClass(): array
    {
        return $this->identitiesByClass;
    }

    /**
<<<<<<< HEAD
     * @deprecated in favor of getReferencesByClass
     *
     * Get all stored references
     *
     * @psalm-return array<string, object>
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Get all stored references
     *
     * @psalm-return array<class-string, array<string, object>>
=======
     * Get all stored references
     *
     * @phpstan-return array<class-string, array<string|int, object>>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getReferencesByClass(): array
    {
        return $this->referencesByClass;
    }

    /**
     * Get object manager
<<<<<<< HEAD
     *
     * @return ObjectManager
     */
    public function getManager()
=======
     */
    public function getManager(): ObjectManager
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->manager;
    }

    /**
     * Get real class name of a reference that could be a proxy
     *
     * @param string $className Class name of reference object
     *
<<<<<<< HEAD
     * @return string
     */
    protected function getRealClass($className)
=======
     * @return class-string
     */
    protected function getRealClass(string $className): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->manager->getClassMetadata($className)->getName();
    }

    /**
     * Checks if object has identifier already in unit of work.
<<<<<<< HEAD
     *
     * @param object $reference
     *
     * @return bool
     */
    private function hasIdentifier($reference)
=======
     */
    private function hasIdentifier(object $reference): bool
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        // in case if reference is set after flush, store its identity
        $uow = $this->manager->getUnitOfWork();

        if ($this->manager instanceof PhpcrDocumentManager) {
            return $uow->contains($reference);
        }

        return $uow->isInIdentityMap($reference);
    }
}
