<?php

declare(strict_types=1);

namespace Doctrine\Common\Collections;

use ArrayAccess;
use Closure;

/**
 * The missing (SPL) Collection/Array/OrderedMap interface.
 *
 * A Collection resembles the nature of a regular PHP array. That is,
 * it is essentially an <b>ordered map</b> that can also be used
 * like a list.
 *
 * A Collection has an internal iterator just like a PHP array. In addition,
 * a Collection can be iterated with external iterators, which is preferable.
 * To use an external iterator simply use the foreach language construct to
 * iterate over the collection (which calls {@link getIterator()} internally) or
 * explicitly retrieve an iterator though {@link getIterator()} which can then be
 * used to iterate over the collection.
 * You can not rely on the internal iterator of the collection being at a certain
 * position unless you explicitly positioned it before. Prefer iteration with
 * external iterators.
 *
<<<<<<< HEAD
 * @psalm-template TKey of array-key
 * @psalm-template T
=======
 * @phpstan-template TKey of array-key
 * @phpstan-template T
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @template-extends ReadableCollection<TKey, T>
 * @template-extends ArrayAccess<TKey, T>
 */
interface Collection extends ReadableCollection, ArrayAccess
{
    /**
     * Adds an element at the end of the collection.
     *
     * @param mixed $element The element to add.
<<<<<<< HEAD
     * @psalm-param T $element
=======
     * @phpstan-param T $element
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return void we will require a native return type declaration in 3.0
     */
    public function add(mixed $element);

    /**
     * Clears the collection, removing all elements.
     *
     * @return void
     */
    public function clear();

    /**
     * Removes the element at the specified index from the collection.
     *
     * @param string|int $key The key/index of the element to remove.
<<<<<<< HEAD
     * @psalm-param TKey $key
     *
     * @return mixed The removed element or NULL, if the collection did not contain the element.
     * @psalm-return T|null
=======
     * @phpstan-param TKey $key
     *
     * @return mixed The removed element or NULL, if the collection did not contain the element.
     * @phpstan-return T|null
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function remove(string|int $key);

    /**
     * Removes the specified element from the collection, if it is found.
     *
     * @param mixed $element The element to remove.
<<<<<<< HEAD
     * @psalm-param T $element
=======
     * @phpstan-param T $element
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeElement(mixed $element);

    /**
     * Sets an element in the collection at the specified key/index.
     *
     * @param string|int $key   The key/index of the element to set.
     * @param mixed      $value The element to set.
<<<<<<< HEAD
     * @psalm-param TKey $key
     * @psalm-param T $value
=======
     * @phpstan-param TKey $key
     * @phpstan-param T $value
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return void
     */
    public function set(string|int $key, mixed $value);

    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-param Closure(T):U $func
     *
     * @return Collection<mixed>
     * @psalm-return Collection<TKey, U>
     *
     * @psalm-template U
=======
     * @phpstan-param Closure(T):U $func
     *
     * @return Collection<mixed>
     * @phpstan-return Collection<TKey, U>
     *
     * @phpstan-template U
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function map(Closure $func);

    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-param Closure(T, TKey):bool $p
     *
     * @return Collection<mixed> A collection with the results of the filter operation.
     * @psalm-return Collection<TKey, T>
=======
     * @phpstan-param Closure(T, TKey):bool $p
     *
     * @return Collection<mixed> A collection with the results of the filter operation.
     * @phpstan-return Collection<TKey, T>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function filter(Closure $p);

    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-param Closure(TKey, T):bool $p
=======
     * @phpstan-param Closure(TKey, T):bool $p
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return Collection<mixed>[] An array with two elements. The first element contains the collection
     *                      of elements where the predicate returned TRUE, the second element
     *                      contains the collection of elements where the predicate returned FALSE.
<<<<<<< HEAD
     * @psalm-return array{0: Collection<TKey, T>, 1: Collection<TKey, T>}
=======
     * @phpstan-return array{0: Collection<TKey, T>, 1: Collection<TKey, T>}
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function partition(Closure $p);
}
