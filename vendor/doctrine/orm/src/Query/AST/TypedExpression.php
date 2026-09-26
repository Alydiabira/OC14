<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

use Doctrine\DBAL\Types\Type;

/**
<<<<<<< HEAD
 * Provides an API for resolving the type of a Node
=======
 * Provides an API for resolving the type of a Node.
 *
 * @deprecated Implement {@see ExpressionWithReturnType} instead, which returns
 *             the type name as a string and avoids a static Type lookup.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
interface TypedExpression
{
    public function getReturnType(): Type;
}
