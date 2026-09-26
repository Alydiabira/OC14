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
<<<<<<< HEAD
=======
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\ReturnStringInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Represents a node that outputs an expression.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
<<<<<<< HEAD
class PrintNode extends Node implements NodeOutputInterface
{
    public function __construct(AbstractExpression $expr, int $lineno, ?string $tag = null)
    {
        parent::__construct(['expr' => $expr], [], $lineno, $tag);
=======
class PrintNode extends Node implements NodeOutputInterface, CoercesChildrenToStringInterface
{
    public function __construct(AbstractExpression $expr, int $lineno)
    {
        parent::__construct(['expr' => $expr], [], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
<<<<<<< HEAD
        $compiler->addDebugInfo($this);

        $compiler
            ->write('yield ')
            ->subcompile($this->getNode('expr'))
            ->raw(";\n")
        ;
    }
=======
        /** @var AbstractExpression */
        $expr = $this->getNode('expr');

        $compiler->addDebugInfo($this);

        if ($expr->isGenerator()) {
            $compiler->write('yield from ');
        } else {
            $compiler->write('yield ');
            if (!$this->isString($expr)) {
                $compiler->raw('(string) ');
            }
        }

        $compiler
            ->subcompile($expr)
            ->raw(";\n")
        ;
    }

    public function getStringCoercedChildNames(): array
    {
        return ['expr'];
    }

    private function isString(AbstractExpression $expr): bool
    {
        if ($expr instanceof ReturnStringInterface) {
            return true;
        }

        return $expr instanceof ConstantExpression && !$expr->isDefinedTestEnabled() && \is_string($expr->getAttribute('value'));
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
