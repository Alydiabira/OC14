<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config;

use Symfony\Component\Config\Exception\FileLocatorFileNotFoundException;

/**
 * FileLocator uses an array of pre-defined paths to find files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLocator implements FileLocatorInterface
{
    protected $paths;

    /**
     * @param string|string[] $paths A path or an array of paths where to look for resources
     */
    public function __construct(string|array $paths = [])
    {
        $this->paths = (array) $paths;
    }

    /**
     * @return string|string[]
     *
     * @psalm-return ($first is true ? string : string[])
     */
    public function locate(string $name, ?string $currentPath = null, bool $first = true)
    {
        if ('' === $name) {
            throw new \InvalidArgumentException('An empty file name is not valid to be located.');
        }

        if ($this->isAbsolutePath($name)) {
            if (!file_exists($name)) {
<<<<<<< HEAD
                throw new FileLocatorFileNotFoundException(sprintf('The file "%s" does not exist.', $name), 0, null, [$name]);
=======
                throw new FileLocatorFileNotFoundException(\sprintf('The file "%s" does not exist.', $name), 0, null, [$name]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            return $name;
        }

        $paths = $this->paths;

        if (null !== $currentPath) {
            array_unshift($paths, $currentPath);
        }

        $paths = array_unique($paths);
        $filepaths = $notfound = [];

        foreach ($paths as $path) {
            if (@file_exists($file = $path.\DIRECTORY_SEPARATOR.$name)) {
<<<<<<< HEAD
                if (true === $first) {
=======
                if ($first) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    return $file;
                }
                $filepaths[] = $file;
            } else {
                $notfound[] = $file;
            }
        }

        if (!$filepaths) {
<<<<<<< HEAD
            throw new FileLocatorFileNotFoundException(sprintf('The file "%s" does not exist (in: "%s").', $name, implode('", "', $paths)), 0, null, $notfound);
=======
            throw new FileLocatorFileNotFoundException(\sprintf('The file "%s" does not exist (in: "%s").', $name, implode('", "', $paths)), 0, null, $notfound);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $filepaths;
    }

    /**
     * Returns whether the file path is an absolute path.
     */
    private function isAbsolutePath(string $file): bool
    {
        if ('/' === $file[0] || '\\' === $file[0]
            || (\strlen($file) > 3 && ctype_alpha($file[0])
                && ':' === $file[1]
                && ('\\' === $file[2] || '/' === $file[2])
            )
<<<<<<< HEAD
            || null !== parse_url($file, \PHP_URL_SCHEME)
=======
            || parse_url($file, \PHP_URL_SCHEME)
            || str_starts_with($file, 'phar:///') // "parse_url()" doesn't handle absolute phar path, despite being valid
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ) {
            return true;
        }

        return false;
    }
}
