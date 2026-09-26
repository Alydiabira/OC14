<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tool\Wrapper;

<<<<<<< HEAD
use Doctrine\Common\Util\ClassUtils;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Persistence\Proxy as PersistenceProxy;
=======
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Gedmo\Tool\ClassUtils;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Wraps entity or proxy for more convenient
 * manipulation
 *
<<<<<<< HEAD
 * @phpstan-extends AbstractWrapper<ClassMetadata>
=======
 * @template TObject of object
 *
 * @template-extends AbstractWrapper<ClassMetadata<TObject>, TObject, EntityManagerInterface>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 *
 * @final since gedmo/doctrine-extensions 3.11
 */
class EntityWrapper extends AbstractWrapper
{
    /**
     * Entity identifier
     *
     * @var array<string, mixed>|null
     */
    private $identifier;

    /**
<<<<<<< HEAD
     * True if entity or proxy is loaded
     */
    private bool $initialized = false;

    /**
     * Wrap entity
     *
     * @param object $entity
=======
     * Wrap entity
     *
     * @param TObject $entity
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct($entity, EntityManagerInterface $em)
    {
        $this->om = $em;
        $this->object = $entity;
        $this->meta = $em->getClassMetadata(get_class($this->object));
    }

    public function getPropertyValue($property)
    {
        $this->initialize();

<<<<<<< HEAD
        return $this->meta->getReflectionProperty($property)->getValue($this->object);
=======
        return $this->meta->getFieldValue($this->object, $property);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function setPropertyValue($property, $value)
    {
        $this->initialize();
<<<<<<< HEAD
        $this->meta->getReflectionProperty($property)->setValue($this->object, $value);
=======
        $this->meta->setFieldValue($this->object, $property, $value);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this;
    }

    public function hasValidIdentifier()
    {
        return null !== $this->getIdentifier();
    }

    public function getRootObjectName()
    {
        return $this->meta->rootEntityName;
    }

    /**
     * @param bool $flatten
     */
    public function getIdentifier($single = true, $flatten = false)
    {
        $flatten = 1 < \func_num_args() && true === func_get_arg(1);
        if (null === $this->identifier) {
            $uow = $this->om->getUnitOfWork();
            $this->identifier = $uow->isInIdentityMap($this->object)
                ? $uow->getEntityIdentifier($this->object)
                : $this->meta->getIdentifierValues($this->object);
            if (is_array($this->identifier) && empty($this->identifier)) {
                $this->identifier = null;
            }
        }
        if (is_array($this->identifier)) {
            if ($single) {
                return reset($this->identifier);
            }
            if ($flatten) {
                $id = $this->identifier;
                foreach ($id as $i => $value) {
                    if (is_object($value) && $this->om->getMetadataFactory()->hasMetadataFor(ClassUtils::getClass($value))) {
                        $id[$i] = (new self($value, $this->om))->getIdentifier(false, true);
                    }
                }

                return implode(' ', $id);
            }
        }

        return $this->identifier;
    }

    public function isEmbeddedAssociation($field)
    {
        return false;
    }

    /**
     * Initialize the entity if it is proxy
     * required when is detached or not initialized
     *
     * @return void
     */
    protected function initialize()
    {
<<<<<<< HEAD
        if (!$this->initialized) {
            if ($this->object instanceof PersistenceProxy) {
                if (!$this->object->__isInitialized()) {
                    $this->object->__load();
                }
            }
=======
        if ($this->om->isUninitializedObject($this->object)) {
            $this->om->initializeObject($this->object);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
