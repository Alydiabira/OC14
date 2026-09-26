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

use Psr\Link\EvolvableLinkProviderInterface;
use Symfony\Component\Asset\Packages;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\WebLink\EventListener\AddLinkHeaderListener;
use Symfony\Component\WebLink\GenericLinkProvider;
use Symfony\Component\WebLink\Link;

/**
 * @author Kévin Dunglas <kevin@dunglas.dev>
 * @author Ryan Weaver <ryan@symfonycasts.com>
 *
 * @final
 */
class ImportMapRenderer
{
<<<<<<< HEAD
    private const DEFAULT_ES_MODULE_SHIMS_POLYFILL_URL = 'https://ga.jspm.io/npm:es-module-shims@1.8.0/dist/es-module-shims.js';
=======
    // https://generator.jspm.io/#S2NnYGAIzSvJLMlJTWEAAMYOgCAOAA
    private const DEFAULT_ES_MODULE_SHIMS_POLYFILL_URL = 'https://ga.jspm.io/npm:es-module-shims@1.10.0/dist/es-module-shims.js';
    private const DEFAULT_ES_MODULE_SHIMS_POLYFILL_INTEGRITY = 'sha384-ie1x72Xck445i0j4SlNJ5W5iGeL3Dpa0zD48MZopgWsjNB/lt60SuG1iduZGNnJn';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(
        private readonly ImportMapGenerator $importMapGenerator,
        private readonly ?Packages $assetPackages = null,
        private readonly string $charset = 'UTF-8',
        private readonly string|false $polyfillImportName = false,
        private readonly array $scriptAttributes = [],
        private readonly ?RequestStack $requestStack = null,
    ) {
    }

    public function render(string|array $entryPoint, array $attributes = []): string
    {
        $entryPoint = (array) $entryPoint;

        $importMapData = $this->importMapGenerator->getImportMapData($entryPoint);
        $importMap = [];
        $modulePreloads = [];
        $cssLinks = [];
        $polyFillPath = null;
        foreach ($importMapData as $importName => $data) {
            $path = $data['path'];

            if ($this->assetPackages) {
                // ltrim so the subdirectory (if needed) can be prepended
                $path = $this->assetPackages->getUrl(ltrim($path, '/'));
            }

            // if this represents the polyfill, hide it from the import map
            if ($importName === $this->polyfillImportName) {
                $polyFillPath = $path;
                continue;
            }

            // for subdirectories or CDNs, the import name needs to be the full URL
            if (str_starts_with($importName, '/') && $this->assetPackages) {
                $importName = $this->assetPackages->getUrl(ltrim($importName, '/'));
            }

            $preload = $data['preload'] ?? false;
            if ('css' !== $data['type']) {
                $importMap[$importName] = $path;
                if ($preload) {
<<<<<<< HEAD
                    $modulePreloads[] = $path;
=======
                    $modulePreloads[$path] = $path;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            } elseif ($preload) {
                $cssLinks[] = $path;
                // importmap entry is a noop
                $importMap[$importName] = 'data:application/javascript,';
            } else {
<<<<<<< HEAD
                $importMap[$importName] = 'data:application/javascript,'.rawurlencode(sprintf('document.head.appendChild(Object.assign(document.createElement("link"),{rel:"stylesheet",href:"%s"}))', addslashes($path)));
=======
                $importMap[$importName] = 'data:application/javascript,'.rawurlencode(\sprintf('document.head.appendChild(Object.assign(document.createElement("link"),{rel:"stylesheet",href:"%s"}))', addslashes($path)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        $output = '';
        foreach ($cssLinks as $url) {
            $url = $this->escapeAttributeValue($url);

            $output .= "\n<link rel=\"stylesheet\" href=\"$url\">";
        }

        if (class_exists(AddLinkHeaderListener::class) && $request = $this->requestStack?->getCurrentRequest()) {
            $this->addWebLinkPreloads($request, $cssLinks);
        }

        $scriptAttributes = $this->createAttributesString($attributes);
<<<<<<< HEAD
        $importMapJson = json_encode(['imports' => $importMap], \JSON_THROW_ON_ERROR | \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES | \JSON_HEX_TAG);
=======
        $importMapJson = json_encode(['imports' => $importMap ?: new \stdClass()], \JSON_THROW_ON_ERROR | \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES | \JSON_HEX_TAG);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $output .= <<<HTML

            <script type="importmap"$scriptAttributes>
            $importMapJson
            </script>
            HTML;

        if (false !== $this->polyfillImportName && null === $polyFillPath) {
            if ('es-module-shims' !== $this->polyfillImportName) {
<<<<<<< HEAD
                throw new \InvalidArgumentException(sprintf('The JavaScript module polyfill was not found in your import map. Either disable the polyfill or run "php bin/console importmap:require "%s"" to install it.', $this->polyfillImportName));
=======
                throw new \InvalidArgumentException(\sprintf('The JavaScript module polyfill was not found in your import map. Either disable the polyfill or run "php bin/console importmap:require "%s"" to install it.', $this->polyfillImportName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            // a fallback for the default polyfill in case it's not in the importmap
            $polyFillPath = self::DEFAULT_ES_MODULE_SHIMS_POLYFILL_URL;
        }

        if ($polyFillPath) {
            $url = $this->escapeAttributeValue($polyFillPath);

            $output .= <<<HTML

                <!-- ES Module Shims: Import maps polyfill for modules browsers without import maps support -->
                <script async src="$url"$scriptAttributes></script>
                HTML;
        }

        foreach ($modulePreloads as $url) {
            $url = $this->escapeAttributeValue($url);

            $output .= "\n<link rel=\"modulepreload\" href=\"$url\">";
        }

        if (\count($entryPoint) > 0) {
            $output .= "\n<script type=\"module\"$scriptAttributes>";
            foreach ($entryPoint as $entryPointName) {
                $entryPointName = $this->escapeAttributeValue($entryPointName);

                $output .= "import '".str_replace("'", "\\'", $entryPointName)."';";
            }
            $output .= '</script>';
        }

        return $output;
    }

    private function escapeAttributeValue(string $value): string
    {
        return htmlspecialchars($value, \ENT_COMPAT | \ENT_SUBSTITUTE, $this->charset);
    }

    private function createAttributesString(array $attributes): string
    {
        $attributeString = '';

        $attributes += $this->scriptAttributes;
        if (isset($attributes['src']) || isset($attributes['type'])) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('The "src" and "type" attributes are not allowed on the <script> tag rendered by "%s".', self::class));
=======
            throw new \InvalidArgumentException(\sprintf('The "src" and "type" attributes are not allowed on the <script> tag rendered by "%s".', self::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        foreach ($attributes as $name => $value) {
            $attributeString .= ' ';
            if (true === $value) {
                $attributeString .= $name;

                continue;
            }
<<<<<<< HEAD
            $attributeString .= sprintf('%s="%s"', $name, $this->escapeAttributeValue($value));
=======
            $attributeString .= \sprintf('%s="%s"', $name, $this->escapeAttributeValue($value));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $attributeString;
    }

    private function addWebLinkPreloads(Request $request, array $cssLinks): void
    {
<<<<<<< HEAD
        $cssPreloadLinks = array_map(fn ($url) => (new Link('preload', $url))->withAttribute('as', 'style'), $cssLinks);
=======
        $cssPreloadLinks = array_map(static fn ($url) => (new Link('preload', $url))->withAttribute('as', 'style'), $cssLinks);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (null === $linkProvider = $request->attributes->get('_links')) {
            $request->attributes->set('_links', new GenericLinkProvider($cssPreloadLinks));

            return;
        }

        if (!$linkProvider instanceof EvolvableLinkProviderInterface) {
            return;
        }

        foreach ($cssPreloadLinks as $link) {
            $linkProvider = $linkProvider->withLink($link);
        }

        $request->attributes->set('_links', $linkProvider);
    }
}
