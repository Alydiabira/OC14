<?php

namespace Vich\UploaderBundle\Storage;

use Gaufrette\Adapter\MetadataSupporter;
<<<<<<< HEAD
use Gaufrette\Exception\FileNotFound;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Gaufrette\FilesystemInterface;
use Gaufrette\FilesystemMapInterface;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Mapping\PropertyMappingFactory;

/**
 * GaufretteStorage.
 *
 * @author Stefan Zerkalica <zerkalica@gmail.com>
 */
final class GaufretteStorage extends AbstractStorage
{
    /**
     * Constructs a new instance of FileSystemStorage.
     *
     * @param PropertyMappingFactory $factory       The factory
<<<<<<< HEAD
     * @param FilesystemMapInterface $filesystemMap Gaufrete filesystem factory
=======
     * @param FilesystemMapInterface $filesystemMap Gaufrette filesystem factory
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @param string                 $protocol      Gaufrette stream wrapper protocol
     */
    public function __construct(PropertyMappingFactory $factory, protected FilesystemMapInterface $filesystemMap, protected string $protocol = 'gaufrette')
    {
        parent::__construct($factory);
    }

    protected function doUpload(PropertyMapping $mapping, File $file, ?string $dir, string $name): void
    {
        $filesystem = $this->getFilesystem($mapping);
<<<<<<< HEAD
        $path = !empty($dir) ? $dir.'/'.$name : $name;
=======
        $path = (\is_string($dir) && '' !== $dir) ? $dir.'/'.$name : $name;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $filesystem->write($path, \file_get_contents($file->getPathname()), true);

        if ($filesystem->getAdapter() instanceof MetadataSupporter) {
            $filesystem->getAdapter()->setMetadata($path, ['contentType' => $file->getMimeType()]);
        }
    }

    protected function doRemove(PropertyMapping $mapping, ?string $dir, string $name): ?bool
    {
        $filesystem = $this->getFilesystem($mapping);
<<<<<<< HEAD
        $path = !empty($dir) ? $dir.'/'.$name : $name;

        try {
            return $filesystem->delete($path);
        } catch (FileNotFound) {
            return false;
        }
=======
        $path = (\is_string($dir) && '' !== $dir) ? $dir.'/'.$name : $name;

        return $filesystem->delete($path);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    protected function doResolvePath(PropertyMapping $mapping, ?string $dir, string $name, ?bool $relative = false): string
    {
<<<<<<< HEAD
        $path = !empty($dir) ? $dir.'/'.$name : $name;
=======
        $path = (\is_string($dir) && '' !== $dir) ? $dir.'/'.$name : $name;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if ($relative) {
            return $path;
        }

        return $this->protocol.'://'.$mapping->getUploadDestination().'/'.$path;
    }

    /**
     * Get filesystem adapter from the property mapping.
     */
    protected function getFilesystem(PropertyMapping $mapping): FilesystemInterface
    {
        return $this->filesystemMap->get($mapping->getUploadDestination());
    }
}
