<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Mapping\Driver;

use Doctrine\Common\Annotations\Reader;
<<<<<<< HEAD
=======
use Doctrine\Deprecations\Deprecation;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\Mapping\Driver\MappingDriver;

/**
 * This is an abstract class to implement common functionality
 * for extension annotation mapping drivers.
 *
 * @author Derek J. Lambert <dlambert@dereklambert.com>
 */
<<<<<<< HEAD
abstract class AbstractAnnotationDriver implements AnnotationDriverInterface
=======
abstract class AbstractAnnotationDriver implements AttributeDriverInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    /**
     * Annotation reader instance
     *
     * @var Reader|AttributeReader|object
     *
     * @todo Remove the support for the `object` type in the next major release.
     */
    protected $reader;

    /**
     * Original driver if it is available
     *
     * @var MappingDriver
     */
    protected $_originalDriver;

    /**
     * List of types which are valid for extension
     *
     * @var string[]
     */
    protected $validTypes = [];

<<<<<<< HEAD
    public function setAnnotationReader($reader)
    {
        if (!$reader instanceof Reader && !$reader instanceof AttributeReader) {
            trigger_deprecation(
                'gedmo/doctrine-extensions',
                '3.11',
                'Passing an object not implementing "%s" or "%s" as argument 1 to "%s()" is deprecated and'
                .' will throw an "%s" error in version 4.0. Instance of "%s" given.',
                Reader::class,
                AttributeReader::class,
                __METHOD__,
                \TypeError::class,
                get_class($reader)
=======
    /**
     * Set the annotation reader instance
     *
     * When originally implemented, `Doctrine\Common\Annotations\Reader` was not available,
     * therefore this method may accept any object implementing these methods from the interface:
     *
     *     getClassAnnotations([reflectionClass])
     *     getClassAnnotation([reflectionClass], [name])
     *     getPropertyAnnotations([reflectionProperty])
     *     getPropertyAnnotation([reflectionProperty], [name])
     *
     * @param Reader|AttributeReader|object $reader
     *
     * @return void
     *
     * @note Providing any object is deprecated, as of 4.0 an {@see AttributeReader} will be required
     */
    public function setAnnotationReader($reader)
    {
        if ($reader instanceof Reader) {
            Deprecation::trigger(
                'gedmo/doctrine-extensions',
                'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2772',
                'Annotations support is deprecated, migrate your application to use attributes and pass an instance of %s to the %s() method instead.',
                AttributeReader::class,
                __METHOD__
            );
        } elseif (!$reader instanceof AttributeReader) {
            Deprecation::trigger(
                'gedmo/doctrine-extensions',
                'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2558',
                'Providing an annotation reader which does not implement %s or is not an instance of %s to %s() is deprecated.',
                Reader::class,
                AttributeReader::class,
                __METHOD__
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            );
        }

        $this->reader = $reader;
    }

    /**
     * Passes in the mapping read by original driver
     *
     * @param MappingDriver $driver
     *
     * @return void
     */
    public function setOriginalDriver($driver)
    {
        $this->_originalDriver = $driver;
    }

    /**
<<<<<<< HEAD
     * @param ClassMetadata $meta
     *
     * @return \ReflectionClass
     *
     * @phpstan-return \ReflectionClass<object>
=======
     * @param ClassMetadata<object> $meta
     *
     * @return \ReflectionClass<covariant object>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getMetaReflectionClass($meta)
    {
        return $meta->getReflectionClass();
    }

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $config
=======
     * @param ClassMetadata<object> $meta
     * @param array<string, mixed>  $config
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return void
     */
    public function validateFullMetadata(ClassMetadata $meta, array $config)
    {
    }

    /**
     * Checks if $field type is valid
     *
<<<<<<< HEAD
     * @param ClassMetadata $meta
     * @param string        $field
=======
     * @param ClassMetadata<object> $meta
     * @param string                $field
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool
     */
    protected function isValidField($meta, $field)
    {
        $mapping = $meta->getFieldMapping($field);

<<<<<<< HEAD
        return $mapping && in_array($mapping['type'], $this->validTypes, true);
=======
        return $mapping && in_array($mapping->type ?? $mapping['type'], $this->validTypes, true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Try to find out related class name out of mapping
     *
<<<<<<< HEAD
     * @param ClassMetadata $metadata the mapped class metadata
     * @param string        $name     the related object class name
     *
     * @return string related class name or empty string if does not exist
     *
     * @phpstan-param class-string|string $name
     *
=======
     * @param ClassMetadata<object> $metadata the mapped class metadata
     * @param string                $name     the related object class name
     *
     * @phpstan-param class-string|string $name
     *
     * @return string related class name or empty string if does not exist
     *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @phpstan-return class-string|''
     */
    protected function getRelatedClassName($metadata, $name)
    {
        if (class_exists($name) || interface_exists($name)) {
            return $name;
        }
        $refl = $metadata->getReflectionClass();
        $ns = $refl->getNamespaceName();
        $className = $ns.'\\'.$name;

        return class_exists($className) ? $className : '';
    }
}
