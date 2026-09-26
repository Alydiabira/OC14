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
 * Represents a nested "with" scope.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class WithNode extends Node
{
<<<<<<< HEAD
    public function __construct(Node $body, ?Node $variables, bool $only, int $lineno, ?string $tag = null)
=======
    public function __construct(Node $body, ?Node $variables, bool $only, int $lineno)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $nodes = ['body' => $body];
        if (null !== $variables) {
            $nodes['variables'] = $variables;
        }

<<<<<<< HEAD
        parent::__construct($nodes, ['only' => $only], $lineno, $tag);
=======
        parent::__construct($nodes, ['only' => $only], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $compiler->addDebugInfo($this);

        $parentContextName = $compiler->getVarName();

<<<<<<< HEAD
        $compiler->write(sprintf("\$%s = \$context;\n", $parentContextName));
=======
        $compiler->write(\sprintf("\$%s = \$context;\n", $parentContextName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if ($this->hasNode('variables')) {
            $node = $this->getNode('variables');
            $varsName = $compiler->getVarName();
            $compiler
<<<<<<< HEAD
                ->write(sprintf('$%s = ', $varsName))
                ->subcompile($node)
                ->raw(";\n")
                ->write(sprintf("if (!is_iterable(\$%s)) {\n", $varsName))
                ->indent()
                ->write("throw new RuntimeError('Variables passed to the \"with\" tag must be a hash.', ")
=======
                ->write(\sprintf('$%s = ', $varsName))
                ->subcompile($node)
                ->raw(";\n")
                ->write(\sprintf("if (!is_iterable(\$%s)) {\n", $varsName))
                ->indent()
                ->write("throw new RuntimeError('Variables passed to the \"with\" tag must be a mapping.', ")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ->repr($node->getTemplateLine())
                ->raw(", \$this->getSourceContext());\n")
                ->outdent()
                ->write("}\n")
<<<<<<< HEAD
                ->write(sprintf("\$%s = CoreExtension::toArray(\$%s);\n", $varsName, $varsName))
=======
                ->write(\sprintf("\$%s = CoreExtension::toArray(\$%s);\n", $varsName, $varsName))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ;

            if ($this->getAttribute('only')) {
                $compiler->write("\$context = [];\n");
            }

<<<<<<< HEAD
            $compiler->write(sprintf("\$context = \$this->env->mergeGlobals(array_merge(\$context, \$%s));\n", $varsName));
=======
            $compiler->write(\sprintf("\$context = \$%s + \$context + \$this->env->getGlobals();\n", $varsName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $compiler
            ->subcompile($this->getNode('body'))
<<<<<<< HEAD
            ->write(sprintf("\$context = \$%s;\n", $parentContextName))
=======
            ->write(\sprintf("\$context = \$%s;\n", $parentContextName))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ;
    }
}
