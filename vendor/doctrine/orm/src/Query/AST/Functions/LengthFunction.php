<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST\Functions;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
<<<<<<< HEAD
=======
use Doctrine\ORM\Query\AST\ExpressionWithReturnType;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\AST\TypedExpression;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\TokenType;

/**
 * "LENGTH" "(" StringPrimary ")"
 *
 * @link    www.doctrine-project.org
<<<<<<< HEAD
 */
class LengthFunction extends FunctionNode implements TypedExpression
=======
 *
 * @phpstan-ignore class.implementsDeprecatedInterface
 */
class LengthFunction extends FunctionNode implements ExpressionWithReturnType, TypedExpression
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    public Node $stringPrimary;

    public function getSql(SqlWalker $sqlWalker): string
    {
        return $sqlWalker->getConnection()->getDatabasePlatform()->getLengthExpression(
            $sqlWalker->walkSimpleArithmeticExpression($this->stringPrimary),
        );
    }

    public function parse(Parser $parser): void
    {
        $parser->match(TokenType::T_IDENTIFIER);
        $parser->match(TokenType::T_OPEN_PARENTHESIS);

        $this->stringPrimary = $parser->StringPrimary();

        $parser->match(TokenType::T_CLOSE_PARENTHESIS);
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
