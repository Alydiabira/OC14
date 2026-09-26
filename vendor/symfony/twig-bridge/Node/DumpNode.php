<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Twig\Node;

<<<<<<< HEAD
use Twig\Attribute\YieldReady;
use Twig\Compiler;
=======
use Twig\Attribute\FirstClassTwigCallableReady;
use Twig\Attribute\YieldReady;
use Twig\Compiler;
use Twig\Node\Expression\Variable\LocalVariable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\Node;

/**
 * @author Julien Galenski <julien.galenski@gmail.com>
 */
#[YieldReady]
final class DumpNode extends Node
{
<<<<<<< HEAD
    private string $varPrefix;

    public function __construct(string $varPrefix, ?Node $values, int $lineno, ?string $tag = null)
=======
    private LocalVariable|string $varPrefix;

    public function __construct(LocalVariable|string $varPrefix, ?Node $values, int $lineno, ?string $tag = null)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $nodes = [];
        if (null !== $values) {
            $nodes['values'] = $values;
        }

<<<<<<< HEAD
        parent::__construct($nodes, [], $lineno, $tag);
=======
        if (class_exists(FirstClassTwigCallableReady::class)) {
            parent::__construct($nodes, [], $lineno);
        } else {
            parent::__construct($nodes, [], $lineno, $tag);
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->varPrefix = $varPrefix;
    }

    public function compile(Compiler $compiler): void
    {
<<<<<<< HEAD
=======
        if ($this->varPrefix instanceof LocalVariable) {
            $varPrefix = $this->varPrefix->getAttribute('name');
        } else {
            $varPrefix = $this->varPrefix;
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $compiler
            ->write("if (\$this->env->isDebug()) {\n")
            ->indent();

        if (!$this->hasNode('values')) {
            // remove embedded templates (macros) from the context
            $compiler
<<<<<<< HEAD
                ->write(sprintf('$%svars = [];'."\n", $this->varPrefix))
                ->write(sprintf('foreach ($context as $%1$skey => $%1$sval) {'."\n", $this->varPrefix))
                ->indent()
                ->write(sprintf('if (!$%sval instanceof \Twig\Template) {'."\n", $this->varPrefix))
                ->indent()
                ->write(sprintf('$%1$svars[$%1$skey] = $%1$sval;'."\n", $this->varPrefix))
=======
                ->write(\sprintf('$%svars = [];'."\n", $varPrefix))
                ->write(\sprintf('foreach ($context as $%1$skey => $%1$sval) {'."\n", $varPrefix))
                ->indent()
                ->write(\sprintf('if (!$%sval instanceof \Twig\Template) {'."\n", $varPrefix))
                ->indent()
                ->write(\sprintf('$%1$svars[$%1$skey] = $%1$sval;'."\n", $varPrefix))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ->outdent()
                ->write("}\n")
                ->outdent()
                ->write("}\n")
                ->addDebugInfo($this)
<<<<<<< HEAD
                ->write(sprintf('\Symfony\Component\VarDumper\VarDumper::dump($%svars);'."\n", $this->varPrefix));
=======
                ->write(\sprintf('\Symfony\Component\VarDumper\VarDumper::dump($%svars);'."\n", $varPrefix));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        } elseif (($values = $this->getNode('values')) && 1 === $values->count()) {
            $compiler
                ->addDebugInfo($this)
                ->write('\Symfony\Component\VarDumper\VarDumper::dump(')
                ->subcompile($values->getNode(0))
                ->raw(");\n");
        } else {
            $compiler
                ->addDebugInfo($this)
                ->write('\Symfony\Component\VarDumper\VarDumper::dump(['."\n")
                ->indent();
            foreach ($values as $node) {
                $compiler->write('');
                if ($node->hasAttribute('name')) {
                    $compiler
                        ->string($node->getAttribute('name'))
                        ->raw(' => ');
                }
                $compiler
                    ->subcompile($node)
                    ->raw(",\n");
            }
            $compiler
                ->outdent()
                ->write("]);\n");
        }

        $compiler
            ->outdent()
            ->write("}\n");
    }
}
