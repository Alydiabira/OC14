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

use Composer\Semver\Semver;
use Symfony\Component\AssetMapper\Exception\RuntimeException;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ImportMapVersionChecker
{
    private const PACKAGE_METADATA_PATTERN = 'https://registry.npmjs.org/%package%/%version%';

<<<<<<< HEAD
    private HttpClientInterface $httpClient;
=======
    private readonly HttpClientInterface $httpClient;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(
        private ImportMapConfigReader $importMapConfigReader,
        private RemotePackageDownloader $packageDownloader,
        ?HttpClientInterface $httpClient = null,
    ) {
<<<<<<< HEAD
        $this->httpClient = $httpClient ?? HttpClient::create();
=======
        $this->httpClient = new BatchHttpClient($httpClient ?? HttpClient::create());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @return PackageVersionProblem[]
     */
    public function checkVersions(): array
    {
        $entries = $this->importMapConfigReader->getEntries();

        $packages = [];
        foreach ($entries as $entry) {
            if (!$entry->isRemotePackage()) {
                continue;
            }

            $dependencies = $this->packageDownloader->getDependencies($entry->importName);
            if (!$dependencies) {
                continue;
            }

            $packageName = $entry->getPackageName();

            $url = str_replace(
                ['%package%', '%version%'],
                [$packageName, $entry->version],
                self::PACKAGE_METADATA_PATTERN
            );
            $packages[$packageName] = [
                $this->httpClient->request('GET', $url),
                $dependencies,
            ];
        }

        $errors = [];
        $problems = [];
        foreach ($packages as $packageName => [$response, $dependencies]) {
            if (200 !== $response->getStatusCode()) {
                $errors[] = [$packageName, $response];
                continue;
            }

            $data = json_decode($response->getContent(), true);
            // dependencies seem to be found in both places
            $packageDependencies = array_merge(
                $data['dependencies'] ?? [],
                $data['peerDependencies'] ?? []
            );

            foreach ($dependencies as $dependencyName) {
                // dependency is not in the import map
                if (!$entries->has($dependencyName)) {
                    $dependencyVersionConstraint = $packageDependencies[$dependencyName] ?? 'unknown';
                    $problems[] = new PackageVersionProblem($packageName, $dependencyName, $dependencyVersionConstraint, null);

                    continue;
                }

<<<<<<< HEAD
                $dependencyPackageName = $entries->get($dependencyName)->getPackageName();
=======
                $dependencyEntry = $entries->get($dependencyName);

                // local entries have no version to check and no package name to resolve
                if (!$dependencyEntry->isRemotePackage()) {
                    continue;
                }

                $dependencyPackageName = $dependencyEntry->getPackageName();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                if (!isset($packageDependencies[$dependencyPackageName])) {
                    continue;
                }

                $dependencyVersionConstraint = $packageDependencies[$dependencyPackageName];

<<<<<<< HEAD
                if (!$this->isVersionSatisfied($dependencyVersionConstraint, $entries->get($dependencyName)->version)) {
                    $problems[] = new PackageVersionProblem($packageName, $dependencyPackageName, $dependencyVersionConstraint, $entries->get($dependencyName)->version);
=======
                if (!$this->isVersionSatisfied($dependencyVersionConstraint, $dependencyEntry->version)) {
                    $problems[] = new PackageVersionProblem($packageName, $dependencyPackageName, $dependencyVersionConstraint, $dependencyEntry->version);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            }
        }

        try {
            ($errors[0][1] ?? null)?->getHeaders();
        } catch (HttpExceptionInterface $e) {
            $response = $e->getResponse();
            $packageNames = implode('", "', array_column($errors, 0));

<<<<<<< HEAD
            throw new RuntimeException(sprintf('Error %d finding metadata for package "%s". Response: ', $response->getStatusCode(), $packageNames).$response->getContent(false), 0, $e);
=======
            throw new RuntimeException(\sprintf('Error %d finding metadata for package "%s". Response: ', $response->getStatusCode(), $packageNames).$response->getContent(false), 0, $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $problems;
    }

    /**
     * Converts npm-specific version constraints to composer-style.
     *
     * @internal
     */
    public static function convertNpmConstraint(string $versionConstraint): ?string
    {
        // special npm constraint that don't translate to composer
        if (\in_array($versionConstraint, ['latest', 'next'])
            || preg_match('/^(git|http|file):/', $versionConstraint)
            || str_contains($versionConstraint, '/')
        ) {
            // GitHub shorthand like user/repo
            return null;
        }

        // remove whitespace around hyphens
        $versionConstraint = preg_replace('/\s?-\s?/', '-', $versionConstraint);
        $segments = explode(' ', $versionConstraint);
        $processedSegments = [];

        foreach ($segments as $segment) {
            if (str_contains($segment, '-') && !preg_match('/-(alpha|beta|rc)\./', $segment)) {
                // This is a range
                [$start, $end] = explode('-', $segment);
<<<<<<< HEAD
                $processedSegments[] = '>='.self::cleanVersionSegment(trim($start)).' <='.self::cleanVersionSegment(trim($end));
=======
                $processedSegments[] = self::cleanVersionSegment(trim($start)).' - '.self::cleanVersionSegment(trim($end));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            } elseif (preg_match('/^~(\d+\.\d+)$/', $segment, $matches)) {
                // Handle the tilde when only major.minor specified
                $baseVersion = $matches[1];
                $processedSegments[] = '>='.$baseVersion.'.0';
                $processedSegments[] = '<'.$baseVersion[0].'.'.($baseVersion[2] + 1).'.0';
            } else {
                $processedSegments[] = self::cleanVersionSegment($segment);
            }
        }

        return implode(' ', $processedSegments);
    }

    private static function cleanVersionSegment(string $segment): string
    {
        return str_replace(['v', '.x'], ['', '.*'], $segment);
    }

    private function isVersionSatisfied(string $versionConstraint, ?string $version): bool
    {
        if (!$version) {
            return false;
        }

        try {
            $versionConstraint = self::convertNpmConstraint($versionConstraint);

            // if version isn't parseable/convertible, assume it's not satisfied
            if (null === $versionConstraint) {
                return false;
            }

            return Semver::satisfies($version, $versionConstraint);
        } catch (\UnexpectedValueException $e) {
            return false;
        }
    }
}
