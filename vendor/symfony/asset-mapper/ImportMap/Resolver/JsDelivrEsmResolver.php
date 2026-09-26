<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\AssetMapper\ImportMap\Resolver;

use Symfony\Component\AssetMapper\Compiler\CssAssetUrlCompiler;
use Symfony\Component\AssetMapper\Exception\RuntimeException;
<<<<<<< HEAD
=======
use Symfony\Component\AssetMapper\ImportMap\BatchHttpClient;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\AssetMapper\ImportMap\ImportMapEntry;
use Symfony\Component\AssetMapper\ImportMap\ImportMapType;
use Symfony\Component\AssetMapper\ImportMap\PackageRequireOptions;
use Symfony\Component\Filesystem\Path;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class JsDelivrEsmResolver implements PackageResolverInterface
{
    public const URL_PATTERN_VERSION = 'https://data.jsdelivr.com/v1/packages/npm/%s/resolved';
    public const URL_PATTERN_DIST_CSS = 'https://cdn.jsdelivr.net/npm/%s@%s%s';
    public const URL_PATTERN_DIST = self::URL_PATTERN_DIST_CSS.'/+esm';
    public const URL_PATTERN_ENTRYPOINT = 'https://data.jsdelivr.com/v1/packages/npm/%s@%s/entrypoints';

<<<<<<< HEAD
    public const IMPORT_REGEX = '#(?:import\s*(?:\w+,)?(?:(?:\{[^}]*\}|\w+|\*\s*as\s+\w+)\s*\bfrom\s*)?|export\s*(?:\{[^}]*\}|\*)\s*from\s*)("/npm/((?:@[^/]+/)?[^@]+?)(?:@([^/]+))?((?:/[^/]+)*?)/\+esm")#';

    private const ES_MODULE_SHIMS = 'es-module-shims';

    private HttpClientInterface $httpClient;
=======
    public const IMPORT_REGEX = '#(?:import\s*(?:[\w$]+,)?(?:(?:\{[^}]*\}|[\w$]+|\*\s*as\s+[\w$]+)\s*\bfrom\s*)?|export\s*(?:\{[^}]*\}|\*)\s*from\s*|await\simport\()("/npm/((?:@[^/]+/)?[^@]+?)(?:@([^/]+))?((?:/[^/]+)*?)/\+esm")(?:\)*)#';

    private const ES_MODULE_SHIMS = 'es-module-shims';

    private readonly HttpClientInterface $httpClient;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(
        ?HttpClientInterface $httpClient = null,
    ) {
<<<<<<< HEAD
        $this->httpClient = $httpClient ?? HttpClient::create();
=======
        $this->httpClient = new BatchHttpClient($httpClient ?? HttpClient::create());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function resolvePackages(array $packagesToRequire): array
    {
        $resolvedPackages = [];

        resolve_packages:

        // request the version of each package
        $requiredPackages = [];
        foreach ($packagesToRequire as $options) {
            $packageSpecifier = trim($options->packageModuleSpecifier, '/');

            // avoid resolving the same package twice
            if (isset($resolvedPackages[$packageSpecifier])) {
                continue;
            }

            [$packageName, $filePath] = ImportMapEntry::splitPackageNameAndFilePath($packageSpecifier);

<<<<<<< HEAD
            $versionUrl = sprintf(self::URL_PATTERN_VERSION, $packageName);
=======
            $versionUrl = \sprintf(self::URL_PATTERN_VERSION, $packageName);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (null !== $options->versionConstraint) {
                $versionUrl .= '?specifier='.urlencode($options->versionConstraint);
            }
            $response = $this->httpClient->request('GET', $versionUrl);
            $requiredPackages[] = [$options, $response, $packageName, $filePath, /* resolved version */ null];
        }

        // use the version of each package to request the contents
        $findVersionErrors = [];
        $entrypointResponses = [];
        foreach ($requiredPackages as $i => [$options, $response, $packageName, $filePath]) {
            if (200 !== $response->getStatusCode()) {
                $findVersionErrors[] = [$packageName, $response];
                continue;
            }

            $version = $response->toArray()['version'];
            if (null === $version) {
<<<<<<< HEAD
                throw new RuntimeException(sprintf('Unable to find the latest version for package "%s" - try specifying the version manually.', $packageName));
            }

            $pattern = $this->resolveUrlPattern($packageName, $filePath);
            $requiredPackages[$i][1] = $this->httpClient->request('GET', sprintf($pattern, $packageName, $version, $filePath));
            $requiredPackages[$i][4] = $version;

            if (!$filePath) {
                $entrypointResponses[$packageName] = [$this->httpClient->request('GET', sprintf(self::URL_PATTERN_ENTRYPOINT, $packageName, $version)), $version];
=======
                throw new RuntimeException(\sprintf('Unable to find the latest version for package "%s" - try specifying the version manually.', $packageName));
            }

            $pattern = $this->resolveUrlPattern($packageName, $filePath);
            $requiredPackages[$i][1] = $this->httpClient->request('GET', \sprintf($pattern, $packageName, $version, $filePath));
            $requiredPackages[$i][4] = $version;

            if (!$filePath) {
                $entrypointResponses[$packageName] = [$this->httpClient->request('GET', \sprintf(self::URL_PATTERN_ENTRYPOINT, $packageName, $version)), $version];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        try {
            ($findVersionErrors[0][1] ?? null)?->getHeaders();
        } catch (HttpExceptionInterface $e) {
            $response = $e->getResponse();
            $packages = implode('", "', array_column($findVersionErrors, 0));

<<<<<<< HEAD
            throw new RuntimeException(sprintf('Error %d finding version from jsDelivr for the following packages: "%s". Check your package names. Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
=======
            throw new RuntimeException(\sprintf('Error %d finding version from jsDelivr for the following packages: "%s". Check your package names. Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        // process the contents of each package & add the resolved package
        $packagesToRequire = [];
        $getContentErrors = [];
        foreach ($requiredPackages as [$options, $response, $packageName, $filePath, $version]) {
            if (200 !== $response->getStatusCode()) {
                $getContentErrors[] = [$options->packageModuleSpecifier, $response];
                continue;
            }

            $contentType = $response->getHeaders()['content-type'][0] ?? '';
            $type = str_starts_with($contentType, 'text/css') ? ImportMapType::CSS : ImportMapType::JS;
            $resolvedPackages[$options->packageModuleSpecifier] = new ResolvedImportMapPackage($options, $version, $type);

            $packagesToRequire = array_merge($packagesToRequire, $this->fetchPackageRequirementsFromImports($response->getContent()));
        }

        try {
            ($getContentErrors[0][1] ?? null)?->getHeaders();
        } catch (HttpExceptionInterface $e) {
            $response = $e->getResponse();
            $packages = implode('", "', array_column($getContentErrors, 0));

<<<<<<< HEAD
            throw new RuntimeException(sprintf('Error %d requiring packages from jsDelivr for "%s". Check your package names. Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
=======
            throw new RuntimeException(\sprintf('Error %d requiring packages from jsDelivr for "%s". Check your package names. Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        // process any pending CSS entrypoints
        $entrypointErrors = [];
        foreach ($entrypointResponses as $package => [$cssEntrypointResponse, $version]) {
            if (200 !== $cssEntrypointResponse->getStatusCode()) {
                $entrypointErrors[] = [$package, $cssEntrypointResponse];
                continue;
            }

            $entrypoints = $cssEntrypointResponse->toArray()['entrypoints'] ?? [];
            $cssFile = $entrypoints['css']['file'] ?? null;
            $guessed = $entrypoints['css']['guessed'] ?? true;

            if (!$cssFile || $guessed) {
                continue;
            }

            $packagesToRequire[] = new PackageRequireOptions($package.$cssFile, $version);
        }

        try {
            ($entrypointErrors[0][1] ?? null)?->getHeaders();
        } catch (HttpExceptionInterface $e) {
            $response = $e->getResponse();
            $packages = implode('", "', array_column($entrypointErrors, 0));

<<<<<<< HEAD
            throw new RuntimeException(sprintf('Error %d checking for a CSS entrypoint for "%s". Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
=======
            throw new RuntimeException(\sprintf('Error %d checking for a CSS entrypoint for "%s". Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ($packagesToRequire) {
            goto resolve_packages;
        }

        return array_values($resolvedPackages);
    }

    /**
     * @param ImportMapEntry[] $importMapEntries
     *
     * @return array<string, array{content: string, dependencies: string[], extraFiles: array<string, string>}>
     */
    public function downloadPackages(array $importMapEntries, ?callable $progressCallback = null): array
    {
        $responses = [];
        foreach ($importMapEntries as $package => $entry) {
            if (!$entry->isRemotePackage()) {
<<<<<<< HEAD
                throw new \InvalidArgumentException(sprintf('The entry "%s" is not a remote package.', $entry->importName));
=======
                throw new \InvalidArgumentException(\sprintf('The entry "%s" is not a remote package.', $entry->importName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            $pattern = $this->resolveUrlPattern(
                $entry->getPackageName(),
                $entry->getPackagePathString(),
                $entry->type,
            );
<<<<<<< HEAD
            $url = sprintf($pattern, $entry->getPackageName(), $entry->version, $entry->getPackagePathString());
=======
            $url = \sprintf($pattern, $entry->getPackageName(), $entry->version, $entry->getPackagePathString());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            $responses[$package] = [$this->httpClient->request('GET', $url), $entry];
        }

        $errors = [];
        $contents = [];
        $extraFileResponses = [];
<<<<<<< HEAD
=======
        /** @var ImportMapEntry $entry */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        foreach ($responses as $package => [$response, $entry]) {
            if (200 !== $response->getStatusCode()) {
                $errors[] = [$package, $response];
                continue;
            }

            if ($progressCallback) {
                $progressCallback($package, 'started', $response, \count($responses));
            }

            $dependencies = [];
            $extraFiles = [];
<<<<<<< HEAD
            /* @var ImportMapEntry $entry */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $contents[$package] = [
                'content' => $this->makeImportsBare($response->getContent(), $dependencies, $extraFiles, $entry->type, $entry->getPackagePathString()),
                'dependencies' => $dependencies,
                'extraFiles' => [],
            ];

<<<<<<< HEAD
            if (0 !== \count($extraFiles)) {
                $extraFileResponses[$package] = [];
                foreach ($extraFiles as $extraFile) {
                    $extraFileResponses[$package][] = [$this->httpClient->request('GET', sprintf(self::URL_PATTERN_DIST_CSS, $entry->getPackageName(), $entry->version, $extraFile)), $extraFile, $entry->getPackageName(), $entry->version];
=======
            if ($extraFiles) {
                $extraFileResponses[$package] = [];
                foreach ($extraFiles as $extraFile) {
                    $extraFileResponses[$package][] = [$this->httpClient->request('GET', \sprintf(self::URL_PATTERN_DIST_CSS, $entry->getPackageName(), $entry->version, $extraFile)), $extraFile, $entry->getPackageName(), $entry->version];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            }

            if ($progressCallback) {
                $progressCallback($package, 'finished', $response, \count($responses));
            }
        }

        try {
            ($errors[0][1] ?? null)?->getHeaders();
        } catch (HttpExceptionInterface $e) {
            $response = $e->getResponse();
            $packages = implode('", "', array_column($errors, 0));

<<<<<<< HEAD
            throw new RuntimeException(sprintf('Error %d downloading packages from jsDelivr for "%s". Check your package names. Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
=======
            throw new RuntimeException(\sprintf('Error %d downloading packages from jsDelivr for "%s". Check your package names. Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $extraFileErrors = [];
        download_extra_files:
        $packageFileResponses = $extraFileResponses;
        $extraFileResponses = [];
        foreach ($packageFileResponses as $package => $responses) {
            foreach ($responses as [$response, $extraFile, $packageName, $version]) {
                if (200 !== $response->getStatusCode()) {
                    $extraFileErrors[] = [$package, $response];
                    continue;
                }

                $extraFiles = [];

                $content = $response->getContent();
                if (str_ends_with($extraFile, '.css')) {
                    $content = $this->makeImportsBare($content, $dependencies, $extraFiles, ImportMapType::CSS, $extraFile);
                }
                $contents[$package]['extraFiles'][$extraFile] = $content;

<<<<<<< HEAD
                if (0 !== \count($extraFiles)) {
                    $extraFileResponses[$package] = [];
                    foreach ($extraFiles as $newExtraFile) {
                        $extraFileResponses[$package][] = [$this->httpClient->request('GET', sprintf(self::URL_PATTERN_DIST_CSS, $packageName, $version, $newExtraFile)), $newExtraFile, $packageName, $version];
=======
                if ($extraFiles) {
                    $extraFileResponses[$package] = [];
                    foreach ($extraFiles as $newExtraFile) {
                        $extraFileResponses[$package][] = [$this->httpClient->request('GET', \sprintf(self::URL_PATTERN_DIST_CSS, $packageName, $version, $newExtraFile)), $newExtraFile, $packageName, $version];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    }
                }
            }
        }

        if ($extraFileResponses) {
            goto download_extra_files;
        }

        try {
            ($extraFileErrors[0][1] ?? null)?->getHeaders();
        } catch (HttpExceptionInterface $e) {
            $response = $e->getResponse();
            $packages = implode('", "', array_column($extraFileErrors, 0));

<<<<<<< HEAD
            throw new RuntimeException(sprintf('Error %d downloading extra imported files from jsDelivr for "%s". Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
=======
            throw new RuntimeException(\sprintf('Error %d downloading extra imported files from jsDelivr for "%s". Response: ', $response->getStatusCode(), $packages).$response->getContent(false), 0, $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $contents;
    }

    /**
     * Parses the very specific import syntax used by jsDelivr.
     *
     * Replaces those with normal import "package/name" statements and
     * records the package as a dependency, so it can be downloaded and
     * added to the importmap.
     *
     * @return PackageRequireOptions[]
     */
    private function fetchPackageRequirementsFromImports(string $content): array
    {
        // imports from jsdelivr follow a predictable format
        preg_match_all(self::IMPORT_REGEX, $content, $matches);
        $dependencies = [];
        foreach ($matches[2] as $index => $packageName) {
            $version = $matches[3][$index] ?: null;
            $packageName .= $matches[4][$index]; // add the path if any

            $dependencies[] = new PackageRequireOptions($packageName, $version);
        }

        return $dependencies;
    }

    /**
     * Parses the very specific import syntax used by jsDelivr.
     *
     * Replaces those with normal import "package/name" statements.
     */
    private function makeImportsBare(string $content, array &$dependencies, array &$extraFiles, ImportMapType $type, string $sourceFilePath): string
    {
        if (ImportMapType::JS === $type) {
<<<<<<< HEAD
            $content = preg_replace_callback(self::IMPORT_REGEX, function ($matches) use (&$dependencies) {
=======
            $content = preg_replace_callback(self::IMPORT_REGEX, static function ($matches) use (&$dependencies) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $packageName = $matches[2].$matches[4]; // add the path if any
                $dependencies[] = $packageName;

                // replace the "/npm/package@version/+esm" with "package@version"
<<<<<<< HEAD
                return str_replace($matches[1], sprintf('"%s"', $packageName), $matches[0]);
=======
                return str_replace($matches[1], \sprintf('"%s"', $packageName), $matches[0]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }, $content);

            // source maps are not also downloaded - so remove the sourceMappingURL
            // remove the final one only (in case sourceMappingURL is used in the code)
            if (false !== $lastPos = strrpos($content, '//# sourceMappingURL=')) {
                $content = substr($content, 0, $lastPos).preg_replace('{//# sourceMappingURL=.*$}m', '', substr($content, $lastPos));
            }

            return $content;
        }

        preg_match_all(CssAssetUrlCompiler::ASSET_URL_PATTERN, $content, $matches);
<<<<<<< HEAD
        foreach ($matches[1] as $path) {
=======
        foreach ($matches[2] as $path) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (str_starts_with($path, 'data:')) {
                continue;
            }

            if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
                continue;
            }

            $extraFiles[] = Path::join(\dirname($sourceFilePath), $path);
        }

        return preg_replace('{/\*# sourceMappingURL=[^ ]*+ \*/}', '', $content);
    }

    /**
     * Determine the URL pattern to be used by the HTTP Client.
     */
    private function resolveUrlPattern(string $packageName, string $path, ?ImportMapType $type = null): string
    {
        // The URL for the es-module-shims polyfill package uses the CSS pattern to
        // prevent a syntax error in the browser console, so check the package name
        // as part of the condition.
        if (self::ES_MODULE_SHIMS === $packageName || str_ends_with($path, '.css') || ImportMapType::CSS === $type) {
            return self::URL_PATTERN_DIST_CSS;
        }

        return self::URL_PATTERN_DIST;
    }
}
