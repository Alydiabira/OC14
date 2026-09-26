<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tool;

use Doctrine\Persistence\Mapping\ClassMetadata;
<<<<<<< HEAD
=======
use Doctrine\Persistence\ObjectManager;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Interface for a wrapper of a managed object.
 *
<<<<<<< HEAD
 * @phpstan-template-covariant TClassMetadata of ClassMetadata
=======
 * @template-covariant TClassMetadata of ClassMetadata<TObject>
 * @template-covariant TObject        of object
 * @template-covariant TObjectManager of ObjectManager
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface WrapperInterface
{
    /**
     * Get the currently wrapped object.
     *
<<<<<<< HEAD
     * @return object
=======
     * @return TObject
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getObject();

    /**
     * Retrieves a property's value from the wrapped object.
     *
     * @param string $property
     *
     * @return mixed
     */
    public function getPropertyValue($property);

    /**
     * Sets a property's value on the wrapped object.
     *
     * @param string $property
     * @param mixed  $value
     *
     * @return $this
     */
    public function setPropertyValue($property, $value);

    /**
     * @deprecated since gedmo/doctrine-extensions 3.5 and to be removed in version 4.0.
     *
     * Populates the wrapped object with the given property values.
     *
     * @param array<string, mixed> $data
     *
     * @return $this
     */
    public function populate(array $data);

    /**
     * Checks if the identifier is valid.
     *
     * @return bool
     */
    public function hasValidIdentifier();

    /**
     * Get the object metadata.
     *
<<<<<<< HEAD
     * @return ClassMetadata
     *
     * @phpstan-return TClassMetadata
=======
     * @return TClassMetadata
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getMetadata();

    /**
     * Get the object identifier, single or composite.
     *
     * @param bool $single
     *
     * @return array<string, mixed>|mixed Array if a composite value, otherwise a single scalar
     *
     * @todo Uncomment the second parameter for 4.0
     */
    public function getIdentifier($single = true/* , bool $flatten = false */);

    /**
     * Get the root object class name.
     *
     * @return string
     *
     * @phpstan-return class-string
     */
    public function getRootObjectName();

    /**
     * Checks if an association is embedded.
     *
     * @param string $field
     *
     * @return bool
     */
    public function isEmbeddedAssociation($field);
}
