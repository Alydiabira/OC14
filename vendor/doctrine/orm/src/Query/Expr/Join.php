<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Expr;

use Stringable;

use function strtoupper;

/**
 * Expression class for DQL join.
 *
 * @link    www.doctrine-project.org
 */
class Join implements Stringable
{
    final public const INNER_JOIN = 'INNER';
    final public const LEFT_JOIN  = 'LEFT';

    final public const ON   = 'ON';
    final public const WITH = 'WITH';

    /**
<<<<<<< HEAD
     * @psalm-param self::INNER_JOIN|self::LEFT_JOIN $joinType
     * @psalm-param self::ON|self::WITH|null $conditionType
=======
     * @phpstan-param self::INNER_JOIN|self::LEFT_JOIN $joinType
     * @phpstan-param self::ON|self::WITH|null $conditionType
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(
        protected string $joinType,
        protected string $join,
        protected string|null $alias = null,
        protected string|null $conditionType = null,
        protected string|Comparison|Composite|Func|null $condition = null,
        protected string|null $indexBy = null,
    ) {
    }

<<<<<<< HEAD
    /** @psalm-return self::INNER_JOIN|self::LEFT_JOIN */
=======
    /** @phpstan-return self::INNER_JOIN|self::LEFT_JOIN */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getJoinType(): string
    {
        return $this->joinType;
    }

    public function getJoin(): string
    {
        return $this->join;
    }

    public function getAlias(): string|null
    {
        return $this->alias;
    }

<<<<<<< HEAD
    /** @psalm-return self::ON|self::WITH|null */
=======
    /** @phpstan-return self::ON|self::WITH|null */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getConditionType(): string|null
    {
        return $this->conditionType;
    }

    public function getCondition(): string|Comparison|Composite|Func|null
    {
        return $this->condition;
    }

    public function getIndexBy(): string|null
    {
        return $this->indexBy;
    }

    public function __toString(): string
    {
        return strtoupper($this->joinType) . ' JOIN ' . $this->join
             . ($this->alias ? ' ' . $this->alias : '')
             . ($this->indexBy ? ' INDEX BY ' . $this->indexBy : '')
             . ($this->condition ? ' ' . strtoupper($this->conditionType) . ' ' . $this->condition : '');
    }
}
