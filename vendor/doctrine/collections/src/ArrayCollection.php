<?php

declare(strict_types=1);

namespace Doctrine\Common\Collections;

use ArrayIterator;
use Closure;
use Doctrine\Common\Collections\Expr\ClosureExpressionVisitor;
use ReturnTypeWillChange;
use Stringable;
use Traversable;

<<<<<<< HEAD
use function array_filter;
=======
use function array_all;
use function array_any;
use function array_filter;
use function array_find;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function array_key_exists;
use function array_keys;
use function array_map;
use function array_reduce;
use function array_reverse;
use function array_search;
use function array_slice;
use function array_values;
use function count;
use function current;
use function end;
use function in_array;
use function key;
use function next;
use function reset;
use function spl_object_hash;
use function uasort;

use const ARRAY_FILTER_USE_BOTH;

/**
 * An ArrayCollection is a Collection implementation that wraps a regular PHP array.
 *
 * Warning: Using (un-)serialize() on a collection is not a supported use-case
 * and may break when we change the internals in the future. If you need to
 * serialize a collection use {@link toArray()} and reconstruct the collection
 * manually.
 *
<<<<<<< HEAD
 * @psalm-template TKey of array-key
 * @psalm-template T
 * @template-implements Collection<TKey,T>
 * @template-implements Selectable<TKey,T>
 * @psalm-consistent-constructor
=======
 * @phpstan-template TKey of array-key
 * @phpstan-template T
 * @template-implements Collection<TKey,T>
 * @template-implements Selectable<TKey,T>
 * @phpstan-consistent-constructor
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
class ArrayCollection implements Collection, Selectable, Stringable
{
    /**
     * An array containing the entries of this collection.
     *
<<<<<<< HEAD
     * @psalm-var array<TKey,T>
=======
     * @phpstan-var array<TKey,T>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @var mixed[]
     */
    private array $elements = [];

    /**
     * Initializes a new ArrayCollection.
     *
<<<<<<< HEAD
     * @psalm-param array<TKey,T> $elements
=======
     * @phpstan-param array<TKey,T> $elements
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return $this->elements;
    }

    /**
     * {@inheritDoc}
     */
    public function first()
    {
        return reset($this->elements);
    }

    /**
     * Creates a new instance from the specified elements.
     *
     * This method is provided for derived classes to specify how a new
     * instance should be created when constructor semantics have changed.
     *
     * @param array $elements Elements.
<<<<<<< HEAD
     * @psalm-param array<K,V> $elements
     *
     * @return static
     * @psalm-return static<K,V>
     *
     * @psalm-template K of array-key
     * @psalm-template V
=======
     * @phpstan-param array<K,V> $elements
     *
     * @return static
     * @phpstan-return static<K,V>
     *
     * @phpstan-template K of array-key
     * @phpstan-template V
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected function createFrom(array $elements)
    {
        return new static($elements);
    }

    /**
     * {@inheritDoc}
     */
    public function last()
    {
        return end($this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function key()
    {
        return key($this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function next()
    {
        return next($this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function current()
    {
        return current($this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function remove(string|int $key)
    {
        if (! isset($this->elements[$key]) && ! array_key_exists($key, $this->elements)) {
            return null;
        }

        $removed = $this->elements[$key];
        unset($this->elements[$key]);

        return $removed;
    }

    /**
     * {@inheritDoc}
     */
    public function removeElement(mixed $element)
    {
        $key = array_search($element, $this->elements, true);

        if ($key === false) {
            return false;
        }

        unset($this->elements[$key]);

        return true;
    }

    /**
     * Required by interface ArrayAccess.
     *
     * @param TKey $offset
     *
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function offsetExists(mixed $offset)
    {
        return $this->containsKey($offset);
    }

    /**
     * Required by interface ArrayAccess.
     *
     * @param TKey $offset
     *
     * @return T|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset)
    {
        return $this->get($offset);
    }

    /**
     * Required by interface ArrayAccess.
     *
     * @param TKey|null $offset
     * @param T         $value
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function offsetSet(mixed $offset, mixed $value)
    {
        if ($offset === null) {
            $this->add($value);

            return;
        }

<<<<<<< HEAD
=======
        /** @phpstan-var TKey $offset */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->set($offset, $value);
    }

    /**
     * Required by interface ArrayAccess.
     *
     * @param TKey $offset
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function offsetUnset(mixed $offset)
    {
        $this->remove($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function containsKey(string|int $key)
    {
        return isset($this->elements[$key]) || array_key_exists($key, $this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function contains(mixed $element)
    {
        return in_array($element, $this->elements, true);
    }

    /**
     * {@inheritDoc}
     */
    public function exists(Closure $p)
    {
<<<<<<< HEAD
        foreach ($this->elements as $key => $element) {
            if ($p($key, $element)) {
                return true;
            }
        }

        return false;
=======
        return array_any(
            $this->elements,
            static fn (mixed $element, mixed $key): bool => (bool) $p($key, $element),
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-param TMaybeContained $element
     *
     * @return int|string|false
     * @psalm-return (TMaybeContained is T ? TKey|false : false)
=======
     * @phpstan-param TMaybeContained $element
     *
     * @return int|string|false
     * @phpstan-return (TMaybeContained is T ? TKey|false : false)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @template TMaybeContained
     */
    public function indexOf($element)
    {
        return array_search($element, $this->elements, true);
    }

    /**
     * {@inheritDoc}
     */
    public function get(string|int $key)
    {
        return $this->elements[$key] ?? null;
    }

    /**
     * {@inheritDoc}
     */
    public function getKeys()
    {
        return array_keys($this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function getValues()
    {
        return array_values($this->elements);
    }

    /**
     * {@inheritDoc}
     *
     * @return int<0, max>
     */
    #[ReturnTypeWillChange]
    public function count()
    {
        return count($this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function set(string|int $key, mixed $value)
    {
        $this->elements[$key] = $value;
    }

    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-suppress InvalidPropertyAssignmentValue
     *
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * This breaks assumptions about the template type, but it would
     * be a backwards-incompatible change to remove this method
     */
    public function add(mixed $element)
    {
        $this->elements[] = $element;
    }

    /**
     * {@inheritDoc}
     */
    public function isEmpty()
    {
        return empty($this->elements);
    }

    /**
     * {@inheritDoc}
     *
     * @return Traversable<int|string, mixed>
<<<<<<< HEAD
     * @psalm-return Traversable<TKey, T>
=======
     * @phpstan-return Traversable<TKey, T>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    #[ReturnTypeWillChange]
    public function getIterator()
    {
        return new ArrayIterator($this->elements);
    }

    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-param Closure(T):U $func
     *
     * @return static
     * @psalm-return static<TKey, U>
     *
     * @psalm-template U
=======
     * @phpstan-param Closure(T):U $func
     *
     * @return static
     * @phpstan-return static<TKey, U>
     *
     * @phpstan-template U
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function map(Closure $func)
    {
        return $this->createFrom(array_map($func, $this->elements));
    }

    /**
     * {@inheritDoc}
     */
    public function reduce(Closure $func, $initial = null)
    {
        return array_reduce($this->elements, $func, $initial);
    }

    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-param Closure(T, TKey):bool $p
     *
     * @return static
     * @psalm-return static<TKey,T>
=======
     * @phpstan-param Closure(T, TKey):bool $p
     *
     * @return static
     * @phpstan-return static<TKey,T>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function filter(Closure $p)
    {
        return $this->createFrom(array_filter($this->elements, $p, ARRAY_FILTER_USE_BOTH));
    }

    /**
     * {@inheritDoc}
     */
    public function findFirst(Closure $p)
    {
<<<<<<< HEAD
        foreach ($this->elements as $key => $element) {
            if ($p($key, $element)) {
                return $element;
            }
        }

        return null;
=======
        return array_find(
            $this->elements,
            static fn (mixed $element, mixed $key): bool => (bool) $p($key, $element),
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * {@inheritDoc}
     */
    public function forAll(Closure $p)
    {
<<<<<<< HEAD
        foreach ($this->elements as $key => $element) {
            if (! $p($key, $element)) {
                return false;
            }
        }

        return true;
=======
        return array_all(
            $this->elements,
            static fn (mixed $element, mixed $key): bool => (bool) $p($key, $element),
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * {@inheritDoc}
     */
    public function partition(Closure $p)
    {
        $matches = $noMatches = [];

        foreach ($this->elements as $key => $element) {
            if ($p($key, $element)) {
                $matches[$key] = $element;
            } else {
                $noMatches[$key] = $element;
            }
        }

        return [$this->createFrom($matches), $this->createFrom($noMatches)];
    }

    /**
     * Returns a string representation of this object.
     * {@inheritDoc}
     *
     * @return string
     */
    #[ReturnTypeWillChange]
    public function __toString()
    {
        return self::class . '@' . spl_object_hash($this);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->elements = [];
    }

    /**
     * {@inheritDoc}
     */
    public function slice(int $offset, int|null $length = null)
    {
        return array_slice($this->elements, $offset, $length, true);
    }

<<<<<<< HEAD
    /** @psalm-return Collection<TKey, T>&Selectable<TKey,T> */
    public function matching(Criteria $criteria)
    {
=======
    /** @phpstan-return Collection<TKey, T>&Selectable<TKey,T> */
    public function matching(Criteria $criteria)
    {
        $accessRawFieldValues = $criteria->isRawFieldValueAccessEnabled();

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $expr     = $criteria->getWhereExpression();
        $filtered = $this->elements;

        if ($expr) {
<<<<<<< HEAD
            $visitor  = new ClosureExpressionVisitor();
=======
            $visitor  = new ClosureExpressionVisitor($accessRawFieldValues);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $filter   = $visitor->dispatch($expr);
            $filtered = array_filter($filtered, $filter);
        }

        $orderings = $criteria->orderings();

        if ($orderings) {
            $next = null;
            foreach (array_reverse($orderings) as $field => $ordering) {
<<<<<<< HEAD
                $next = ClosureExpressionVisitor::sortByField($field, $ordering === Order::Descending ? -1 : 1, $next);
=======
                $next = ClosureExpressionVisitor::sortByField($field, $ordering === Order::Descending ? -1 : 1, $next, $accessRawFieldValues);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            uasort($filtered, $next);
        }

        $offset = $criteria->getFirstResult();
        $length = $criteria->getMaxResults();

        if ($offset !== null && $offset > 0 || $length !== null && $length > 0) {
            $filtered = array_slice($filtered, (int) $offset, $length, true);
        }

        return $this->createFrom($filtered);
    }
}
