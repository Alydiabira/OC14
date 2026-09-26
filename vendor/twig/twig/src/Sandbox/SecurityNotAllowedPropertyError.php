<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Sandbox;

/**
 * Exception thrown when a not allowed class property is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 */
final class SecurityNotAllowedPropertyError extends SecurityError
{
<<<<<<< HEAD
    private $className;
    private $propertyName;
=======
    private string $className;
    private string $propertyName;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(string $message, string $className, string $propertyName)
    {
        parent::__construct($message);
        $this->className = $className;
        $this->propertyName = $propertyName;
    }

    public function getClassName(): string
    {
        return $this->className;
    }

<<<<<<< HEAD
    public function getPropertyName()
=======
    public function getPropertyName(): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->propertyName;
    }
}
