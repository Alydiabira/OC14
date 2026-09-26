<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Expr;

use Stringable;

use function implode;

/**
 * Expression class for generating DQL functions.
 *
 * @link    www.doctrine-project.org
 */
class Func implements Stringable
{
    /** @var mixed[] */
    protected array $arguments;

    /**
     * Creates a function, with the given argument.
     *
<<<<<<< HEAD
     * @psalm-param list<mixed>|mixed $arguments
=======
     * @phpstan-param list<mixed>|mixed $arguments
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(
        protected string $name,
        mixed $arguments,
    ) {
        $this->arguments = (array) $arguments;
    }

    public function getName(): string
    {
        return $this->name;
    }

<<<<<<< HEAD
    /** @psalm-return list<mixed> */
=======
    /** @phpstan-return list<mixed> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function __toString(): string
    {
        return $this->name . '(' . implode(', ', $this->arguments) . ')';
    }
}
