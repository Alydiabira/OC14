<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\AssetMapper\Factory;

use Symfony\Component\AssetMapper\MappedAsset;
use Symfony\Component\Config\ConfigCache;
use Symfony\Component\Config\Resource\DirectoryResource;
use Symfony\Component\Config\Resource\FileExistenceResource;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\Config\Resource\ResourceInterface;
<<<<<<< HEAD
=======
use Symfony\Component\Config\ResourceCheckerConfigCache;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Decorates the asset factory to load MappedAssets from cache when possible.
 */
class CachedMappedAssetFactory implements MappedAssetFactoryInterface
{
    public function __construct(
        private readonly MappedAssetFactoryInterface $innerFactory,
        private readonly string $cacheDir,
        private readonly bool $debug,
    ) {
    }

    public function createMappedAsset(string $logicalPath, string $sourcePath): ?MappedAsset
    {
        $cachePath = $this->getCacheFilePath($logicalPath, $sourcePath);
<<<<<<< HEAD
        $configCache = new ConfigCache($cachePath, $this->debug);

        if ($configCache->isFresh()) {
            return unserialize(file_get_contents($cachePath));
=======

        if ($this->debug) {
            clearstatcache();
            $configCache = new ResourceCheckerConfigCache($cachePath, [new NonCachingSelfCheckingResourceChecker()]);
        } else {
            $configCache = new ConfigCache($cachePath, false);
        }

        if ($configCache->isFresh()) {
            return unserialize(file_get_contents($cachePath), ['allowed_classes' => true]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $mappedAsset = $this->innerFactory->createMappedAsset($logicalPath, $sourcePath);

        if (!$mappedAsset) {
            return null;
        }

        $resources = $this->collectResourcesFromAsset($mappedAsset);
        $configCache->write(serialize($mappedAsset), $resources);

        return $mappedAsset;
    }

<<<<<<< HEAD
=======
    public function reset(): void
    {
        if (\is_callable([$this->innerFactory, 'reset'])) {
            $this->innerFactory->reset();
        }
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private function getCacheFilePath(string $logicalPath, string $sourcePath): string
    {
        return $this->cacheDir.'/'.hash('xxh128', $logicalPath.':'.$sourcePath).'.php';
    }

    /**
     * @return ResourceInterface[]
     */
    private function collectResourcesFromAsset(MappedAsset $mappedAsset): array
    {
<<<<<<< HEAD
        $resources = array_map(fn (string $path) => is_dir($path) ? new DirectoryResource($path) : new FileResource($path), $mappedAsset->getFileDependencies());
=======
        $resources = array_map(static fn (string $path) => is_dir($path) ? new DirectoryResource($path) : new FileResource($path), $mappedAsset->getFileDependencies());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $resources[] = new FileResource($mappedAsset->sourcePath);

        foreach ($mappedAsset->getDependencies() as $assetDependency) {
            $resources = array_merge($resources, $this->collectResourcesFromAsset($assetDependency));
        }

        foreach ($mappedAsset->getJavaScriptImports() as $import) {
            $resources[] = new FileExistenceResource($import->assetSourcePath);
        }

        return $resources;
    }
}
