<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Dbal;

use Doctrine\DBAL\Schema\AbstractAsset;

/**
 * Manages schema filters passed to Connection::setSchemaAssetsFilter()
 */
class SchemaAssetsFilterManager
{
<<<<<<< HEAD
    /** @var callable[] */
    private array $schemaAssetFilters;

    /** @param callable[] $schemaAssetFilters */
    public function __construct(array $schemaAssetFilters)
    {
        $this->schemaAssetFilters = $schemaAssetFilters;
=======
    /** @param callable[] $schemaAssetFilters */
    public function __construct(
        private readonly array $schemaAssetFilters,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /** @param string|AbstractAsset $assetName */
    public function __invoke($assetName): bool
    {
        foreach ($this->schemaAssetFilters as $schemaAssetFilter) {
            if ($schemaAssetFilter($assetName) === false) {
                return false;
            }
        }

        return true;
    }
}
