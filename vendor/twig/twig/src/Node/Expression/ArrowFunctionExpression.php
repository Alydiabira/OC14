<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression;

use Twig\Compiler;
<<<<<<< HEAD
=======
use Twig\Error\SyntaxError;
use Twig\Node\Expression\Variable\AssignContextVariable;
use Twig\Node\Expression\Variable\ContextVariable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\Node;

/**
 * Represents an arrow function.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ArrowFunctionExpression extends AbstractExpression
{
<<<<<<< HEAD
    public function __construct(AbstractExpression $expr, Node $names, $lineno, $tag = null)
    {
        parent::__construct(['expr' => $expr, 'names' => $names], [], $lineno, $tag);
=======
    public function __construct(AbstractExpression $expr, Node $names, $lineno)
    {
        if ($names instanceof ContextVariable) {
            $names = new ListExpression([new AssignContextVariable($names->getAttribute('name'), $names->getTemplateLine())], $lineno);
        }

        if (!$names instanceof ListExpression) {
            throw new SyntaxError('The arrow function argument must be a list of variables or a single variable.', $names->getTemplateLine(), $names->getSourceContext());
        }

        parent::__construct(['expr' => $expr, 'names' => $names], [], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $compiler
            ->addDebugInfo($this)
            ->raw('function (')
<<<<<<< HEAD
        ;
        foreach ($this->getNode('names') as $i => $name) {
            if ($i) {
                $compiler->raw(', ');
            }

            $compiler
                ->raw('$__')
                ->raw($name->getAttribute('name'))
                ->raw('__')
            ;
        }
        $compiler
=======
            ->subcompile($this->getNode('names'))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->raw(') use ($context, $macros) { ')
        ;
        foreach ($this->getNode('names') as $name) {
            $compiler
                ->raw('$context["')
                ->raw($name->getAttribute('name'))
                ->raw('"] = $__')
                ->raw($name->getAttribute('name'))
                ->raw('__; ')
            ;
        }
        $compiler
            ->raw('return ')
            ->subcompile($this->getNode('expr'))
            ->raw('; }')
        ;
    }
}
