<?php

declare(strict_types=1);

namespace Doctrine\Common\Collections\Expr;

<<<<<<< HEAD
=======
/** @final since 2.5 */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
class Value implements Expression
{
    public function __construct(private readonly mixed $value)
    {
    }

    /** @return mixed */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function visit(ExpressionVisitor $visitor)
    {
        return $visitor->walkValue($this);
    }
}
