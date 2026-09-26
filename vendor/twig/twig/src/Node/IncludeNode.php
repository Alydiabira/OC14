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
use Twig\Node\Expression\AbstractExpression;

/**
 * Represents an include node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
<<<<<<< HEAD
class IncludeNode extends Node implements NodeOutputInterface
{
    public function __construct(AbstractExpression $expr, ?AbstractExpression $variables, bool $only, bool $ignoreMissing, int $lineno, ?string $tag = null)
=======
class IncludeNode extends Node implements NodeOutputInterface, CoercesChildrenToStringInterface
{
    public function __construct(AbstractExpression $expr, ?AbstractExpression $variables, bool $only, bool $ignoreMissing, int $lineno)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $nodes = ['expr' => $expr];
        if (null !== $variables) {
            $nodes['variables'] = $variables;
        }

<<<<<<< HEAD
        parent::__construct($nodes, ['only' => $only, 'ignore_missing' => $ignoreMissing], $lineno, $tag);
=======
        parent::__construct($nodes, ['only' => $only, 'ignore_missing' => $ignoreMissing], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $compiler->addDebugInfo($this);

        if ($this->getAttribute('ignore_missing')) {
            $template = $compiler->getVarName();

            $compiler
<<<<<<< HEAD
                ->write(sprintf("$%s = null;\n", $template))
                ->write("try {\n")
                ->indent()
                ->write(sprintf('$%s = ', $template))
            ;

            $this->addGetTemplate($compiler);
=======
                ->write("try {\n")
                ->indent()
                ->write(\sprintf('$%s = ', $template))
            ;

            $this->addGetTemplate($compiler, $template);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            $compiler
                ->raw(";\n")
                ->outdent()
                ->write("} catch (LoaderError \$e) {\n")
                ->indent()
                ->write("// ignore missing template\n")
<<<<<<< HEAD
                ->outdent()
                ->write("}\n")
                ->write(sprintf("if ($%s) {\n", $template))
                ->indent()
                ->write(sprintf('yield from $%s->unwrap()->yield(', $template))
            ;

=======
                ->write(\sprintf("\$$template = null;\n", $template))
                ->outdent()
                ->write("}\n")
                ->write(\sprintf("if ($%s) {\n", $template))
                ->indent()
            ;

            $compiler->write(\sprintf('yield from $%s->unwrap()->yield(', $template));

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $this->addTemplateArguments($compiler);
            $compiler
                ->raw(");\n")
                ->outdent()
                ->write("}\n")
            ;
        } else {
            $compiler->write('yield from ');
            $this->addGetTemplate($compiler);
            $compiler->raw('->unwrap()->yield(');
            $this->addTemplateArguments($compiler);
            $compiler->raw(");\n");
        }
    }

<<<<<<< HEAD
    protected function addGetTemplate(Compiler $compiler)
    {
        $compiler
            ->write('$this->loadTemplate(')
            ->subcompile($this->getNode('expr'))
            ->raw(', ')
            ->repr($this->getTemplateName())
            ->raw(', ')
=======
    /**
     * @return void
     */
    protected function addGetTemplate(Compiler $compiler/* , string $template = '' */)
    {
        $compiler
            ->raw('$this->load(')
            ->subcompile($this->getNode('expr'))
            ->raw(', ')
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->repr($this->getTemplateLine())
            ->raw(')')
        ;
    }

<<<<<<< HEAD
=======
    /**
     * @return void
     */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected function addTemplateArguments(Compiler $compiler)
    {
        if (!$this->hasNode('variables')) {
            $compiler->raw(false === $this->getAttribute('only') ? '$context' : '[]');
        } elseif (false === $this->getAttribute('only')) {
            $compiler
                ->raw('CoreExtension::merge($context, ')
                ->subcompile($this->getNode('variables'))
                ->raw(')')
            ;
        } else {
            $compiler->raw('CoreExtension::toArray(');
            $compiler->subcompile($this->getNode('variables'));
            $compiler->raw(')');
        }
    }
<<<<<<< HEAD
=======

    public function getStringCoercedChildNames(): array
    {
        // the loader resolves the template-name expression by coercing it to a string
        return ['expr'];
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
