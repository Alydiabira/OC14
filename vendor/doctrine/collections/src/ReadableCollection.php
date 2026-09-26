<?php

declare(strict_types=1);

namespace Doctrine\Common\Collections;

use Closure;
use Countable;
use IteratorAggregate;

/**
<<<<<<< HEAD
 * @psalm-template TKey of array-key
=======
 * @phpstan-template TKey of array-key
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @template-covariant T
 * @template-extends IteratorAggregate<TKey, T>
 */
interface ReadableCollection extends Countable, IteratorAggregate
{
    /**
     * Checks whether an element is contained in the collection.
     * This is an O(n) operation, where n is the size of the collection.
     *
     * @param mixed $element The element to search for.
<<<<<<< HEAD
     * @psalm-param TMaybeContained $element
     *
     * @return bool TRUE if the collection contains the element, FALSE otherwise.
     * @psalm-return (TMaybeContained is T ? bool : false)
=======
     * @phpstan-param TMaybeContained $element
     *
     * @return bool TRUE if the collection contains the element, FALSE otherwise.
     * @phpstan-return (TMaybeContained is T ? bool : false)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @template TMaybeContained
     */
    public function contains(mixed $element);

    /**
     * Checks whether the collection is empty (contains no elements).
     *
     * @return bool TRUE if the collection is empty, FALSE otherwise.
     */
    public function isEmpty();

    /**
     * Checks whether the collection contains an element with the specified key/index.
     *
     * @param string|int $key The key/index to check for.
<<<<<<< HEAD
     * @psalm-param TKey $key
=======
     * @phpstan-param TKey $key
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool TRUE if the collection contains an element with the specified key/index,
     *              FALSE otherwise.
     */
    public function containsKey(string|int $key);

    /**
     * Gets the element at the specified key/index.
     *
     * @param string|int $key The key/index of the element to retrieve.
<<<<<<< HEAD
     * @psalm-param TKey $key
     *
     * @return mixed
     * @psalm-return T|null
=======
     * @phpstan-param TKey $key
     *
     * @return mixed
     * @phpstan-return T|null
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function get(string|int $key);

    /**
     * Gets all keys/indices of the collection.
     *
     * @return int[]|string[] The keys/indices of the collection, in the order of the corresponding
     *               elements in the collection.
<<<<<<< HEAD
     * @psalm-return list<TKey>
=======
     * @phpstan-return list<TKey>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getKeys();

    /**
     * Gets all values of the collection.
     *
     * @return mixed[] The values of all elements in the collection, in the
     *                 order they appear in the collection.
<<<<<<< HEAD
     * @psalm-return list<T>
=======
     * @phpstan-return list<T>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getValues();

    /**
     * Gets a native PHP array representation of the collection.
     *
     * @return mixed[]
<<<<<<< HEAD
     * @psalm-return array<TKey,T>
=======
     * @phpstan-return array<TKey,T>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function toArray();

    /**
     * Sets the internal iterator to the first element in the collection and returns this element.
     *
     * @return mixed
<<<<<<< HEAD
     * @psalm-return T|false
=======
     * @phpstan-return T|false
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function first();

    /**
     * Sets the internal iterator to the last element in the collection and returns this element.
     *
     * @return mixed
<<<<<<< HEAD
     * @psalm-return T|false
=======
     * @phpstan-return T|false
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function last();

    /**
     * Gets the key/index of the element at the current iterator position.
     *
     * @return int|string|null
<<<<<<< HEAD
     * @psalm-return TKey|null
=======
     * @phpstan-return TKey|null
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function key();

    /**
     * Gets the element of the collection at the current iterator position.
     *
     * @return mixed
<<<<<<< HEAD
     * @psalm-return T|false
=======
     * @phpstan-return T|false
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function current();

    /**
     * Moves the internal iterator position to the next element and returns this element.
     *
     * @return mixed
<<<<<<< HEAD
     * @psalm-return T|false
=======
     * @phpstan-return T|false
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function next();

    /**
     * Extracts a slice of $length elements starting at position $offset from the Collection.
     *
     * If $length is null it returns all elements from $offset to the end of the Collection.
     * Keys have to be preserved by this method. Calling this method will only return the
     * selected slice and NOT change the elements contained in the collection slice is called on.
     *
     * @param int      $offset The offset to start from.
     * @param int|null $length The maximum number of elements to return, or null for no limit.
     *
     * @return mixed[]
<<<<<<< HEAD
     * @psalm-return array<TKey,T>
=======
     * @phpstan-return array<TKey,T>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function slice(int $offset, int|null $length = null);

    /**
     * Tests for the existence of an element that satisfies the given predicate.
     *
     * @param Closure $p The predicate.
<<<<<<< HEAD
     * @psalm-param Closure(TKey, T):bool $p
=======
     * @phpstan-param Closure(TKey, T):bool $p
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool TRUE if the predicate is TRUE for at least one element, FALSE otherwise.
     */
    public function exists(Closure $p);

    /**
     * Returns all the elements of this collection that satisfy the predicate p.
     * The order of the elements is preserved.
     *
     * @param Closure $p The predicate used for filtering.
<<<<<<< HEAD
     * @psalm-param Closure(T, TKey):bool $p
     *
     * @return ReadableCollection<mixed> A collection with the results of the filter operation.
     * @psalm-return ReadableCollection<TKey, T>
=======
     * @phpstan-param Closure(T, TKey):bool $p
     *
     * @return ReadableCollection<mixed> A collection with the results of the filter operation.
     * @phpstan-return ReadableCollection<TKey, T>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function filter(Closure $p);

    /**
     * Applies the given function to each element in the collection and returns
     * a new collection with the elements returned by the function.
     *
<<<<<<< HEAD
     * @psalm-param Closure(T):U $func
     *
     * @return ReadableCollection<mixed>
     * @psalm-return ReadableCollection<TKey, U>
     *
     * @psalm-template U
=======
     * @phpstan-param Closure(T):U $func
     *
     * @return ReadableCollection<mixed>
     * @phpstan-return ReadableCollection<TKey, U>
     *
     * @phpstan-template U
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function map(Closure $func);

    /**
     * Partitions this collection in two collections according to a predicate.
     * Keys are preserved in the resulting collections.
     *
     * @param Closure $p The predicate on which to partition.
<<<<<<< HEAD
     * @psalm-param Closure(TKey, T):bool $p
=======
     * @phpstan-param Closure(TKey, T):bool $p
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return ReadableCollection<mixed>[] An array with two elements. The first element contains the collection
     *                      of elements where the predicate returned TRUE, the second element
     *                      contains the collection of elements where the predicate returned FALSE.
<<<<<<< HEAD
     * @psalm-return array{0: ReadableCollection<TKey, T>, 1: ReadableCollection<TKey, T>}
=======
     * @phpstan-return array{0: ReadableCollection<TKey, T>, 1: ReadableCollection<TKey, T>}
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function partition(Closure $p);

    /**
     * Tests whether the given predicate p holds for all elements of this collection.
     *
     * @param Closure $p The predicate.
<<<<<<< HEAD
     * @psalm-param Closure(TKey, T):bool $p
=======
     * @phpstan-param Closure(TKey, T):bool $p
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool TRUE, if the predicate yields TRUE for all elements, FALSE otherwise.
     */
    public function forAll(Closure $p);

    /**
     * Gets the index/key of a given element. The comparison of two elements is strict,
     * that means not only the value but also the type must match.
     * For objects this means reference equality.
     *
     * @param mixed $element The element to search for.
<<<<<<< HEAD
     * @psalm-param TMaybeContained $element
     *
     * @return int|string|bool The key/index of the element or FALSE if the element was not found.
     * @psalm-return (TMaybeContained is T ? TKey|false : false)
=======
     * @phpstan-param TMaybeContained $element
     *
     * @return int|string|bool The key/index of the element or FALSE if the element was not found.
     * @phpstan-return (TMaybeContained is T ? TKey|false : false)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @template TMaybeContained
     */
    public function indexOf(mixed $element);

    /**
     * Returns the first element of this collection that satisfies the predicate p.
     *
     * @param Closure $p The predicate.
<<<<<<< HEAD
     * @psalm-param Closure(TKey, T):bool $p
     *
     * @return mixed The first element respecting the predicate,
     *               null if no element respects the predicate.
     * @psalm-return T|null
=======
     * @phpstan-param Closure(TKey, T):bool $p
     *
     * @return mixed The first element respecting the predicate,
     *               null if no element respects the predicate.
     * @phpstan-return T|null
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function findFirst(Closure $p);

    /**
     * Applies iteratively the given function to each element in the collection,
     * so as to reduce the collection to a single value.
     *
<<<<<<< HEAD
     * @psalm-param Closure(TReturn|TInitial, T):TReturn $func
     * @psalm-param TInitial $initial
     *
     * @return mixed
     * @psalm-return TReturn|TInitial
     *
     * @psalm-template TReturn
     * @psalm-template TInitial
=======
     * @phpstan-param Closure(TReturn|TInitial, T):TReturn $func
     * @phpstan-param TInitial $initial
     *
     * @return mixed
     * @phpstan-return TReturn|TInitial
     *
     * @phpstan-template TReturn
     * @phpstan-template TInitial
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function reduce(Closure $func, mixed $initial = null);
}
