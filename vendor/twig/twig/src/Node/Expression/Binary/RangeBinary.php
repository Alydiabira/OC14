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

class RangeBinary extends AbstractBinary
=======
use Twig\Node\CoercesChildrenToStringInterface;
use Twig\Node\Expression\ReturnArrayInterface;

class RangeBinary extends AbstractBinary implements ReturnArrayInterface, CoercesChildrenToStringInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    public function compile(Compiler $compiler): void
    {
        $compiler
            ->raw('range(')
            ->subcompile($this->getNode('left'))
            ->raw(', ')
            ->subcompile($this->getNode('right'))
            ->raw(')')
        ;
    }

    public function operator(Compiler $compiler): Compiler
    {
        return $compiler->raw('..');
    }
<<<<<<< HEAD
=======

    public function getStringCoercedChildNames(): array
    {
        return ['left', 'right'];
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
