<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Exception;

/**
 * Thrown when trying to inject a parameter into a constructor/method with an incompatible type.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Julien Maulny <jmaulny@darkmira.fr>
 */
class InvalidParameterTypeException extends InvalidArgumentException
{
    public function __construct(string $serviceId, string $type, \ReflectionParameter $parameter)
    {
        $acceptedType = $parameter->getType();
        $acceptedType = $acceptedType instanceof \ReflectionNamedType ? $acceptedType->getName() : (string) $acceptedType;
        $this->code = $type;

        $function = $parameter->getDeclaringFunction();
        $functionName = $function instanceof \ReflectionMethod
<<<<<<< HEAD
            ? sprintf('%s::%s', $function->getDeclaringClass()->getName(), $function->getName())
            : $function->getName();

        parent::__construct(sprintf('Invalid definition for service "%s": argument %d of "%s()" accepts "%s", "%s" passed.', $serviceId, 1 + $parameter->getPosition(), $functionName, $acceptedType, $type));
=======
            ? \sprintf('%s::%s', $function->getDeclaringClass()->getName(), $function->getName())
            : $function->getName();

        parent::__construct(\sprintf('Invalid definition for service "%s": argument %d of "%s()" accepts "%s", "%s" passed.', $serviceId, 1 + $parameter->getPosition(), $functionName, $acceptedType, $type));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
