<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\AssetMapper\ImportMap;

use Symfony\Component\AssetMapper\Exception\RuntimeException;

/**
 * Manages the local storage of remote/vendor importmap packages.
 */
class RemotePackageStorage
{
    public function __construct(private readonly string $vendorDir)
    {
    }

    public function getStorageDir(): string
    {
        return $this->vendorDir;
    }

    public function isDownloaded(ImportMapEntry $entry): bool
    {
        if (!$entry->isRemotePackage()) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('The entry "%s" is not a remote package.', $entry->importName));
=======
            throw new \InvalidArgumentException(\sprintf('The entry "%s" is not a remote package.', $entry->importName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return is_file($this->getDownloadPath($entry->packageModuleSpecifier, $entry->type));
    }

    public function isExtraFileDownloaded(ImportMapEntry $entry, string $extraFilename): bool
    {
        if (!$entry->isRemotePackage()) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('The entry "%s" is not a remote package.', $entry->importName));
=======
            throw new \InvalidArgumentException(\sprintf('The entry "%s" is not a remote package.', $entry->importName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return is_file($this->getExtraFileDownloadPath($entry, $extraFilename));
    }

    public function save(ImportMapEntry $entry, string $contents): void
    {
        if (!$entry->isRemotePackage()) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('The entry "%s" is not a remote package.', $entry->importName));
=======
            throw new \InvalidArgumentException(\sprintf('The entry "%s" is not a remote package.', $entry->importName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $vendorPath = $this->getDownloadPath($entry->packageModuleSpecifier, $entry->type);

<<<<<<< HEAD
        @mkdir(\dirname($vendorPath), 0777, true);
        if (false === @file_put_contents($vendorPath, $contents)) {
            throw new RuntimeException(error_get_last()['message'] ?? sprintf('Failed to write file "%s".', $vendorPath));
=======
        @mkdir(\dirname($vendorPath), 0o777, true);
        if (false === @file_put_contents($vendorPath, $contents)) {
            throw new RuntimeException(error_get_last()['message'] ?? \sprintf('Failed to write file "%s".', $vendorPath));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function saveExtraFile(ImportMapEntry $entry, string $extraFilename, string $contents): void
    {
        if (!$entry->isRemotePackage()) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('The entry "%s" is not a remote package.', $entry->importName));
=======
            throw new \InvalidArgumentException(\sprintf('The entry "%s" is not a remote package.', $entry->importName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $vendorPath = $this->getExtraFileDownloadPath($entry, $extraFilename);

<<<<<<< HEAD
        @mkdir(\dirname($vendorPath), 0777, true);
        if (false === @file_put_contents($vendorPath, $contents)) {
            throw new RuntimeException(error_get_last()['message'] ?? sprintf('Failed to write file "%s".', $vendorPath));
=======
        @mkdir(\dirname($vendorPath), 0o777, true);
        if (false === @file_put_contents($vendorPath, $contents)) {
            throw new RuntimeException(error_get_last()['message'] ?? \sprintf('Failed to write file "%s".', $vendorPath));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    /**
     * The local file path where a downloaded package should be stored.
     */
    public function getDownloadPath(string $packageModuleSpecifier, ImportMapType $importMapType): string
    {
        [$packageName, $packagePathString] = ImportMapEntry::splitPackageNameAndFilePath($packageModuleSpecifier);
        $filename = $packageName;
        if ($packagePathString) {
            $filename .= '/'.ltrim($packagePathString, '/');
        } else {
            // if we're requiring a bare package, we put it into the directory
            // (in case we also import other files from the package) and arbitrarily
            // name it the same as the package name + ".index"
            $filename .= '/'.basename($packageName).'.index';
        }

        if (!str_ends_with($filename, '.'.$importMapType->value)) {
            $filename .= '.'.$importMapType->value;
        }

        return $this->vendorDir.'/'.$filename;
    }

    private function getExtraFileDownloadPath(ImportMapEntry $entry, string $extraFilename): string
    {
        return $this->vendorDir.'/'.$entry->getPackageName().'/'.ltrim($extraFilename, '/');
    }
}
