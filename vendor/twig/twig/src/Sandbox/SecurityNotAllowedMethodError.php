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
 * Exception thrown when a not allowed class method is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 */
final class SecurityNotAllowedMethodError extends SecurityError
{
<<<<<<< HEAD
    private $className;
    private $methodName;
=======
    private string $className;
    private string $methodName;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(string $message, string $className, string $methodName)
    {
        parent::__construct($message);
        $this->className = $className;
        $this->methodName = $methodName;
    }

    public function getClassName(): string
    {
        return $this->className;
    }

<<<<<<< HEAD
    public function getMethodName()
=======
    public function getMethodName(): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->methodName;
    }
}
