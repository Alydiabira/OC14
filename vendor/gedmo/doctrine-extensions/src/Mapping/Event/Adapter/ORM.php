<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Mapping\Event\Adapter;

use Doctrine\Common\EventArgs;
<<<<<<< HEAD
=======
use Doctrine\Deprecations\Deprecation;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping\ClassMetadata;
use Gedmo\Exception\RuntimeException;
use Gedmo\Mapping\Event\AdapterInterface;

/**
 * Doctrine event adapter for ORM specific
 * event arguments
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
class ORM implements AdapterInterface
{
    private ?EventArgs $args = null;

    private ?EntityManagerInterface $em = null;

    public function __call($method, $args)
    {
<<<<<<< HEAD
        @trigger_error(sprintf(
            'Using "%s()" method is deprecated since gedmo/doctrine-extensions 3.5 and will be removed in version 4.0.',
            __METHOD__
        ), E_USER_DEPRECATED);
=======
        Deprecation::trigger(
            'gedmo/doctrine-extensions',
            'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2409',
            'Using "%s()" method is deprecated since gedmo/doctrine-extensions 3.5 and will be removed in version 4.0.',
            __METHOD__
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (null === $this->args) {
            throw new RuntimeException('Event args must be set before calling its methods');
        }
        $method = str_replace('Object', $this->getDomainObjectName(), $method);

        return call_user_func_array([$this->args, $method], $args);
    }

    public function setEventArgs(EventArgs $args)
    {
        $this->args = $args;
    }

    public function getDomainObjectName()
    {
        return 'Entity';
    }

    public function getManagerName()
    {
        return 'ORM';
    }

    /**
<<<<<<< HEAD
     * @param ClassMetadata $meta
=======
     * @param ClassMetadata<object> $meta
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getRootObjectClass($meta)
    {
        return $meta->rootEntityName;
    }

    /**
     * Set the entity manager
     *
     * @return void
     */
    public function setEntityManager(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @return EntityManagerInterface
     */
    public function getObjectManager()
    {
        if (null !== $this->em) {
            return $this->em;
        }

        if (null === $this->args) {
            throw new \LogicException(sprintf('Event args must be set before calling "%s()".', __METHOD__));
        }

        // todo: for the next major release, uncomment the next line:
        // return $this->args->getObjectManager();
        // and remove anything past this
        if (\method_exists($this->args, 'getObjectManager')) {
            return $this->args->getObjectManager();
        }

<<<<<<< HEAD
        @trigger_error(sprintf(
=======
        Deprecation::trigger(
            'gedmo/doctrine-extensions',
            'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2639',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            'Calling "%s()" on event args of class "%s" that does not implement "getObjectManager()" is deprecated since gedmo/doctrine-extensions 3.14'
            .' and will throw a "%s" error in version 4.0.',
            __METHOD__,
            get_class($this->args),
            \Error::class
<<<<<<< HEAD
        ), E_USER_DEPRECATED);
=======
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this->args->getEntityManager();
    }

    public function getObject(): object
    {
        if (null === $this->args) {
            throw new \LogicException(sprintf('Event args must be set before calling "%s()".', __METHOD__));
        }

        // todo: for the next major release, uncomment the next line:
        // return $this->args->getObject();
        // and remove anything past this
        if (\method_exists($this->args, 'getObject')) {
            return $this->args->getObject();
        }

<<<<<<< HEAD
        @trigger_error(sprintf(
=======
        Deprecation::trigger(
            'gedmo/doctrine-extensions',
            'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2639',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            'Calling "%s()" on event args of class "%s" that does not imeplement "getObject()" is deprecated since gedmo/doctrine-extensions 3.14'
            .' and will throw a "%s" error in version 4.0.',
            __METHOD__,
            get_class($this->args),
            \Error::class
<<<<<<< HEAD
        ), E_USER_DEPRECATED);
=======
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this->args->getEntity();
    }

    public function getObjectState($uow, $object)
    {
        return $uow->getEntityState($object);
    }

    public function getObjectChangeSet($uow, $object)
    {
        return $uow->getEntityChangeSet($object);
    }

    /**
<<<<<<< HEAD
     * @param ClassMetadata $meta
=======
     * @param ClassMetadata<object> $meta
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getSingleIdentifierFieldName($meta)
    {
        return $meta->getSingleIdentifierFieldName();
    }

<<<<<<< HEAD
=======
    /**
     * @param ClassMetadata<object> $meta
     */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function recomputeSingleObjectChangeSet($uow, $meta, $object)
    {
        $uow->recomputeSingleEntityChangeSet($meta, $object);
    }

    public function getScheduledObjectUpdates($uow)
    {
        return $uow->getScheduledEntityUpdates();
    }

    public function getScheduledObjectInsertions($uow)
    {
        return $uow->getScheduledEntityInsertions();
    }

    public function getScheduledObjectDeletions($uow)
    {
        return $uow->getScheduledEntityDeletions();
    }

    public function setOriginalObjectProperty($uow, $object, $property, $value)
    {
        $uow->setOriginalEntityProperty(spl_object_id($object), $property, $value);
    }

    public function clearObjectChangeSet($uow, $object)
    {
<<<<<<< HEAD
        $uow->clearEntityChangeSet(spl_object_id($object));
    }

    /**
     * Creates a ORM specific LifecycleEventArgs.
     *
     * @param object                 $document
=======
        $changeSet = &$uow->getEntityChangeSet($object);
        $changeSet = [];
    }

    /**
     * @deprecated use custom lifecycle event classes instead
     *
     * Creates an ORM specific LifecycleEventArgs
     *
     * @param object                 $object
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @param EntityManagerInterface $entityManager
     *
     * @return LifecycleEventArgs
     */
<<<<<<< HEAD
    public function createLifecycleEventArgsInstance($document, $entityManager)
    {
        return new LifecycleEventArgs($document, $entityManager);
=======
    public function createLifecycleEventArgsInstance($object, $entityManager)
    {
        Deprecation::trigger(
            'gedmo/doctrine-extensions',
            'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2649',
            'Using "%s()" method is deprecated since gedmo/doctrine-extensions 3.15 and will be removed in version 4.0.',
            __METHOD__
        );

        if (!class_exists(LifecycleEventArgs::class)) {
            throw new \RuntimeException(sprintf('Cannot call %s() when using doctrine/orm >=3.0, use a custom lifecycle event class instead.', __METHOD__));
        }

        return new LifecycleEventArgs($object, $entityManager);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
