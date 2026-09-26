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

<<<<<<< HEAD
=======
use Symfony\Component\HttpClient\HttpClient;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ImportMapUpdateChecker
{
    private const URL_PACKAGE_METADATA = 'https://registry.npmjs.org/%s';

<<<<<<< HEAD
    public function __construct(
        private readonly ImportMapConfigReader $importMapConfigReader,
        private readonly HttpClientInterface $httpClient,
    ) {
=======
    private readonly HttpClientInterface $httpClient;

    public function __construct(
        private readonly ImportMapConfigReader $importMapConfigReader,
        ?HttpClientInterface $httpClient = null,
    ) {
        $this->httpClient = new BatchHttpClient($httpClient ?? HttpClient::create());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @param string[] $packages
     *
     * @return PackageUpdateInfo[]
     */
    public function getAvailableUpdates(array $packages = []): array
    {
        $entries = $this->importMapConfigReader->getEntries();
        $updateInfos = [];
        $responses = [];
        foreach ($entries as $entry) {
            if (!$entry->isRemotePackage()) {
                continue;
            }
            if ($packages
                && !\in_array($entry->getPackageName(), $packages, true)
                && !\in_array($entry->importName, $packages, true)
            ) {
                continue;
            }

<<<<<<< HEAD
            $responses[$entry->importName] = $this->httpClient->request('GET', sprintf(self::URL_PACKAGE_METADATA, $entry->getPackageName()), ['headers' => ['Accept' => 'application/vnd.npm.install-v1+json']]);
=======
            $responses[$entry->importName] = $this->httpClient->request('GET', \sprintf(self::URL_PACKAGE_METADATA, $entry->getPackageName()), ['headers' => ['Accept' => 'application/vnd.npm.install-v1+json']]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        foreach ($responses as $importName => $response) {
            $entry = $entries->get($importName);
            if (200 !== $response->getStatusCode()) {
<<<<<<< HEAD
                throw new \RuntimeException(sprintf('Unable to get latest version for package "%s".', $entry->getPackageName()));
=======
                throw new \RuntimeException(\sprintf('Unable to get latest version for package "%s".', $entry->getPackageName()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
            $updateInfo = new PackageUpdateInfo($entry->getPackageName(), $entry->version);
            try {
                $updateInfo->latestVersion = json_decode($response->getContent(), true)['dist-tags']['latest'];
                $updateInfo->updateType = $this->getUpdateType($updateInfo->currentVersion, $updateInfo->latestVersion);
            } catch (\Exception $e) {
<<<<<<< HEAD
                throw new \RuntimeException(sprintf('Unable to get latest version for package "%s".', $entry->getPackageName()), 0, $e);
=======
                throw new \RuntimeException(\sprintf('Unable to get latest version for package "%s".', $entry->getPackageName()), 0, $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
            $updateInfos[$importName] = $updateInfo;
        }

        return $updateInfos;
    }

    private function getVersionPart(string $version, int $part): ?string
    {
        return explode('.', $version)[$part] ?? $version;
    }

    private function getUpdateType(string $currentVersion, string $latestVersion): string
    {
        if (version_compare($currentVersion, $latestVersion, '>')) {
            return PackageUpdateInfo::UPDATE_TYPE_DOWNGRADE;
        }
        if (version_compare($currentVersion, $latestVersion, '==')) {
            return PackageUpdateInfo::UPDATE_TYPE_UP_TO_DATE;
        }
        if ($this->getVersionPart($currentVersion, 0) < $this->getVersionPart($latestVersion, 0)) {
            return PackageUpdateInfo::UPDATE_TYPE_MAJOR;
        }
        if ($this->getVersionPart($currentVersion, 1) < $this->getVersionPart($latestVersion, 1)) {
            return PackageUpdateInfo::UPDATE_TYPE_MINOR;
        }
        if ($this->getVersionPart($currentVersion, 2) < $this->getVersionPart($latestVersion, 2)) {
            return PackageUpdateInfo::UPDATE_TYPE_PATCH;
        }

<<<<<<< HEAD
        throw new \LogicException(sprintf('Unable to determine update type for "%s" and "%s".', $currentVersion, $latestVersion));
=======
        throw new \LogicException(\sprintf('Unable to determine update type for "%s" and "%s".', $currentVersion, $latestVersion));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
