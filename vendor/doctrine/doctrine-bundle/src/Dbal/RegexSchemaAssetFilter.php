<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Dbal;

use Doctrine\DBAL\Schema\AbstractAsset;

use function preg_match;

class RegexSchemaAssetFilter
{
<<<<<<< HEAD
    private string $filterExpression;

    public function __construct(string $filterExpression)
    {
        $this->filterExpression = $filterExpression;
    }

    /** @param string|AbstractAsset $assetName */
    public function __invoke($assetName): bool
=======
    public function __construct(
        private readonly string $filterExpression,
    ) {
    }

    public function __invoke(string|AbstractAsset $assetName): bool
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if ($assetName instanceof AbstractAsset) {
            $assetName = $assetName->getName();
        }

        return (bool) preg_match($this->filterExpression, $assetName);
    }
}
