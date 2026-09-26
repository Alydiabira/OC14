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

/**
 * Represents a block node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class BlockNode extends Node
{
<<<<<<< HEAD
    public function __construct(string $name, Node $body, int $lineno, ?string $tag = null)
    {
        parent::__construct(['body' => $body], ['name' => $name], $lineno, $tag);
=======
    public function __construct(string $name, Node $body, int $lineno)
    {
        parent::__construct(['body' => $body], ['name' => $name], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $compiler
            ->addDebugInfo($this)
<<<<<<< HEAD
            ->write(sprintf("public function block_%s(\$context, array \$blocks = [])\n", $this->getAttribute('name')), "{\n")
=======
            ->write("/**\n")
            ->write(" * @return iterable<null|scalar|\Stringable>\n")
            ->write(" */\n")
            ->write(\sprintf("public function block_%s(array \$context, array \$blocks = []): iterable\n", $this->getAttribute('name')), "{\n")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->indent()
            ->write("\$macros = \$this->macros;\n")
        ;

        $compiler
            ->subcompile($this->getNode('body'))
<<<<<<< HEAD
            ->write("return; yield '';\n") // needed when body doesn't yield anything
=======
            ->write("yield from [];\n")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->outdent()
            ->write("}\n\n")
        ;
    }
}
