<?php

declare(strict_types=1);

namespace Doctrine\Common\Collections\Expr;

use ArrayAccess;
use Closure;
<<<<<<< HEAD
use RuntimeException;

use function explode;
=======
use Doctrine\Deprecations\Deprecation;
use ReflectionClass;
use RuntimeException;

use function array_all;
use function array_any;
use function explode;
use function func_get_arg;
use function func_num_args;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function in_array;
use function is_array;
use function is_scalar;
use function iterator_to_array;
use function method_exists;
use function preg_match;
use function preg_replace_callback;
<<<<<<< HEAD
=======
use function sprintf;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function str_contains;
use function str_ends_with;
use function str_starts_with;
use function strtoupper;

<<<<<<< HEAD
=======
use const PHP_VERSION_ID;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Walks an expression graph and turns it into a PHP closure.
 *
 * This closure can be used with {@Collection#filter()} and is used internally
 * by {@ArrayCollection#select()}.
<<<<<<< HEAD
 */
class ClosureExpressionVisitor extends ExpressionVisitor
{
=======
 *
 * @final since 2.5
 */
class ClosureExpressionVisitor extends ExpressionVisitor
{
    public function __construct(
        private readonly bool $accessRawFieldValues = false,
    ) {
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * Accesses the field of a given object. This field has to be public
     * directly or indirectly (through an accessor get*, is*, or a magic
     * method, __get, __call).
     *
     * @param object|mixed[] $object
     *
     * @return mixed
     */
<<<<<<< HEAD
    public static function getObjectFieldValue(object|array $object, string $field)
    {
        if (str_contains($field, '.')) {
            [$field, $subField] = explode('.', $field, 2);
            $object             = self::getObjectFieldValue($object, $field);

            return self::getObjectFieldValue($object, $subField);
=======
    public static function getObjectFieldValue(object|array $object, string $field, /* bool $accessRawFieldValues = false */)
    {
        $accessRawFieldValues = 3 <= func_num_args() ? func_get_arg(2) : false;

        if (str_contains($field, '.')) {
            [$field, $subField] = explode('.', $field, 2);
            $object             = self::getObjectFieldValue($object, $field, $accessRawFieldValues);

            return self::getObjectFieldValue($object, $subField, $accessRawFieldValues);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if (is_array($object)) {
            return $object[$field];
        }

<<<<<<< HEAD
=======
        if ($accessRawFieldValues) {
            return self::getNearestFieldValue($object, $field);
        }

        Deprecation::trigger(
            'doctrine/collections',
            'https://github.com/doctrine/collections/pull/472',
            'Not enabling raw field value access for %s is deprecated. Raw field access will be the only supported method in 3.0',
            __METHOD__,
        );

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $accessors = ['get', 'is', ''];

        foreach ($accessors as $accessor) {
            $accessor .= $field;

            if (method_exists($object, $accessor)) {
                return $object->$accessor();
            }
        }

        if (preg_match('/^is[A-Z]+/', $field) === 1 && method_exists($object, $field)) {
            return $object->$field();
        }

        // __call should be triggered for get.
        $accessor = $accessors[0] . $field;

        if (method_exists($object, '__call')) {
            return $object->$accessor();
        }

        if ($object instanceof ArrayAccess) {
            return $object[$field];
        }

        if (isset($object->$field)) {
            return $object->$field;
        }

        // camelcase field name to support different variable naming conventions
        $ccField = preg_replace_callback('/_(.?)/', static fn ($matches) => strtoupper((string) $matches[1]), $field);

        foreach ($accessors as $accessor) {
            $accessor .= $ccField;

            if (method_exists($object, $accessor)) {
                return $object->$accessor();
            }
        }

        return $object->$field;
    }

<<<<<<< HEAD
=======
    private static function getNearestFieldValue(object $object, string $field): mixed
    {
        $reflectionClass = new ReflectionClass($object);

        while ($reflectionClass && ! $reflectionClass->hasProperty($field)) {
            $reflectionClass = $reflectionClass->getParentClass();
        }

        if ($reflectionClass === false) {
            throw new RuntimeException(sprintf('Field "%s" does not exist in class "%s"', $field, $object::class));
        }

        $property = $reflectionClass->getProperty($field);

        if (PHP_VERSION_ID >= 80400) {
            return $property->getRawValue($object);
        }

        return $property->getValue($object);
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * Helper for sorting arrays of objects based on multiple fields + orientations.
     *
     * @return Closure
     */
<<<<<<< HEAD
    public static function sortByField(string $name, int $orientation = 1, Closure|null $next = null)
    {
=======
    public static function sortByField(string $name, int $orientation = 1, Closure|null $next = null, /* bool $accessRawFieldValues = false */)
    {
        $accessRawFieldValues = 4 <= func_num_args() ? func_get_arg(3) : false;

        if (! $accessRawFieldValues) {
            Deprecation::trigger(
                'doctrine/collections',
                'https://github.com/doctrine/collections/pull/472',
                'Not enabling raw field value access for %s is deprecated. Raw field access will be the only supported method in 3.0',
                __METHOD__,
            );
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (! $next) {
            $next = static fn (): int => 0;
        }

<<<<<<< HEAD
        return static function ($a, $b) use ($name, $next, $orientation): int {
            $aValue = ClosureExpressionVisitor::getObjectFieldValue($a, $name);

            $bValue = ClosureExpressionVisitor::getObjectFieldValue($b, $name);
=======
        return static function ($a, $b) use ($name, $next, $orientation, $accessRawFieldValues): int {
            $aValue = ClosureExpressionVisitor::getObjectFieldValue($a, $name, $accessRawFieldValues);
            $bValue = ClosureExpressionVisitor::getObjectFieldValue($b, $name, $accessRawFieldValues);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            if ($aValue === $bValue) {
                return $next($a, $b);
            }

            return ($aValue > $bValue ? 1 : -1) * $orientation;
        };
    }

    /**
     * {@inheritDoc}
     */
    public function walkComparison(Comparison $comparison)
    {
        $field = $comparison->getField();
        $value = $comparison->getValue()->getValue();

        return match ($comparison->getOperator()) {
<<<<<<< HEAD
            Comparison::EQ => static fn ($object): bool => self::getObjectFieldValue($object, $field) === $value,
            Comparison::NEQ => static fn ($object): bool => self::getObjectFieldValue($object, $field) !== $value,
            Comparison::LT => static fn ($object): bool => self::getObjectFieldValue($object, $field) < $value,
            Comparison::LTE => static fn ($object): bool => self::getObjectFieldValue($object, $field) <= $value,
            Comparison::GT => static fn ($object): bool => self::getObjectFieldValue($object, $field) > $value,
            Comparison::GTE => static fn ($object): bool => self::getObjectFieldValue($object, $field) >= $value,
            Comparison::IN => static function ($object) use ($field, $value): bool {
                $fieldValue = ClosureExpressionVisitor::getObjectFieldValue($object, $field);

                return in_array($fieldValue, $value, is_scalar($fieldValue));
            },
            Comparison::NIN => static function ($object) use ($field, $value): bool {
                $fieldValue = ClosureExpressionVisitor::getObjectFieldValue($object, $field);

                return ! in_array($fieldValue, $value, is_scalar($fieldValue));
            },
            Comparison::CONTAINS => static fn ($object): bool => str_contains((string) self::getObjectFieldValue($object, $field), (string) $value),
            Comparison::MEMBER_OF => static function ($object) use ($field, $value): bool {
                $fieldValues = ClosureExpressionVisitor::getObjectFieldValue($object, $field);
=======
            Comparison::EQ => fn ($object): bool => self::getObjectFieldValue($object, $field, $this->accessRawFieldValues) === $value,
            Comparison::NEQ => fn ($object): bool => self::getObjectFieldValue($object, $field, $this->accessRawFieldValues) !== $value,
            Comparison::LT => fn ($object): bool => self::getObjectFieldValue($object, $field, $this->accessRawFieldValues) < $value,
            Comparison::LTE => fn ($object): bool => self::getObjectFieldValue($object, $field, $this->accessRawFieldValues) <= $value,
            Comparison::GT => fn ($object): bool => self::getObjectFieldValue($object, $field, $this->accessRawFieldValues) > $value,
            Comparison::GTE => fn ($object): bool => self::getObjectFieldValue($object, $field, $this->accessRawFieldValues) >= $value,
            Comparison::IN => function ($object) use ($field, $value): bool {
                $fieldValue = ClosureExpressionVisitor::getObjectFieldValue($object, $field, $this->accessRawFieldValues);

                return in_array($fieldValue, $value, is_scalar($fieldValue));
            },
            Comparison::NIN => function ($object) use ($field, $value): bool {
                $fieldValue = ClosureExpressionVisitor::getObjectFieldValue($object, $field, $this->accessRawFieldValues);

                return ! in_array($fieldValue, $value, is_scalar($fieldValue));
            },
            Comparison::CONTAINS => fn ($object): bool => str_contains((string) self::getObjectFieldValue($object, $field, $this->accessRawFieldValues), (string) $value),
            Comparison::MEMBER_OF => function ($object) use ($field, $value): bool {
                $fieldValues = ClosureExpressionVisitor::getObjectFieldValue($object, $field, $this->accessRawFieldValues);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                if (! is_array($fieldValues)) {
                    $fieldValues = iterator_to_array($fieldValues);
                }

                return in_array($value, $fieldValues, true);
            },
<<<<<<< HEAD
            Comparison::STARTS_WITH => static fn ($object): bool => str_starts_with((string) self::getObjectFieldValue($object, $field), (string) $value),
            Comparison::ENDS_WITH => static fn ($object): bool => str_ends_with((string) self::getObjectFieldValue($object, $field), (string) $value),
=======
            Comparison::STARTS_WITH => fn ($object): bool => str_starts_with((string) self::getObjectFieldValue($object, $field, $this->accessRawFieldValues), (string) $value),
            Comparison::ENDS_WITH => fn ($object): bool => str_ends_with((string) self::getObjectFieldValue($object, $field, $this->accessRawFieldValues), (string) $value),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            default => throw new RuntimeException('Unknown comparison operator: ' . $comparison->getOperator()),
        };
    }

    /**
     * {@inheritDoc}
     */
    public function walkValue(Value $value)
    {
        return $value->getValue();
    }

    /**
     * {@inheritDoc}
     */
    public function walkCompositeExpression(CompositeExpression $expr)
    {
        $expressionList = [];

        foreach ($expr->getExpressionList() as $child) {
            $expressionList[] = $this->dispatch($child);
        }

        return match ($expr->getType()) {
            CompositeExpression::TYPE_AND => $this->andExpressions($expressionList),
            CompositeExpression::TYPE_OR => $this->orExpressions($expressionList),
            CompositeExpression::TYPE_NOT => $this->notExpression($expressionList),
            default => throw new RuntimeException('Unknown composite ' . $expr->getType()),
        };
    }

    /** @param callable[] $expressions */
    private function andExpressions(array $expressions): Closure
    {
<<<<<<< HEAD
        return static function ($object) use ($expressions): bool {
            foreach ($expressions as $expression) {
                if (! $expression($object)) {
                    return false;
                }
            }

            return true;
        };
=======
        return static fn ($object): bool => array_all(
            $expressions,
            static fn (callable $expression): bool => (bool) $expression($object),
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /** @param callable[] $expressions */
    private function orExpressions(array $expressions): Closure
    {
<<<<<<< HEAD
        return static function ($object) use ($expressions): bool {
            foreach ($expressions as $expression) {
                if ($expression($object)) {
                    return true;
                }
            }

            return false;
        };
=======
        return static fn ($object): bool => array_any(
            $expressions,
            static fn (callable $expression): bool => (bool) $expression($object),
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /** @param callable[] $expressions */
    private function notExpression(array $expressions): Closure
    {
        return static fn ($object) => ! $expressions[0]($object);
    }
}
