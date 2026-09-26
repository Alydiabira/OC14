<?php

declare(strict_types=1);

namespace Doctrine\Common\Collections\Expr;

<<<<<<< HEAD
use RuntimeException;

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * An Expression visitor walks a graph of expressions and turns them into a
 * query for the underlying implementation.
 */
abstract class ExpressionVisitor
{
    /**
     * Converts a comparison expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkComparison(Comparison $comparison);

    /**
     * Converts a value expression into the target query language part.
     *
     * @return mixed
     */
    abstract public function walkValue(Value $value);

    /**
     * Converts a composite expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkCompositeExpression(CompositeExpression $expr);

    /**
     * Dispatches walking an expression to the appropriate handler.
     *
     * @return mixed
<<<<<<< HEAD
     *
     * @throws RuntimeException
     */
    public function dispatch(Expression $expr)
    {
        return match (true) {
            $expr instanceof Comparison => $this->walkComparison($expr),
            $expr instanceof Value => $this->walkValue($expr),
            $expr instanceof CompositeExpression => $this->walkCompositeExpression($expr),
            default => throw new RuntimeException('Unknown Expression ' . $expr::class),
        };
=======
     */
    public function dispatch(Expression $expr)
    {
        return $expr->visit($this);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
