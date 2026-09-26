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
 * Exception thrown when a not allowed filter is used in a template.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
final class SecurityNotAllowedFilterError extends SecurityError
{
<<<<<<< HEAD
    private $filterName;
=======
    private string $filterName;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(string $message, string $functionName)
    {
        parent::__construct($message);
        $this->filterName = $functionName;
    }

    public function getFilterName(): string
    {
        return $this->filterName;
    }
}
