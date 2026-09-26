<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tool\Wrapper;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use ProxyManager\Proxy\GhostObjectInterface;

/**
 * Wraps document or proxy for more convenient
 * manipulation
 *
<<<<<<< HEAD
 * @phpstan-extends AbstractWrapper<ClassMetadata>
=======
 * @template TObject of object
 *
 * @template-extends AbstractWrapper<ClassMetadata<TObject>, TObject, DocumentManager>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 *
 * @final since gedmo/doctrine-extensions 3.11
 */
class MongoDocumentWrapper extends AbstractWrapper
{
    /**
     * Document identifier
     */
    private ?string $identifier = null;

    /**
<<<<<<< HEAD
     * True if document or proxy is loaded
     */
    private bool $initialized = false;

    /**
     * Wrap document
     *
     * @param object $document
=======
     * Wrap document
     *
     * @param TObject $document
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct($document, DocumentManager $dm)
    {
        $this->om = $dm;
        $this->object = $document;
        $this->meta = $dm->getClassMetadata(get_class($this->object));
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

    public function getRootObjectName()
    {
        return $this->meta->rootDocumentName;
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
        return (bool) $this->getIdentifier();
    }

    /**
     * @param bool $flatten
     *
     * @return string
     */
    public function getIdentifier($single = true, $flatten = false)
    {
        if (!$this->identifier) {
            if ($this->object instanceof GhostObjectInterface) {
                $uow = $this->om->getUnitOfWork();
                if ($uow->isInIdentityMap($this->object)) {
                    $this->identifier = (string) $uow->getDocumentIdentifier($this->object);
                } else {
                    $this->initialize();
                }
            }
            if (!$this->identifier) {
                $this->identifier = (string) $this->getPropertyValue($this->meta->identifier);
            }
        }

        return $this->identifier;
    }

    public function isEmbeddedAssociation($field)
    {
        return $this->getMetadata()->isSingleValuedEmbed($field);
    }

    /**
     * Initialize the document if it is proxy
     * required when is detached or not initialized
     *
     * @return void
     */
    protected function initialize()
    {
<<<<<<< HEAD
        if (!$this->initialized) {
            if ($this->object instanceof GhostObjectInterface) {
                $uow = $this->om->getUnitOfWork();
                if (!$this->object->isProxyInitialized()) {
                    $persister = $uow->getDocumentPersister($this->meta->getName());
                    $identifier = null;
                    if ($uow->isInIdentityMap($this->object)) {
                        $identifier = $this->getIdentifier();
                    } else {
                        // this may not happen but in case
                        $getIdentifier = \Closure::bind(fn () => $this->identifier, $this->object, get_class($this->object));

                        $identifier = $getIdentifier();
                    }
                    $this->object->initializeProxy();
                    $persister->load($identifier, $this->object);
                }
            }
=======
        if (method_exists($this->om, 'isUninitializedObject') && $this->om->isUninitializedObject($this->object)) {
            $this->om->initializeObject($this->object);

            return;
        }

        // @todo: Drop support for this fallback when requiring `doctrine/mongodb-odm:^2.6 as a minimum`
        if ($this->object instanceof GhostObjectInterface && !$this->object->isProxyInitialized()) {
            $this->om->initializeObject($this->object);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
