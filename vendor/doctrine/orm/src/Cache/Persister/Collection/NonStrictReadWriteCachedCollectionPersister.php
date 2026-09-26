<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache\Persister\Collection;

use Doctrine\ORM\Cache\CollectionCacheKey;
use Doctrine\ORM\PersistentCollection;

use function spl_object_id;

class NonStrictReadWriteCachedCollectionPersister extends AbstractCollectionPersister
{
    public function afterTransactionComplete(): void
    {
        if (isset($this->queuedCache['update'])) {
            foreach ($this->queuedCache['update'] as $item) {
                $this->storeCollectionCache($item['key'], $item['list']);
            }
        }

        if (isset($this->queuedCache['delete'])) {
            foreach ($this->queuedCache['delete'] as $key) {
                $this->region->evict($key);
            }
        }

        $this->queuedCache = [];
    }

    public function afterTransactionRolledBack(): void
    {
        $this->queuedCache = [];
    }

    public function delete(PersistentCollection $collection): void
    {
        $ownerId = $this->uow->getEntityIdentifier($collection->getOwner());
<<<<<<< HEAD
        $key     = new CollectionCacheKey($this->sourceEntity->rootEntityName, $this->association->fieldName, $ownerId);
=======
        $key     = new CollectionCacheKey($this->sourceEntity->rootEntityName, $this->association->fieldName, $ownerId, $this->filters->getHash());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $this->persister->delete($collection);

        $this->queuedCache['delete'][spl_object_id($collection)] = $key;
    }

    public function update(PersistentCollection $collection): void
    {
        $isInitialized = $collection->isInitialized();
        $isDirty       = $collection->isDirty();

        if (! $isInitialized && ! $isDirty) {
            return;
        }

        $ownerId = $this->uow->getEntityIdentifier($collection->getOwner());
<<<<<<< HEAD
        $key     = new CollectionCacheKey($this->sourceEntity->rootEntityName, $this->association->fieldName, $ownerId);
=======
        $key     = new CollectionCacheKey($this->sourceEntity->rootEntityName, $this->association->fieldName, $ownerId, $this->filters->getHash());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

       // Invalidate non initialized collections OR ordered collection
        if ($isDirty && ! $isInitialized || $this->association->isOrdered()) {
            $this->persister->update($collection);

            $this->queuedCache['delete'][spl_object_id($collection)] = $key;

            return;
        }

        $this->persister->update($collection);

        $this->queuedCache['update'][spl_object_id($collection)] = [
            'key'   => $key,
            'list'  => $collection,
        ];
    }
}
