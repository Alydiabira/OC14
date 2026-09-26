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
 * Represents a node for which we need to capture the output.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class CaptureNode extends Node
{
<<<<<<< HEAD
    public function __construct(Node $body, int $lineno, ?string $tag = null)
    {
        parent::__construct(['body' => $body], ['raw' => false], $lineno, $tag);
=======
    public function __construct(Node $body, int $lineno)
    {
        parent::__construct(['body' => $body], ['raw' => false], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $useYield = $compiler->getEnvironment()->useYield();

        if (!$this->getAttribute('raw')) {
            $compiler->raw("('' === \$tmp = ");
        }
        $compiler
            ->raw($useYield ? "implode('', iterator_to_array(" : '\\Twig\\Extension\\CoreExtension::captureOutput(')
            ->raw("(function () use (&\$context, \$macros, \$blocks) {\n")
            ->indent()
            ->subcompile($this->getNode('body'))
<<<<<<< HEAD
            ->write("return; yield '';\n")
=======
            ->write("yield from [];\n")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->outdent()
            ->write('})()')
        ;
        if ($useYield) {
            $compiler->raw(', false))');
        } else {
            $compiler->raw(')');
        }
        if (!$this->getAttribute('raw')) {
            $compiler->raw(") ? '' : new Markup(\$tmp, \$this->env->getCharset());");
<<<<<<< HEAD
=======
        } else {
            $compiler->raw(';');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
