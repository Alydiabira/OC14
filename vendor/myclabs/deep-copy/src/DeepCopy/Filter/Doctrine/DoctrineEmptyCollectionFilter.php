<?php

namespace DeepCopy\Filter\Doctrine;

use DeepCopy\Filter\Filter;
use DeepCopy\Reflection\ReflectionHelper;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @final
 */
class DoctrineEmptyCollectionFilter implements Filter
{
    /**
     * Sets the object property to an empty doctrine collection.
     *
     * @param object   $object
     * @param string   $property
     * @param callable $objectCopier
     */
    public function apply($object, $property, $objectCopier)
    {
        $reflectionProperty = ReflectionHelper::getProperty($object, $property);
<<<<<<< HEAD
        $reflectionProperty->setAccessible(true);
=======
        if (PHP_VERSION_ID < 80100) {
            $reflectionProperty->setAccessible(true);
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $reflectionProperty->setValue($object, new ArrayCollection());
    }
} 