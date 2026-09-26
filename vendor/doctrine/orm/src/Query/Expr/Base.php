<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Expr;

use InvalidArgumentException;
use Stringable;

use function array_key_exists;
use function count;
use function get_debug_type;
use function implode;
use function in_array;
use function is_array;
<<<<<<< HEAD
=======
use function is_object;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function is_string;
use function sprintf;

/**
 * Abstract base Expr class for building DQL parts.
 *
 * @link    www.doctrine-project.org
 */
abstract class Base implements Stringable
{
    protected string $preSeparator  = '(';
    protected string $separator     = ', ';
    protected string $postSeparator = ')';

<<<<<<< HEAD
    /** @var list<class-string> */
=======
    /** @var list<class-string<Stringable>> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected array $allowedClasses = [];

    /** @var list<string|Stringable> */
    protected array $parts = [];

    public function __construct(mixed $args = [])
    {
        if (is_array($args) && array_key_exists(0, $args) && is_array($args[0])) {
            $args = $args[0];
        }

        $this->addMultiple($args);
    }

    /**
     * @param string[]|object[]|string|object $args
<<<<<<< HEAD
     * @psalm-param list<string|object>|string|object $args
=======
     * @phpstan-param list<string|object>|string|object $args
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return $this
     */
    public function addMultiple(array|string|object $args = []): static
    {
        foreach ((array) $args as $arg) {
            $this->add($arg);
        }

        return $this;
    }

    /**
<<<<<<< HEAD
=======
     * @param string|Stringable|null $arg
     *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return $this
     *
     * @throws InvalidArgumentException
     */
    public function add(mixed $arg): static
    {
        if ($arg !== null && (! $arg instanceof self || $arg->count() > 0)) {
            // If we decide to keep Expr\Base instances, we can use this check
<<<<<<< HEAD
            if (! is_string($arg) && ! in_array($arg::class, $this->allowedClasses, true)) {
=======
            // @phpstan-ignore function.alreadyNarrowedType (input validation)
            if (! is_string($arg) && ! (is_object($arg) && in_array($arg::class, $this->allowedClasses, true))) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                throw new InvalidArgumentException(sprintf(
                    "Expression of type '%s' not allowed in this context.",
                    get_debug_type($arg),
                ));
            }

            $this->parts[] = $arg;
        }

        return $this;
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

    public function __toString(): string
    {
        if ($this->count() === 1) {
            return (string) $this->parts[0];
        }

        return $this->preSeparator . implode($this->separator, $this->parts) . $this->postSeparator;
    }
}
