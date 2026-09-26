<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node;

use Twig\Attribute\YieldReady;
use Twig\Compiler;

/**
 * Represents a flush node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class FlushNode extends Node
{
<<<<<<< HEAD
    public function __construct(int $lineno, string $tag)
    {
        parent::__construct([], [], $lineno, $tag);
=======
    public function __construct(int $lineno)
    {
        parent::__construct([], [], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
<<<<<<< HEAD
        $compiler
            ->addDebugInfo($this)
            ->write("flush();\n")
        ;
=======
        $compiler->addDebugInfo($this);

        if ($compiler->getEnvironment()->useYield()) {
            $compiler->write("yield '';\n");
        }

        $compiler->write("flush();\n");
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
