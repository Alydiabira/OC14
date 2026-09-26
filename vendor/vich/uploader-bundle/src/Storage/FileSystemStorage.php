<?php

namespace Vich\UploaderBundle\Storage;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
 * FileSystemStorage.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
final class FileSystemStorage extends AbstractStorage
{
<<<<<<< HEAD
=======
    private const URI_SEPARATOR = '/';

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected function doUpload(PropertyMapping $mapping, File $file, ?string $dir, string $name): ?File
    {
        $uploadDir = $mapping->getUploadDestination().\DIRECTORY_SEPARATOR.$dir;

<<<<<<< HEAD
        if (!\file_exists($uploadDir)) {
            if (!\mkdir($uploadDir, recursive: true)) {
                throw new \Exception('Could not create directory "'.$uploadDir.'"');
            }
=======
        if (!\file_exists($uploadDir) && !@\mkdir($uploadDir, recursive: true) && !\is_dir($uploadDir)) {
            throw new \Exception('Could not create directory "'.$uploadDir.'"');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
        if (!\is_dir($uploadDir)) {
            throw new \Exception('Tried to move file to directory "'.$uploadDir.'" but it is a file');
        }

        if ($file instanceof UploadedFile) {
            return $file->move($uploadDir, $name);
        }
        $targetPathname = $uploadDir.\DIRECTORY_SEPARATOR.$name;
        if (!\copy($file->getPathname(), $targetPathname)) {
            throw new \RuntimeException('Could not copy file');
        }

        return new File($targetPathname);
    }

    protected function doRemove(PropertyMapping $mapping, ?string $dir, string $name): ?bool
    {
        $file = $this->doResolvePath($mapping, $dir, $name);

<<<<<<< HEAD
        return \file_exists($file) && \unlink($file);
    }

    protected function doResolvePath(PropertyMapping $mapping, ?string $dir, string $name, ?bool $relative = false): string
    {
        $path = !empty($dir) ? $dir.\DIRECTORY_SEPARATOR.$name : $name;
=======
        if (!\file_exists($file) || !\unlink($file)) {
            throw new \Exception('Cannot remove file '.$file);
        }

        return true;
    }

    protected function doResolvePath(
        PropertyMapping $mapping,
        ?string $dir,
        string $name,
        ?bool $relative = false
    ): string {
        $path = (\is_string($dir) && '' !== $dir) ? $dir.\DIRECTORY_SEPARATOR.$name : $name;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if ($relative) {
            return $path;
        }

        return $mapping->getUploadDestination().\DIRECTORY_SEPARATOR.$path;
    }

    public function resolveUri(object|array $obj, ?string $fieldName = null, ?string $className = null): ?string
    {
        [$mapping, $name] = $this->getFilename($obj, $fieldName, $className);

        if (empty($name)) {
            return null;
        }

<<<<<<< HEAD
        $uploadDir = $this->convertWindowsDirectorySeparator($mapping->getUploadDir($obj));
        $uploadDir = empty($uploadDir) ? '' : $uploadDir.'/';

        return \sprintf('%s/%s', $mapping->getUriPrefix(), $uploadDir.$name);
=======
        $uploadDir = \trim($this->convertWindowsDirectorySeparator($mapping->getUploadDir($obj)), self::URI_SEPARATOR);
        $uploadDir = ('' !== $uploadDir) ? $uploadDir.self::URI_SEPARATOR : '';

        return \rtrim($mapping->getUriPrefix(), self::URI_SEPARATOR).self::URI_SEPARATOR.$uploadDir.$name;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function convertWindowsDirectorySeparator(string $string): string
    {
        return \str_replace('\\', '/', $string);
    }
}
