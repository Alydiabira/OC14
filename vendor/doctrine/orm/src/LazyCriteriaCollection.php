<?php

declare(strict_types=1);

namespace Doctrine\ORM;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\ReadableCollection;
use Doctrine\Common\Collections\Selectable;
use Doctrine\ORM\Persisters\Entity\EntityPersister;

<<<<<<< HEAD
use function assert;

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * A lazy collection that allows a fast count when using criteria object
 * Once count gets executed once without collection being initialized, result
 * is cached and returned on subsequent calls until collection gets loaded,
 * then returning the number of loaded results.
 *
 * @template TKey of array-key
 * @template TValue of object
 * @extends AbstractLazyCollection<TKey, TValue>
 * @implements Selectable<TKey, TValue>
 */
class LazyCriteriaCollection extends AbstractLazyCollection implements Selectable
{
<<<<<<< HEAD
=======
    /** @var non-negative-int|null */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private int|null $count = null;

    public function __construct(
        protected EntityPersister $entityPersister,
        protected Criteria $criteria,
    ) {
    }

    /**
     * Do an efficient count on the collection
     */
    public function count(): int
    {
        if ($this->isInitialized()) {
            return $this->collection->count();
        }

        // Return cached result in case count query was already executed
        if ($this->count !== null) {
            return $this->count;
        }

        return $this->count = $this->entityPersister->count($this->criteria);
    }

    /**
     * check if collection is empty without loading it
     */
    public function isEmpty(): bool
    {
        if ($this->isInitialized()) {
            return $this->collection->isEmpty();
        }

        return ! $this->count();
    }

    /**
     * Do an optimized search of an element
     *
     * @param mixed $element The element to search for.
     *
     * @return bool TRUE if the collection contains $element, FALSE otherwise.
     */
    public function contains(mixed $element): bool
    {
        if ($this->isInitialized()) {
            return $this->collection->contains($element);
        }

        return $this->entityPersister->exists($element, $this->criteria);
    }

    /** @return ReadableCollection<TKey, TValue>&Selectable<TKey, TValue> */
    public function matching(Criteria $criteria): ReadableCollection&Selectable
    {
        $this->initialize();
<<<<<<< HEAD
        assert($this->collection instanceof Selectable);
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this->collection->matching($criteria);
    }

    protected function doInitialize(): void
    {
        $elements         = $this->entityPersister->loadCriteria($this->criteria);
        $this->collection = new ArrayCollection($elements);
    }
}
