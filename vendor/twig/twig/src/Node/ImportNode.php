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
use Twig\Node\Expression\AbstractExpression;
<<<<<<< HEAD
use Twig\Node\Expression\NameExpression;
=======
use Twig\Node\Expression\Variable\AssignTemplateVariable;
use Twig\Node\Expression\Variable\ContextVariable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Represents an import node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
<<<<<<< HEAD
class ImportNode extends Node
{
    public function __construct(AbstractExpression $expr, AbstractExpression $var, int $lineno, ?string $tag = null, bool $global = true)
    {
        parent::__construct(['expr' => $expr, 'var' => $var], ['global' => $global], $lineno, $tag);
=======
class ImportNode extends Node implements CoercesChildrenToStringInterface
{
    public function __construct(AbstractExpression $expr, AbstractExpression|AssignTemplateVariable $var, int $lineno)
    {
        if (\func_num_args() > 3) {
            trigger_deprecation('twig/twig', '3.15', \sprintf('Passing more than 3 arguments to "%s()" is deprecated.', __METHOD__));
        }

        if (!$var instanceof AssignTemplateVariable) {
            trigger_deprecation('twig/twig', '3.15', \sprintf('Passing a "%s" instance as the second argument of "%s" is deprecated, pass a "%s" instead.', $var::class, __CLASS__, AssignTemplateVariable::class));

            $var = new AssignTemplateVariable($var->getAttribute('name'), $lineno);
        }

        parent::__construct(['expr' => $expr, 'var' => $var], [], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
<<<<<<< HEAD
        $compiler
            ->addDebugInfo($this)
            ->write('$macros[')
            ->repr($this->getNode('var')->getAttribute('name'))
            ->raw('] = ')
        ;

        if ($this->getAttribute('global')) {
            $compiler
                ->raw('$this->macros[')
                ->repr($this->getNode('var')->getAttribute('name'))
                ->raw('] = ')
            ;
        }

        if ($this->getNode('expr') instanceof NameExpression && '_self' === $this->getNode('expr')->getAttribute('name')) {
            $compiler->raw('$this');
        } else {
            $compiler
                ->raw('$this->loadTemplate(')
                ->subcompile($this->getNode('expr'))
                ->raw(', ')
                ->repr($this->getTemplateName())
                ->raw(', ')
=======
        $compiler->subcompile($this->getNode('var'));

        if ($this->getNode('expr') instanceof ContextVariable && '_self' === $this->getNode('expr')->getAttribute('name')) {
            $compiler->raw('$this');
        } else {
            $compiler
                ->raw('$this->load(')
                ->subcompile($this->getNode('expr'))
                ->raw(', ')
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ->repr($this->getTemplateLine())
                ->raw(')->unwrap()')
            ;
        }

        $compiler->raw(";\n");
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
