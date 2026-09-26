<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

use Doctrine\ORM\Query\SqlWalker;

class Literal extends Node
{
    final public const STRING  = 1;
    final public const BOOLEAN = 2;
    final public const NUMERIC = 3;
<<<<<<< HEAD

    /** @psalm-param self::* $type */
=======
    final public const NULL    = 4;

    /** @phpstan-param self::* $type */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        public int $type,
        public mixed $value,
    ) {
    }

    public function dispatch(SqlWalker $walker): string
    {
        return $walker->walkLiteral($this);
    }
}
