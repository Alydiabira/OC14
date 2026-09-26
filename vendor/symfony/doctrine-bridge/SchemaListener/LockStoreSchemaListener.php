<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\SchemaListener;

use Doctrine\ORM\Tools\Event\GenerateSchemaEventArgs;
<<<<<<< HEAD
use Symfony\Component\Lock\Exception\InvalidArgumentException;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Lock\PersistingStoreInterface;
use Symfony\Component\Lock\Store\DoctrineDbalStore;

final class LockStoreSchemaListener extends AbstractSchemaListener
{
    /**
     * @param iterable<mixed, PersistingStoreInterface> $stores
     */
    public function __construct(
        private readonly iterable $stores,
    ) {
    }

    public function postGenerateSchema(GenerateSchemaEventArgs $event): void
    {
        $connection = $event->getEntityManager()->getConnection();
<<<<<<< HEAD

        $storesIterator = new \ArrayIterator($this->stores);
        while ($storesIterator->valid()) {
            try {
                $store = $storesIterator->current();
                if (!$store instanceof DoctrineDbalStore) {
                    continue;
                }

                $store->configureSchema($event->getSchema(), $this->getIsSameDatabaseChecker($connection));
            } catch (InvalidArgumentException) {
                // no-op
            }

            $storesIterator->next();
=======
        $schema = $event->getSchema();

        foreach ($this->stores as $store) {
            if (!$store instanceof DoctrineDbalStore) {
                continue;
            }

            $isSameDatabaseChecker = $this->getIsSameDatabaseChecker($connection);
            $schema = $this->filterSchemaChanges($schema, $connection, static fn () => $store->configureSchema($schema, $isSameDatabaseChecker)) ?? $schema;
        }

        if (method_exists($schema, 'edit') && method_exists($event, 'setSchema')) {
            $event->setSchema($schema);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
