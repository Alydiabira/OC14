<?php

namespace Vich\UploaderBundle\Metadata;

use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;

/**
 * @internal
 */
final class CacheWarmer implements CacheWarmerInterface
{
    public function __construct(private readonly string $dir, private readonly MetadataReader $metadataReader)
    {
    }

<<<<<<< HEAD
    public function warmUp(string $cacheDir, string $buildDir = null): array
=======
    public function warmUp(string $cacheDir, ?string $buildDir = null): array
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if (empty($this->dir)) {
            return [];
        }
        $files = [];
        if (!\is_dir($this->dir)) {
            if (!\mkdir($concurrentDirectory = $this->dir, 0o777, true) && !\is_dir($concurrentDirectory)) {
                throw new \RuntimeException(\sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
        }
        $uploadableClasses = $this->metadataReader->getUploadableClasses();
        foreach ($uploadableClasses as $class) {
            $this->metadataReader->getUploadableFields($class);
            $files[] = $class;
        }
<<<<<<< HEAD
=======

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        // TODO it could be nice if we return $files, to allow to exploit preloading...
        return [];
    }

    public function isOptional(): bool
    {
        return true;
    }
}
