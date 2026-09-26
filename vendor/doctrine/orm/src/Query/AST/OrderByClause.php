<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

use Doctrine\ORM\Query\SqlWalker;

/**
 * OrderByClause ::= "ORDER" "BY" OrderByItem {"," OrderByItem}*
 *
 * @link    www.doctrine-project.org
 */
class OrderByClause extends Node
{
    /** @param OrderByItem[] $orderByItems */
<<<<<<< HEAD
    public function __construct(public array $orderByItems)
    {
=======
    public function __construct(
        public array $orderByItems,
        public bool $includeCollectionOrderByItems = true,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function dispatch(SqlWalker $walker): string
    {
        return $walker->walkOrderByClause($this);
    }
}
