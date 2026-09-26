<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression\Test;

use Twig\Compiler;
use Twig\Node\Expression\TestExpression;

/**
<<<<<<< HEAD
 * Checks that a variable is null.
=======
 * Checks that an expression is null.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 *  {{ var is none }}
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class NullTest extends TestExpression
{
    public function compile(Compiler $compiler): void
    {
        $compiler
            ->raw('(null === ')
            ->subcompile($this->getNode('node'))
            ->raw(')')
        ;
    }
<<<<<<< HEAD
=======

    public function getStringCoercedChildNames(): array
    {
        // `=== null` is strict, no coercion
        return [];
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
