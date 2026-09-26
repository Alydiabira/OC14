<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression\Binary;

use Twig\Compiler;
<<<<<<< HEAD

class EndsWithBinary extends AbstractBinary
=======
use Twig\Node\Expression\ReturnBoolInterface;

class EndsWithBinary extends AbstractBinary implements ReturnBoolInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    public function compile(Compiler $compiler): void
    {
        $left = $compiler->getVarName();
        $right = $compiler->getVarName();
        $compiler
<<<<<<< HEAD
            ->raw(sprintf('(is_string($%s = ', $left))
            ->subcompile($this->getNode('left'))
            ->raw(sprintf(') && is_string($%s = ', $right))
            ->subcompile($this->getNode('right'))
            ->raw(sprintf(') && str_ends_with($%1$s, $%2$s))', $left, $right))
=======
            ->raw(\sprintf('(is_string($%s = ', $left))
            ->subcompile($this->getNode('left'))
            ->raw(\sprintf(') && is_string($%s = ', $right))
            ->subcompile($this->getNode('right'))
            ->raw(\sprintf(') && str_ends_with($%1$s, $%2$s))', $left, $right))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ;
    }

    public function operator(Compiler $compiler): Compiler
    {
        return $compiler->raw('');
    }
}
