<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

use function implode;
use function ksort;
use function str_replace;
use function strtolower;

/**
 * Defines entity collection roles to be stored in the cache region.
 */
class CollectionCacheKey extends CacheKey
{
    /**
     * The owner entity identifier
     *
     * @var array<string, mixed>
     */
    public readonly array $ownerIdentifier;

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $ownerIdentifier The identifier of the owning entity.
     * @param class-string         $entityClass     The owner entity class
=======
     * @param class-string         $entityClass     The owner entity class.
     * @param array<string, mixed> $ownerIdentifier The identifier of the owning entity.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(
        public readonly string $entityClass,
        public readonly string $association,
        array $ownerIdentifier,
<<<<<<< HEAD
=======
        string $filterHash = '',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
        ksort($ownerIdentifier);

        $this->ownerIdentifier = $ownerIdentifier;

<<<<<<< HEAD
        parent::__construct(str_replace('\\', '.', strtolower($entityClass)) . '_' . implode(' ', $ownerIdentifier) . '__' . $association);
=======
        $filterHash = $filterHash === '' ? '' : '_' . $filterHash;

        parent::__construct(str_replace('\\', '.', strtolower($entityClass)) . '_' . implode(' ', $ownerIdentifier) . '__' . $association . $filterHash);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
