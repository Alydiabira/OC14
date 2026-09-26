<?php

namespace DeepCopy\Filter;

use DeepCopy\Reflection\ReflectionHelper;

/**
 * @final
 */
class ReplaceFilter implements Filter
{
    /**
     * @var callable
     */
    protected $callback;

    /**
     * @param callable $callable Will be called to get the new value for each property to replace
     */
    public function __construct(callable $callable)
    {
        $this->callback = $callable;
    }

    /**
     * Replaces the object property by the result of the callback called with the object property.
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

        $value = call_user_func($this->callback, $reflectionProperty->getValue($object));

        $reflectionProperty->setValue($object, $value);
    }
}
