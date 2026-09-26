<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tool\Wrapper;

<<<<<<< HEAD
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata as OdmClassMetadata;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata as OrmClassMetadata;
=======
use Doctrine\Deprecations\Deprecation;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ORM\EntityManagerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectManager;
use Gedmo\Exception\UnsupportedObjectManagerException;
use Gedmo\Tool\WrapperInterface;

/**
 * Wraps entity or proxy for more convenient
 * manipulation
 *
<<<<<<< HEAD
 * @phpstan-template TClassMetadata of ClassMetadata
 *
 * @phpstan-implements WrapperInterface<TClassMetadata>
=======
 * @template TClassMetadata of ClassMetadata<TObject>
 * @template TObject        of object
 * @template TObjectManager of ObjectManager
 *
 * @template-implements WrapperInterface<TClassMetadata, TObject, TObjectManager>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
abstract class AbstractWrapper implements WrapperInterface
{
    /**
     * Object metadata
     *
<<<<<<< HEAD
     * @var ClassMetadata&(OrmClassMetadata|OdmClassMetadata)
     *
     * @phpstan-var TClassMetadata
=======
     * @var TClassMetadata
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected $meta;

    /**
     * Wrapped object
     *
<<<<<<< HEAD
     * @var object
=======
     * @var TObject
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected $object;

    /**
     * Object manager instance
     *
<<<<<<< HEAD
     * @var ObjectManager
=======
     * @var TObjectManager
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected $om;

    /**
     * Wrap object factory method
     *
<<<<<<< HEAD
     * @param object $object
     *
     * @throws UnsupportedObjectManagerException
     *
     * @return WrapperInterface<ClassMetadata>
=======
     * @param TObject        $object
     * @param TObjectManager $om
     *
     * @psalm-param object        $object
     * @psalm-param ObjectManager $om
     *
     * @throws UnsupportedObjectManagerException
     *
     * @return WrapperInterface<TClassMetadata, TObject, TObjectManager>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public static function wrap($object, ObjectManager $om)
    {
        if ($om instanceof EntityManagerInterface) {
            return new EntityWrapper($object, $om);
        }
        if ($om instanceof DocumentManager) {
            return new MongoDocumentWrapper($object, $om);
        }

        throw new UnsupportedObjectManagerException('Given object manager is not managed by wrapper');
    }

    /**
     * @return void
     */
    public static function clear()
    {
<<<<<<< HEAD
        @trigger_error(sprintf(
            'Using "%s()" method is deprecated since gedmo/doctrine-extensions 3.5 and will be removed in version 4.0.',
            __METHOD__
        ), E_USER_DEPRECATED);
    }

=======
        Deprecation::trigger(
            'gedmo/doctrine-extensions',
            'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2410',
            'Using "%s()" method is deprecated since gedmo/doctrine-extensions 3.5 and will be removed in version 4.0.',
            __METHOD__
        );
    }

    /**
     * @return TObject
     */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getObject()
    {
        return $this->object;
    }

<<<<<<< HEAD
=======
    /**
     * @return TClassMetadata
     */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getMetadata()
    {
        return $this->meta;
    }

    public function populate(array $data)
    {
<<<<<<< HEAD
        @trigger_error(sprintf(
            'Using "%s()" method is deprecated since gedmo/doctrine-extensions 3.5 and will be removed in version 4.0.',
            __METHOD__
        ), E_USER_DEPRECATED);
=======
        Deprecation::trigger(
            'gedmo/doctrine-extensions',
            'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2410',
            'Using "%s()" method is deprecated since gedmo/doctrine-extensions 3.5 and will be removed in version 4.0.',
            __METHOD__
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        foreach ($data as $field => $value) {
            $this->setPropertyValue($field, $value);
        }

        return $this;
    }
}
