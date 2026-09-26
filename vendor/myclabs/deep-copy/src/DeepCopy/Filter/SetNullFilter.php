<?php

namespace DeepCopy\Filter;

use DeepCopy\Reflection\ReflectionHelper;

/**
 * @final
 */
class SetNullFilter implements Filter
{
    /**
     * Sets the object property to null.
     *
     * {@inheritdoc}
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
        $reflectionProperty->setValue($object, null);
    }
}
