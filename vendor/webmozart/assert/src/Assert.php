<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/*
 * This file is part of the webmozart/assert package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Assert;

use ArrayAccess;
<<<<<<< HEAD
use BadMethodCallException;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Closure;
use Countable;
use DateTime;
use DateTimeImmutable;
<<<<<<< HEAD
use Exception;
use ResourceBundle;
use SimpleXMLElement;
=======
use ReflectionFunction;
use ReflectionProperty;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Throwable;
use Traversable;

/**
 * Efficient assertions to validate the input/output of your methods.
 *
 * @since  1.0
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Assert
{
    use Mixin;

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert string $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function string($value, $message = '')
    {
        if (!\is_string($value)) {
=======
     *
     * @psalm-assert string $value
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function string(mixed $value, string|callable $message = ''): string
    {
        if (!\is_string($value)) {
            $message = static::resolveMessage($message);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a string. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert non-empty-string $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function stringNotEmpty($value, $message = '')
    {
        static::string($value, $message);
        static::notEq($value, '', $message);
=======
     *
     * @psalm-assert non-empty-string $value
     * @param string|callable():string $message
     *
     * @return non-empty-string
     *
     * @throws InvalidArgumentException
     */
    public static function stringNotEmpty(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);
        static::notSame($value, '', $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert int $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function integer($value, $message = '')
    {
        if (!\is_int($value)) {
=======
     *
     * @psalm-assert int $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function integer(mixed $value, string|callable $message = ''): int
    {
        if (!\is_int($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an integer. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert numeric $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function integerish($value, $message = '')
    {
        if (!\is_numeric($value) || $value != (int) $value) {
=======
     *
     * @psalm-assert numeric $value
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function integerish(mixed $value, string|callable $message = ''): int|float|string
    {
        if (!\is_numeric($value) || $value != (int) $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an integerish value. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert positive-int $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function positiveInteger($value, $message = '')
    {
        if (!(\is_int($value) && $value > 0)) {
=======
     *
     * @psalm-assert positive-int $value
     *
     * @param string|callable():string $message
     *
     * @return positive-int
     *
     * @throws InvalidArgumentException
     */
    public static function positiveInteger(mixed $value, string|callable $message = ''): int
    {
        static::integer($value, $message);

        if ($value < 1) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a positive integer. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert float $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function float($value, $message = '')
    {
        if (!\is_float($value)) {
=======
     * @psalm-assert non-negative-int $value
     * @param string|callable():string $message
     *
     * @return non-negative-int
     *
     * @throws InvalidArgumentException
     */
    public static function notNegativeInteger(mixed $value, string|callable $message = ''): int
    {
        static::integer($value, $message);

        if ($value < 0) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a non negative integer. Got: %s',
                static::valueToString($value)
            ));
        }

        return $value;
    }

    /**
     * @psalm-pure
     * @psalm-assert negative-int $value
     * @param string|callable():string $message
     *
     * @return negative-int
     *
     * @throws InvalidArgumentException
     */
    public static function negativeInteger(mixed $value, string|callable $message = ''): int
    {
        static::integer($value, $message);

        if ($value >= 0) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a negative integer. Got: %s',
                static::valueToString($value)
            ));
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert float $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function float(mixed $value, string|callable $message = ''): float
    {
        if (!\is_float($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a float. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert numeric $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function numeric($value, $message = '')
    {
        if (!\is_numeric($value)) {
=======
     *
     * @psalm-assert numeric $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function numeric(mixed $value, string|callable $message = ''): int|float|string
    {
        if (!\is_numeric($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a numeric. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert positive-int|0 $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function natural($value, $message = '')
    {
        if (!\is_int($value) || $value < 0) {
=======
     *
     * @psalm-assert positive-int|0 $value
     *
     * @param string|callable():string $message
     *
     * @return positive-int|0
     *
     * @throws InvalidArgumentException
     */
    public static function natural(mixed $value, string|callable $message = ''): int
    {
        if (!\is_int($value) || $value < 0) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a non-negative integer. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert bool $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function boolean($value, $message = '')
    {
        if (!\is_bool($value)) {
=======
     *
     * @psalm-assert bool $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function boolean(mixed $value, string|callable $message = ''): bool
    {
        if (!\is_bool($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a boolean. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert scalar $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function scalar($value, $message = '')
    {
        if (!\is_scalar($value)) {
=======
     *
     * @psalm-assert scalar $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function scalar(mixed $value, string|callable $message = ''): int|bool|float|string
    {
        if (!\is_scalar($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a scalar. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert object $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function object($value, $message = '')
    {
        if (!\is_object($value)) {
=======
     *
     * @psalm-assert object $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function object(mixed $value, string|callable $message = ''): object
    {
        if (!\is_object($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an object. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert resource $value
     *
     * @param mixed       $value
     * @param string|null $type    type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function resource($value, $type = null, $message = '')
    {
        if (!\is_resource($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a resource. Got: %s',
=======
     *
     * @psalm-assert object|class-string $value
     *
     * @param string|callable():string $message
     *
     * @return object|class-string
     *
     * @throws InvalidArgumentException
     */
    public static function objectish(mixed $value, string|callable $message = ''): object|string
    {
        if (!\is_object($value) && !\is_string($value)) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an objectish value. Got: %s',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                static::typeToString($value)
            ));
        }

<<<<<<< HEAD
        if ($type && $type !== \get_resource_type($value)) {
=======
        if (\is_string($value) && !\class_exists($value)) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected class to be defined. Got: %s',
                $value
            ));
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert resource $value
     *
     * @param string|callable():string $message
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return resource
     *
     * @throws InvalidArgumentException
     */
    public static function resource(mixed $value, ?string $type = null, string|callable $message = ''): mixed
    {
        if (!\is_resource($value)) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a resource. Got: %s',
                static::typeToString($value),
                $type // User supplied message might include the second placeholder.
            ));
        }

        if ($type && $type !== \get_resource_type($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a resource of type %2$s. Got: %s',
                static::typeToString($value),
                $type
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert callable $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isCallable($value, $message = '')
    {
        if (!\is_callable($value)) {
=======
     *
     * @psalm-assert object $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isInitialized(mixed $value, string $property, string|callable $message = ''): object
    {
        Assert::object($value);

        $reflectionProperty = new ReflectionProperty($value, $property);

        if (!$reflectionProperty->isInitialized($value)) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected property %s to be initialized.',
                $property,
            ));
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert callable $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isCallable(mixed $value, string|callable $message = ''): callable
    {
        if (!\is_callable($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a callable. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert array $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isArray($value, $message = '')
    {
        if (!\is_array($value)) {
=======
     *
     * @psalm-assert array $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isArray(mixed $value, string|callable $message = ''): array
    {
        if (!\is_array($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isTraversable($value, $message = '')
    {
        @\trigger_error(
            \sprintf(
                'The "%s" assertion is deprecated. You should stop using it, as it will soon be removed in 2.0 version. Use "isIterable" or "isInstanceOf" instead.',
                __METHOD__
            ),
            \E_USER_DEPRECATED
        );

        if (!\is_array($value) && !($value instanceof Traversable)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a traversable. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-pure
     * @psalm-assert array|ArrayAccess $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isArrayAccessible($value, $message = '')
    {
        if (!\is_array($value) && !($value instanceof ArrayAccess)) {
=======
     *
     * @psalm-assert array|ArrayAccess $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isArrayAccessible(mixed $value, string|callable $message = ''): array|ArrayAccess
    {
        if (!\is_array($value) && !($value instanceof ArrayAccess)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array accessible. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert countable $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isCountable($value, $message = '')
    {
        if (
            !\is_array($value)
            && !($value instanceof Countable)
            && !($value instanceof ResourceBundle)
            && !($value instanceof SimpleXMLElement)
        ) {
=======
     *
     * @psalm-assert countable $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isCountable(mixed $value, string|callable $message = ''): array|Countable
    {
        if (!\is_array($value) && !($value instanceof Countable)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a countable. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert iterable $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isIterable($value, $message = '')
    {
        if (!\is_array($value) && !($value instanceof Traversable)) {
=======
     *
     * @psalm-assert iterable $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isIterable(mixed $value, string|callable $message = ''): iterable
    {
        if (!\is_array($value) && !($value instanceof Traversable)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an iterable. Got: %s',
                static::typeToString($value)
            ));
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
     * @psalm-assert ExpectedType $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function isInstanceOf($value, $class, $message = '')
    {
        if (!($value instanceof $class)) {
=======
     *
     * @template T of object
     *
     * @psalm-assert T $value
     *
     * @param string|callable():string $message
     * @param class-string<T> $class
     *
     * @return T
     *
     * @throws InvalidArgumentException
     */
    public static function isInstanceOf(mixed $value, mixed $class, string|callable $message = ''): object
    {
        static::string($class, 'Expected class as a string. Got: %s');

        if (!($value instanceof $class)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an instance of %2$s. Got: %s',
                static::typeToString($value),
                $class
            ));
        }
<<<<<<< HEAD
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert !ExpectedType $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function notInstanceOf($value, $class, $message = '')
    {
        if ($value instanceof $class) {
=======

        return $value;
    }

    /**
     * @template T of object
     *
     * @psalm-assert object $value
     *
     * @param string|callable():string $message
     * @param class-string<T> $class
     *
     * @throws InvalidArgumentException
     */
    public static function notInstanceOf(mixed $value, mixed $class, string|callable $message = ''): object
    {
        static::string($class, 'Expected class as a string. Got: %s');

        if (!\is_object($value) || $value instanceof $class) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an instance other than %2$s. Got: %s',
                static::typeToString($value),
                $class
            ));
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
     */
    public static function isInstanceOfAny($value, array $classes, $message = '')
    {
        foreach ($classes as $class) {
            if ($value instanceof $class) {
                return;
            }
        }

        static::reportInvalidArgument(\sprintf(
            $message ?: 'Expected an instance of any of %2$s. Got: %s',
            static::typeToString($value),
            \implode(', ', \array_map(array(static::class, 'valueToString'), $classes))
=======

        return $value;
    }

    /**
     * @template T of object
     *
     * @psalm-assert T $value
     *
     * @param iterable<class-string<T>> $classes
     * @param string|callable():string $message
     *
     * @return T
     *
     * @throws InvalidArgumentException
     */
    public static function isInstanceOfAny(mixed $value, mixed $classes, string|callable $message = ''): object
    {
        static::isIterable($classes);

        foreach ($classes as $class) {
            static::string($class, 'Expected class as a string. Got: %s');

            if ($value instanceof $class) {
                return $value;
            }
        }

        $message = self::resolveMessage($message);
        static::reportInvalidArgument(\sprintf(
            $message ?: 'Expected an instance of any of %2$s. Got: %s',
            static::typeToString($value),
            \implode(', ', \array_map(static::valueToString(...), \iterator_to_array($classes)))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ));
    }

    /**
<<<<<<< HEAD
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert ExpectedType|class-string<ExpectedType> $value
     *
     * @param object|string $value
     * @param string        $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function isAOf($value, $class, $message = '')
=======
     * @template T
     *
     * @psalm-assert object|class-string $value
     *
     * @param T $value
     * @param string|callable():string $message
     *
     * @return T
     *
     * @throws InvalidArgumentException
     */
    public static function isNotInstanceOfAny(mixed $value, mixed $classes, string|callable $message = ''): mixed
    {
        static::isIterable($classes);

        foreach ($classes as $class) {
            static::string($class, 'Expected class as a string. Got: %s');

            if ($value instanceof $class) {
                $message = self::resolveMessage($message);
                static::reportInvalidArgument(\sprintf(
                    $message ?: 'Expected not an instance of %2$s. Got: %s',
                    static::typeToString($value),
                    \implode(', ', \array_map(static::valueToString(...), \iterator_to_array($classes)))
                ));
            }
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T of object
     *
     * @psalm-assert T|class-string<T> $value
     *
     * @param string|callable():string $message
     * @param class-string<T> $class
     *
     * @return T|class-string<T>
     *
     * @throws InvalidArgumentException
     */
    public static function isAOf(mixed $value, mixed $class, string|callable $message = ''): object|string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::string($class, 'Expected class as a string. Got: %s');

        if (!\is_a($value, $class, \is_string($value))) {
<<<<<<< HEAD
            static::reportInvalidArgument(sprintf(
=======
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $message ?: 'Expected an instance of this class or to this class among its parents "%2$s". Got: %s',
                static::valueToString($value),
                $class
            ));
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
     * @psalm-assert !UnexpectedType $value
     * @psalm-assert !class-string<UnexpectedType> $value
     *
     * @param object|string $value
     * @param string        $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function isNotA($value, $class, $message = '')
    {
        static::string($class, 'Expected class as a string. Got: %s');

        if (\is_a($value, $class, \is_string($value))) {
            static::reportInvalidArgument(sprintf(
=======
     *
     * @template T
     *
     * @psalm-assert object|class-string $value
     *
     * @param T $value
     * @param string|callable():string $message
     *
     * @return object|class-string
     *
     * @throws InvalidArgumentException
     */
    public static function isNotA(mixed $value, mixed $class, string|callable $message = ''): object|string
    {
        static::objectish($value, $message);
        static::string($class, 'Expected class as a string. Got: %s');

        if (\is_a($value, $class, \is_string($value))) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $message ?: 'Expected an instance of this class or to this class among its parents other than "%2$s". Got: %s',
                static::valueToString($value),
                $class
            ));
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
     * @param object|string $value
     * @param string[]      $classes
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function isAnyOf($value, array $classes, $message = '')
    {
=======
     *
     * @psalm-assert T $value
     *
     * @template T as object
     *
     * @param array<class-string<T>> $classes
     * @param string|callable():string $message
     *
     * @return T
     * @throws InvalidArgumentException
     */
    public static function isAnyOf(mixed $value, mixed $classes, string|callable $message = ''): object|string
    {
        static::objectish($value, $message);
        static::isIterable($classes);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        foreach ($classes as $class) {
            static::string($class, 'Expected class as a string. Got: %s');

            if (\is_a($value, $class, \is_string($value))) {
<<<<<<< HEAD
                return;
            }
        }

        static::reportInvalidArgument(sprintf(
            $message ?: 'Expected an instance of any of this classes or any of those classes among their parents "%2$s". Got: %s',
            static::valueToString($value),
            \implode(', ', $classes)
=======
                return $value;
            }
        }

        $message = self::resolveMessage($message);
        static::reportInvalidArgument(\sprintf(
            $message ?: 'Expected an instance of any of this classes or any of those classes among their parents "%2$s". Got: %s',
            static::valueToString($value),
            \implode(', ', \iterator_to_array($classes))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ));
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
     */
    public static function isEmpty($value, $message = '')
    {
        if (!empty($value)) {
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
    public static function isEmpty(mixed $value, string|callable $message = ''): mixed
    {
        if (!empty($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an empty value. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert !empty $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notEmpty($value, $message = '')
    {
        if (empty($value)) {
=======
     *
     * @psalm-assert !empty $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notEmpty(mixed $value, string|callable $message = ''): mixed
    {
        if (empty($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a non-empty value. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function null($value, $message = '')
    {
        if (null !== $value) {
=======
     *
     * @psalm-assert null $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function null(mixed $value, string|callable $message = ''): null
    {
        if (null !== $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected null. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert !null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notNull($value, $message = '')
    {
        if (null === $value) {
=======
     *
     * @psalm-assert !null $value
     *
     * @param string|callable():string $message
     *
     * @template T
     * @param T|null $value
     * @return T
     * @throws InvalidArgumentException
     */
    public static function notNull(mixed $value, string|callable $message = ''): mixed
    {
        if (null === $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(
                $message ?: 'Expected a value other than null.'
            );
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert true $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function true($value, $message = '')
    {
        if (true !== $value) {
=======
     *
     * @psalm-assert true $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function true(mixed $value, string|callable $message = ''): true
    {
        if (true !== $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be true. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert false $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function false($value, $message = '')
    {
        if (false !== $value) {
=======
     *
     * @psalm-assert false $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function false(mixed $value, string|callable $message = ''): false
    {
        if (false !== $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be false. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert !false $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notFalse($value, $message = '')
    {
        if (false === $value) {
=======
     *
     * @psalm-assert !false $value
     *
     * @param string|callable():string $message
     *
     * @template T
     * @param T|false $value
     * @return T
     * @throws InvalidArgumentException
     */
    public static function notFalse(mixed $value, string|callable $message = ''): mixed
    {
        if (false === $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(
                $message ?: 'Expected a value other than false.'
            );
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function ip($value, $message = '')
    {
        if (false === \filter_var($value, \FILTER_VALIDATE_IP)) {
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     * @param string $value
     *
     * @throws InvalidArgumentException
     */
    public static function ip(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        if (false === \filter_var($value, \FILTER_VALIDATE_IP)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be an IP. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function ipv4($value, $message = '')
    {
        if (false === \filter_var($value, \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV4)) {
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     * @param string $value
     *
     * @throws InvalidArgumentException
     */
    public static function ipv4(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        if (false === \filter_var($value, \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV4)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be an IPv4. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function ipv6($value, $message = '')
    {
        if (false === \filter_var($value, \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV6)) {
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     * @param string $value
     *
     * @throws InvalidArgumentException
     */
    public static function ipv6(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        if (false === \filter_var($value, \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV6)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be an IPv6. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function email($value, $message = '')
    {
        if (false === \filter_var($value, FILTER_VALIDATE_EMAIL)) {
=======

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     * @param string $value
     *
     * @throws InvalidArgumentException
     */
    public static function email(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        if (false === \filter_var($value, FILTER_VALIDATE_EMAIL, FILTER_FLAG_EMAIL_UNICODE)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be a valid e-mail address. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
    }

    /**
     * Does non strict comparisons on the items, so ['3', 3] will not pass the assertion.
     *
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function uniqueValues(array $values, $message = '')
    {
=======

        return $value;
    }

    /**
     * Does non-strict comparisons on the items, so ['3', 3] will not pass the assertion.
     * Note: objects with identical properties are also considered equal.
     *
     * @psalm-assert array $values
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function uniqueValues(mixed $values, string|callable $message = ''): array
    {
        static::isArray($values);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $allValues = \count($values);
        $uniqueValues = \count(\array_unique($values));

        if ($allValues !== $uniqueValues) {
            $difference = $allValues - $uniqueValues;

<<<<<<< HEAD
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array of unique values, but %s of them %s duplicated',
                $difference,
                (1 === $difference ? 'is' : 'are')
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function eq($value, $expect, $message = '')
    {
        if ($expect != $value) {
=======
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array of unique values, but %s of them %s duplicated',
                $difference,
                1 === $difference ? 'is' : 'are'
            ));
        }

        return $values;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function eq(mixed $value, mixed $expect, string|callable $message = ''): mixed
    {
        if ($expect != $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($expect)
            ));
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notEq($value, $expect, $message = '')
    {
        if ($expect == $value) {
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notEq(mixed $value, mixed $expect, string|callable $message = ''): mixed
    {
        if ($expect == $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a different value than %s.',
                static::valueToString($expect)
            ));
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
     */
    public static function same($value, $expect, $message = '')
    {
        if ($expect !== $value) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function same(mixed $value, mixed $expect, string|callable $message = ''): mixed
    {
        if ($expect !== $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value identical to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($expect)
            ));
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
     */
    public static function notSame($value, $expect, $message = '')
    {
        if ($expect === $value) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notSame(mixed $value, mixed $expect, string|callable $message = ''): mixed
    {
        if ($expect === $value) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value not identical to %s.',
                static::valueToString($expect)
            ));
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
     */
    public static function greaterThan($value, $limit, $message = '')
    {
        if ($value <= $limit) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function greaterThan(mixed $value, mixed $limit, string|callable $message = ''): mixed
    {
        if ($value <= $limit) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value greater than %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
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
     */
    public static function greaterThanEq($value, $limit, $message = '')
    {
        if ($value < $limit) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function greaterThanEq(mixed $value, mixed $limit, string|callable $message = ''): mixed
    {
        if ($value < $limit) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value greater than or equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
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
     */
    public static function lessThan($value, $limit, $message = '')
    {
        if ($value >= $limit) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function lessThan(mixed $value, mixed $limit, string|callable $message = ''): mixed
    {
        if ($value >= $limit) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value less than %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
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
     */
    public static function lessThanEq($value, $limit, $message = '')
    {
        if ($value > $limit) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function lessThanEq(mixed $value, mixed $limit, string|callable $message = ''): mixed
    {
        if ($value > $limit) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value less than or equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Inclusive range, so Assert::(3, 3, 5) passes.
     *
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function range($value, $min, $max, $message = '')
    {
        if ($value < $min || $value > $max) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function range(mixed $value, mixed $min, mixed $max, string|callable $message = ''): mixed
    {
        if ($value < $min || $value > $max) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value between %2$s and %3$s. Got: %s',
                static::valueToString($value),
                static::valueToString($min),
                static::valueToString($max)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * A more human-readable alias of Assert::inArray().
     *
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function oneOf($value, array $values, $message = '')
    {
        static::inArray($value, $values, $message);
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function oneOf(mixed $value, mixed $values, string|callable $message = ''): mixed
    {
        static::inArray($value, $values, $message);

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Does strict comparison, so Assert::inArray(3, ['3']) does not pass the assertion.
     *
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function inArray($value, array $values, $message = '')
    {
        if (!\in_array($value, $values, true)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected one of: %2$s. Got: %s',
                static::valueToString($value),
                \implode(', ', \array_map(array(static::class, 'valueToString'), $values))
            ));
        }
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function inArray(mixed $value, mixed $values, string|callable $message = ''): mixed
    {
        static::isArray($values);

        if (!\in_array($value, $values, true)) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected one of: %2$s. Got: %s',
                static::valueToString($value),
                \implode(', ', \array_map(static::valueToString(...), $values))
            ));
        }

        return $value;
    }

    /**
     * A more human-readable alias of Assert::notInArray().
     *
     * @psalm-pure
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notOneOf(mixed $value, mixed $values, string|callable $message = ''): mixed
    {
        static::notInArray($value, $values, $message);

        return $value;
    }

    /**
     * Check that a value is not present
     *
     * Does strict comparison, so Assert::notInArray(3, [1, 2, 3]) will not pass
     * the assertion, but Assert::notInArray(3, ['3']) will.
     *
     * @psalm-pure
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notInArray(mixed $value, mixed $values, string|callable $message = ''): mixed
    {
        static::isArray($values);

        if (\in_array($value, $values, true)) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: '%2$s was not expected to contain a value. Got: %s',
                static::valueToString($value),
                \implode(', ', \array_map(static::valueToString(...), $values))
            ));
        }

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string $value
     * @param string $subString
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function contains($value, $subString, $message = '')
    {
        if (false === \strpos($value, $subString)) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function contains(mixed $value, mixed $subString, string|callable $message = ''): string
    {
        static::string($value);
        static::string($subString);

        if (!\str_contains($value, $subString)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($subString)
            ));
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
     * @param string $value
     * @param string $subString
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notContains($value, $subString, $message = '')
    {
        if (false !== \strpos($value, $subString)) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notContains(mixed $value, mixed $subString, string|callable $message = ''): string
    {
        static::string($value);
        static::string($subString);

        if (\str_contains($value, $subString)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: '%2$s was not expected to be contained in a value. Got: %s',
                static::valueToString($value),
                static::valueToString($subString)
            ));
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
     * @param string $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notWhitespaceOnly($value, $message = '')
    {
        if (\preg_match('/^\s*$/', $value)) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notWhitespaceOnly(mixed $value, string|callable $message = ''): string
    {
        static::string($value);

        if (\preg_match('/^\s*$/', $value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a non-whitespace string. Got: %s',
                static::valueToString($value)
            ));
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
     * @param string $value
     * @param string $prefix
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function startsWith($value, $prefix, $message = '')
    {
        if (0 !== \strpos($value, $prefix)) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function startsWith(mixed $value, mixed $prefix, string|callable $message = ''): string
    {
        static::string($value);
        static::string($prefix);

        if (!\str_starts_with($value, $prefix)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to start with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($prefix)
            ));
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
     * @param string $value
     * @param string $prefix
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notStartsWith($value, $prefix, $message = '')
    {
        if (0 === \strpos($value, $prefix)) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notStartsWith(mixed $value, mixed $prefix, string|callable $message = ''): string
    {
        static::string($value);
        static::string($prefix);

        if (\str_starts_with($value, $prefix)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value not to start with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($prefix)
            ));
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
     */
    public static function startsWithLetter($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function startsWithLetter(mixed $value, string|callable $message = ''): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::string($value);

        $valid = isset($value[0]);

        if ($valid) {
<<<<<<< HEAD
            $locale = \setlocale(LC_CTYPE, 0);
=======
            $locale = \setlocale(LC_CTYPE, '0');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            \setlocale(LC_CTYPE, 'C');
            $valid = \ctype_alpha($value[0]);
            \setlocale(LC_CTYPE, $locale);
        }

        if (!$valid) {
<<<<<<< HEAD
=======
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to start with a letter. Got: %s',
                static::valueToString($value)
            ));
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
     * @param string $value
     * @param string $suffix
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function endsWith($value, $suffix, $message = '')
    {
        if ($suffix !== \substr($value, -\strlen($suffix))) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function endsWith(mixed $value, mixed $suffix, string|callable $message = ''): string
    {
        static::string($value);
        static::string($suffix);

        if (!\str_ends_with($value, $suffix)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to end with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($suffix)
            ));
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
     * @param string $value
     * @param string $suffix
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notEndsWith($value, $suffix, $message = '')
    {
        if ($suffix === \substr($value, -\strlen($suffix))) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notEndsWith(mixed $value, mixed $suffix, string|callable $message = ''): string
    {
        static::string($value);
        static::string($suffix);

        if (\str_ends_with($value, $suffix)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value not to end with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($suffix)
            ));
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
     * @param string $value
     * @param string $pattern
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function regex($value, $pattern, $message = '')
    {
        if (!\preg_match($pattern, $value)) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function regex(mixed $value, mixed $pattern, string|callable $message = ''): string
    {
        static::string($value);
        static::string($pattern);

        if (!\preg_match($pattern, $value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The value %s does not match the expected pattern.',
                static::valueToString($value)
            ));
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
     * @param string $value
     * @param string $pattern
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notRegex($value, $pattern, $message = '')
    {
        if (\preg_match($pattern, $value, $matches, PREG_OFFSET_CAPTURE)) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notRegex(mixed $value, mixed $pattern, string|callable $message = ''): string
    {
        static::string($value);
        static::string($pattern);

        if (\preg_match($pattern, $value, $matches, PREG_OFFSET_CAPTURE)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The value %s matches the pattern %s (at offset %d).',
                static::valueToString($value),
                static::valueToString($pattern),
                $matches[0][1]
            ));
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
     */
    public static function unicodeLetters($value, $message = '')
    {
        static::string($value);

        if (!\preg_match('/^\p{L}+$/u', $value)) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function unicodeLetters(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        if (!\preg_match('/^\p{L}+$/u', $value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain only Unicode letters. Got: %s',
                static::valueToString($value)
            ));
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
     */
    public static function alpha($value, $message = '')
    {
        static::string($value);

        $locale = \setlocale(LC_CTYPE, 0);
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function alpha(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        $locale = \setlocale(LC_CTYPE, '0');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_alpha($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
<<<<<<< HEAD
=======
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain only letters. Got: %s',
                static::valueToString($value)
            ));
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
     * @param string $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function digits($value, $message = '')
    {
        $locale = \setlocale(LC_CTYPE, 0);
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function digits(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        $locale = \setlocale(LC_CTYPE, '0');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_digit($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
<<<<<<< HEAD
=======
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain digits only. Got: %s',
                static::valueToString($value)
            ));
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
     * @param string $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function alnum($value, $message = '')
    {
        $locale = \setlocale(LC_CTYPE, 0);
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function alnum(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        $locale = \setlocale(LC_CTYPE, '0');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_alnum($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
<<<<<<< HEAD
=======
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain letters and digits only. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert lowercase-string $value
     *
     * @param string $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function lower($value, $message = '')
    {
        $locale = \setlocale(LC_CTYPE, 0);
=======
     *
     * @psalm-assert lowercase-string $value
     *
     * @param string|callable():string $message
     *
     * @return lowercase-string
     *
     * @throws InvalidArgumentException
     */
    public static function lower(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        $locale = \setlocale(LC_CTYPE, '0');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_lower($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
<<<<<<< HEAD
=======
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain lowercase characters only. Got: %s',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert !lowercase-string $value
     *
     * @param string $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function upper($value, $message = '')
    {
        $locale = \setlocale(LC_CTYPE, 0);
=======
     *
     * @psalm-assert string $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function upper(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        $locale = \setlocale(LC_CTYPE, '0');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_upper($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
<<<<<<< HEAD
=======
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain uppercase characters only. Got: %s',
                static::valueToString($value)
            ));
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
     * @param string $value
     * @param int    $length
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function length($value, $length, $message = '')
    {
        if ($length !== static::strlen($value)) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function length(mixed $value, mixed $length, string|callable $message = ''): string
    {
        static::string($value);
        static::integerish($length);

        if ($length !== static::strlen($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain %2$s characters. Got: %s',
                static::valueToString($value),
                $length
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Inclusive min.
     *
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string    $value
     * @param int|float $min
     * @param string    $message
     *
     * @throws InvalidArgumentException
     */
    public static function minLength($value, $min, $message = '')
    {
        if (static::strlen($value) < $min) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function minLength(mixed $value, mixed $min, string|callable $message = ''): string
    {
        static::string($value);
        static::integerish($min);

        if (static::strlen($value) < $min) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain at least %2$s characters. Got: %s',
                static::valueToString($value),
                $min
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Inclusive max.
     *
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string    $value
     * @param int|float $max
     * @param string    $message
     *
     * @throws InvalidArgumentException
     */
    public static function maxLength($value, $max, $message = '')
    {
        if (static::strlen($value) > $max) {
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function maxLength(mixed $value, mixed $max, string|callable $message = ''): string
    {
        static::string($value);
        static::integerish($max);

        if (static::strlen($value) > $max) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain at most %2$s characters. Got: %s',
                static::valueToString($value),
                $max
            ));
        }
<<<<<<< HEAD
    }

    /**
     * Inclusive , so Assert::lengthBetween('asd', 3, 5); passes the assertion.
     *
     * @psalm-pure
     *
     * @param string    $value
     * @param int|float $min
     * @param int|float $max
     * @param string    $message
     *
     * @throws InvalidArgumentException
     */
    public static function lengthBetween($value, $min, $max, $message = '')
    {
        $length = static::strlen($value);

        if ($length < $min || $length > $max) {
=======

        return $value;
    }

    /**
     * Inclusive, so Assert::lengthBetween('asd', 3, 5); passes the assertion.
     *
     * @psalm-pure
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function lengthBetween(mixed $value, mixed $min, mixed $max, string|callable $message = ''): string
    {
        static::string($value);
        static::integerish($min);
        static::integerish($max);

        $length = static::strlen($value);

        if ($length < $min || $length > $max) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain between %2$s and %3$s characters. Got: %s',
                static::valueToString($value),
                $min,
                $max
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Will also pass if $value is a directory, use Assert::file() instead if you need to be sure it is a file.
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function fileExists($value, $message = '')
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function fileExists(mixed $value, string|callable $message = ''): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        static::string($value);

        if (!\file_exists($value)) {
<<<<<<< HEAD
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The file %s does not exist.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function file($value, $message = '')
    {
        static::fileExists($value, $message);

        if (!\is_file($value)) {
=======
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s does not exist.',
                static::valueToString($value)
            ));
        }

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function file(mixed $value, string|callable $message = ''): string
    {
        static::string($value);

        if (!\is_file($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s is not a file.',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function directory($value, $message = '')
    {
        static::fileExists($value, $message);

        if (!\is_dir($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s is no directory.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param string $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function readable($value, $message = '')
    {
        if (!\is_readable($value)) {
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function directory(mixed $value, string|callable $message = ''): string
    {
        static::string($value);

        if (!\is_dir($value)) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s is not a directory.',
                static::valueToString($value)
            ));
        }

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function readable(mixed $value, string|callable $message = ''): string
    {
        static::string($value);

        if (!\is_readable($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s is not readable.',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
    }

    /**
     * @param string $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function writable($value, $message = '')
    {
        if (!\is_writable($value)) {
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function writable(mixed $value, string|callable $message = ''): string
    {
        static::string($value);

        if (!\is_writable($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s is not writable.',
                static::valueToString($value)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-assert class-string $value
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function classExists($value, $message = '')
    {
        if (!\class_exists($value)) {
=======
     * @param string|callable():string $message
     *
     * @return class-string
     *
     * @throws InvalidArgumentException
     */
    public static function classExists(mixed $value, string|callable $message = ''): string
    {
        static::string($value);

        if (!\class_exists($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an existing class name. Got: %s',
                static::valueToString($value)
            ));
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
     * @psalm-assert class-string<ExpectedType>|ExpectedType $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function subclassOf($value, $class, $message = '')
    {
        if (!\is_subclass_of($value, $class)) {
=======
     *
     * @template ExpectedType of object
     *
     * @psalm-assert class-string<ExpectedType> $value
     *
     * @param class-string<ExpectedType> $class
     * @param string|callable():string $message
     *
     * @return class-string<ExpectedType>
     *
     * @throws InvalidArgumentException
     */
    public static function subclassOf(mixed $value, mixed $class, string|callable $message = ''): string
    {
        static::string($value);
        static::string($class);

        if (!\is_subclass_of($value, $class)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a sub-class of %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($class)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-assert class-string $value
     *
<<<<<<< HEAD
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function interfaceExists($value, $message = '')
    {
        if (!\interface_exists($value)) {
=======
     * @param string|callable():string $message
     *
     * @return class-string
     *
     * @throws InvalidArgumentException
     */
    public static function interfaceExists(mixed $value, string|callable $message = ''): string
    {
        static::string($value);

        if (!\interface_exists($value)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an existing interface name. got %s',
                static::valueToString($value)
            ));
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
     * @psalm-assert class-string<ExpectedType> $value
     *
     * @param mixed  $value
     * @param mixed  $interface
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function implementsInterface($value, $interface, $message = '')
    {
        if (!\in_array($interface, \class_implements($value))) {
=======
     *
     * @template ExpectedType of object
     *
     * @psalm-assert class-string<ExpectedType>|ExpectedType $value
     *
     * @param class-string<ExpectedType> $interface
     * @param string|callable():string $message
     *
     * @return class-string<ExpectedType>|ExpectedType
     *
     * @throws InvalidArgumentException
     */
    public static function implementsInterface(mixed $value, mixed $interface, string|callable $message = ''): object|string
    {
        static::objectish($value);

        $implements = \class_implements($value);

        static::isArray($implements);

        if (!\in_array($interface, $implements, true)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an implementation of %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($interface)
            ));
        }
<<<<<<< HEAD
=======

        return $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param class-string|object $classOrObject
     *
     * @param string|object $classOrObject
     * @param mixed         $property
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function propertyExists($classOrObject, $property, $message = '')
    {
        if (!\property_exists($classOrObject, $property)) {
=======
     *
     * @param string|object $classOrObject
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function propertyExists(mixed $classOrObject, mixed $property, string|callable $message = ''): object|string
    {
        static::objectish($classOrObject);

        if (!\property_exists($classOrObject, $property)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the property %s to exist.',
                static::valueToString($property)
            ));
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param class-string|object $classOrObject
     *
     * @param string|object $classOrObject
     * @param mixed         $property
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function propertyNotExists($classOrObject, $property, $message = '')
    {
        if (\property_exists($classOrObject, $property)) {
=======
     *
     * @template T as class-string|object
     * @param T $classOrObject
     * @param string|callable():string $message
     *
     * @return T
     * @throws InvalidArgumentException
     */
    public static function propertyNotExists(mixed $classOrObject, mixed $property, string|callable $message = ''): mixed
    {
        if (!(\is_string($classOrObject) || \is_object($classOrObject)) || \property_exists($classOrObject, $property)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the property %s to not exist.',
                static::valueToString($property)
            ));
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param class-string|object $classOrObject
     *
     * @param string|object $classOrObject
     * @param mixed         $method
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function methodExists($classOrObject, $method, $message = '')
    {
        if (!(\is_string($classOrObject) || \is_object($classOrObject)) || !\method_exists($classOrObject, $method)) {
=======
     *
     * @template T as class-string|object
     * @param T $classOrObject
     * @param string|callable():string $message
     *
     * @return T
     * @throws InvalidArgumentException
     */
    public static function methodExists(mixed $classOrObject, mixed $method, string|callable $message = ''): object|string
    {
        static::objectish($classOrObject);

        if (!\method_exists($classOrObject, $method)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the method %s to exist.',
                static::valueToString($method)
            ));
        }
<<<<<<< HEAD
=======

        return $classOrObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-param class-string|object $classOrObject
     *
     * @param string|object $classOrObject
     * @param mixed         $method
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function methodNotExists($classOrObject, $method, $message = '')
    {
        if ((\is_string($classOrObject) || \is_object($classOrObject)) && \method_exists($classOrObject, $method)) {
=======
     *
     * @template T as class-string|object
     * @param T $classOrObject
     * @param string|callable():string $message
     *
     * @return T
     * @throws InvalidArgumentException
     */
    public static function methodNotExists(mixed $classOrObject, mixed $method, string|callable $message = ''): mixed
    {
        static::objectish($classOrObject);

        if (\method_exists($classOrObject, $method)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the method %s to not exist.',
                static::valueToString($method)
            ));
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
     * @param array      $array
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
     */
    public static function keyExists($array, $key, $message = '')
    {
        if (!(isset($array[$key]) || \array_key_exists($key, $array))) {
=======
     * @param string|int $key
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function keyExists(mixed $array, string|int $key, string|callable $message = ''): array
    {
        static::isArray($array, $message);

        if (!(isset($array[$key]) || \array_key_exists($key, $array))) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the key %s to exist.',
                static::valueToString($key)
            ));
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
     * @param array      $array
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
     */
    public static function keyNotExists($array, $key, $message = '')
    {
        if (isset($array[$key]) || \array_key_exists($key, $array)) {
=======
     * @param string|int $key
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function keyNotExists(mixed $array, string|int $key, string|callable $message = ''): array
    {
        static::isArray($array, $message);

        if (isset($array[$key]) || \array_key_exists($key, $array)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the key %s to not exist.',
                static::valueToString($key)
            ));
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Checks if a value is a valid array key (int or string).
     *
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert array-key $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function validArrayKey($value, $message = '')
    {
        if (!(\is_int($value) || \is_string($value))) {
=======
     *
     * @psalm-assert array-key $value
     *
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function validArrayKey(mixed $value, string|callable $message = ''): string|int
    {
        if (!(\is_int($value) || \is_string($value))) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected string or integer. Got: %s',
                static::typeToString($value)
            ));
        }
<<<<<<< HEAD
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param Countable|array $array
     * @param int             $number
     * @param string          $message
     *
     * @throws InvalidArgumentException
     */
    public static function count($array, $number, $message = '')
    {
        static::eq(
            \count($array),
            $number,
            \sprintf(
=======

        return $value;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function count(mixed $array, mixed $number, string|callable $message = ''): array|Countable
    {
        static::isCountable($array);
        static::integerish($number);

        static::eq(
            \count($array),
            $number,
            fn () => static::resolveMessage($message) ?: \sprintf(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $message ?: 'Expected an array to contain %d elements. Got: %d.',
                $number,
                \count($array)
            )
        );
<<<<<<< HEAD
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param Countable|array $array
     * @param int|float       $min
     * @param string          $message
     *
     * @throws InvalidArgumentException
     */
    public static function minCount($array, $min, $message = '')
    {
        if (\count($array) < $min) {
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function minCount(mixed $array, mixed $min, string|callable $message = ''): array|Countable
    {
        static::isCountable($array);
        static::integerish($min);

        if (\count($array) < $min) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array to contain at least %2$d elements. Got: %d',
                \count($array),
                $min
            ));
        }
<<<<<<< HEAD
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param Countable|array $array
     * @param int|float       $max
     * @param string          $message
     *
     * @throws InvalidArgumentException
     */
    public static function maxCount($array, $max, $message = '')
    {
        if (\count($array) > $max) {
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function maxCount(mixed $array, mixed $max, string|callable $message = ''): array|Countable
    {
        static::isCountable($array);
        static::integerish($max);

        if (\count($array) > $max) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array to contain at most %2$d elements. Got: %d',
                \count($array),
                $max
            ));
        }
<<<<<<< HEAD
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param Countable|array $array
     * @param int|float       $min
     * @param int|float       $max
     * @param string          $message
     *
     * @throws InvalidArgumentException
     */
    public static function countBetween($array, $min, $max, $message = '')
    {
        $count = \count($array);

        if ($count < $min || $count > $max) {
=======

        return $array;
    }

    /**
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function countBetween(mixed $array, mixed $min, mixed $max, string|callable $message = ''): array|Countable
    {
        static::isCountable($array);
        static::integerish($min);
        static::integerish($max);

        $count = \count($array);

        if ($count < $min || $count > $max) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array to contain between %2$d and %3$d elements. Got: %d',
                $count,
                $min,
                $max
            ));
        }
<<<<<<< HEAD
=======

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert list $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isList($array, $message = '')
    {
        if (!\is_array($array)) {
=======
     *
     * @psalm-assert list<mixed> $array
     *
     * @param string|callable():string $message
     *
     * @return list<mixed>
     *
     * @throws InvalidArgumentException
     */
    public static function isList(mixed $array, string|callable $message = ''): array
    {
        if (!\is_array($array) || !\array_is_list($array)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(
                $message ?: 'Expected list - non-associative array.'
            );
        }

<<<<<<< HEAD
        if ($array === \array_values($array)) {
            return;
        }

        $nextKey = -1;
        foreach ($array as $k => $v) {
            if ($k !== ++$nextKey) {
                static::reportInvalidArgument(
                    $message ?: 'Expected list - non-associative array.'
                );
            }
        }
=======
        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-assert non-empty-list $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isNonEmptyList($array, $message = '')
    {
        static::isList($array, $message);
        static::notEmpty($array, $message);
=======
     *
     * @psalm-assert non-empty-list<mixed> $array
     *
     * @param string|callable():string $message
     *
     * @return non-empty-list<mixed>
     *
     * @throws InvalidArgumentException
     */
    public static function isNonEmptyList(mixed $array, string|callable $message = ''): array
    {
        static::isList($array, $message);
        static::notEmpty($array, $message);

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template T
     * @psalm-param mixed|array<T> $array
     * @psalm-assert array<string, T> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isMap($array, $message = '')
    {
        if (
            !\is_array($array) ||
            \array_keys($array) !== \array_filter(\array_keys($array), '\is_string')
        ) {
=======
     *
     * @template T
     *
     * @psalm-assert array<string, T> $array
     *
     * @param mixed|array<array-key, T> $array
     * @param string|callable():string $message
     *
     * @return array<string, T>
     *
     * @throws InvalidArgumentException
     */
    public static function isMap(mixed $array, string|callable $message = ''): array
    {
        static::isArray($array, $message);

        if (\count($array) > 0 && \array_is_list($array)) {
            $message = self::resolveMessage($message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            static::reportInvalidArgument(
                $message ?: 'Expected map - associative array with string keys.'
            );
        }
<<<<<<< HEAD
=======

        return $array;
    }

    /**
     * @param callable $callable
     * @param string|callable():string $message
     *
     * @return Closure|callable-string
     *
     * @throws InvalidArgumentException
     */
    public static function isStatic(mixed $callable, string|callable $message = ''): Closure|string
    {
        static::isCallable($callable, $message);

        $callable = static::callableToClosure($callable);

        $reflection = new ReflectionFunction($callable);

        if (!$reflection->isStatic()) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(
                $message ?: 'Closure is not static.'
            );
        }

        return $callable;
    }

    /**
     * @param callable $callable
     * @param string|callable():string $message
     *
     * @return Closure|callable-string
     *
     * @throws InvalidArgumentException
     */
    public static function notStatic(mixed $callable, string|callable $message = ''): Closure|string
    {
        static::isCallable($callable, $message);

        $callable = static::callableToClosure($callable);

        $reflection = new ReflectionFunction($callable);

        if ($reflection->isStatic()) {
            $message = self::resolveMessage($message);
            static::reportInvalidArgument(
                $message ?: 'Closure is not static.'
            );
        }

        return $callable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
<<<<<<< HEAD
     * @psalm-template T
     * @psalm-param mixed|array<T> $array
     * @psalm-assert array<string, T> $array
     * @psalm-assert !empty $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isNonEmptyMap($array, $message = '')
    {
        static::isMap($array, $message);
        static::notEmpty($array, $message);
=======
     *
     * @template T
     *
     * @psalm-assert array<string, T> $array
     * @psalm-assert !empty $array
     *
     * @param array<string, T> $array
     * @param string|callable():string $message
     *
     * @return non-empty-array<string, T>
     *
     * @throws InvalidArgumentException
     */
    public static function isNonEmptyMap(mixed $array, string|callable $message = ''): array
    {
        static::isMap($array, $message);
        static::notEmpty($array, $message);

        return $array;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function uuid($value, $message = '')
    {
        $value = \str_replace(array('urn:', 'uuid:', '{', '}'), '', $value);

        // The nil UUID is special form of UUID that is specified to have all
        // 128 bits set to zero.
        if ('00000000-0000-0000-0000-000000000000' === $value) {
            return;
        }

        if (!\preg_match('/^[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}$/', $value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Value %s is not a valid UUID.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @param Closure $expression
     * @param string  $class
     * @param string  $message
     *
     * @throws InvalidArgumentException
     */
    public static function throws(Closure $expression, $class = 'Exception', $message = '')
    {
        static::string($class);
=======
     * @param string|callable():string $message
     *
     * @throws InvalidArgumentException
     */
    public static function uuid(mixed $value, string|callable $message = ''): string
    {
        static::string($value, $message);

        $uuid = '[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}';

        // URN form as specified by RFC 9562, e.g. "urn:uuid:ff6f8cb0-...".
        if (\str_starts_with($value, 'urn:uuid:') && \preg_match('/^urn:uuid:'.$uuid.'$/D', $value)) {
            return $value;
        }

        // "uuid:" prefix, optionally combined with the curly-braced form.
        if (\str_starts_with($value, 'uuid:') && \preg_match('/^uuid:(?:'.$uuid.'|\{'.$uuid.'\})$/D', $value)) {
            return $value;
        }

        // Curly-braced form; the braces must be a matching pair.
        if (\str_starts_with($value, '{') && \str_ends_with($value, '}') && \preg_match('/^\{'.$uuid.'\}$/D', $value)) {
            return $value;
        }

        // Plain form, including the nil UUID with all 128 bits set to zero.
        if (\preg_match('/^'.$uuid.'$/D', $value)) {
            return $value;
        }

        $message = self::resolveMessage($message);
        static::reportInvalidArgument(\sprintf(
            $message ?: 'Value %s is not a valid UUID.',
            static::valueToString($value)
        ));
    }

    /**
     * @template T as callable
     *
     * @param T $expression
     * @param string|callable():string $message
     * @param class-string<Throwable> $class
     *
     * @return T
     *
     * @throws InvalidArgumentException
     */
    public static function throws(mixed $expression, string $class = Throwable::class, string|callable $message = ''): callable
    {
        static::string($class);
        static::isCallable($expression);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $actual = 'none';

        try {
            $expression();
<<<<<<< HEAD
        } catch (Exception $e) {
            $actual = \get_class($e);
            if ($e instanceof $class) {
                return;
            }
        } catch (Throwable $e) {
            $actual = \get_class($e);
            if ($e instanceof $class) {
                return;
            }
        }

=======
        } catch (Throwable $e) {
            $actual = \get_class($e);
            if ($e instanceof $class) {
                return $expression;
            }
        }

        $message = self::resolveMessage($message);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        static::reportInvalidArgument($message ?: \sprintf(
            'Expected to throw "%s", got "%s"',
            $class,
            $actual
        ));
    }

    /**
<<<<<<< HEAD
     * @throws BadMethodCallException
     */
    public static function __callStatic($name, $arguments)
    {
        if ('nullOr' === \substr($name, 0, 6)) {
            if (null !== $arguments[0]) {
                $method = \lcfirst(\substr($name, 6));
                \call_user_func_array(array(static::class, $method), $arguments);
            }

            return;
        }

        if ('all' === \substr($name, 0, 3)) {
            static::isIterable($arguments[0]);

            $method = \lcfirst(\substr($name, 3));
            $args = $arguments;

            foreach ($arguments[0] as $entry) {
                $args[0] = $entry;

                \call_user_func_array(array(static::class, $method), $args);
            }

            return;
        }

        throw new BadMethodCallException('No such method: '.$name);
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    protected static function valueToString($value)
=======
     * @psalm-pure
     *
     * @return Closure|callable-string
     */
    protected static function callableToClosure(callable $callable): Closure|string
    {
        if (\is_string($callable) && \function_exists($callable)) {
            return $callable;
        }

        if ($callable instanceof Closure) {
            return $callable;
        }

        return $callable(...);
    }

    /**
     * @psalm-pure
     */
    protected static function valueToString(mixed $value): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if (null === $value) {
            return 'null';
        }

        if (true === $value) {
            return 'true';
        }

        if (false === $value) {
            return 'false';
        }

        if (\is_array($value)) {
            return 'array';
        }

        if (\is_object($value)) {
            if (\method_exists($value, '__toString')) {
                return \get_class($value).': '.self::valueToString($value->__toString());
            }

            if ($value instanceof DateTime || $value instanceof DateTimeImmutable) {
                return \get_class($value).': '.self::valueToString($value->format('c'));
            }

<<<<<<< HEAD
=======
            if (\enum_exists(\get_class($value))) {
                return \get_class($value).'::'.$value->name;
            }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            return \get_class($value);
        }

        if (\is_resource($value)) {
            return 'resource';
        }

        if (\is_string($value)) {
            return '"'.$value.'"';
        }

        return (string) $value;
    }

    /**
<<<<<<< HEAD
     * @param mixed $value
     *
     * @return string
     */
    protected static function typeToString($value)
=======
     * @psalm-pure
     */
    protected static function typeToString(mixed $value): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return \is_object($value) ? \get_class($value) : \gettype($value);
    }

<<<<<<< HEAD
    protected static function strlen($value)
=======
    protected static function strlen(string $value): int
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if (!\function_exists('mb_detect_encoding')) {
            return \strlen($value);
        }

        if (false === $encoding = \mb_detect_encoding($value)) {
            return \strlen($value);
        }

        return \mb_strlen($value, $encoding);
    }

    /**
<<<<<<< HEAD
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @psalm-pure this method is not supposed to perform side-effects
     * @psalm-return never
     */
    protected static function reportInvalidArgument($message)
=======
     * @psalm-pure this method is not supposed to perform side effects
     *
     * @throws InvalidArgumentException
     */
    protected static function reportInvalidArgument(string $message): never
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        throw new InvalidArgumentException($message);
    }

<<<<<<< HEAD
=======
    /**
     * @psalm-pure
     *
     * @param string|callable():string $message
     */
    protected static function resolveMessage(string|callable $message): string
    {
        return \is_callable($message) ? $message() : $message;
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private function __construct()
    {
    }
}
