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

namespace Twig\Node;

use Twig\Attribute\YieldReady;
use Twig\Compiler;
<<<<<<< HEAD
=======
use Twig\Node\Expression\Test\TrueTest;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Represents an if node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class IfNode extends Node
{
<<<<<<< HEAD
    public function __construct(Node $tests, ?Node $else, int $lineno, ?string $tag = null)
    {
=======
    public function __construct(Node $tests, ?Node $else, int $lineno)
    {
        for ($i = 0, $count = \count($tests); $i < $count; $i += 2) {
            $tests->setNode($i, TrueTest::wrap($tests->getNode((string) $i)));
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $nodes = ['tests' => $tests];
        if (null !== $else) {
            $nodes['else'] = $else;
        }

<<<<<<< HEAD
        parent::__construct($nodes, [], $lineno, $tag);
=======
        parent::__construct($nodes, [], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $compiler->addDebugInfo($this);
        for ($i = 0, $count = \count($this->getNode('tests')); $i < $count; $i += 2) {
            if ($i > 0) {
                $compiler
                    ->outdent()
                    ->write('} elseif (')
                ;
            } else {
                $compiler
                    ->write('if (')
                ;
            }

            $compiler
                ->subcompile($this->getNode('tests')->getNode((string) $i))
                ->raw(") {\n")
                ->indent()
            ;
            // The node might not exists if the content is empty
            if ($this->getNode('tests')->hasNode((string) ($i + 1))) {
                $compiler->subcompile($this->getNode('tests')->getNode((string) ($i + 1)));
            }
        }

        if ($this->hasNode('else')) {
            $compiler
                ->outdent()
                ->write("} else {\n")
                ->indent()
                ->subcompile($this->getNode('else'))
            ;
        }

        $compiler
            ->outdent()
            ->write("}\n");
    }
}
