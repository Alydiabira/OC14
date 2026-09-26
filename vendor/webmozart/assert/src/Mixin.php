<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Webmozart\Assert;

use ArrayAccess;
use Closure;
use Countable;
use Throwable;

/**
<<<<<<< HEAD
 * This trait provides nurllOr*, all* and allNullOr* variants of assertion base methods.
=======
 * This trait provides nullOr*, all* and allNullOr* variants of assertion base methods.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * Do not use this trait directly: it will change, and is not designed for reuse.
 */
trait Mixin
{
    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert string|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrString($value, $message = '')
    {
        null === $value || static::string($value, $message);
=======
     *
     * @psalm-assert string|null $value
     *
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrString(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::string($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allString($value, $message = '')
=======
     *
     * @psalm-assert iterable<string> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allString(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::string($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<string|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrString($value, $message = '')
=======
     *
     * @psalm-assert iterable<string|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrString(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::string($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert non-empty-string|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrStringNotEmpty($value, $message = '')
    {
        null === $value || static::stringNotEmpty($value, $message);
=======
     *
     * @psalm-assert non-empty-string|null $value
     *
     * @param string|callable():string $message
     *
     * @return non-empty-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrStringNotEmpty(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::stringNotEmpty($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<non-empty-string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allStringNotEmpty($value, $message = '')
=======
     *
     * @psalm-assert iterable<non-empty-string> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<non-empty-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allStringNotEmpty(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::stringNotEmpty($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<non-empty-string|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrStringNotEmpty($value, $message = '')
=======
     *
     * @psalm-assert iterable<non-empty-string|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<non-empty-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrStringNotEmpty(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::stringNotEmpty($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert int|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrInteger($value, $message = '')
    {
        null === $value || static::integer($value, $message);
=======
     *
     * @psalm-assert int|null $value
     *
     * @param string|callable():string $message
     *
     * @return int|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrInteger(mixed $value, callable|string $message = ''): ?int
    {
        null === $value || static::integer($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<int> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allInteger($value, $message = '')
=======
     *
     * @psalm-assert iterable<int> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<int>
     *
     * @throws InvalidArgumentException
     */
    public static function allInteger(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::integer($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<int|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrInteger($value, $message = '')
=======
     *
     * @psalm-assert iterable<int|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrInteger(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::integer($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert numeric|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIntegerish($value, $message = '')
    {
        null === $value || static::integerish($value, $message);
=======
     *
     * @psalm-assert numeric|null $value
     *
     * @param string|callable():string $message
     *
     * @return numeric|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIntegerish(mixed $value, callable|string $message = ''): string|int|float|null
    {
        null === $value || static::integerish($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<numeric> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIntegerish($value, $message = '')
=======
     *
     * @psalm-assert iterable<numeric> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<numeric>
     *
     * @throws InvalidArgumentException
     */
    public static function allIntegerish(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::integerish($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<numeric|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIntegerish($value, $message = '')
=======
     *
     * @psalm-assert iterable<numeric|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<numeric|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIntegerish(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::integerish($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert positive-int|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrPositiveInteger($value, $message = '')
    {
        null === $value || static::positiveInteger($value, $message);
=======
     *
     * @psalm-assert positive-int|null $value
     *
     * @param string|callable():string $message
     *
     * @return positive-int|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrPositiveInteger(mixed $value, callable|string $message = ''): ?int
    {
        null === $value || static::positiveInteger($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<positive-int> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allPositiveInteger($value, $message = '')
=======
     *
     * @psalm-assert iterable<positive-int> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<positive-int>
     *
     * @throws InvalidArgumentException
     */
    public static function allPositiveInteger(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::positiveInteger($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<positive-int|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrPositiveInteger($value, $message = '')
=======
     *
     * @psalm-assert iterable<positive-int|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<positive-int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrPositiveInteger(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::positiveInteger($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert float|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrFloat($value, $message = '')
    {
        null === $value || static::float($value, $message);
=======
     *
     * @psalm-assert non-negative-int|null $value
     *
     * @param string|callable():string $message
     *
     * @return non-negative-int|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotNegativeInteger(mixed $value, callable|string $message = ''): ?int
    {
        null === $value || static::notNegativeInteger($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-negative-int> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<non-negative-int>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotNegativeInteger(mixed $value, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notNegativeInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-negative-int|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<non-negative-int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotNegativeInteger(mixed $value, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notNegativeInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert negative-int|null $value
     *
     * @param string|callable():string $message
     *
     * @return negative-int|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNegativeInteger(mixed $value, callable|string $message = ''): ?int
    {
        null === $value || static::negativeInteger($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<negative-int> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<negative-int>
     *
     * @throws InvalidArgumentException
     */
    public static function allNegativeInteger(mixed $value, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::negativeInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<negative-int|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<negative-int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNegativeInteger(mixed $value, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::negativeInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert float|null $value
     *
     * @param string|callable():string $message
     *
     * @return float|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrFloat(mixed $value, callable|string $message = ''): ?float
    {
        null === $value || static::float($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<float> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allFloat($value, $message = '')
=======
     *
     * @psalm-assert iterable<float> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<float>
     *
     * @throws InvalidArgumentException
     */
    public static function allFloat(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::float($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<float|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrFloat($value, $message = '')
=======
     *
     * @psalm-assert iterable<float|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<float|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrFloat(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::float($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert numeric|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNumeric($value, $message = '')
    {
        null === $value || static::numeric($value, $message);
=======
     *
     * @psalm-assert numeric|null $value
     *
     * @param string|callable():string $message
     *
     * @return numeric|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNumeric(mixed $value, callable|string $message = ''): string|int|float|null
    {
        null === $value || static::numeric($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<numeric> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNumeric($value, $message = '')
=======
     *
     * @psalm-assert iterable<numeric> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<numeric>
     *
     * @throws InvalidArgumentException
     */
    public static function allNumeric(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::numeric($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<numeric|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNumeric($value, $message = '')
=======
     *
     * @psalm-assert iterable<numeric|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<numeric|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNumeric(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::numeric($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert positive-int|0|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNatural($value, $message = '')
    {
        null === $value || static::natural($value, $message);
=======
     *
     * @psalm-assert positive-int|0|null $value
     *
     * @param string|callable():string $message
     *
     * @return positive-int|0|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNatural(mixed $value, callable|string $message = ''): ?int
    {
        null === $value || static::natural($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<positive-int|0> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNatural($value, $message = '')
=======
     *
     * @psalm-assert iterable<positive-int|0> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<positive-int|0>
     *
     * @throws InvalidArgumentException
     */
    public static function allNatural(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::natural($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<positive-int|0|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNatural($value, $message = '')
=======
     *
     * @psalm-assert iterable<positive-int|0|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<positive-int|0|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNatural(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::natural($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert bool|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrBoolean($value, $message = '')
    {
        null === $value || static::boolean($value, $message);
=======
     *
     * @psalm-assert bool|null $value
     *
     * @param string|callable():string $message
     *
     * @return bool|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrBoolean(mixed $value, callable|string $message = ''): ?bool
    {
        null === $value || static::boolean($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<bool> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allBoolean($value, $message = '')
=======
     *
     * @psalm-assert iterable<bool> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<bool>
     *
     * @throws InvalidArgumentException
     */
    public static function allBoolean(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::boolean($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<bool|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrBoolean($value, $message = '')
=======
     *
     * @psalm-assert iterable<bool|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<bool|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrBoolean(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::boolean($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert scalar|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrScalar($value, $message = '')
    {
        null === $value || static::scalar($value, $message);
=======
     *
     * @psalm-assert scalar|null $value
     *
     * @param string|callable():string $message
     *
     * @return scalar|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrScalar(mixed $value, callable|string $message = ''): string|int|float|bool|null
    {
        null === $value || static::scalar($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<scalar> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allScalar($value, $message = '')
=======
     *
     * @psalm-assert iterable<scalar> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<scalar>
     *
     * @throws InvalidArgumentException
     */
    public static function allScalar(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::scalar($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<scalar|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrScalar($value, $message = '')
=======
     *
     * @psalm-assert iterable<scalar|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<scalar|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrScalar(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::scalar($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert object|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrObject($value, $message = '')
    {
        null === $value || static::object($value, $message);
=======
     *
     * @psalm-assert object|null $value
     *
     * @param string|callable():string $message
     *
     * @return object|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrObject(mixed $value, callable|string $message = ''): ?object
    {
        null === $value || static::object($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<object> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allObject($value, $message = '')
=======
     *
     * @psalm-assert iterable<object> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<object>
     *
     * @throws InvalidArgumentException
     */
    public static function allObject(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::object($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<object|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrObject($value, $message = '')
=======
     *
     * @psalm-assert iterable<object|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<object|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrObject(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::object($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert resource|null $value
     *
     * @param mixed       $value
     * @param string|null $type    type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrResource($value, $type = null, $message = '')
    {
        null === $value || static::resource($value, $type, $message);
=======
     *
     * @psalm-assert object|class-string|null $value
     *
     * @param string|callable():string $message
     *
     * @return object|class-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrObjectish(mixed $value, callable|string $message = ''): object|string|null
    {
        null === $value || static::objectish($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object|class-string> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<object|class-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allObjectish(mixed $value, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::objectish($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object|class-string|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<object|class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrObjectish(mixed $value, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::objectish($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert resource|null $value
     *
     * @param string|callable():string $message
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return resource|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrResource(mixed $value, ?string $type = null, callable|string $message = ''): mixed
    {
        null === $value || static::resource($value, $type, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<resource> $value
     *
     * @param mixed       $value
     * @param string|null $type    type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allResource($value, $type = null, $message = '')
=======
     *
     * @psalm-assert iterable<resource> $value
     *
     * @param string|callable():string $message
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return iterable<resource>
     *
     * @throws InvalidArgumentException
     */
    public static function allResource(mixed $value, ?string $type = null, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::resource($entry, $type, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<resource|null> $value
     *
     * @param mixed       $value
     * @param string|null $type    type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrResource($value, $type = null, $message = '')
=======
     *
     * @psalm-assert iterable<resource|null> $value
     *
     * @param string|callable():string $message
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return iterable<resource|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrResource(mixed $value, ?string $type = null, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::resource($entry, $type, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert callable|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsCallable($value, $message = '')
    {
        null === $value || static::isCallable($value, $message);
=======
     *
     * @psalm-assert callable|null $value
     *
     * @param string|callable():string $message
     *
     * @return callable|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsCallable(mixed $value, callable|string $message = ''): ?callable
    {
        null === $value || static::isCallable($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<callable> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsCallable($value, $message = '')
=======
     *
     * @psalm-assert iterable<callable> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<callable>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsCallable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isCallable($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<callable|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsCallable($value, $message = '')
=======
     *
     * @psalm-assert iterable<callable|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<callable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsCallable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isCallable($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert array|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsArray($value, $message = '')
    {
        null === $value || static::isArray($value, $message);
=======
     *
     * @psalm-assert array|null $value
     *
     * @param string|callable():string $message
     *
     * @return array|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsArray(mixed $value, callable|string $message = ''): ?array
    {
        null === $value || static::isArray($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<array> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsArray($value, $message = '')
=======
     *
     * @psalm-assert iterable<array> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<array>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsArray(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isArray($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<array|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsArray($value, $message = '')
=======
     *
     * @psalm-assert iterable<array|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsArray(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isArray($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable|null $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsTraversable($value, $message = '')
    {
        null === $value || static::isTraversable($value, $message);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<iterable> $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsTraversable($value, $message = '')
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isTraversable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<iterable|null> $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsTraversable($value, $message = '')
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isTraversable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     * @psalm-assert array|ArrayAccess|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsArrayAccessible($value, $message = '')
    {
        null === $value || static::isArrayAccessible($value, $message);
=======
     *
     * @psalm-assert array|ArrayAccess|null $value
     *
     * @param string|callable():string $message
     *
     * @return array|ArrayAccess|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsArrayAccessible(mixed $value, callable|string $message = ''): ArrayAccess|array|null
    {
        null === $value || static::isArrayAccessible($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<array|ArrayAccess> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsArrayAccessible($value, $message = '')
=======
     *
     * @psalm-assert iterable<array|ArrayAccess> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<array|ArrayAccess>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsArrayAccessible(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isArrayAccessible($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<array|ArrayAccess|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsArrayAccessible($value, $message = '')
=======
     *
     * @psalm-assert iterable<array|ArrayAccess|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<array|ArrayAccess|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsArrayAccessible(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isArrayAccessible($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert countable|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsCountable($value, $message = '')
    {
        null === $value || static::isCountable($value, $message);
=======
     *
     * @psalm-assert countable|null $value
     *
     * @param string|callable():string $message
     *
     * @return countable|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsCountable(mixed $value, callable|string $message = ''): Countable|array|null
    {
        null === $value || static::isCountable($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<countable> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsCountable($value, $message = '')
=======
     *
     * @psalm-assert iterable<countable> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<countable>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsCountable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isCountable($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<countable|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsCountable($value, $message = '')
=======
     *
     * @psalm-assert iterable<countable|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<countable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsCountable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isCountable($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsIterable($value, $message = '')
    {
        null === $value || static::isIterable($value, $message);
=======
     *
     * @psalm-assert iterable|null $value
     *
     * @param string|callable():string $message
     *
     * @return iterable|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsIterable(mixed $value, callable|string $message = ''): ?iterable
    {
        null === $value || static::isIterable($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<iterable> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsIterable($value, $message = '')
=======
     *
     * @psalm-assert iterable<iterable> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<iterable>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsIterable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isIterable($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<iterable|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsIterable($value, $message = '')
=======
     *
     * @psalm-assert iterable<iterable|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<iterable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsIterable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isIterable($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert ExpectedType|null $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsInstanceOf($value, $class, $message = '')
    {
        null === $value || static::isInstanceOf($value, $class, $message);
=======
     *
     * @template T of object
     * @psalm-assert T|null $value
     *
     * @param class-string<T>          $class
     * @param string|callable():string $message
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsInstanceOf(mixed $value, mixed $class, callable|string $message = ''): ?object
    {
        null === $value || static::isInstanceOf($value, $class, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<ExpectedType> $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsInstanceOf($value, $class, $message = '')
=======
     *
     * @template T of object
     * @psalm-assert iterable<T> $value
     *
     * @param class-string<T>          $class
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsInstanceOf(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isInstanceOf($entry, $class, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<ExpectedType|null> $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsInstanceOf($value, $class, $message = '')
=======
     *
     * @template T of object|null
     * @psalm-assert iterable<T> $value
     *
     * @param class-string<T>          $class
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsInstanceOf(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isInstanceOf($entry, $class, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotInstanceOf($value, $class, $message = '')
    {
        null === $value || static::notInstanceOf($value, $class, $message);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotInstanceOf($value, $class, $message = '')
=======

        return $value;
    }

    /**
     * @template T of object
     *
     * @param class-string<T>          $class
     * @param string|callable():string $message
     *
     * @return object|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotInstanceOf(mixed $value, mixed $class, callable|string $message = ''): ?object
    {
        null === $value || static::notInstanceOf($value, $class, $message);

        return $value;
    }

    /**
     * @template T of object
     *
     * @param class-string<T>          $class
     * @param string|callable():string $message
     *
     * @return iterable<object>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotInstanceOf(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notInstanceOf($entry, $class, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<!ExpectedType|null> $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotInstanceOf($value, $class, $message = '')
=======

        return $value;
    }

    /**
     * @template T of object|null
     * @psalm-assert iterable<object|null> $value
     *
     * @param class-string<T>          $class
     * @param string|callable():string $message
     *
     * @return iterable<object|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotInstanceOf(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notInstanceOf($entry, $class, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param mixed                $value
     * @param array<object|string> $classes
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsInstanceOfAny($value, $classes, $message = '')
    {
        null === $value || static::isInstanceOfAny($value, $classes, $message);
    }

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param mixed                $value
     * @param array<object|string> $classes
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsInstanceOfAny($value, $classes, $message = '')
=======

        return $value;
    }

    /**
     * @template T of object
     * @psalm-assert T|null $value
     *
     * @param iterable<class-string<T>> $classes
     * @param string|callable():string  $message
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsInstanceOfAny(mixed $value, mixed $classes, callable|string $message = ''): ?object
    {
        null === $value || static::isInstanceOfAny($value, $classes, $message);

        return $value;
    }

    /**
     * @template T of object
     * @psalm-assert iterable<T> $value
     *
     * @param iterable<class-string<T>> $classes
     * @param string|callable():string  $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsInstanceOfAny(mixed $value, mixed $classes, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isInstanceOfAny($entry, $classes, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param mixed                $value
     * @param array<object|string> $classes
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsInstanceOfAny($value, $classes, $message = '')
=======

        return $value;
    }

    /**
     * @template T of object|null
     * @psalm-assert iterable<T> $value
     *
     * @param iterable<class-string<T>> $classes
     * @param string|callable():string  $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsInstanceOfAny(mixed $value, mixed $classes, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isInstanceOfAny($entry, $classes, $message);
        }
<<<<<<< HEAD
=======

        return $value;
    }

    /**
     * @template T
     * @psalm-assert object|class-string|null $value
     *
     * @param T|null                   $value
     * @param string|callable():string $message
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNotInstanceOfAny(mixed $value, mixed $classes, callable|string $message = ''): mixed
    {
        null === $value || static::isNotInstanceOfAny($value, $classes, $message);

        return $value;
    }

    /**
     * @template T
     * @psalm-assert iterable<object|class-string> $value
     *
     * @param iterable<T>              $value
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsNotInstanceOfAny(mixed $value, mixed $classes, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isNotInstanceOfAny($entry, $classes, $message);
        }

        return $value;
    }

    /**
     * @template T
     * @psalm-assert iterable<object|class-string|null> $value
     *
     * @param iterable<T>              $value
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNotInstanceOfAny(mixed $value, mixed $classes, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isNotInstanceOfAny($entry, $classes, $message);
        }

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert ExpectedType|class-string<ExpectedType>|null $value
     *
     * @param object|string|null $value
     * @param string             $class
     * @param string             $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsAOf($value, $class, $message = '')
    {
        null === $value || static::isAOf($value, $class, $message);
=======
     *
     * @template T of object
     * @psalm-assert T|class-string<T>|null $value
     *
     * @param class-string<T>          $class
     * @param string|callable():string $message
     *
     * @return T|class-string<T>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsAOf(mixed $value, mixed $class, callable|string $message = ''): object|string|null
    {
        null === $value || static::isAOf($value, $class, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<ExpectedType|class-string<ExpectedType>> $value
     *
     * @param iterable<object|string> $value
     * @param string                  $class
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsAOf($value, $class, $message = '')
=======
     *
     * @template T of object
     * @psalm-assert iterable<T|class-string<T>> $value
     *
     * @param class-string<T>          $class
     * @param string|callable():string $message
     *
     * @return iterable<T|class-string<T>>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsAOf(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isAOf($entry, $class, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<ExpectedType|class-string<ExpectedType>|null> $value
     *
     * @param iterable<object|string|null> $value
     * @param string                       $class
     * @param string                       $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsAOf($value, $class, $message = '')
=======
     *
     * @template T of object|null
     * @psalm-assert iterable<T|class-string<T>|null> $value
     *
     * @param class-string<T>          $class
     * @param string|callable():string $message
     *
     * @return iterable<T|class-string<T>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsAOf(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isAOf($entry, $class, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template UnexpectedType of object
     * @psalm-param class-string<UnexpectedType> $class
     *
     * @param object|string|null $value
     * @param string             $class
     * @param string             $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsNotA($value, $class, $message = '')
    {
        null === $value || static::isNotA($value, $class, $message);
=======
     *
     * @template T
     *
     * @param T|null                   $value
     * @param string|callable():string $message
     *
     * @return object|class-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNotA(mixed $value, mixed $class, callable|string $message = ''): object|string|null
    {
        null === $value || static::isNotA($value, $class, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template UnexpectedType of object
     * @psalm-param class-string<UnexpectedType> $class
     *
     * @param iterable<object|string> $value
     * @param string                  $class
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsNotA($value, $class, $message = '')
=======
     *
     * @template T
     *
     * @param iterable<T>              $value
     * @param string|callable():string $message
     *
     * @return iterable<object|class-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsNotA(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isNotA($entry, $class, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template UnexpectedType of object
     * @psalm-param class-string<UnexpectedType> $class
     * @psalm-assert iterable<!UnexpectedType|null> $value
     * @psalm-assert iterable<!class-string<UnexpectedType>|null> $value
     *
     * @param iterable<object|string|null> $value
     * @param string                       $class
     * @param string                       $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsNotA($value, $class, $message = '')
=======
     *
     * @template T
     * @psalm-assert iterable<object|class-string|null> $value
     *
     * @param iterable<T>              $value
     * @param string|callable():string $message
     *
     * @return iterable<object|class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNotA(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isNotA($entry, $class, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param array<class-string> $classes
     *
     * @param object|string|null $value
     * @param string[]           $classes
     * @param string             $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsAnyOf($value, $classes, $message = '')
    {
        null === $value || static::isAnyOf($value, $classes, $message);
=======
     *
     * @psalm-assert T|null $value
     *
     * @template T as object
     *
     * @param array<class-string<T>>   $classes
     * @param string|callable():string $message
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsAnyOf(mixed $value, mixed $classes, callable|string $message = ''): object|string|null
    {
        null === $value || static::isAnyOf($value, $classes, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param array<class-string> $classes
     *
     * @param iterable<object|string> $value
     * @param string[]                $classes
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsAnyOf($value, $classes, $message = '')
=======
     *
     * @psalm-assert iterable<T> $value
     *
     * @template T as object
     *
     * @param array<class-string<T>>   $classes
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsAnyOf(mixed $value, mixed $classes, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isAnyOf($entry, $classes, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param array<class-string> $classes
     *
     * @param iterable<object|string|null> $value
     * @param string[]                     $classes
     * @param string                       $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsAnyOf($value, $classes, $message = '')
=======
     *
     * @psalm-assert iterable<T> $value
     *
     * @template T as object|null
     *
     * @param array<class-string<T>>   $classes
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsAnyOf(mixed $value, mixed $classes, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isAnyOf($entry, $classes, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert empty $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsEmpty($value, $message = '')
    {
        null === $value || static::isEmpty($value, $message);
=======
     *
     * @psalm-assert empty $value
     *
     * @param string|callable():string $message
     *
     * @return empty
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsEmpty(mixed $value, callable|string $message = ''): mixed
    {
        null === $value || static::isEmpty($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<empty> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsEmpty($value, $message = '')
=======
     *
     * @psalm-assert iterable<empty> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<empty>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsEmpty(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isEmpty($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<empty|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsEmpty($value, $message = '')
=======
     *
     * @psalm-assert iterable<empty|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<empty|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsEmpty(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isEmpty($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotEmpty($value, $message = '')
    {
        null === $value || static::notEmpty($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotEmpty(mixed $value, callable|string $message = ''): mixed
    {
        null === $value || static::notEmpty($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotEmpty($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNotEmpty(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notEmpty($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<!empty|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotEmpty($value, $message = '')
=======
     *
     * @psalm-assert iterable<!empty|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<!empty|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotEmpty(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notEmpty($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNull($value, $message = '')
=======
     *
     * @psalm-assert iterable<null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNull(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::null($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotNull($value, $message = '')
=======
     * @template T
     *
     * @param iterable<T|null>         $value
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotNull(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notNull($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert true|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrTrue($value, $message = '')
    {
        null === $value || static::true($value, $message);
=======
     *
     * @psalm-assert true|null $value
     *
     * @param string|callable():string $message
     *
     * @return true|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrTrue(mixed $value, callable|string $message = ''): ?true
    {
        null === $value || static::true($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<true> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allTrue($value, $message = '')
=======
     *
     * @psalm-assert iterable<true> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<true>
     *
     * @throws InvalidArgumentException
     */
    public static function allTrue(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::true($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<true|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrTrue($value, $message = '')
=======
     *
     * @psalm-assert iterable<true|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<true|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrTrue(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::true($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert false|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrFalse($value, $message = '')
    {
        null === $value || static::false($value, $message);
=======
     *
     * @psalm-assert false|null $value
     *
     * @param string|callable():string $message
     *
     * @return false|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrFalse(mixed $value, callable|string $message = ''): ?false
    {
        null === $value || static::false($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<false> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allFalse($value, $message = '')
=======
     *
     * @psalm-assert iterable<false> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<false>
     *
     * @throws InvalidArgumentException
     */
    public static function allFalse(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::false($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<false|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrFalse($value, $message = '')
=======
     *
     * @psalm-assert iterable<false|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<false|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrFalse(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::false($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotFalse($value, $message = '')
    {
        null === $value || static::notFalse($value, $message);
=======
     * @template T
     *
     * @param T|false|null             $value
     * @param string|callable():string $message
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotFalse(mixed $value, callable|string $message = ''): mixed
    {
        null === $value || static::notFalse($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotFalse($value, $message = '')
=======
     * @template T
     *
     * @param iterable<T|false>        $value
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotFalse(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notFalse($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<!false|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotFalse($value, $message = '')
=======
     *
     * @psalm-assert iterable<!false|null> $value
     *
     * @template T
     *
     * @param iterable<T|false|null>   $value
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotFalse(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notFalse($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIp($value, $message = '')
    {
        null === $value || static::ip($value, $message);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIp($value, $message = '')
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|null              $value
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIp(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::ip($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string>         $value
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allIp(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::ip($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIp($value, $message = '')
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|null>    $value
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIp(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::ip($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIpv4($value, $message = '')
    {
        null === $value || static::ipv4($value, $message);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIpv4($value, $message = '')
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|null              $value
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIpv4(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::ipv4($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string>         $value
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allIpv4(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::ipv4($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIpv4($value, $message = '')
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|null>    $value
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIpv4(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::ipv4($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIpv6($value, $message = '')
    {
        null === $value || static::ipv6($value, $message);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIpv6($value, $message = '')
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|null              $value
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIpv6(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::ipv6($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string>         $value
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allIpv6(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::ipv6($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIpv6($value, $message = '')
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|null>    $value
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIpv6(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::ipv6($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrEmail($value, $message = '')
    {
        null === $value || static::email($value, $message);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allEmail($value, $message = '')
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|null              $value
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrEmail(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::email($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string>         $value
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allEmail(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::email($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrEmail($value, $message = '')
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|null>    $value
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrEmail(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::email($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param array|null $values
     * @param string     $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrUniqueValues($values, $message = '')
    {
        null === $values || static::uniqueValues($values, $message);
    }

    /**
     * @param iterable<array> $values
     * @param string          $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allUniqueValues($values, $message = '')
=======

        return $value;
    }

    /**
     * @psalm-assert array|null $values
     *
     * @param string|callable():string $message
     *
     * @return array|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUniqueValues(mixed $values, callable|string $message = ''): ?array
    {
        null === $values || static::uniqueValues($values, $message);

        return $values;
    }

    /**
     * @psalm-assert iterable<array> $values
     *
     * @param string|callable():string $message
     *
     * @return iterable<array>
     *
     * @throws InvalidArgumentException
     */
    public static function allUniqueValues(mixed $values, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($values);

        foreach ($values as $entry) {
            static::uniqueValues($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param iterable<array|null> $values
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrUniqueValues($values, $message = '')
=======

        return $values;
    }

    /**
     * @psalm-assert iterable<array|null> $values
     *
     * @param string|callable():string $message
     *
     * @return iterable<array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUniqueValues(mixed $values, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($values);

        foreach ($values as $entry) {
            null === $entry || static::uniqueValues($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrEq($value, $expect, $message = '')
    {
        null === $value || static::eq($value, $expect, $message);
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allEq($value, $expect, $message = '')
=======

        return $values;
    }

    /**
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrEq(mixed $value, mixed $expect, callable|string $message = ''): mixed
    {
        null === $value || static::eq($value, $expect, $message);

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allEq(mixed $value, mixed $expect, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::eq($entry, $expect, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrEq($value, $expect, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrEq(mixed $value, mixed $expect, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::eq($entry, $expect, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotEq($value, $expect, $message = '')
    {
        null === $value || static::notEq($value, $expect, $message);
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotEq($value, $expect, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotEq(mixed $value, mixed $expect, callable|string $message = ''): mixed
    {
        null === $value || static::notEq($value, $expect, $message);

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNotEq(mixed $value, mixed $expect, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notEq($entry, $expect, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotEq($value, $expect, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotEq(mixed $value, mixed $expect, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notEq($entry, $expect, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrSame($value, $expect, $message = '')
    {
        null === $value || static::same($value, $expect, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrSame(mixed $value, mixed $expect, callable|string $message = ''): mixed
    {
        null === $value || static::same($value, $expect, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allSame($value, $expect, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allSame(mixed $value, mixed $expect, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::same($entry, $expect, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrSame($value, $expect, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrSame(mixed $value, mixed $expect, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::same($entry, $expect, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotSame($value, $expect, $message = '')
    {
        null === $value || static::notSame($value, $expect, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotSame(mixed $value, mixed $expect, callable|string $message = ''): mixed
    {
        null === $value || static::notSame($value, $expect, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotSame($value, $expect, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNotSame(mixed $value, mixed $expect, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notSame($entry, $expect, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotSame($value, $expect, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotSame(mixed $value, mixed $expect, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notSame($entry, $expect, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrGreaterThan($value, $limit, $message = '')
    {
        null === $value || static::greaterThan($value, $limit, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrGreaterThan(mixed $value, mixed $limit, callable|string $message = ''): mixed
    {
        null === $value || static::greaterThan($value, $limit, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allGreaterThan($value, $limit, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allGreaterThan(mixed $value, mixed $limit, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::greaterThan($entry, $limit, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrGreaterThan($value, $limit, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrGreaterThan(mixed $value, mixed $limit, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::greaterThan($entry, $limit, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrGreaterThanEq($value, $limit, $message = '')
    {
        null === $value || static::greaterThanEq($value, $limit, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrGreaterThanEq(mixed $value, mixed $limit, callable|string $message = ''): mixed
    {
        null === $value || static::greaterThanEq($value, $limit, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allGreaterThanEq($value, $limit, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allGreaterThanEq(mixed $value, mixed $limit, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::greaterThanEq($entry, $limit, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrGreaterThanEq($value, $limit, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrGreaterThanEq(mixed $value, mixed $limit, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::greaterThanEq($entry, $limit, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrLessThan($value, $limit, $message = '')
    {
        null === $value || static::lessThan($value, $limit, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLessThan(mixed $value, mixed $limit, callable|string $message = ''): mixed
    {
        null === $value || static::lessThan($value, $limit, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allLessThan($value, $limit, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allLessThan(mixed $value, mixed $limit, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lessThan($entry, $limit, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrLessThan($value, $limit, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLessThan(mixed $value, mixed $limit, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lessThan($entry, $limit, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrLessThanEq($value, $limit, $message = '')
    {
        null === $value || static::lessThanEq($value, $limit, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLessThanEq(mixed $value, mixed $limit, callable|string $message = ''): mixed
    {
        null === $value || static::lessThanEq($value, $limit, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allLessThanEq($value, $limit, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allLessThanEq(mixed $value, mixed $limit, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lessThanEq($entry, $limit, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrLessThanEq($value, $limit, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLessThanEq(mixed $value, mixed $limit, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lessThanEq($entry, $limit, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrRange($value, $min, $max, $message = '')
    {
        null === $value || static::range($value, $min, $max, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrRange(mixed $value, mixed $min, mixed $max, callable|string $message = ''): mixed
    {
        null === $value || static::range($value, $min, $max, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allRange($value, $min, $max, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allRange(mixed $value, mixed $min, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::range($entry, $min, $max, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrRange($value, $min, $max, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrRange(mixed $value, mixed $min, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::range($entry, $min, $max, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrOneOf($value, $values, $message = '')
    {
        null === $value || static::oneOf($value, $values, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrOneOf(mixed $value, mixed $values, callable|string $message = ''): mixed
    {
        null === $value || static::oneOf($value, $values, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allOneOf($value, $values, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allOneOf(mixed $value, mixed $values, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::oneOf($entry, $values, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrOneOf($value, $values, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrOneOf(mixed $value, mixed $values, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::oneOf($entry, $values, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrInArray($value, $values, $message = '')
    {
        null === $value || static::inArray($value, $values, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrInArray(mixed $value, mixed $values, callable|string $message = ''): mixed
    {
        null === $value || static::inArray($value, $values, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allInArray($value, $values, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allInArray(mixed $value, mixed $values, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::inArray($entry, $values, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrInArray($value, $values, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrInArray(mixed $value, mixed $values, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::inArray($entry, $values, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $subString
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrContains($value, $subString, $message = '')
    {
        null === $value || static::contains($value, $subString, $message);
=======
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotOneOf(mixed $value, mixed $values, callable|string $message = ''): mixed
    {
        null === $value || static::notOneOf($value, $values, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNotOneOf(mixed $value, mixed $values, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notOneOf($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotOneOf(mixed $value, mixed $values, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notOneOf($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotInArray(mixed $value, mixed $values, callable|string $message = ''): mixed
    {
        null === $value || static::notInArray($value, $values, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNotInArray(mixed $value, mixed $values, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notInArray($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     *
     * @return iterable
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotInArray(mixed $value, mixed $values, callable|string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notInArray($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrContains(mixed $value, mixed $subString, callable|string $message = ''): ?string
    {
        null === $value || static::contains($value, $subString, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $subString
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allContains($value, $subString, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allContains(mixed $value, mixed $subString, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::contains($entry, $subString, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $subString
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrContains($value, $subString, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrContains(mixed $value, mixed $subString, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::contains($entry, $subString, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $subString
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotContains($value, $subString, $message = '')
    {
        null === $value || static::notContains($value, $subString, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotContains(mixed $value, mixed $subString, callable|string $message = ''): ?string
    {
        null === $value || static::notContains($value, $subString, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $subString
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotContains($value, $subString, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotContains(mixed $value, mixed $subString, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notContains($entry, $subString, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $subString
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotContains($value, $subString, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotContains(mixed $value, mixed $subString, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notContains($entry, $subString, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotWhitespaceOnly($value, $message = '')
    {
        null === $value || static::notWhitespaceOnly($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotWhitespaceOnly(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::notWhitespaceOnly($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotWhitespaceOnly($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotWhitespaceOnly(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notWhitespaceOnly($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotWhitespaceOnly($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotWhitespaceOnly(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notWhitespaceOnly($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $prefix
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrStartsWith($value, $prefix, $message = '')
    {
        null === $value || static::startsWith($value, $prefix, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrStartsWith(mixed $value, mixed $prefix, callable|string $message = ''): ?string
    {
        null === $value || static::startsWith($value, $prefix, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $prefix
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allStartsWith($value, $prefix, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allStartsWith(mixed $value, mixed $prefix, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::startsWith($entry, $prefix, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $prefix
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrStartsWith($value, $prefix, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrStartsWith(mixed $value, mixed $prefix, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::startsWith($entry, $prefix, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $prefix
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotStartsWith($value, $prefix, $message = '')
    {
        null === $value || static::notStartsWith($value, $prefix, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotStartsWith(mixed $value, mixed $prefix, callable|string $message = ''): ?string
    {
        null === $value || static::notStartsWith($value, $prefix, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $prefix
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotStartsWith($value, $prefix, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotStartsWith(mixed $value, mixed $prefix, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notStartsWith($entry, $prefix, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $prefix
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotStartsWith($value, $prefix, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotStartsWith(mixed $value, mixed $prefix, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notStartsWith($entry, $prefix, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrStartsWithLetter($value, $message = '')
    {
        null === $value || static::startsWithLetter($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrStartsWithLetter(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::startsWithLetter($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allStartsWithLetter($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allStartsWithLetter(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::startsWithLetter($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrStartsWithLetter($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrStartsWithLetter(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::startsWithLetter($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $suffix
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrEndsWith($value, $suffix, $message = '')
    {
        null === $value || static::endsWith($value, $suffix, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrEndsWith(mixed $value, mixed $suffix, callable|string $message = ''): ?string
    {
        null === $value || static::endsWith($value, $suffix, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $suffix
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allEndsWith($value, $suffix, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allEndsWith(mixed $value, mixed $suffix, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::endsWith($entry, $suffix, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $suffix
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrEndsWith($value, $suffix, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrEndsWith(mixed $value, mixed $suffix, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::endsWith($entry, $suffix, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $suffix
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotEndsWith($value, $suffix, $message = '')
    {
        null === $value || static::notEndsWith($value, $suffix, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotEndsWith(mixed $value, mixed $suffix, callable|string $message = ''): ?string
    {
        null === $value || static::notEndsWith($value, $suffix, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $suffix
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotEndsWith($value, $suffix, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotEndsWith(mixed $value, mixed $suffix, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notEndsWith($entry, $suffix, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $suffix
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotEndsWith($value, $suffix, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotEndsWith(mixed $value, mixed $suffix, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notEndsWith($entry, $suffix, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $pattern
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrRegex($value, $pattern, $message = '')
    {
        null === $value || static::regex($value, $pattern, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrRegex(mixed $value, mixed $pattern, callable|string $message = ''): ?string
    {
        null === $value || static::regex($value, $pattern, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $pattern
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allRegex($value, $pattern, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allRegex(mixed $value, mixed $pattern, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::regex($entry, $pattern, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $pattern
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrRegex($value, $pattern, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrRegex(mixed $value, mixed $pattern, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::regex($entry, $pattern, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $pattern
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotRegex($value, $pattern, $message = '')
    {
        null === $value || static::notRegex($value, $pattern, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotRegex(mixed $value, mixed $pattern, callable|string $message = ''): ?string
    {
        null === $value || static::notRegex($value, $pattern, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $pattern
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNotRegex($value, $pattern, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotRegex(mixed $value, mixed $pattern, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notRegex($entry, $pattern, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $pattern
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrNotRegex($value, $pattern, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotRegex(mixed $value, mixed $pattern, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notRegex($entry, $pattern, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrUnicodeLetters($value, $message = '')
    {
        null === $value || static::unicodeLetters($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUnicodeLetters(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::unicodeLetters($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allUnicodeLetters($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allUnicodeLetters(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::unicodeLetters($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrUnicodeLetters($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUnicodeLetters(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::unicodeLetters($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrAlpha($value, $message = '')
    {
        null === $value || static::alpha($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrAlpha(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::alpha($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allAlpha($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allAlpha(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::alpha($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrAlpha($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrAlpha(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::alpha($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrDigits($value, $message = '')
    {
        null === $value || static::digits($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrDigits(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::digits($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allDigits($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allDigits(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::digits($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrDigits($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrDigits(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::digits($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrAlnum($value, $message = '')
    {
        null === $value || static::alnum($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrAlnum(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::alnum($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allAlnum($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allAlnum(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::alnum($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrAlnum($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrAlnum(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::alnum($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert lowercase-string|null $value
     *
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrLower($value, $message = '')
    {
        null === $value || static::lower($value, $message);
=======
     *
     * @psalm-assert lowercase-string|null $value
     *
     * @param string|callable():string $message
     *
     * @return lowercase-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLower(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::lower($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<lowercase-string> $value
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allLower($value, $message = '')
=======
     *
     * @psalm-assert iterable<lowercase-string> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<lowercase-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allLower(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lower($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<lowercase-string|null> $value
     *
     * @param iterable<string|null> $value
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrLower($value, $message = '')
=======
     *
     * @psalm-assert iterable<lowercase-string|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<lowercase-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLower(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lower($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrUpper($value, $message = '')
    {
        null === $value || static::upper($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUpper(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::upper($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allUpper($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allUpper(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::upper($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<!lowercase-string|null> $value
     *
     * @param iterable<string|null> $value
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrUpper($value, $message = '')
=======
     *
     * @psalm-assert iterable<string|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUpper(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::upper($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param int         $length
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrLength($value, $length, $message = '')
    {
        null === $value || static::length($value, $length, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLength(mixed $value, mixed $length, callable|string $message = ''): ?string
    {
        null === $value || static::length($value, $length, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param int              $length
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allLength($value, $length, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allLength(mixed $value, mixed $length, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::length($entry, $length, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param int                   $length
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrLength($value, $length, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLength(mixed $value, mixed $length, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::length($entry, $length, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param int|float   $min
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrMinLength($value, $min, $message = '')
    {
        null === $value || static::minLength($value, $min, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMinLength(mixed $value, mixed $min, callable|string $message = ''): ?string
    {
        null === $value || static::minLength($value, $min, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param int|float        $min
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allMinLength($value, $min, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allMinLength(mixed $value, mixed $min, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::minLength($entry, $min, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param int|float             $min
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrMinLength($value, $min, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMinLength(mixed $value, mixed $min, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::minLength($entry, $min, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param int|float   $max
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrMaxLength($value, $max, $message = '')
    {
        null === $value || static::maxLength($value, $max, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMaxLength(mixed $value, mixed $max, callable|string $message = ''): ?string
    {
        null === $value || static::maxLength($value, $max, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param int|float        $max
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allMaxLength($value, $max, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allMaxLength(mixed $value, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::maxLength($entry, $max, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param int|float             $max
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrMaxLength($value, $max, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMaxLength(mixed $value, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::maxLength($entry, $max, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param int|float   $min
     * @param int|float   $max
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrLengthBetween($value, $min, $max, $message = '')
    {
        null === $value || static::lengthBetween($value, $min, $max, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLengthBetween(mixed $value, mixed $min, mixed $max, callable|string $message = ''): ?string
    {
        null === $value || static::lengthBetween($value, $min, $max, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param int|float        $min
     * @param int|float        $max
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allLengthBetween($value, $min, $max, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allLengthBetween(mixed $value, mixed $min, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lengthBetween($entry, $min, $max, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param int|float             $min
     * @param int|float             $max
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrLengthBetween($value, $min, $max, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLengthBetween(mixed $value, mixed $min, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lengthBetween($entry, $min, $max, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrFileExists($value, $message = '')
    {
        null === $value || static::fileExists($value, $message);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allFileExists($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrFileExists(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::fileExists($value, $message);

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allFileExists(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::fileExists($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrFileExists($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrFileExists(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::fileExists($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrFile($value, $message = '')
    {
        null === $value || static::file($value, $message);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allFile($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrFile(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::file($value, $message);

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allFile(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::file($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrFile($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrFile(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::file($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrDirectory($value, $message = '')
    {
        null === $value || static::directory($value, $message);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allDirectory($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrDirectory(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::directory($value, $message);

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allDirectory(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::directory($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrDirectory($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrDirectory(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::directory($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrReadable($value, $message = '')
    {
        null === $value || static::readable($value, $message);
    }

    /**
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allReadable($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrReadable(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::readable($value, $message);

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allReadable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::readable($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param iterable<string|null> $value
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrReadable($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrReadable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::readable($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrWritable($value, $message = '')
    {
        null === $value || static::writable($value, $message);
    }

    /**
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allWritable($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrWritable(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::writable($value, $message);

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allWritable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::writable($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param iterable<string|null> $value
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrWritable($value, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrWritable(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::writable($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-assert class-string|null $value
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrClassExists($value, $message = '')
    {
        null === $value || static::classExists($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return class-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrClassExists(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::classExists($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-assert iterable<class-string> $value
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allClassExists($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<class-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allClassExists(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::classExists($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-assert iterable<class-string|null> $value
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrClassExists($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrClassExists(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::classExists($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert class-string<ExpectedType>|ExpectedType|null $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrSubclassOf($value, $class, $message = '')
    {
        null === $value || static::subclassOf($value, $class, $message);
=======
     *
     * @template ExpectedType of object
     * @psalm-assert class-string<ExpectedType>|null $value
     *
     * @param class-string<ExpectedType> $class
     * @param string|callable():string   $message
     *
     * @return class-string<ExpectedType>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrSubclassOf(mixed $value, mixed $class, callable|string $message = ''): ?string
    {
        null === $value || static::subclassOf($value, $class, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType> $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allSubclassOf($value, $class, $message = '')
=======
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>> $value
     *
     * @param class-string<ExpectedType> $class
     * @param string|callable():string   $message
     *
     * @return iterable<class-string<ExpectedType>>
     *
     * @throws InvalidArgumentException
     */
    public static function allSubclassOf(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::subclassOf($entry, $class, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType|null> $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrSubclassOf($value, $class, $message = '')
=======
     *
     * @template ExpectedType of object|null
     * @psalm-assert iterable<class-string<ExpectedType>|null> $value
     *
     * @param class-string<ExpectedType> $class
     * @param string|callable():string   $message
     *
     * @return iterable<class-string<ExpectedType>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrSubclassOf(mixed $value, mixed $class, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::subclassOf($entry, $class, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-assert class-string|null $value
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrInterfaceExists($value, $message = '')
    {
        null === $value || static::interfaceExists($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return class-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrInterfaceExists(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::interfaceExists($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-assert iterable<class-string> $value
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allInterfaceExists($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<class-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allInterfaceExists(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::interfaceExists($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-assert iterable<class-string|null> $value
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrInterfaceExists($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrInterfaceExists(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::interfaceExists($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $interface
     * @psalm-assert class-string<ExpectedType>|null $value
     *
     * @param mixed  $value
     * @param mixed  $interface
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrImplementsInterface($value, $interface, $message = '')
    {
        null === $value || static::implementsInterface($value, $interface, $message);
=======
     *
     * @template ExpectedType of object
     * @psalm-assert class-string<ExpectedType>|ExpectedType|null $value
     *
     * @param class-string<ExpectedType> $interface
     * @param string|callable():string   $message
     *
     * @return class-string<ExpectedType>|ExpectedType|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrImplementsInterface(mixed $value, mixed $interface, callable|string $message = ''): object|string|null
    {
        null === $value || static::implementsInterface($value, $interface, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $interface
     * @psalm-assert iterable<class-string<ExpectedType>> $value
     *
     * @param mixed  $value
     * @param mixed  $interface
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allImplementsInterface($value, $interface, $message = '')
=======
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType> $value
     *
     * @param class-string<ExpectedType> $interface
     * @param string|callable():string   $message
     *
     * @return iterable<class-string<ExpectedType>|ExpectedType>
     *
     * @throws InvalidArgumentException
     */
    public static function allImplementsInterface(mixed $value, mixed $interface, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::implementsInterface($entry, $interface, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $interface
     * @psalm-assert iterable<class-string<ExpectedType>|null> $value
     *
     * @param mixed  $value
     * @param mixed  $interface
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrImplementsInterface($value, $interface, $message = '')
=======
     *
     * @template ExpectedType of object|null
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType|null> $value
     *
     * @param class-string<ExpectedType> $interface
     * @param string|callable():string   $message
     *
     * @return iterable<class-string<ExpectedType>|ExpectedType|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrImplementsInterface(mixed $value, mixed $interface, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::implementsInterface($entry, $interface, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
     * @param mixed              $property
     * @param string             $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrPropertyExists($classOrObject, $property, $message = '')
    {
        null === $classOrObject || static::propertyExists($classOrObject, $property, $message);
=======
     *
     * @param string|object|null       $classOrObject
     * @param string|callable():string $message
     *
     * @return string|object|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrPropertyExists(mixed $classOrObject, mixed $property, callable|string $message = ''): object|string|null
    {
        null === $classOrObject || static::propertyExists($classOrObject, $property, $message);

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $property
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allPropertyExists($classOrObject, $property, $message = '')
=======
     *
     * @param iterable<string|object>  $classOrObject
     * @param string|callable():string $message
     *
     * @return iterable<string|object>
     *
     * @throws InvalidArgumentException
     */
    public static function allPropertyExists(mixed $classOrObject, mixed $property, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::propertyExists($entry, $property, $message);
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @param iterable<string|object|null> $classOrObject
     * @param mixed                        $property
     * @param string                       $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrPropertyExists($classOrObject, $property, $message = '')
=======
     *
     * @param iterable<string|object|null> $classOrObject
     * @param string|callable():string     $message
     *
     * @return iterable<string|object|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrPropertyExists(mixed $classOrObject, mixed $property, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::propertyExists($entry, $property, $message);
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
     * @param mixed              $property
     * @param string             $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrPropertyNotExists($classOrObject, $property, $message = '')
    {
        null === $classOrObject || static::propertyNotExists($classOrObject, $property, $message);
=======
     *
     * @template T as class-string|object
     *
     * @param T|null                   $classOrObject
     * @param string|callable():string $message
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrPropertyNotExists(mixed $classOrObject, mixed $property, callable|string $message = ''): mixed
    {
        null === $classOrObject || static::propertyNotExists($classOrObject, $property, $message);

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $property
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allPropertyNotExists($classOrObject, $property, $message = '')
=======
     *
     * @template T as class-string|object
     *
     * @param iterable<T>              $classOrObject
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allPropertyNotExists(mixed $classOrObject, mixed $property, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::propertyNotExists($entry, $property, $message);
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @param iterable<string|object|null> $classOrObject
     * @param mixed                        $property
     * @param string                       $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrPropertyNotExists($classOrObject, $property, $message = '')
=======
     *
     * @template T as class-string|object|null
     *
     * @param iterable<T>              $classOrObject
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrPropertyNotExists(mixed $classOrObject, mixed $property, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::propertyNotExists($entry, $property, $message);
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
     * @param mixed              $method
     * @param string             $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrMethodExists($classOrObject, $method, $message = '')
    {
        null === $classOrObject || static::methodExists($classOrObject, $method, $message);
=======
     *
     * @template T as class-string|object
     *
     * @param T|null                   $classOrObject
     * @param string|callable():string $message
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMethodExists(mixed $classOrObject, mixed $method, callable|string $message = ''): object|string|null
    {
        null === $classOrObject || static::methodExists($classOrObject, $method, $message);

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $method
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allMethodExists($classOrObject, $method, $message = '')
=======
     *
     * @template T as class-string|object
     *
     * @param iterable<T>              $classOrObject
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allMethodExists(mixed $classOrObject, mixed $method, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::methodExists($entry, $method, $message);
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @param iterable<string|object|null> $classOrObject
     * @param mixed                        $method
     * @param string                       $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrMethodExists($classOrObject, $method, $message = '')
=======
     *
     * @template T as class-string|object|null
     *
     * @param iterable<T>              $classOrObject
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMethodExists(mixed $classOrObject, mixed $method, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::methodExists($entry, $method, $message);
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
     * @param mixed              $method
     * @param string             $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrMethodNotExists($classOrObject, $method, $message = '')
    {
        null === $classOrObject || static::methodNotExists($classOrObject, $method, $message);
=======
     *
     * @template T as class-string|object
     *
     * @param T|null                   $classOrObject
     * @param string|callable():string $message
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMethodNotExists(mixed $classOrObject, mixed $method, callable|string $message = ''): mixed
    {
        null === $classOrObject || static::methodNotExists($classOrObject, $method, $message);

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $method
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allMethodNotExists($classOrObject, $method, $message = '')
=======
     *
     * @template T as class-string|object
     *
     * @param iterable<T>              $classOrObject
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allMethodNotExists(mixed $classOrObject, mixed $method, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::methodNotExists($entry, $method, $message);
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @param iterable<string|object|null> $classOrObject
     * @param mixed                        $method
     * @param string                       $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrMethodNotExists($classOrObject, $method, $message = '')
=======
     *
     * @template T as class-string|object|null
     *
     * @param iterable<T>              $classOrObject
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMethodNotExists(mixed $classOrObject, mixed $method, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::methodNotExists($entry, $method, $message);
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param array|null $array
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrKeyExists($array, $key, $message = '')
    {
        null === $array || static::keyExists($array, $key, $message);
=======
     * @param string|int               $key
     * @param string|callable():string $message
     *
     * @return array|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrKeyExists(mixed $array, string|int $key, callable|string $message = ''): ?array
    {
        null === $array || static::keyExists($array, $key, $message);

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<array> $array
     * @param string|int      $key
     * @param string          $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allKeyExists($array, $key, $message = '')
=======
     * @param string|int               $key
     * @param string|callable():string $message
     *
     * @return iterable<array>
     *
     * @throws InvalidArgumentException
     */
    public static function allKeyExists(mixed $array, string|int $key, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::keyExists($entry, $key, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<array|null> $array
     * @param string|int           $key
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrKeyExists($array, $key, $message = '')
=======
     * @param string|int               $key
     * @param string|callable():string $message
     *
     * @return iterable<array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrKeyExists(mixed $array, string|int $key, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::keyExists($entry, $key, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param array|null $array
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrKeyNotExists($array, $key, $message = '')
    {
        null === $array || static::keyNotExists($array, $key, $message);
=======
     * @param string|int               $key
     * @param string|callable():string $message
     *
     * @return array|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrKeyNotExists(mixed $array, string|int $key, callable|string $message = ''): ?array
    {
        null === $array || static::keyNotExists($array, $key, $message);

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<array> $array
     * @param string|int      $key
     * @param string          $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allKeyNotExists($array, $key, $message = '')
=======
     * @param string|int               $key
     * @param string|callable():string $message
     *
     * @return iterable<array>
     *
     * @throws InvalidArgumentException
     */
    public static function allKeyNotExists(mixed $array, string|int $key, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::keyNotExists($entry, $key, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<array|null> $array
     * @param string|int           $key
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrKeyNotExists($array, $key, $message = '')
=======
     * @param string|int               $key
     * @param string|callable():string $message
     *
     * @return iterable<array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrKeyNotExists(mixed $array, string|int $key, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::keyNotExists($entry, $key, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert array-key|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrValidArrayKey($value, $message = '')
    {
        null === $value || static::validArrayKey($value, $message);
=======
     *
     * @psalm-assert array-key|null $value
     *
     * @param string|callable():string $message
     *
     * @return array-key|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrValidArrayKey(mixed $value, callable|string $message = ''): string|int|null
    {
        null === $value || static::validArrayKey($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<array-key> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allValidArrayKey($value, $message = '')
=======
     *
     * @psalm-assert iterable<array-key> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<array-key>
     *
     * @throws InvalidArgumentException
     */
    public static function allValidArrayKey(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::validArrayKey($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<array-key|null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrValidArrayKey($value, $message = '')
=======
     *
     * @psalm-assert iterable<array-key|null> $value
     *
     * @param string|callable():string $message
     *
     * @return iterable<array-key|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrValidArrayKey(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::validArrayKey($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param Countable|array|null $array
     * @param int                  $number
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrCount($array, $number, $message = '')
    {
        null === $array || static::count($array, $number, $message);
    }

    /**
     * @param iterable<Countable|array> $array
     * @param int                       $number
     * @param string                    $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allCount($array, $number, $message = '')
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @return Countable|array|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrCount(mixed $array, mixed $number, callable|string $message = ''): Countable|array|null
    {
        null === $array || static::count($array, $number, $message);

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<Countable|array>
     *
     * @throws InvalidArgumentException
     */
    public static function allCount(mixed $array, mixed $number, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::count($entry, $number, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param iterable<Countable|array|null> $array
     * @param int                            $number
     * @param string                         $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrCount($array, $number, $message = '')
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<Countable|array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrCount(mixed $array, mixed $number, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::count($entry, $number, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param Countable|array|null $array
     * @param int|float            $min
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrMinCount($array, $min, $message = '')
    {
        null === $array || static::minCount($array, $min, $message);
    }

    /**
     * @param iterable<Countable|array> $array
     * @param int|float                 $min
     * @param string                    $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allMinCount($array, $min, $message = '')
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return Countable|array|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMinCount(mixed $array, mixed $min, callable|string $message = ''): Countable|array|null
    {
        null === $array || static::minCount($array, $min, $message);

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<Countable|array>
     *
     * @throws InvalidArgumentException
     */
    public static function allMinCount(mixed $array, mixed $min, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::minCount($entry, $min, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param iterable<Countable|array|null> $array
     * @param int|float                      $min
     * @param string                         $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrMinCount($array, $min, $message = '')
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<Countable|array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMinCount(mixed $array, mixed $min, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::minCount($entry, $min, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param Countable|array|null $array
     * @param int|float            $max
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrMaxCount($array, $max, $message = '')
    {
        null === $array || static::maxCount($array, $max, $message);
    }

    /**
     * @param iterable<Countable|array> $array
     * @param int|float                 $max
     * @param string                    $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allMaxCount($array, $max, $message = '')
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return Countable|array|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMaxCount(mixed $array, mixed $max, callable|string $message = ''): Countable|array|null
    {
        null === $array || static::maxCount($array, $max, $message);

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<Countable|array>
     *
     * @throws InvalidArgumentException
     */
    public static function allMaxCount(mixed $array, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::maxCount($entry, $max, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param iterable<Countable|array|null> $array
     * @param int|float                      $max
     * @param string                         $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrMaxCount($array, $max, $message = '')
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<Countable|array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMaxCount(mixed $array, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::maxCount($entry, $max, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param Countable|array|null $array
     * @param int|float            $min
     * @param int|float            $max
     * @param string               $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrCountBetween($array, $min, $max, $message = '')
    {
        null === $array || static::countBetween($array, $min, $max, $message);
    }

    /**
     * @param iterable<Countable|array> $array
     * @param int|float                 $min
     * @param int|float                 $max
     * @param string                    $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allCountBetween($array, $min, $max, $message = '')
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return Countable|array|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrCountBetween(mixed $array, mixed $min, mixed $max, callable|string $message = ''): Countable|array|null
    {
        null === $array || static::countBetween($array, $min, $max, $message);

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<Countable|array>
     *
     * @throws InvalidArgumentException
     */
    public static function allCountBetween(mixed $array, mixed $min, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::countBetween($entry, $min, $max, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @param iterable<Countable|array|null> $array
     * @param int|float                      $min
     * @param int|float                      $max
     * @param string                         $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrCountBetween($array, $min, $max, $message = '')
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @return iterable<Countable|array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrCountBetween(mixed $array, mixed $min, mixed $max, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::countBetween($entry, $min, $max, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert list|null $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsList($array, $message = '')
    {
        null === $array || static::isList($array, $message);
=======
     *
     * @psalm-assert list<mixed>|null $array
     *
     * @param string|callable():string $message
     *
     * @return list<mixed>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsList(mixed $array, callable|string $message = ''): ?array
    {
        null === $array || static::isList($array, $message);

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<list> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsList($array, $message = '')
=======
     *
     * @psalm-assert iterable<list<mixed>> $array
     *
     * @param string|callable():string $message
     *
     * @return iterable<list<mixed>>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsList(mixed $array, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isList($entry, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<list|null> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsList($array, $message = '')
=======
     *
     * @psalm-assert iterable<list<mixed>|null> $array
     *
     * @param string|callable():string $message
     *
     * @return iterable<list<mixed>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsList(mixed $array, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isList($entry, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert non-empty-list|null $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsNonEmptyList($array, $message = '')
    {
        null === $array || static::isNonEmptyList($array, $message);
=======
     *
     * @psalm-assert non-empty-list<mixed>|null $array
     *
     * @param string|callable():string $message
     *
     * @return non-empty-list<mixed>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNonEmptyList(mixed $array, callable|string $message = ''): ?array
    {
        null === $array || static::isNonEmptyList($array, $message);

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<non-empty-list> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsNonEmptyList($array, $message = '')
=======
     *
     * @psalm-assert iterable<non-empty-list<mixed>> $array
     *
     * @param string|callable():string $message
     *
     * @return iterable<non-empty-list<mixed>>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsNonEmptyList(mixed $array, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isNonEmptyList($entry, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable<non-empty-list|null> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsNonEmptyList($array, $message = '')
=======
     *
     * @psalm-assert iterable<non-empty-list<mixed>|null> $array
     *
     * @param string|callable():string $message
     *
     * @return iterable<non-empty-list<mixed>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNonEmptyList(mixed $array, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isNonEmptyList($entry, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template T
     * @psalm-param mixed|array<T>|null $array
     * @psalm-assert array<string, T>|null $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsMap($array, $message = '')
    {
        null === $array || static::isMap($array, $message);
=======
     *
     * @template T
     * @psalm-assert array<string, T>|null $array
     *
     * @param mixed|array<array-key, T>|null $array
     * @param string|callable():string       $message
     *
     * @return array<string, T>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsMap(mixed $array, callable|string $message = ''): ?array
    {
        null === $array || static::isMap($array, $message);

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template T
     * @psalm-param iterable<mixed|array<T>> $array
     * @psalm-assert iterable<array<string, T>> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsMap($array, $message = '')
=======
     *
     * @template T
     * @psalm-assert iterable<array<string, T>> $array
     *
     * @param iterable<mixed|array<array-key, T>> $array
     * @param string|callable():string            $message
     *
     * @return iterable<array<string, T>>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsMap(mixed $array, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isMap($entry, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template T
     * @psalm-param iterable<mixed|array<T>|null> $array
     * @psalm-assert iterable<array<string, T>|null> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsMap($array, $message = '')
=======
     *
     * @template T
     * @psalm-assert iterable<array<string, T>|null> $array
     *
     * @param iterable<mixed|array<array-key, T>|null> $array
     * @param string|callable():string                 $message
     *
     * @return iterable<array<string, T>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsMap(mixed $array, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isMap($entry, $message);
        }
<<<<<<< HEAD
=======

        return $array;
    }

    /**
     * @param callable|null            $callable
     * @param string|callable():string $message
     *
     * @return Closure|callable-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsStatic(mixed $callable, callable|string $message = ''): Closure|string|null
    {
        null === $callable || static::isStatic($callable, $message);

        return $callable;
    }

    /**
     * @param iterable<callable>       $callable
     * @param string|callable():string $message
     *
     * @return iterable<Closure|callable-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsStatic(mixed $callable, callable|string $message = ''): iterable
    {
        static::isIterable($callable);

        foreach ($callable as $entry) {
            static::isStatic($entry, $message);
        }

        return $callable;
    }

    /**
     * @param iterable<callable|null>  $callable
     * @param string|callable():string $message
     *
     * @return iterable<Closure|callable-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsStatic(mixed $callable, callable|string $message = ''): iterable
    {
        static::isIterable($callable);

        foreach ($callable as $entry) {
            null === $entry || static::isStatic($entry, $message);
        }

        return $callable;
    }

    /**
     * @param callable|null            $callable
     * @param string|callable():string $message
     *
     * @return Closure|callable-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotStatic(mixed $callable, callable|string $message = ''): Closure|string|null
    {
        null === $callable || static::notStatic($callable, $message);

        return $callable;
    }

    /**
     * @param iterable<callable>       $callable
     * @param string|callable():string $message
     *
     * @return iterable<Closure|callable-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotStatic(mixed $callable, callable|string $message = ''): iterable
    {
        static::isIterable($callable);

        foreach ($callable as $entry) {
            static::notStatic($entry, $message);
        }

        return $callable;
    }

    /**
     * @param iterable<callable|null>  $callable
     * @param string|callable():string $message
     *
     * @return iterable<Closure|callable-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotStatic(mixed $callable, callable|string $message = ''): iterable
    {
        static::isIterable($callable);

        foreach ($callable as $entry) {
            null === $entry || static::notStatic($entry, $message);
        }

        return $callable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template T
     * @psalm-param mixed|array<T>|null $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrIsNonEmptyMap($array, $message = '')
    {
        null === $array || static::isNonEmptyMap($array, $message);
=======
     *
     * @template T
     *
     * @param array<string, T>|null    $array
     * @param string|callable():string $message
     *
     * @return non-empty-array<string, T>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNonEmptyMap(mixed $array, callable|string $message = ''): ?array
    {
        null === $array || static::isNonEmptyMap($array, $message);

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template T
     * @psalm-param iterable<mixed|array<T>> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allIsNonEmptyMap($array, $message = '')
=======
     *
     * @template T
     *
     * @param iterable<array<string, T>> $array
     * @param string|callable():string   $message
     *
     * @return iterable<non-empty-array<string, T>>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsNonEmptyMap(mixed $array, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isNonEmptyMap($entry, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template T
     * @psalm-param iterable<mixed|array<T>|null> $array
     * @psalm-assert iterable<array<string, T>|null> $array
     * @psalm-assert iterable<!empty|null> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrIsNonEmptyMap($array, $message = '')
=======
     *
     * @template T
     * @psalm-assert iterable<array<string, T>|null> $array
     * @psalm-assert iterable<!empty|null> $array
     *
     * @param iterable<array<string, T>|null> $array
     * @param string|callable():string        $message
     *
     * @return iterable<non-empty-array<string, T>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNonEmptyMap(mixed $array, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isNonEmptyMap($entry, $message);
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrUuid($value, $message = '')
    {
        null === $value || static::uuid($value, $message);
=======
     * @param string|callable():string $message
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUuid(mixed $value, callable|string $message = ''): ?string
    {
        null === $value || static::uuid($value, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allUuid($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allUuid(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::uuid($entry, $message);
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param iterable<string|null> $value
     * @param string                $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrUuid($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUuid(mixed $value, callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::uuid($entry, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @param Closure|null $expression
     * @param string       $class
     * @param string       $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrThrows($expression, $class = 'Exception', $message = '')
    {
        null === $expression || static::throws($expression, $class, $message);
    }

    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @param iterable<Closure> $expression
     * @param string            $class
     * @param string            $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allThrows($expression, $class = 'Exception', $message = '')
=======

        return $value;
    }

    /**
     * @template T as callable
     *
     * @param T|null                   $expression
     * @param class-string<Throwable>  $class
     * @param string|callable():string $message
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrThrows(mixed $expression, string $class = 'Throwable', callable|string $message = ''): ?callable
    {
        null === $expression || static::throws($expression, $class, $message);

        return $expression;
    }

    /**
     * @template T as callable
     *
     * @param iterable<T>              $expression
     * @param class-string<Throwable>  $class
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allThrows(mixed $expression, string $class = 'Throwable', callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($expression);

        foreach ($expression as $entry) {
            static::throws($entry, $class, $message);
        }
<<<<<<< HEAD
    }

    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @param iterable<Closure|null> $expression
     * @param string                 $class
     * @param string                 $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allNullOrThrows($expression, $class = 'Exception', $message = '')
=======

        return $expression;
    }

    /**
     * @template T as callable|null
     *
     * @param iterable<T>              $expression
     * @param class-string<Throwable>  $class
     * @param string|callable():string $message
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrThrows(mixed $expression, string $class = 'Throwable', callable|string $message = ''): iterable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::isIterable($expression);

        foreach ($expression as $entry) {
            null === $entry || static::throws($entry, $class, $message);
        }
<<<<<<< HEAD
=======

        return $expression;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
