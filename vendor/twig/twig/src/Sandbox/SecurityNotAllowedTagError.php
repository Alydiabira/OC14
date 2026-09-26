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
 * Exception thrown when a not allowed tag is used in a template.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
final class SecurityNotAllowedTagError extends SecurityError
{
<<<<<<< HEAD
    private $tagName;
=======
    private string $tagName;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(string $message, string $tagName)
    {
        parent::__construct($message);
        $this->tagName = $tagName;
    }

    public function getTagName(): string
    {
        return $this->tagName;
    }
}
