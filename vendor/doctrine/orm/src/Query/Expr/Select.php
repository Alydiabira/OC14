<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Expr;

<<<<<<< HEAD
=======
use Stringable;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Expression class for building DQL select statements.
 *
 * @link    www.doctrine-project.org
 */
class Select extends Base
{
    protected string $preSeparator  = '';
    protected string $postSeparator = '';

<<<<<<< HEAD
    /** @var string[] */
    protected array $allowedClasses = [Func::class];

    /** @psalm-var list<string|Func> */
    protected array $parts = [];

    /** @psalm-return list<string|Func> */
=======
    /** @var list<class-string<Stringable>> */
    protected array $allowedClasses = [Func::class];

    /** @phpstan-var list<string|Func> */
    protected array $parts = [];

    /** @phpstan-return list<string|Func> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getParts(): array
    {
        return $this->parts;
    }
}
