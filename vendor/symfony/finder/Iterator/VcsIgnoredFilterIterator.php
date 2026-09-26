<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Finder\Iterator;

use Symfony\Component\Finder\Gitignore;

/**
 * @extends \FilterIterator<string, \SplFileInfo>
 */
final class VcsIgnoredFilterIterator extends \FilterIterator
{
    private string $baseDir;

    /**
<<<<<<< HEAD
     * @var array<string, array{0: string, 1: string}|null>
=======
     * @var array<string, list<array{0: string, 1: bool, 2: bool}>|null>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    private array $gitignoreFilesCache = [];

    /**
     * @var array<string, bool>
     */
    private array $ignoredPathsCache = [];

    /**
     * @param \Iterator<string, \SplFileInfo> $iterator
     */
    public function __construct(\Iterator $iterator, string $baseDir)
    {
        $this->baseDir = $this->normalizePath($baseDir);

        foreach ([$this->baseDir, ...$this->parentDirectoriesUpwards($this->baseDir)] as $directory) {
            if (@is_dir("{$directory}/.git")) {
                $this->baseDir = $directory;
                break;
            }
        }

        parent::__construct($iterator);
    }

    public function accept(): bool
    {
        $file = $this->current();

        $fileRealPath = $this->normalizePath($file->getRealPath());

        return !$this->isIgnored($fileRealPath);
    }

    private function isIgnored(string $fileRealPath): bool
    {
<<<<<<< HEAD
        if (is_dir($fileRealPath) && !str_ends_with($fileRealPath, '/')) {
            $fileRealPath .= '/';
        }

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (isset($this->ignoredPathsCache[$fileRealPath])) {
            return $this->ignoredPathsCache[$fileRealPath];
        }

        $ignored = false;
<<<<<<< HEAD

        foreach ($this->parentDirectoriesDownwards($fileRealPath) as $parentDirectory) {
            if ($this->isIgnored($parentDirectory)) {
                // rules in ignored directories are ignored, no need to check further.
                break;
            }

            $fileRelativePath = substr($fileRealPath, \strlen($parentDirectory) + 1);

            if (null === $regexps = $this->readGitignoreFile("{$parentDirectory}/.gitignore")) {
                continue;
            }

            [$exclusionRegex, $inclusionRegex] = $regexps;

            if (preg_match($exclusionRegex, $fileRelativePath)) {
                $ignored = true;

                continue;
            }

            if (preg_match($inclusionRegex, $fileRelativePath)) {
                $ignored = false;
=======
        $parentDirectories = $this->parentDirectoriesDownwards($fileRealPath);

        if ($parentDirectories && $this->baseDir !== $parentDirectory = $parentDirectories[\count($parentDirectories) - 1]) {
            // paths inside an ignored directory are ignored and cannot be re-included
            $ignored = $this->isIgnored($parentDirectory);
        }

        if (!$ignored) {
            $isDir = is_dir($fileRealPath);

            // the last matching rule of the deepest .gitignore file decides
            foreach (array_reverse($parentDirectories) as $parentDirectory) {
                if (null === $rules = $this->readGitignoreFile("{$parentDirectory}/.gitignore")) {
                    continue;
                }

                $fileRelativePath = substr($fileRealPath, \strlen($parentDirectory) + 1);

                foreach ($rules as [$regex, $isNegated, $isDirOnly]) {
                    if ($isDirOnly && !$isDir) {
                        continue;
                    }

                    if (preg_match($regex, $fileRelativePath, $matches) && $matches[0] === $fileRelativePath) {
                        $ignored = !$isNegated;

                        break 2;
                    }
                }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        return $this->ignoredPathsCache[$fileRealPath] = $ignored;
    }

    /**
     * @return list<string>
     */
    private function parentDirectoriesUpwards(string $from): array
    {
        $parentDirectories = [];

        $parentDirectory = $from;

        while (true) {
            $newParentDirectory = \dirname($parentDirectory);

            // dirname('/') = '/'
            if ($newParentDirectory === $parentDirectory) {
                break;
            }

            $parentDirectories[] = $parentDirectory = $newParentDirectory;
        }

        return $parentDirectories;
    }

    private function parentDirectoriesUpTo(string $from, string $upTo): array
    {
        return array_filter(
            $this->parentDirectoriesUpwards($from),
            static fn (string $directory): bool => str_starts_with($directory, $upTo)
        );
    }

    /**
     * @return list<string>
     */
    private function parentDirectoriesDownwards(string $fileRealPath): array
    {
        return array_reverse(
            $this->parentDirectoriesUpTo($fileRealPath, $this->baseDir)
        );
    }

    /**
<<<<<<< HEAD
     * @return array{0: string, 1: string}|null
=======
     * Returns the rules of a .gitignore file, last one first, as [regex, isNegated, isDirOnly] tuples.
     *
     * @return list<array{0: string, 1: bool, 2: bool}>|null
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    private function readGitignoreFile(string $path): ?array
    {
        if (\array_key_exists($path, $this->gitignoreFilesCache)) {
            return $this->gitignoreFilesCache[$path];
        }

        if (!file_exists($path)) {
            return $this->gitignoreFilesCache[$path] = null;
        }

        if (!is_file($path) || !is_readable($path)) {
            throw new \RuntimeException("The \"ignoreVCSIgnored\" option cannot be used by the Finder as the \"{$path}\" file is not readable.");
        }

<<<<<<< HEAD
        $gitignoreFileContent = file_get_contents($path);

        return $this->gitignoreFilesCache[$path] = [
            Gitignore::toRegex($gitignoreFileContent),
            Gitignore::toRegexMatchingNegatedPatterns($gitignoreFileContent),
        ];
=======
        $rules = [];

        foreach (preg_split('~\r\n?|\n~', file_get_contents($path)) as $line) {
            $line = preg_replace('~(?<!\\\\)#[^\n\r]*~', '', $line);
            $line = preg_replace('~(?<!\\\\)[ \t]+$~', '', $line);

            if ($isNegated = str_starts_with($line, '!')) {
                $line = substr($line, 1);
            }

            if ($isDirOnly = str_ends_with($line, '/')) {
                $line = substr($line, 0, -1);
            }

            if ('' === $line) {
                continue;
            }

            $rules[] = [Gitignore::toRegex($line), $isNegated, $isDirOnly];
        }

        return $this->gitignoreFilesCache[$path] = array_reverse($rules);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function normalizePath(string $path): string
    {
        if ('\\' === \DIRECTORY_SEPARATOR) {
            return str_replace('\\', '/', $path);
        }

        return $path;
    }
}
