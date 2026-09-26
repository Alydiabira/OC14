<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Expr;

<<<<<<< HEAD
=======
use Stringable;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Expression class for building DQL OR clauses.
 *
 * @link    www.doctrine-project.org
 */
class Orx extends Composite
{
    protected string $separator = ' OR ';

<<<<<<< HEAD
    /** @var string[] */
=======
    /** @var list<class-string<Stringable>> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected array $allowedClasses = [
        Comparison::class,
        Func::class,
        Andx::class,
        self::class,
    ];

<<<<<<< HEAD
    /** @psalm-var list<string|Comparison|Func|Andx|self> */
    protected array $parts = [];

    /** @psalm-return list<string|Comparison|Func|Andx|self> */
=======
    /** @phpstan-var list<string|Comparison|Func|Andx|self> */
    protected array $parts = [];

    /** @phpstan-return list<string|Comparison|Func|Andx|self> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getParts(): array
    {
        return $this->parts;
    }
}
