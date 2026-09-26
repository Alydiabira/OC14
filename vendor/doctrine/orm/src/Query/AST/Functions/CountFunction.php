<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST\Functions;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Query\AST\AggregateExpression;
<<<<<<< HEAD
=======
use Doctrine\ORM\Query\AST\ExpressionWithReturnType;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\Query\AST\TypedExpression;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;

/**
 * "COUNT" "(" ["DISTINCT"] StringPrimary ")"
<<<<<<< HEAD
 */
final class CountFunction extends FunctionNode implements TypedExpression
=======
 *
 * @phpstan-ignore class.implementsDeprecatedInterface
 */
final class CountFunction extends FunctionNode implements ExpressionWithReturnType, TypedExpression
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    private AggregateExpression $aggregateExpression;

    public function getSql(SqlWalker $sqlWalker): string
    {
        return $this->aggregateExpression->dispatch($sqlWalker);
    }

    public function parse(Parser $parser): void
    {
        $this->aggregateExpression = $parser->AggregateExpression();
    }

<<<<<<< HEAD
    public function getReturnType(): Type
    {
        return Type::getType(Types::INTEGER);
=======
    public function getReturnTypeName(): string
    {
        return Types::INTEGER;
    }

    /** @deprecated Use {@see getReturnTypeName()} instead. */
    public function getReturnType(): Type
    {
        return Type::getType($this->getReturnTypeName());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
