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

/**
 * Checks if casting an expression to __toString() is allowed by the sandbox.
 *
 * For instance, when there is a simple Print statement, like {{ article }},
 * and if the sandbox is enabled, we need to check that the __toString()
 * method is allowed if 'article' is an object. The same goes for {{ article|upper }}
 * or {{ random(article) }}
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class CheckToStringNode extends AbstractExpression
{
<<<<<<< HEAD
    public function __construct(AbstractExpression $expr)
    {
        parent::__construct(['expr' => $expr], [], $expr->getTemplateLine(), $expr->getNodeTag());
=======
    public function __construct(AbstractExpression $expr, bool $spread = false)
    {
        parent::__construct(['expr' => $expr], ['spread' => $spread], $expr->getTemplateLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $expr = $this->getNode('expr');
<<<<<<< HEAD
        $compiler
            ->raw('$this->sandbox->ensureToStringAllowed(')
=======
        $method = $this->getAttribute('spread') ? 'ensureSpreadAllowed' : 'ensureToStringAllowed';
        $compiler
            ->raw('$this->sandbox->'.$method.'(')
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->subcompile($expr)
            ->raw(', ')
            ->repr($expr->getTemplateLine())
            ->raw(', $this->source)')
        ;
    }
}
