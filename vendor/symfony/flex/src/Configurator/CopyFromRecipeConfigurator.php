<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Flex\Configurator;

use Symfony\Flex\Lock;
use Symfony\Flex\Recipe;
use Symfony\Flex\Update\RecipeUpdate;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CopyFromRecipeConfigurator extends AbstractConfigurator
{
    public function configure(Recipe $recipe, $config, Lock $lock, array $options = [])
    {
        $this->write('Copying files from recipe');
        $options = array_merge($this->options->toArray(), $options);

        $lock->add($recipe->getName(), ['files' => $this->copyFiles($config, $recipe->getFiles(), $options)]);
    }

    public function unconfigure(Recipe $recipe, $config, Lock $lock)
    {
        $this->write('Removing files from recipe');
<<<<<<< HEAD
        $this->removeFiles($config, $this->getRemovableFilesFromRecipeAndLock($recipe, $lock), $this->options->get('root-dir'));
=======
        $rootDir = $this->options->get('root-dir');

        foreach ($this->options->getRemovableFiles($recipe, $lock) as $file) {
            if ('.git' !== $file) { // never remove the main Git directory, even if it was created by a recipe
                $this->removeFile($this->path->concatenate([$rootDir, $file]));
            }
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function update(RecipeUpdate $recipeUpdate, array $originalConfig, array $newConfig): void
    {
        foreach ($recipeUpdate->getOriginalRecipe()->getFiles() as $filename => $data) {
<<<<<<< HEAD
=======
            $filename = $this->resolveTargetFolder($filename, $originalConfig);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $recipeUpdate->setOriginalFile($filename, $data['contents']);
        }

        $files = [];
        foreach ($recipeUpdate->getNewRecipe()->getFiles() as $filename => $data) {
<<<<<<< HEAD
=======
            $filename = $this->resolveTargetFolder($filename, $newConfig);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $recipeUpdate->setNewFile($filename, $data['contents']);

            $files[] = $this->getLocalFilePath($recipeUpdate->getRootDir(), $filename);
        }
<<<<<<< HEAD
        $recipeUpdate->getLock()->add($recipeUpdate->getPackageName(), ['files' => $files]);
    }

    private function getRemovableFilesFromRecipeAndLock(Recipe $recipe, Lock $lock): array
    {
        $lockedFiles = array_unique(
            array_reduce(
                array_column($lock->all(), 'files'),
                function (array $carry, array $package) {
                    return array_merge($carry, $package);
                },
                []
            )
        );

        $removableFiles = $recipe->getFiles();

        $lockedFiles = array_map('realpath', $lockedFiles);

        // Compare file paths by their real path to abstract OS differences
        foreach (array_keys($removableFiles) as $file) {
            if (\in_array(realpath($file), $lockedFiles)) {
                unset($removableFiles[$file]);
            }
        }

        return $removableFiles;
=======

        $recipeUpdate->getLock()->add($recipeUpdate->getPackageName(), ['files' => $files]);
    }

    /**
     * @param array<string, string> $config
     */
    private function resolveTargetFolder(string $path, array $config): string
    {
        foreach ($config as $key => $target) {
            if (str_starts_with($path, $key)) {
                return $this->options->expandTargetDir($target).substr($path, \strlen($key));
            }
        }

        return $path;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function copyFiles(array $manifest, array $files, array $options): array
    {
        $copiedFiles = [];
        $to = $options['root-dir'] ?? '.';

        foreach ($manifest as $source => $target) {
            $target = $this->options->expandTargetDir($target);
            if ('/' === substr($source, -1)) {
                $copiedFiles = array_merge(
                    $copiedFiles,
                    $this->copyDir($source, $this->path->concatenate([$to, $target]), $files, $options)
                );
            } else {
                $copiedFiles[] = $this->copyFile($this->path->concatenate([$to, $target]), $files[$source]['contents'], $files[$source]['executable'], $options);
            }
        }

        return $copiedFiles;
    }

    private function copyDir(string $source, string $target, array $files, array $options): array
    {
        $copiedFiles = [];
        foreach ($files as $file => $data) {
<<<<<<< HEAD
            if (0 === strpos($file, $source)) {
=======
            if (str_starts_with($file, $source)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $file = $this->path->concatenate([$target, substr($file, \strlen($source))]);
                $copiedFiles[] = $this->copyFile($file, $data['contents'], $data['executable'], $options);
            }
        }

        return $copiedFiles;
    }

    private function copyFile(string $to, string $contents, bool $executable, array $options): string
    {
<<<<<<< HEAD
        $overwrite = $options['force'] ?? false;
        $basePath = $options['root-dir'] ?? '.';
        $copiedFile = $this->getLocalFilePath($basePath, $to);

        if (!$this->options->shouldWriteFile($to, $overwrite)) {
=======
        $basePath = $options['root-dir'] ?? '.';
        $copiedFile = $this->getLocalFilePath($basePath, $to);

        if (!$this->options->shouldWriteFile($to, $options['force'] ?? false, $options['assumeYesForPrompts'] ?? false)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            return $copiedFile;
        }

        if (!is_dir(\dirname($to))) {
            mkdir(\dirname($to), 0777, true);
        }

        file_put_contents($to, $this->options->expandTargetDir($contents));
        if ($executable) {
            @chmod($to, fileperms($to) | 0111);
        }

<<<<<<< HEAD
        $this->write(sprintf('  Created <fg=green>"%s"</>', $this->path->relativize($to)));
=======
        $this->write(\sprintf('  Created <fg=green>"%s"</>', $this->path->relativize($to)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $copiedFile;
    }

<<<<<<< HEAD
    private function removeFiles(array $manifest, array $files, string $to)
    {
        foreach ($manifest as $source => $target) {
            $target = $this->options->expandTargetDir($target);

            if ('.git' === $target) {
                // never remove the main Git directory, even if it was created by a recipe
                continue;
            }

            if ('/' === substr($source, -1)) {
                foreach (array_keys($files) as $file) {
                    if (0 === strpos($file, $source)) {
                        $this->removeFile($this->path->concatenate([$to, $target, substr($file, \strlen($source))]));
                    }
                }
            } else {
                $this->removeFile($this->path->concatenate([$to, $target]));
            }
        }
    }

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private function removeFile(string $to)
    {
        if (!file_exists($to)) {
            return;
        }

        @unlink($to);
<<<<<<< HEAD
        $this->write(sprintf('  Removed <fg=green>"%s"</>', $this->path->relativize($to)));
=======
        $this->write(\sprintf('  Removed <fg=green>"%s"</>', $this->path->relativize($to)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (0 === \count(glob(\dirname($to).'/*', \GLOB_NOSORT))) {
            @rmdir(\dirname($to));
        }
    }

    private function getLocalFilePath(string $basePath, $destination): string
    {
        return str_replace($basePath.\DIRECTORY_SEPARATOR, '', $destination);
    }
}
