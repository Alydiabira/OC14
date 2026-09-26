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

namespace Twig\Node\Expression;

use Twig\Compiler;
<<<<<<< HEAD
=======
use Twig\Node\CoercesChildrenToStringInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\Node;

/**
 * Represents a block call node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
<<<<<<< HEAD
class BlockReferenceExpression extends AbstractExpression
{
    public function __construct(Node $name, ?Node $template, int $lineno, ?string $tag = null)
    {
=======
class BlockReferenceExpression extends AbstractExpression implements SupportDefinedTestInterface, CoercesChildrenToStringInterface
{
    use SupportDefinedTestDeprecationTrait;
    use SupportDefinedTestTrait;

    /**
     * @param AbstractExpression $name
     */
    public function __construct(Node $name, ?Node $template, int $lineno)
    {
        if (!$name instanceof AbstractExpression) {
            trigger_deprecation('twig/twig', '3.15', 'Not passing a "%s" instance to the "node" argument of "%s" is deprecated ("%s" given).', AbstractExpression::class, static::class, $name::class);
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $nodes = ['name' => $name];
        if (null !== $template) {
            $nodes['template'] = $template;
        }

<<<<<<< HEAD
        parent::__construct($nodes, ['is_defined_test' => false, 'output' => false], $lineno, $tag);
=======
        parent::__construct($nodes, ['output' => false], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
<<<<<<< HEAD
        if ($this->getAttribute('is_defined_test')) {
=======
        if ($this->definedTest) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $this->compileTemplateCall($compiler, 'hasBlock');
        } else {
            if ($this->getAttribute('output')) {
                $compiler->addDebugInfo($this);

                $compiler->write('yield from ');
                $this
                    ->compileTemplateCall($compiler, 'yieldBlock')
                    ->raw(";\n");
            } else {
                $this->compileTemplateCall($compiler, 'renderBlock');
            }
        }
    }

<<<<<<< HEAD
=======
    public function getStringCoercedChildNames(): array
    {
        // the template expression is resolved through the loader, which coerces it to a string
        return $this->hasNode('template') ? ['template'] : [];
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private function compileTemplateCall(Compiler $compiler, string $method): Compiler
    {
        if (!$this->hasNode('template')) {
            $compiler->write('$this');
        } else {
            $compiler
<<<<<<< HEAD
                ->write('$this->loadTemplate(')
                ->subcompile($this->getNode('template'))
                ->raw(', ')
                ->repr($this->getTemplateName())
                ->raw(', ')
=======
                ->write('$this->load(')
                ->subcompile($this->getNode('template'))
                ->raw(', ')
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ->repr($this->getTemplateLine())
                ->raw(')')
            ;
        }

<<<<<<< HEAD
        $compiler->raw(sprintf('->unwrap()->%s', $method));
=======
        $compiler->raw(\sprintf('->unwrap()->%s', $method));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this->compileBlockArguments($compiler);
    }

    private function compileBlockArguments(Compiler $compiler): Compiler
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('name'))
            ->raw(', $context');

        if (!$this->hasNode('template')) {
            $compiler->raw(', $blocks');
        }

        return $compiler->raw(')');
    }
}
