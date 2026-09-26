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
 * Internal node used by the for node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class ForLoopNode extends Node
{
<<<<<<< HEAD
    public function __construct(int $lineno, ?string $tag = null)
    {
        parent::__construct([], ['with_loop' => false, 'ifexpr' => false, 'else' => false], $lineno, $tag);
=======
    public function __construct(int $lineno)
    {
        parent::__construct([], ['with_loop' => false, 'ifexpr' => false, 'else' => false], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        if ($this->getAttribute('else')) {
            $compiler->write("\$context['_iterated'] = true;\n");
        }

        if ($this->getAttribute('with_loop')) {
            $compiler
                ->write("++\$context['loop']['index0'];\n")
                ->write("++\$context['loop']['index'];\n")
                ->write("\$context['loop']['first'] = false;\n")
<<<<<<< HEAD
                ->write("if (isset(\$context['loop']['length'])) {\n")
=======
                ->write("if (isset(\$context['loop']['revindex0'], \$context['loop']['revindex'])) {\n")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ->indent()
                ->write("--\$context['loop']['revindex0'];\n")
                ->write("--\$context['loop']['revindex'];\n")
                ->write("\$context['loop']['last'] = 0 === \$context['loop']['revindex0'];\n")
                ->outdent()
                ->write("}\n")
            ;
        }
    }
}
