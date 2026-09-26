<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Loader;

use Twig\Error\LoaderError;
use Twig\Source;

/**
 * Loads templates from other loaders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ChainLoader implements LoaderInterface
{
<<<<<<< HEAD
    private $hasSourceCache = [];
    private $loaders = [];

    /**
     * @param LoaderInterface[] $loaders
     */
    public function __construct(array $loaders = [])
    {
        foreach ($loaders as $loader) {
            $this->addLoader($loader);
        }
=======
    /**
     * @var array<string, bool>
     */
    private $hasSourceCache = [];

    /**
     * @param iterable<LoaderInterface> $loaders
     */
    public function __construct(
        private iterable $loaders = [],
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function addLoader(LoaderInterface $loader): void
    {
<<<<<<< HEAD
        $this->loaders[] = $loader;
=======
        $current = $this->loaders;

        $this->loaders = (static function () use ($current, $loader): \Generator {
            yield from $current;
            yield $loader;
        })();

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->hasSourceCache = [];
    }

    /**
     * @return LoaderInterface[]
     */
    public function getLoaders(): array
    {
<<<<<<< HEAD
=======
        if (!\is_array($this->loaders)) {
            $this->loaders = iterator_to_array($this->loaders, false);
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return $this->loaders;
    }

    public function getSourceContext(string $name): Source
    {
        $exceptions = [];
<<<<<<< HEAD
        foreach ($this->loaders as $loader) {
=======

        foreach ($this->getLoaders() as $loader) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (!$loader->exists($name)) {
                continue;
            }

            try {
                return $loader->getSourceContext($name);
            } catch (LoaderError $e) {
                $exceptions[] = $e->getMessage();
            }
        }

<<<<<<< HEAD
        throw new LoaderError(sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
=======
        throw new LoaderError(\sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function exists(string $name): bool
    {
        if (isset($this->hasSourceCache[$name])) {
            return $this->hasSourceCache[$name];
        }

<<<<<<< HEAD
        foreach ($this->loaders as $loader) {
=======
        foreach ($this->getLoaders() as $loader) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($loader->exists($name)) {
                return $this->hasSourceCache[$name] = true;
            }
        }

        return $this->hasSourceCache[$name] = false;
    }

    public function getCacheKey(string $name): string
    {
        $exceptions = [];
<<<<<<< HEAD
        foreach ($this->loaders as $loader) {
=======

        foreach ($this->getLoaders() as $loader) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (!$loader->exists($name)) {
                continue;
            }

            try {
                return $loader->getCacheKey($name);
            } catch (LoaderError $e) {
<<<<<<< HEAD
                $exceptions[] = \get_class($loader).': '.$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
=======
                $exceptions[] = $loader::class.': '.$e->getMessage();
            }
        }

        throw new LoaderError(\sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function isFresh(string $name, int $time): bool
    {
        $exceptions = [];
<<<<<<< HEAD
        foreach ($this->loaders as $loader) {
=======

        foreach ($this->getLoaders() as $loader) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (!$loader->exists($name)) {
                continue;
            }

            try {
                return $loader->isFresh($name, $time);
            } catch (LoaderError $e) {
<<<<<<< HEAD
                $exceptions[] = \get_class($loader).': '.$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
=======
                $exceptions[] = $loader::class.': '.$e->getMessage();
            }
        }

        throw new LoaderError(\sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
