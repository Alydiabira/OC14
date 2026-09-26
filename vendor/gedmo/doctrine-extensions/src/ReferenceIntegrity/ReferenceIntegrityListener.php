<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\ReferenceIntegrity;

use Doctrine\Common\EventArgs;
<<<<<<< HEAD
=======
use Doctrine\Persistence\Event\LifecycleEventArgs;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\Persistence\Event\LoadClassMetadataEventArgs;
use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectManager;
use Gedmo\Exception\InvalidMappingException;
use Gedmo\Exception\ReferenceIntegrityStrictException;
<<<<<<< HEAD
=======
use Gedmo\Mapping\Event\AdapterInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Gedmo\Mapping\MappedEventSubscriber;
use Gedmo\ReferenceIntegrity\Mapping\Validator;

/**
 * The ReferenceIntegrity listener handles the reference integrity on related documents
 *
<<<<<<< HEAD
=======
 * @phpstan-extends MappedEventSubscriber<array, AdapterInterface>
 *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Evert Harmeling <evert.harmeling@freshheads.com>
 *
 * @final since gedmo/doctrine-extensions 3.11
 */
class ReferenceIntegrityListener extends MappedEventSubscriber
{
    /**
     * @return string[]
     */
    public function getSubscribedEvents()
    {
        return [
            'loadClassMetadata',
            'preRemove',
        ];
    }

    /**
     * Maps additional metadata for the Document
     *
     * @param LoadClassMetadataEventArgs $eventArgs
     *
     * @phpstan-param LoadClassMetadataEventArgs<ClassMetadata<object>, ObjectManager> $eventArgs
     *
     * @return void
     */
    public function loadClassMetadata(EventArgs $eventArgs)
    {
        $this->loadMetadataForObjectClass($eventArgs->getObjectManager(), $eventArgs->getClassMetadata());
    }

    /**
     * Looks for referenced objects being removed
     * to nullify the relation or throw an exception
     *
<<<<<<< HEAD
=======
     * @param LifecycleEventArgs $args
     *
     * @phpstan-param LifecycleEventArgs<ObjectManager> $args
     *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return void
     */
    public function preRemove(EventArgs $args)
    {
        $ea = $this->getEventAdapter($args);
        $om = $ea->getObjectManager();
        $object = $ea->getObject();
        $class = get_class($object);
        $meta = $om->getClassMetadata($class);

        if ($config = $this->getConfiguration($om, $meta->getName())) {
            foreach ($config['referenceIntegrity'] as $property => $action) {
<<<<<<< HEAD
                $reflProp = $meta->getReflectionProperty($property);
                $refDoc = $reflProp->getValue($object);
=======
                $refDoc = $meta->getFieldValue($object, $property);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $fieldMapping = $meta->getFieldMapping($property);

                switch ($action) {
                    case Validator::NULLIFY:
                        if (!isset($fieldMapping['mappedBy'])) {
                            throw new InvalidMappingException(sprintf("Reference '%s' on '%s' should have 'mappedBy' option defined", $property, $meta->getName()));
                        }

<<<<<<< HEAD
                        assert(class_exists($fieldMapping['targetDocument']));

                        $subMeta = $om->getClassMetadata($fieldMapping['targetDocument']);

                        if (!$subMeta->hasField($fieldMapping['mappedBy'])) {
                            throw new InvalidMappingException(sprintf('Unable to find reference integrity [%s] as mapped property in entity - %s', $fieldMapping['mappedBy'], $fieldMapping['targetDocument']));
                        }

                        $refReflProp = $subMeta->getReflectionProperty($fieldMapping['mappedBy']);

                        if ($meta->isCollectionValuedReference($property)) {
                            foreach ($refDoc as $refObj) {
                                $refReflProp->setValue($refObj, null);
                                $om->persist($refObj);
                            }
                        } else {
                            $refReflProp->setValue($refDoc, null);
=======
                        assert(class_exists($fieldMapping->targetDocument ?? $fieldMapping['targetDocument']));

                        $subMeta = $om->getClassMetadata($fieldMapping->targetDocument ?? $fieldMapping['targetDocument']);

                        $mappedByField = $fieldMapping->mappedBy ?? $fieldMapping['mappedBy'];

                        if (!$subMeta->hasField($mappedByField)) {
                            throw new InvalidMappingException(sprintf('Unable to find reference integrity [%s] as mapped property in entity - %s', $mappedByField, $fieldMapping->targetDocument ?? $fieldMapping['targetDocument']));
                        }

                        if ($meta->isCollectionValuedReference($property)) {
                            foreach ($refDoc as $refObj) {
                                $subMeta->setFieldValue($refObj, $mappedByField, null);
                                $om->persist($refObj);
                            }
                        } else {
                            $subMeta->setFieldValue($refDoc, $mappedByField, null);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                            $om->persist($refDoc);
                        }

                        break;
                    case Validator::PULL:
                        if (!isset($fieldMapping['mappedBy'])) {
                            throw new InvalidMappingException(sprintf("Reference '%s' on '%s' should have 'mappedBy' option defined", $property, $meta->getName()));
                        }

<<<<<<< HEAD
                        assert(class_exists($fieldMapping['targetDocument']));

                        $subMeta = $om->getClassMetadata($fieldMapping['targetDocument']);

                        if (!$subMeta->hasField($fieldMapping['mappedBy'])) {
                            throw new InvalidMappingException(sprintf('Unable to find reference integrity [%s] as mapped property in entity - %s', $fieldMapping['mappedBy'], $fieldMapping['targetDocument']));
                        }

                        if (!$subMeta->isCollectionValuedReference($fieldMapping['mappedBy'])) {
                            throw new InvalidMappingException(sprintf('Reference integrity [%s] mapped property in entity - %s should be a Reference Many', $fieldMapping['mappedBy'], $fieldMapping['targetDocument']));
                        }

                        $refReflProp = $subMeta->getReflectionProperty($fieldMapping['mappedBy']);

                        if ($meta->isCollectionValuedReference($property)) {
                            foreach ($refDoc as $refObj) {
                                $collection = $refReflProp->getValue($refObj);
                                $collection->removeElement($object);
                                $refReflProp->setValue($refObj, $collection);
                                $om->persist($refObj);
                            }
                        } elseif (is_object($refDoc)) {
                            $collection = $refReflProp->getValue($refDoc);
                            $collection->removeElement($object);
                            $refReflProp->setValue($refDoc, $collection);
=======
                        assert(class_exists($fieldMapping->targetDocument ?? $fieldMapping['targetDocument']));

                        $subMeta = $om->getClassMetadata($fieldMapping->targetDocument ?? $fieldMapping['targetDocument']);

                        $mappedByField = $fieldMapping->mappedBy ?? $fieldMapping['mappedBy'];

                        if (!$subMeta->hasField($mappedByField)) {
                            throw new InvalidMappingException(sprintf('Unable to find reference integrity [%s] as mapped property in entity - %s', $mappedByField, $fieldMapping->targetDocument ?? $fieldMapping['targetDocument']));
                        }

                        if (!$subMeta->isCollectionValuedReference($mappedByField)) {
                            throw new InvalidMappingException(sprintf('Reference integrity [%s] mapped property in entity - %s should be a Reference Many', $mappedByField, $fieldMapping->targetDocument ?? $fieldMapping['targetDocument']));
                        }

                        if ($meta->isCollectionValuedReference($property)) {
                            foreach ($refDoc as $refObj) {
                                $collection = $subMeta->getFieldValue($refObj, $mappedByField);
                                $collection->removeElement($object);
                                $subMeta->setFieldValue($refObj, $mappedByField, $collection);
                                $om->persist($refObj);
                            }
                        } elseif (is_object($refDoc)) {
                            $collection = $subMeta->getFieldValue($refDoc, $mappedByField);
                            $collection->removeElement($object);
                            $subMeta->setFieldValue($refDoc, $mappedByField, $collection);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                            $om->persist($refDoc);
                        }

                        break;
                    case Validator::RESTRICT:
                        if ($meta->isCollectionValuedReference($property) && $refDoc->count() > 0) {
<<<<<<< HEAD
                            throw new ReferenceIntegrityStrictException(sprintf("The reference integrity for the '%s' collection is restricted", $fieldMapping['targetDocument']));
                        }
                        if ($meta->isSingleValuedReference($property) && null !== $refDoc) {
                            throw new ReferenceIntegrityStrictException(sprintf("The reference integrity for the '%s' document is restricted", $fieldMapping['targetDocument']));
=======
                            throw new ReferenceIntegrityStrictException(sprintf("The reference integrity for the '%s' collection is restricted", $fieldMapping->targetDocument ?? $fieldMapping['targetDocument']));
                        }
                        if ($meta->isSingleValuedReference($property) && null !== $refDoc) {
                            throw new ReferenceIntegrityStrictException(sprintf("The reference integrity for the '%s' document is restricted", $fieldMapping->targetDocument ?? $fieldMapping['targetDocument']));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        }

                        break;
                }
            }
        }
    }

    protected function getNamespace()
    {
        return __NAMESPACE__;
    }
}
