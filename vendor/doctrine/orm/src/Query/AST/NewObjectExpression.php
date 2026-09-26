<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

use Doctrine\ORM\Query\SqlWalker;

<<<<<<< HEAD
=======
use function func_get_arg;
use function func_num_args;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * NewObjectExpression ::= "NEW" IdentificationVariable "(" NewObjectArg {"," NewObjectArg}* ")"
 *
 * @link    www.doctrine-project.org
 */
class NewObjectExpression extends Node
{
<<<<<<< HEAD
    /** @param mixed[] $args */
=======
    /**
     * @param class-string $className
     * @param mixed[]      $args
     */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(public string $className, public array $args)
    {
    }

<<<<<<< HEAD
    public function dispatch(SqlWalker $walker): string
    {
        return $walker->walkNewObject($this);
=======
    public function dispatch(SqlWalker $walker /*, string|null $parentAlias = null */): string
    {
        $parentAlias = func_num_args() > 1 ? func_get_arg(1) : null;

        return $walker->walkNewObject($this, $parentAlias);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
