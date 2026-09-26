<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Dotenv\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Completion\CompletionInput;
use Symfony\Component\Console\Completion\CompletionSuggestions;
<<<<<<< HEAD
=======
use Symfony\Component\Console\Formatter\OutputFormatter;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Dotenv\Dotenv;

/**
 * A console command to debug current dotenv files with variables and values.
 *
 * @author Christopher Hertel <mail@christopher-hertel.de>
 */
#[AsCommand(name: 'debug:dotenv', description: 'List all dotenv files with variables and values')]
final class DebugCommand extends Command
{
    /**
     * @deprecated since Symfony 6.1
     */
    protected static $defaultName = 'debug:dotenv';

    /**
     * @deprecated since Symfony 6.1
     */
    protected static $defaultDescription = 'List all dotenv files with variables and values';

    private string $kernelEnvironment;
    private string $projectDirectory;

    public function __construct(string $kernelEnvironment, string $projectDirectory)
    {
        $this->kernelEnvironment = $kernelEnvironment;
        $this->projectDirectory = $projectDirectory;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDefinition([
                new InputArgument('filter', InputArgument::OPTIONAL, 'The name of an environment variable or a filter.', null, $this->getAvailableVars(...)),
            ])
            ->setHelp(<<<'EOT'
<<<<<<< HEAD
The <info>%command.full_name%</info> command displays all the environment variables configured by dotenv:

  <info>php %command.full_name%</info>

To get specific variables, specify its full or partial name:

    <info>php %command.full_name% FOO_BAR</info>

EOT
=======
                The <info>%command.full_name%</info> command displays all the environment variables configured by dotenv:

                  <info>php %command.full_name%</info>

                To get specific variables, specify its full or partial name:

                    <info>php %command.full_name% FOO_BAR</info>

                EOT
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Dotenv Variables & Files');

        if (!\array_key_exists('SYMFONY_DOTENV_VARS', $_SERVER)) {
            $io->error('Dotenv component is not initialized.');

            return 1;
        }

<<<<<<< HEAD
        $envFiles = $this->getEnvFiles();
        $availableFiles = array_filter($envFiles, fn (string $file) => is_file($this->getFilePath($file)));

        if (\in_array('.env.local.php', $availableFiles, true)) {
            $io->warning('Due to existing dump file (.env.local.php) all other dotenv files are skipped.');
        }

        if (is_file($this->getFilePath('.env')) && is_file($this->getFilePath('.env.dist'))) {
            $io->warning('The file .env.dist gets skipped due to the existence of .env.');
        }

        $io->section('Scanned Files (in descending priority)');
        $io->listing(array_map(static fn (string $envFile) => \in_array($envFile, $availableFiles, true)
            ? sprintf('<fg=green>✓</> %s', $envFile)
            : sprintf('<fg=red>⨯</> %s', $envFile), $envFiles));
=======
        if (!$filePath = $_SERVER['SYMFONY_DOTENV_PATH'] ?? null) {
            $dotenvPath = $this->projectDirectory;

            if (is_file($composerFile = $this->projectDirectory.'/composer.json')) {
                $runtimeConfig = json_decode(file_get_contents($composerFile), true)['extra']['runtime'] ?? [];

                if (isset($runtimeConfig['dotenv_path'])) {
                    $dotenvPath = $this->projectDirectory.'/'.$runtimeConfig['dotenv_path'];
                }
            }

            $filePath = $dotenvPath.'/.env';
        }

        $envFiles = $this->getEnvFiles($filePath);
        $availableFiles = array_filter($envFiles, 'is_file');

        if (\in_array(\sprintf('%s.local.php', $filePath), $availableFiles, true)) {
            $io->warning(\sprintf('Due to existing dump file (%s.local.php) all other dotenv files are skipped.', $this->getRelativeName($filePath)));
        }

        if (is_file($filePath) && is_file(\sprintf('%s.dist', $filePath))) {
            $io->warning(\sprintf('The file %s.dist gets skipped due to the existence of %1$s.', $this->getRelativeName($filePath)));
        }

        $io->section('Scanned Files (in descending priority)');
        $io->listing(array_map(fn (string $envFile) => \in_array($envFile, $availableFiles, true)
            ? \sprintf('<fg=green>✓</> %s', $this->getRelativeName($envFile))
            : \sprintf('<fg=red>⨯</> %s', $this->getRelativeName($envFile)), $envFiles));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $nameFilter = $input->getArgument('filter');
        $variables = $this->getVariables($availableFiles, $nameFilter);

        $io->section('Variables');

        if ($variables || null === $nameFilter) {
            $io->table(
<<<<<<< HEAD
                array_merge(['Variable', 'Value'], $availableFiles),
                $this->getVariables($availableFiles, $nameFilter)
=======
                array_merge(['Variable', 'Value'], array_map($this->getRelativeName(...), $availableFiles)),
                $variables
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            );

            $io->comment('Note that values might be different between web and CLI.');
        } else {
<<<<<<< HEAD
            $io->warning(sprintf('No variables match the given filter "%s".', $nameFilter));
=======
            $io->warning(\sprintf('No variables match the given filter "%s".', $nameFilter));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return 0;
    }

    public function complete(CompletionInput $input, CompletionSuggestions $suggestions): void
    {
        if ($input->mustSuggestArgumentValuesFor('filter')) {
            $suggestions->suggestValues($this->getAvailableVars());
        }
    }

    private function getVariables(array $envFiles, ?string $nameFilter): array
    {
<<<<<<< HEAD
        $vars = $this->getAvailableVars();

        $output = [];
        $fileValues = [];
        foreach ($vars as $var) {
            if (null !== $nameFilter && 0 !== stripos($var, $nameFilter)) {
                continue;
            }

            $realValue = $_SERVER[$var];
            $varDetails = [$var, $realValue];
            foreach ($envFiles as $envFile) {
                $values = $fileValues[$envFile] ??= $this->loadValues($envFile);

                $varString = $values[$var] ?? '<fg=yellow>n/a</>';
                $shortenedVar = $this->getHelper('formatter')->truncate($varString, 30);
                $varDetails[] = $varString === $realValue ? '<fg=green>'.$shortenedVar.'</>' : $shortenedVar;
            }

            $output[] = $varDetails;
        }

        return $output;
=======
        $variables = [];
        $fileValues = [];
        $dotenvVars = array_flip(explode(',', $_SERVER['SYMFONY_DOTENV_VARS'] ?? ''));

        foreach ($envFiles as $envFile) {
            $fileValues[$envFile] = $this->loadValues($envFile);
            $variables += $fileValues[$envFile];
        }

        foreach ($variables as $var => $varDetails) {
            if (null !== $nameFilter && 0 !== stripos($var, $nameFilter)) {
                unset($variables[$var]);
                continue;
            }

            $realValue = $_SERVER[$var] ?? '';
            $varDetails = [$var, '<fg=green>'.OutputFormatter::escape($realValue).'</>'];
            $varSeen = !isset($dotenvVars[$var]);

            foreach ($envFiles as $envFile) {
                if (null === $value = $fileValues[$envFile][$var] ?? null) {
                    $varDetails[] = '<fg=yellow>n/a</>';
                    continue;
                }

                $shortenedValue = OutputFormatter::escape($this->getHelper('formatter')->truncate($value, 30));
                $varDetails[] = $value === $realValue && !$varSeen ? '<fg=green>'.$shortenedValue.'</>' : $shortenedValue;
                $varSeen = $varSeen || $value === $realValue;
            }

            $variables[$var] = $varDetails;
        }

        ksort($variables);

        return $variables;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function getAvailableVars(): array
    {
<<<<<<< HEAD
        $dotenvVars = $_SERVER['SYMFONY_DOTENV_VARS'] ?? '';

        if ('' === $dotenvVars) {
            return [];
        }

        $vars = explode(',', $dotenvVars);
        sort($vars);

        return $vars;
    }

    private function getEnvFiles(): array
    {
        $files = [
            '.env.local.php',
            sprintf('.env.%s.local', $this->kernelEnvironment),
            sprintf('.env.%s', $this->kernelEnvironment),
        ];

        if ('test' !== $this->kernelEnvironment) {
            $files[] = '.env.local';
        }

        if (!is_file($this->getFilePath('.env')) && is_file($this->getFilePath('.env.dist'))) {
            $files[] = '.env.dist';
        } else {
            $files[] = '.env';
=======
        $filePath = $_SERVER['SYMFONY_DOTENV_PATH'] ?? $this->projectDirectory.\DIRECTORY_SEPARATOR.'.env';
        $envFiles = $this->getEnvFiles($filePath);

        return array_keys($this->getVariables(array_filter($envFiles, 'is_file'), null));
    }

    private function getEnvFiles(string $filePath): array
    {
        $files = [
            \sprintf('%s.local.php', $filePath),
            \sprintf('%s.%s.local', $filePath, $this->kernelEnvironment),
            \sprintf('%s.%s', $filePath, $this->kernelEnvironment),
        ];

        if ('test' !== $this->kernelEnvironment) {
            $files[] = \sprintf('%s.local', $filePath);
        }

        if (!is_file($filePath) && is_file(\sprintf('%s.dist', $filePath))) {
            $files[] = \sprintf('%s.dist', $filePath);
        } else {
            $files[] = $filePath;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $files;
    }

<<<<<<< HEAD
    private function getFilePath(string $file): string
    {
        return $this->projectDirectory.\DIRECTORY_SEPARATOR.$file;
    }

    private function loadValues(string $file): array
    {
        $filePath = $this->getFilePath($file);

=======
    private function getRelativeName(string $filePath): string
    {
        if (str_starts_with($filePath, $this->projectDirectory)) {
            return substr($filePath, \strlen($this->projectDirectory) + 1);
        }

        return basename($filePath);
    }

    private function loadValues(string $filePath): array
    {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (str_ends_with($filePath, '.php')) {
            return include $filePath;
        }

        return (new Dotenv())->parse(file_get_contents($filePath));
    }
}
