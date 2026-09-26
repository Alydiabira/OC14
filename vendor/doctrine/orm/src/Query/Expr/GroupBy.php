<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Expr;

/**
 * Expression class for building DQL Group By parts.
 *
 * @link    www.doctrine-project.org
 */
class GroupBy extends Base
{
    protected string $preSeparator  = '';
    protected string $postSeparator = '';

<<<<<<< HEAD
    /** @psalm-var list<string> */
    protected array $parts = [];

    /** @psalm-return list<string> */
=======
    /** @phpstan-var list<string> */
    protected array $parts = [];

    /** @phpstan-return list<string> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getParts(): array
    {
        return $this->parts;
    }
}
