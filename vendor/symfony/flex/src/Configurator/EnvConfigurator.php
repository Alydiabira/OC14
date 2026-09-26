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

<<<<<<< HEAD
use Symfony\Flex\Lock;
=======
use Composer\Composer;
use Composer\IO\IOInterface;
use Symfony\Flex\Lock;
use Symfony\Flex\Options;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Flex\Recipe;
use Symfony\Flex\Update\RecipeUpdate;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EnvConfigurator extends AbstractConfigurator
{
<<<<<<< HEAD
    public function configure(Recipe $recipe, $vars, Lock $lock, array $options = [])
    {
        $this->write('Adding environment variable defaults');

        $this->configureEnvDist($recipe, $vars, $options['force'] ?? false);
=======
    private string $suffix;

    public function __construct(Composer $composer, IOInterface $io, Options $options, string $suffix = '')
    {
        parent::__construct($composer, $io, $options);
        $this->suffix = $suffix;
    }

    public function configure(Recipe $recipe, $vars, Lock $lock, array $options = [])
    {
        $this->write('Adding environment variable defaults'.('' === $this->suffix ? '' : ' ('.$this->suffix.')'));

        $this->configureEnvDist($recipe, $vars, $options['force'] ?? false);

        if ('' !== $this->suffix) {
            return;
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (!file_exists($this->options->get('root-dir').'/'.($this->options->get('runtime')['dotenv_path'] ?? '.env').'.test')) {
            $this->configurePhpUnit($recipe, $vars, $options['force'] ?? false);
        }
    }

    public function unconfigure(Recipe $recipe, $vars, Lock $lock)
    {
        $this->unconfigureEnvFiles($recipe, $vars);
        $this->unconfigurePhpUnit($recipe, $vars);
    }

    public function update(RecipeUpdate $recipeUpdate, array $originalConfig, array $newConfig): void
    {
        $recipeUpdate->addOriginalFiles(
            $this->getContentsAfterApplyingRecipe($recipeUpdate->getRootDir(), $recipeUpdate->getOriginalRecipe(), $originalConfig)
        );

        $recipeUpdate->addNewFiles(
            $this->getContentsAfterApplyingRecipe($recipeUpdate->getRootDir(), $recipeUpdate->getNewRecipe(), $newConfig)
        );
    }

    private function configureEnvDist(Recipe $recipe, $vars, bool $update)
    {
        $dotenvPath = $this->options->get('runtime')['dotenv_path'] ?? '.env';
<<<<<<< HEAD

        foreach ([$dotenvPath.'.dist', $dotenvPath] as $file) {
=======
        $files = '' === $this->suffix ? [$dotenvPath.'.dist', $dotenvPath] : [$dotenvPath.'.'.$this->suffix];

        foreach ($files as $file) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $env = $this->options->get('root-dir').'/'.$file;
            if (!is_file($env)) {
                continue;
            }

            if (!$update && $this->isFileMarked($recipe, $env)) {
                continue;
            }

            $data = '';
            foreach ($vars as $key => $value) {
                $existingValue = $update ? $this->findExistingValue($key, $env, $recipe) : null;
                $value = $this->evaluateValue($value, $existingValue);
                if ('#' === $key[0] && is_numeric(substr($key, 1))) {
                    if ('' === $value) {
                        $data .= "#\n";
                    } else {
                        $data .= '# '.$value."\n";
                    }

                    continue;
                }

                $value = $this->options->expandTargetDir($value);
                if (false !== strpbrk($value, " \t\n&!\"")) {
                    $value = '"'.str_replace(['\\', '"', "\t", "\n"], ['\\\\', '\\"', '\t', '\n'], $value).'"';
                }
                $data .= "$key=$value\n";
            }
            $data = $this->markData($recipe, $data);

            if (!$this->updateData($env, $data)) {
                file_put_contents($env, $data, \FILE_APPEND);
            }
        }
    }

    private function configurePhpUnit(Recipe $recipe, $vars, bool $update)
    {
<<<<<<< HEAD
        foreach (['phpunit.xml.dist', 'phpunit.xml'] as $file) {
=======
        foreach (['phpunit.xml.dist', 'phpunit.dist.xml', 'phpunit.xml'] as $file) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $phpunit = $this->options->get('root-dir').'/'.$file;
            if (!is_file($phpunit)) {
                continue;
            }

            if (!$update && $this->isFileXmlMarked($recipe, $phpunit)) {
                continue;
            }

            $data = '';
            foreach ($vars as $key => $value) {
                $value = $this->evaluateValue($value);
                if ('#' === $key[0]) {
                    if (is_numeric(substr($key, 1))) {
                        $doc = new \DOMDocument();
                        $data .= '        '.$doc->saveXML($doc->createComment(' '.$value.' '))."\n";
                    } else {
                        $value = $this->options->expandTargetDir($value);
                        $doc = new \DOMDocument();
                        $fragment = $doc->createElement('env');
                        $fragment->setAttribute('name', substr($key, 1));
                        $fragment->setAttribute('value', $value);
                        $data .= '        '.str_replace(['<', '/>'], ['<!-- ', ' -->'], $doc->saveXML($fragment))."\n";
                    }
                } else {
                    $value = $this->options->expandTargetDir($value);
                    $doc = new \DOMDocument();
                    $fragment = $doc->createElement('env');
                    $fragment->setAttribute('name', $key);
                    $fragment->setAttribute('value', $value);
                    $data .= '        '.$doc->saveXML($fragment)."\n";
                }
            }
            $data = $this->markXmlData($recipe, $data);

            if (!$this->updateData($phpunit, $data)) {
                file_put_contents($phpunit, preg_replace('{^(\s+</php>)}m', $data.'$1', file_get_contents($phpunit)));
            }
        }
    }

    private function unconfigureEnvFiles(Recipe $recipe, $vars)
    {
        $dotenvPath = $this->options->get('runtime')['dotenv_path'] ?? '.env';
<<<<<<< HEAD

        foreach ([$dotenvPath, $dotenvPath.'.dist'] as $file) {
=======
        $files = '' === $this->suffix ? [$dotenvPath, $dotenvPath.'.dist'] : [$dotenvPath.'.'.$this->suffix];

        foreach ($files as $file) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $env = $this->options->get('root-dir').'/'.$file;
            if (!file_exists($env)) {
                continue;
            }

<<<<<<< HEAD
            $contents = preg_replace(sprintf('{%s*###> %s ###.*###< %s ###%s+}s', "\n", $recipe->getName(), $recipe->getName(), "\n"), "\n", file_get_contents($env), -1, $count);
=======
            $contents = preg_replace(\sprintf('{%s*###> %s ###.*###< %s ###%s+}s', "\n", $recipe->getName(), $recipe->getName(), "\n"), "\n", file_get_contents($env), -1, $count);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (!$count) {
                continue;
            }

<<<<<<< HEAD
            $this->write(sprintf('Removing environment variables from %s', $file));
=======
            $this->write(\sprintf('Removing environment variables from %s', $file));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            file_put_contents($env, $contents);
        }
    }

    private function unconfigurePhpUnit(Recipe $recipe, $vars)
    {
<<<<<<< HEAD
        foreach (['phpunit.xml.dist', 'phpunit.xml'] as $file) {
=======
        foreach (['phpunit.dist.xml', 'phpunit.xml.dist', 'phpunit.xml'] as $file) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $phpunit = $this->options->get('root-dir').'/'.$file;
            if (!is_file($phpunit)) {
                continue;
            }

<<<<<<< HEAD
            $contents = preg_replace(sprintf('{%s*\s+<!-- ###\+ %s ### -->.*<!-- ###- %s ### -->%s+}s', "\n", $recipe->getName(), $recipe->getName(), "\n"), "\n", file_get_contents($phpunit), -1, $count);
=======
            $contents = preg_replace(\sprintf('{%s*\s+<!-- ###\+ %s ### -->.*<!-- ###- %s ### -->%s+}s', "\n", $recipe->getName(), $recipe->getName(), "\n"), "\n", file_get_contents($phpunit), -1, $count);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (!$count) {
                continue;
            }

<<<<<<< HEAD
            $this->write(sprintf('Removing environment variables from %s', $file));
=======
            $this->write(\sprintf('Removing environment variables from %s', $file));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            file_put_contents($phpunit, $contents);
        }
    }

    /**
     * Evaluates expressions like %generate(secret)%.
     *
     * If $originalValue is passed, and the value contains an expression.
     * the $originalValue is used.
     */
<<<<<<< HEAD
    private function evaluateValue($value, string $originalValue = null)
=======
    private function evaluateValue($value, ?string $originalValue = null)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if ('%generate(secret)%' === $value) {
            if (null !== $originalValue) {
                return $originalValue;
            }

            return $this->generateRandomBytes();
        }
        if (preg_match('~^%generate\(secret,\s*([0-9]+)\)%$~', $value, $matches)) {
            if (null !== $originalValue) {
                return $originalValue;
            }

            return $this->generateRandomBytes($matches[1]);
        }

        return $value;
    }

    private function generateRandomBytes($length = 16)
    {
        return bin2hex(random_bytes($length));
    }

    private function getContentsAfterApplyingRecipe(string $rootDir, Recipe $recipe, array $vars): array
    {
        $dotenvPath = $this->options->get('runtime')['dotenv_path'] ?? '.env';
<<<<<<< HEAD
        $files = [$dotenvPath, $dotenvPath.'.dist', 'phpunit.xml.dist', 'phpunit.xml'];
=======
        $files = '' === $this->suffix ? [$dotenvPath, $dotenvPath.'.dist', 'phpunit.dist.xml', 'phpunit.xml.dist', 'phpunit.xml'] : [$dotenvPath.'.'.$this->suffix];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (0 === \count($vars)) {
            return array_fill_keys($files, null);
        }

        $originalContents = [];
        foreach ($files as $file) {
            $originalContents[$file] = file_exists($rootDir.'/'.$file) ? file_get_contents($rootDir.'/'.$file) : null;
        }

        $this->configureEnvDist(
            $recipe,
            $vars,
            true
        );

<<<<<<< HEAD
        if (!file_exists($rootDir.'/'.$dotenvPath.'.test')) {
=======
        if ('' === $this->suffix && !file_exists($rootDir.'/'.$dotenvPath.'.test')) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $this->configurePhpUnit(
                $recipe,
                $vars,
                true
            );
        }

        $updatedContents = [];
        foreach ($files as $file) {
            $updatedContents[$file] = file_exists($rootDir.'/'.$file) ? file_get_contents($rootDir.'/'.$file) : null;
        }

        foreach ($originalContents as $file => $contents) {
            if (null === $contents) {
                if (file_exists($rootDir.'/'.$file)) {
                    unlink($rootDir.'/'.$file);
                }
            } else {
                file_put_contents($rootDir.'/'.$file, $contents);
            }
        }

        return $updatedContents;
    }

    /**
     * Attempts to find the existing value of an environment variable.
     */
    private function findExistingValue(string $var, string $filename, Recipe $recipe): ?string
    {
        if (!file_exists($filename)) {
            return null;
        }

        $contents = file_get_contents($filename);
        $section = $this->extractSection($recipe, $contents);
        if (!$section) {
            return null;
        }

        $lines = explode("\n", $section);
        foreach ($lines as $line) {
<<<<<<< HEAD
            if (0 !== strpos($line, sprintf('%s=', $var))) {
=======
            if (!str_starts_with($line, \sprintf('%s=', $var))) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                continue;
            }

            return trim(substr($line, \strlen($var) + 1));
        }

        return null;
    }
}
