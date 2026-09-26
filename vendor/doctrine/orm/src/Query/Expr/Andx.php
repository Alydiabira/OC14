<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Expr;

<<<<<<< HEAD
=======
use Stringable;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Expression class for building DQL and parts.
 *
 * @link    www.doctrine-project.org
 */
class Andx extends Composite
{
    protected string $separator = ' AND ';

<<<<<<< HEAD
    /** @var string[] */
=======
    /** @var list<class-string<Stringable>> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected array $allowedClasses = [
        Comparison::class,
        Func::class,
        Orx::class,
        self::class,
    ];

<<<<<<< HEAD
    /** @psalm-var list<string|Comparison|Func|Orx|self> */
    protected array $parts = [];

    /** @psalm-return list<string|Comparison|Func|Orx|self> */
=======
    /** @phpstan-var list<string|Comparison|Func|Orx|self> */
    protected array $parts = [];

    /** @phpstan-return list<string|Comparison|Func|Orx|self> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getParts(): array
    {
        return $this->parts;
    }
}
