<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Expr;

<<<<<<< HEAD
use Stringable;

use function count;
=======
use Doctrine\Deprecations\Deprecation;
use SortDirection;
use Stringable;

use function count;
use function func_num_args;
use function get_debug_type;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function implode;

/**
 * Expression class for building DQL Order By parts.
 *
 * @link    www.doctrine-project.org
 */
class OrderBy implements Stringable
{
    protected string $preSeparator  = '';
    protected string $separator     = ', ';
    protected string $postSeparator = '';

    /** @var string[] */
    protected array $allowedClasses = [];

<<<<<<< HEAD
    /** @psalm-var list<string> */
=======
    /** @phpstan-var list<string> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected array $parts = [];

    public function __construct(
        string|null $sort = null,
<<<<<<< HEAD
        string|null $order = null,
    ) {
=======
        SortDirection|string|null $order = SortDirection::Ascending,
    ) {
        if (! $order instanceof SortDirection) {
            Deprecation::trigger(
                'doctrine/orm',
                'https://github.com/doctrine/orm/issues/11313',
                'Passing %s as $order to %s is deprecated, use an instance of SortDirection instead.',
                get_debug_type($order),
                __METHOD__,
            );
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if ($sort) {
            $this->add($sort, $order);
        }
    }

<<<<<<< HEAD
    public function add(string $sort, string|null $order = null): void
    {
=======
    public function add(string $sort, SortDirection|string|null $order = null): void
    {
        if (! $order instanceof SortDirection && func_num_args() > 1) {
            Deprecation::trigger(
                'doctrine/orm',
                'https://github.com/doctrine/orm/issues/11313',
                'Passing %s as $order to %s is deprecated, use an instance of SortDirection instead.',
                get_debug_type($order),
                __METHOD__,
            );
        }

        if ($order instanceof SortDirection) {
            $order = match ($order) {
                SortDirection::Ascending => 'ASC',
                SortDirection::Descending => 'DESC',
            };
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $order         = ! $order ? 'ASC' : $order;
        $this->parts[] = $sort . ' ' . $order;
    }

<<<<<<< HEAD
    /** @psalm-return 0|positive-int */
=======
    /** @phpstan-return 0|positive-int */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function count(): int
    {
        return count($this->parts);
    }

<<<<<<< HEAD
    /** @psalm-return list<string> */
=======
    /** @phpstan-return list<string> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getParts(): array
    {
        return $this->parts;
    }

    public function __toString(): string
    {
        return $this->preSeparator . implode($this->separator, $this->parts) . $this->postSeparator;
    }
}
