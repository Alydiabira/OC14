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
 * This exception is thrown when a circular reference in a parameter is detected.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParameterCircularReferenceException extends RuntimeException
{
    private array $parameters;

    public function __construct(array $parameters, ?\Throwable $previous = null)
    {
<<<<<<< HEAD
        parent::__construct(sprintf('Circular reference detected for parameter "%s" ("%s" > "%s").', $parameters[0], implode('" > "', $parameters), $parameters[0]), 0, $previous);
=======
        parent::__construct(\sprintf('Circular reference detected for parameter "%s" ("%s" > "%s").', $parameters[0], implode('" > "', $parameters), $parameters[0]), 0, $previous);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $this->parameters = $parameters;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}
