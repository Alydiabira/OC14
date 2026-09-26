<?php

<<<<<<< HEAD
namespace Doctrine\Bundle\DoctrineBundle\CacheWarmer;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\Mapping\AbstractClassMetadataFactory;
=======
declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\CacheWarmer;

use Doctrine\ORM\EntityManagerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use LogicException;
use Symfony\Bundle\FrameworkBundle\CacheWarmer\AbstractPhpFileCacheWarmer;
use Symfony\Component\Cache\Adapter\ArrayAdapter;

use function is_file;

/** @final since 2.11 */
class DoctrineMetadataCacheWarmer extends AbstractPhpFileCacheWarmer
{
<<<<<<< HEAD
    private EntityManagerInterface $entityManager;
    private string $phpArrayFile;

    public function __construct(EntityManagerInterface $entityManager, string $phpArrayFile)
    {
        $this->entityManager = $entityManager;
        $this->phpArrayFile  = $phpArrayFile;

=======
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly string $phpArrayFile,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        parent::__construct($phpArrayFile);
    }

    /**
     * It must not be optional because it should be called before ProxyCacheWarmer which is not optional.
     */
    public function isOptional(): bool
    {
        return false;
    }

<<<<<<< HEAD
    protected function doWarmUp(string $cacheDir, ArrayAdapter $arrayAdapter, ?string $buildDir = null): bool
=======
    protected function doWarmUp(string $cacheDir, ArrayAdapter $arrayAdapter, string|null $buildDir = null): bool
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        // cache already warmed up, no needs to do it again
        if (is_file($this->phpArrayFile)) {
            return false;
        }

        $metadataFactory = $this->entityManager->getMetadataFactory();
<<<<<<< HEAD
        if ($metadataFactory instanceof AbstractClassMetadataFactory && $metadataFactory->getLoadedMetadata()) {
=======
        if ($metadataFactory->getLoadedMetadata()) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            throw new LogicException('DoctrineMetadataCacheWarmer must load metadata first, check priority of your warmers.');
        }

        $metadataFactory->setCache($arrayAdapter);
        $metadataFactory->getAllMetadata();

        return true;
    }
}
