<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Dbal;

use Doctrine\DBAL\Schema\AbstractAsset;

use function in_array;

/** @deprecated Implement your own include/exclude mechanism */
class BlacklistSchemaAssetFilter
{
<<<<<<< HEAD
    /** @var string[] */
    private array $blacklist;

    /** @param string[] $blacklist */
    public function __construct(array $blacklist)
    {
        $this->blacklist = $blacklist;
=======
    /** @param string[] $blacklist */
    public function __construct(
        private readonly array $blacklist,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /** @param string|AbstractAsset $assetName */
    public function __invoke($assetName): bool
    {
        if ($assetName instanceof AbstractAsset) {
            $assetName = $assetName->getName();
        }

        return ! in_array($assetName, $this->blacklist, true);
    }
}
