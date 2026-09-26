<?php

declare(strict_types=1);

namespace Doctrine\SqlFormatter;

<<<<<<< HEAD
=======
use function assert;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function in_array;
use function str_contains;

final class Token
{
    // Constants for token types
    public const TOKEN_TYPE_WHITESPACE        = 0;
    public const TOKEN_TYPE_WORD              = 1;
    public const TOKEN_TYPE_QUOTE             = 2;
    public const TOKEN_TYPE_BACKTICK_QUOTE    = 3;
    public const TOKEN_TYPE_RESERVED          = 4;
    public const TOKEN_TYPE_RESERVED_TOPLEVEL = 5;
    public const TOKEN_TYPE_RESERVED_NEWLINE  = 6;
    public const TOKEN_TYPE_BOUNDARY          = 7;
    public const TOKEN_TYPE_COMMENT           = 8;
    public const TOKEN_TYPE_BLOCK_COMMENT     = 9;
    public const TOKEN_TYPE_NUMBER            = 10;
<<<<<<< HEAD
    public const TOKEN_TYPE_ERROR             = 11;
    public const TOKEN_TYPE_VARIABLE          = 12;

    // Constants for different components of a token
    public const TOKEN_TYPE  = 0;
    public const TOKEN_VALUE = 1;

=======
    public const TOKEN_TYPE_VARIABLE          = 11;

    /** @param self::TOKEN_TYPE_* $type */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        private readonly int $type,
        private readonly string $value,
    ) {
<<<<<<< HEAD
=======
        assert($value !== '');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function value(): string
    {
        return $this->value;
    }

<<<<<<< HEAD
=======
    /** @return self::TOKEN_TYPE_* */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function type(): int
    {
        return $this->type;
    }

<<<<<<< HEAD
=======
    /** @param self::TOKEN_TYPE_* ...$types */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function isOfType(int ...$types): bool
    {
        return in_array($this->type, $types, true);
    }

    public function hasExtraWhitespace(): bool
    {
        return str_contains($this->value(), ' ') ||
            str_contains($this->value(), "\n") ||
            str_contains($this->value(), "\t");
    }

    public function withValue(string $value): self
    {
        return new self($this->type(), $value);
    }
}
