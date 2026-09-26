<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression\Unary;

use Twig\Compiler;
<<<<<<< HEAD

class NotUnary extends AbstractUnary
{
=======
use Twig\Node\Expression\ReturnBoolInterface;
use Twig\Node\Expression\Test\TrueTest;
use Twig\Node\Node;

class NotUnary extends AbstractUnary implements ReturnBoolInterface
{
    public function __construct(Node $node, int $lineno)
    {
        parent::__construct(TrueTest::wrap($node), $lineno);
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function operator(Compiler $compiler): Compiler
    {
        return $compiler->raw('!');
    }
}
