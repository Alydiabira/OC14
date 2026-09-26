<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Flex;

<<<<<<< HEAD
=======
use Composer\Command\BaseConfigCommand;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Composer\Command\GlobalCommand;
use Composer\Composer;
use Composer\Console\Application;
use Composer\DependencyResolver\Operation\InstallOperation;
use Composer\DependencyResolver\Operation\OperationInterface;
use Composer\DependencyResolver\Operation\UninstallOperation;
use Composer\DependencyResolver\Operation\UpdateOperation;
use Composer\DependencyResolver\Transaction;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Factory;
use Composer\Installer;
use Composer\Installer\InstallerEvent;
use Composer\Installer\InstallerEvents;
use Composer\Installer\PackageEvent;
use Composer\Installer\PackageEvents;
use Composer\Installer\SuggestedPackagesReporter;
use Composer\IO\IOInterface;
use Composer\IO\NullIO;
use Composer\Json\JsonFile;
use Composer\Json\JsonManipulator;
<<<<<<< HEAD
use Composer\Package\BasePackage;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Composer\Package\Locker;
use Composer\Package\Package;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PrePoolCreateEvent;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;
use Composer\Semver\VersionParser;
<<<<<<< HEAD
=======
use Symfony\Component\Console\Exception\ExceptionInterface as ConsoleExceptionInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Flex\Event\UpdateEvent;
use Symfony\Flex\Unpack\Operation;
use Symfony\Thanks\Thanks;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Flex implements PluginInterface, EventSubscriberInterface
{
    public static $storedOperations = [];

    /**
     * @var Composer
     */
    private $composer;

    /**
     * @var IOInterface
     */
    private $io;

    private $config;
    private $options;
    private $configurator;
    private $downloader;

    /**
     * @var Installer
     */
    private $installer;
    private $postInstallOutput = [''];
    private $operations = [];
    private $lock;
    private $displayThanksReminder = 0;
<<<<<<< HEAD
    private $dryRun = false;
=======
    private $ignorePreleases = false;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private $reinstall;
    private static $activated = true;
    private static $aliasResolveCommands = [
        'require' => true,
        'update' => false,
        'remove' => false,
<<<<<<< HEAD
        'unpack' => true,
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ];
    private $filter;

    /**
     * @return void
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        if (!\extension_loaded('openssl')) {
            self::$activated = false;
            $io->writeError('<warning>Symfony Flex has been disabled. You must enable the openssl extension in your "php.ini" file.</>');

            return;
        }

        // to avoid issues when Flex is upgraded, we load all PHP classes now
        // that way, we are sure to use all classes from the same version
        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(__DIR__, \FilesystemIterator::SKIP_DOTS)) as $file) {
            if ('.php' === substr($file, -4)) {
                class_exists(__NAMESPACE__.str_replace('/', '\\', substr($file, \strlen(__DIR__), -4)));
            }
        }

<<<<<<< HEAD
        $this->composer = $composer;
        $this->io = $io;
        $this->config = $composer->getConfig();
        $this->options = $this->initOptions();

        // if Flex is being upgraded, the original operations from the original Flex
        // instance are stored in the static property, so we can reuse them now.
        if (property_exists(self::class, 'storedOperations') && self::$storedOperations) {
            $this->operations = self::$storedOperations;
            self::$storedOperations = [];
        }

        $symfonyRequire = preg_replace('/\.x$/', '.x-dev', getenv('SYMFONY_REQUIRE') ?: ($composer->getPackage()->getExtra()['symfony']['require'] ?? ''));

        $rfs = Factory::createHttpDownloader($this->io, $this->config);

        $this->downloader = $downloader = new Downloader($composer, $io, $rfs);

        if ($symfonyRequire) {
            $this->filter = new PackageFilter($io, $symfonyRequire, $this->downloader);
        }
=======
        $composer->getInstallationManager()->addInstaller(new SymfonyPackInstaller($io));

        $this->composer = $composer;
        $this->io = $io;
        $this->config = $composer->getConfig();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $composerFile = Factory::getComposerFile();
        $composerLock = 'json' === pathinfo($composerFile, \PATHINFO_EXTENSION) ? substr($composerFile, 0, -4).'lock' : $composerFile.'.lock';
        $symfonyLock = str_replace('composer', 'symfony', basename($composerLock));

<<<<<<< HEAD
        $this->configurator = new Configurator($composer, $io, $this->options);
        $this->lock = new Lock(getenv('SYMFONY_LOCKFILE') ?: \dirname($composerLock).'/'.(basename($composerLock) !== $symfonyLock ? $symfonyLock : 'symfony.lock'));
=======
        $this->lock = new Lock(getenv('SYMFONY_LOCKFILE') ?: \dirname($composerLock).'/'.(basename($composerLock) !== $symfonyLock ? $symfonyLock : 'symfony.lock'));
        $this->options = $this->initOptions();

        // if Flex is being upgraded, the original operations from the original Flex
        // instance are stored in the static property, so we can reuse them now.
        if (property_exists(Flex::class, 'storedOperations') && Flex::$storedOperations) {
            $this->operations = Flex::$storedOperations;
            Flex::$storedOperations = [];
        }

        $rfs = $composer->getLoop()->getHttpDownloader();
        $this->downloader = $downloader = new Downloader($composer, $io, $rfs);
        $this->configurator = new Configurator($composer, $io, $this->options);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $disable = true;
        foreach (array_merge($composer->getPackage()->getRequires() ?? [], $composer->getPackage()->getDevRequires() ?? []) as $link) {
            // recipes apply only when symfony/flex is found in "require" or "require-dev" in the root package
            if ('symfony/flex' === $link->getTarget()) {
                $disable = false;
                break;
            }
        }
        if ($disable) {
            $downloader->disable();
        }

        $backtrace = $this->configureInstaller();

        foreach ($backtrace as $trace) {
            if (!isset($trace['object']) || !isset($trace['args'][0])) {
                continue;
            }

            if (!$trace['object'] instanceof Application || !$trace['args'][0] instanceof ArgvInput) {
                continue;
            }

            // In Composer 1.0.*, $input knows about option and argument definitions
            // Since Composer >=1.1, $input contains only raw values
            $input = $trace['args'][0];
            $app = $trace['object'];

            $resolver = new PackageResolver($this->downloader);

<<<<<<< HEAD
            try {
                $command = $input->getFirstArgument();
                $command = $command ? $app->find($command)->getName() : null;
=======
            $commandObj = null;
            try {
                $command = $input->getFirstArgument();
                $commandObj = $command ? $app->find($command) : null;
                $command = $commandObj ? $commandObj->getName() : null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            } catch (\InvalidArgumentException $e) {
            }

            if ('create-project' === $command) {
                if ($input->hasOption('remove-vcs')) {
                    $input->setOption('remove-vcs', true);
                }
            } elseif ('update' === $command) {
                $this->displayThanksReminder = 1;
            } elseif ('outdated' === $command) {
                $symfonyRequire = null;
            }

            if (isset(self::$aliasResolveCommands[$command])) {
<<<<<<< HEAD
                if ($input->hasArgument('packages')) {
                    $input->setArgument('packages', $resolver->resolve($input->getArgument('packages'), self::$aliasResolveCommands[$command]));
                }
            }

            if ($input->hasParameterOption('--prefer-lowest', true)) {
                // When prefer-lowest is set and no stable version has been released,
                // we consider "dev" more stable than "alpha", "beta" or "RC". This
                // allows testing lowest versions with potential fixes applied.
                BasePackage::$stabilities['dev'] = 1 + BasePackage::STABILITY_STABLE;
            }

            $app->add(new Command\RecipesCommand($this, $this->lock, $rfs));
            $app->add(new Command\InstallRecipesCommand($this, $this->options->get('root-dir'), $this->options->get('runtime')['dotenv_path'] ?? '.env'));
            $app->add(new Command\UpdateRecipesCommand($this, $this->downloader, $rfs, $this->configurator, $this->options->get('root-dir')));
            $app->add(new Command\DumpEnvCommand($this->config, $this->options));

            break;
        }
=======
                // When the command name is abbreviated (e.g. "req" for "require"), Composer
                // activates plugins early to look up potential script commands, before the
                // input has been bound to the command definition. In that case "packages"
                // isn't a known argument yet, so bind the command definition first.
                if (null !== $commandObj && !$input->hasArgument('packages')) {
                    $commandObj->mergeApplicationDefinition();
                    try {
                        $input->bind($commandObj->getDefinition());
                    } catch (ConsoleExceptionInterface $e) {
                    }
                }
                if ($input->hasArgument('packages')) {
                    $packages = $input->getArgument('packages');
                    $resolved = $resolver->resolve($packages, self::$aliasResolveCommands[$command]);
                    $input->setArgument('packages', $resolved);
                    // The command will bind its definition again at execution time, which
                    // re-parses the raw tokens. Rewrite them too so the resolved package
                    // names survive that rebinding.
                    $this->rewritePackageTokens($input, $packages, $resolved);
                }
            }

            if (class_exists(BaseConfigCommand::class)) {
                // composer 2.9+
                $_SERVER['COMPOSER_PREFER_DEV_OVER_PRERELEASE'] = '1';
            } else {
                $this->ignorePreleases = $input->hasParameterOption('--prefer-lowest', true) && $input->hasParameterOption('--prefer-stable', true);
            }

            $addCommand = 'add'.(method_exists($app, 'addCommand') ? 'Command' : '');
            $app->$addCommand(new Command\RecipesCommand($this, $this->lock, $rfs));
            $app->$addCommand(new Command\InstallRecipesCommand($this, $this->options->get('root-dir'), $this->options->get('runtime')['dotenv_path'] ?? '.env'));
            $app->$addCommand(new Command\UpdateRecipesCommand($this, $this->downloader, $rfs, $this->configurator, $this->options->get('root-dir')));
            $app->$addCommand(new Command\DumpEnvCommand($this->config, $this->options));

            break;
        }

        $symfonyRequire = preg_replace('/\.x$/', '.x-dev', getenv('SYMFONY_REQUIRE') ?: ($composer->getPackage()->getExtra()['symfony']['require'] ?? ''));

        if ($symfonyRequire || $this->ignorePreleases) {
            $this->filter = new PackageFilter($io, $symfonyRequire, $this->downloader, $this->ignorePreleases);
        }
    }

    /**
     * Rewrites the raw input tokens so resolved package names survive a later rebinding
     * of the input to the command definition (which re-parses the tokens from scratch).
     */
    private function rewritePackageTokens(ArgvInput $input, array $original, array $resolved): void
    {
        if ($original === $resolved) {
            return;
        }

        try {
            $property = new \ReflectionProperty(ArgvInput::class, 'tokens');
        } catch (\ReflectionException $e) {
            return;
        }
        $tokens = $property->getValue($input);

        // Drop the tokens matching the original package arguments (each one once, keeping
        // options and the command name in place), then append the resolved ones at the end.
        // Argument order relative to options is irrelevant when the tokens are re-parsed.
        $remaining = $original;
        foreach ($tokens as $i => $token) {
            if (false !== $pos = array_search($token, $remaining, true)) {
                unset($tokens[$i], $remaining[$pos]);
            }
        }

        $property->setValue($input, array_merge(array_values($tokens), $resolved));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @return void
     */
    public function deactivate(Composer $composer, IOInterface $io)
    {
<<<<<<< HEAD
        // store operations in case Flex is being upgraded
        self::$storedOperations = $this->operations;
=======
        // Using `Flex::` instead of `self::` to avoid issues when
        // composer renames plugin classes when upgrading them
        Flex::$storedOperations = $this->operations;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        self::$activated = false;
    }

    public function configureInstaller()
    {
        $backtrace = debug_backtrace();
        foreach ($backtrace as $trace) {
            if (isset($trace['object']) && $trace['object'] instanceof Installer) {
                $this->installer = $trace['object']->setSuggestedPackagesReporter(new SuggestedPackagesReporter(new NullIO()));
<<<<<<< HEAD

                $updateAllowList = \Closure::bind(function () {
                    return $this->updateAllowList;
                }, $this->installer, $this->installer)();

                if (['php' => 0] === $updateAllowList) {
                    $this->dryRun = true; // prevent recipes from being uninstalled when removing a pack
                }
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            if (isset($trace['object']) && $trace['object'] instanceof GlobalCommand) {
                $this->downloader->disable();
            }
        }

        return $backtrace;
    }

    public function configureProject(Event $event)
    {
        if (!$this->downloader->isEnabled()) {
            $this->io->writeError('<warning>Project configuration is disabled: "symfony/flex" not found in the root composer.json</>');

            return;
        }

        // Remove LICENSE (which do not apply to the user project)
        @unlink('LICENSE');

        // Update composer.json (project is proprietary by default)
        $file = Factory::getComposerFile();
        $contents = file_get_contents($file);
        $manipulator = new JsonManipulator($contents);
<<<<<<< HEAD
        $json = JsonFile::parseJson($contents);
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        // new projects are most of the time proprietary
        $manipulator->addMainKey('license', 'proprietary');

        // extra.branch-alias doesn't apply to the project
        $manipulator->removeSubNode('extra', 'branch-alias');

        // 'name' and 'description' are only required for public packages
        // don't use $manipulator->removeProperty() for BC with Composer 1.0
        $contents = preg_replace(['{^\s*+"name":.*,$\n}m', '{^\s*+"description":.*,$\n}m'], '', $manipulator->getContents(), 1);
        file_put_contents($file, $contents);

        $this->updateComposerLock();
    }

    public function recordFlexInstall(PackageEvent $event)
    {
        if (null === $this->reinstall && 'symfony/flex' === $event->getOperation()->getPackage()->getName()) {
            $this->reinstall = true;
        }
    }

    public function record(PackageEvent $event)
    {
        if ($this->shouldRecordOperation($event->getOperation(), $event->isDevMode(), $event->getComposer())) {
            $this->operations[] = $event->getOperation();
        }
    }

    public function recordOperations(InstallerEvent $event)
    {
        if (!$event->isExecutingOperations()) {
            return;
        }

        $versionParser = new VersionParser();
        $packages = [];
        foreach ($this->lock->all() as $name => $info) {
<<<<<<< HEAD
            $packages[] = new Package($name, $versionParser->normalize($info['version']), $info['version']);
        }

        $transation = \Closure::bind(function () use ($packages, $event) {
            return new Transaction($packages, $event->getTransaction()->resultPackageMap);
        }, null, Transaction::class)();

        foreach ($transation->getOperations() as $operation) {
=======
            if ('9999999.9999999' === $info['version']) {
                // Fix invalid versions found in some lock files
                $info['version'] = '99999.9999999';
            }
            $packages[] = new Package($name, $versionParser->normalize($info['version']), $info['version']);
        }

        $transaction = \Closure::bind(function () use ($packages, $event) {
            return new Transaction($packages, $event->getTransaction()->resultPackageMap);
        }, null, Transaction::class)();

        foreach ($transaction->getOperations() as $operation) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (!$operation instanceof UninstallOperation && $this->shouldRecordOperation($operation, $event->isDevMode(), $event->getComposer())) {
                $this->operations[] = $operation;
            }
        }
    }

    public function update(Event $event, $operations = [])
    {
        if ($operations) {
            $this->operations = $operations;
        }

        $this->install($event);

        $file = Factory::getComposerFile();
        $contents = file_get_contents($file);
        $json = JsonFile::parseJson($contents);

        if (!$this->reinstall && !isset($json['flex-require']) && !isset($json['flex-require-dev'])) {
            $this->unpack($event);

            return;
        }

        // merge "flex-require" with "require"
        $manipulator = new JsonManipulator($contents);
        $sortPackages = $this->composer->getConfig()->get('sort-packages');
        $symfonyVersion = $json['extra']['symfony']['require'] ?? null;
        $versions = $symfonyVersion ? $this->downloader->getVersions() : null;
        foreach (['require', 'require-dev'] as $type) {
            if (!isset($json['flex-'.$type])) {
                continue;
            }
            foreach ($json['flex-'.$type] as $package => $constraint) {
                if ($symfonyVersion && '*' === $constraint && isset($versions['splits'][$package])) {
                    // replace unbounded constraints for symfony/* packages by extra.symfony.require
                    $constraint = $symfonyVersion;
                }
                $manipulator->addLink($type, $package, $constraint, $sortPackages);
            }

            $manipulator->removeMainKey('flex-'.$type);
        }

        file_put_contents($file, $manipulator->getContents());

<<<<<<< HEAD
        $this->reinstall($event, true);
=======
        $this->reinstall($event);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function install(Event $event)
    {
        $rootDir = $this->options->get('root-dir');
        $runtime = $this->options->get('runtime');
        $dotenvPath = $rootDir.'/'.($runtime['dotenv_path'] ?? '.env');

<<<<<<< HEAD
        if (!file_exists($dotenvPath) && !file_exists($dotenvPath.'.local') && file_exists($dotenvPath.'.dist') && false === strpos(file_get_contents($dotenvPath.'.dist'), '.env.local')) {
=======
        if (!file_exists($dotenvPath) && !file_exists($dotenvPath.'.local') && file_exists($dotenvPath.'.dist') && !str_contains(file_get_contents($dotenvPath.'.dist'), '.env.local')) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            copy($dotenvPath.'.dist', $dotenvPath);
        }

        // Execute missing recipes
        $recipes = ScriptEvents::POST_UPDATE_CMD === $event->getName() ? $this->fetchRecipes($this->operations, $event instanceof UpdateEvent && $event->reset()) : [];
        $this->operations = [];     // Reset the operation after getting recipes

        if (2 === $this->displayThanksReminder) {
            $love = '\\' === \DIRECTORY_SEPARATOR ? 'love' : '💖 ';
            $star = '\\' === \DIRECTORY_SEPARATOR ? 'star' : '★ ';

            $this->io->writeError('');
            $this->io->writeError('What about running <comment>composer global require symfony/thanks && composer thanks</> now?');
<<<<<<< HEAD
            $this->io->writeError(sprintf('This will spread some %s by sending a %s to the GitHub repositories of your fellow package maintainers.', $love, $star));
=======
            $this->io->writeError(\sprintf('This will spread some %s by sending a %s to the GitHub repositories of your fellow package maintainers.', $love, $star));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->io->writeError('');

        if (!$recipes) {
            if (ScriptEvents::POST_UPDATE_CMD === $event->getName()) {
                $this->finish($rootDir);
            }

            if ($this->downloader->isEnabled()) {
                $this->io->writeError('Run <comment>composer recipes</> at any time to see the status of your Symfony recipes.');
                $this->io->writeError('');
            }

            return;
        }

<<<<<<< HEAD
        $this->io->writeError(sprintf('<info>Symfony operations: %d recipe%s (%s)</>', \count($recipes), \count($recipes) > 1 ? 's' : '', $this->downloader->getSessionId()));
        $installContribs = $this->composer->getPackage()->getExtra()['symfony']['allow-contrib'] ?? false;
=======
        $this->io->writeError(\sprintf('<info>Symfony operations: %d recipe%s (%s)</>', \count($recipes), \count($recipes) > 1 ? 's' : '', $this->downloader->getSessionId()));
        if (false === $installContribs = getenv('SYMFONY_ALLOW_CONTRIB')) {
            $installContribs = $this->composer->getPackage()->getExtra()['symfony']['allow-contrib'] ?? false;
        }
        if (!\is_bool($installContribs)) {
            $installContribs = filter_var($installContribs, \FILTER_VALIDATE_BOOL);
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $manifest = null;
        $originalComposerJsonHash = $this->getComposerJsonHash();
        $postInstallRecipes = [];
        foreach ($recipes as $recipe) {
            if ('install' === $recipe->getJob() && !$installContribs && $recipe->isContrib()) {
                $warning = $this->io->isInteractive() ? 'WARNING' : 'IGNORING';
<<<<<<< HEAD
                $this->io->writeError(sprintf('  - <warning> %s </> %s', $warning, $this->formatOrigin($recipe)));
                $question = sprintf('    The recipe for this package comes from the "contrib" repository, which is open to community contributions.
=======
                $this->io->writeError(\sprintf('  - <warning> %s </> %s', $warning, $this->formatOrigin($recipe)));
                $question = \sprintf('    The recipe for this package comes from the "contrib" repository, which is open to community contributions.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    Review the recipe at %s

    Do you want to execute this recipe?
    [<comment>y</>] Yes
    [<comment>n</>] No
    [<comment>a</>] Yes for all packages, only for the current installation session
    [<comment>p</>] Yes permanently, never ask again for this project
    (defaults to <comment>n</>): ', $recipe->getURL());
                $answer = $this->io->askAndValidate(
                    $question,
                    function ($value) {
                        if (null === $value) {
                            return 'n';
                        }
                        $value = strtolower($value[0]);
                        if (!\in_array($value, ['y', 'n', 'a', 'p'])) {
                            throw new \InvalidArgumentException('Invalid choice.');
                        }

                        return $value;
                    },
                    null,
                    'n'
                );
                if ('n' === $answer) {
<<<<<<< HEAD
=======
                    // Keep the package in lock but without recipe info, so the recipe can be applied later
                    $this->lock->set($recipe->getName(), ['version' => $recipe->getPackage()->getPrettyVersion()]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    continue;
                }
                if ('a' === $answer) {
                    $installContribs = true;
                }
                if ('p' === $answer) {
                    $installContribs = true;
                    $json = new JsonFile(Factory::getComposerFile());
                    $manipulator = new JsonManipulator(file_get_contents($json->getPath()));
                    $manipulator->addSubNode('extra', 'symfony.allow-contrib', true);
                    file_put_contents($json->getPath(), $manipulator->getContents());
                }
            }

            switch ($recipe->getJob()) {
                case 'install':
                    $postInstallRecipes[] = $recipe;
<<<<<<< HEAD
                    $this->io->writeError(sprintf('  - Configuring %s', $this->formatOrigin($recipe)));
                    $this->configurator->install($recipe, $this->lock, [
                        'force' => $event instanceof UpdateEvent && $event->force(),
                    ]);
                    $manifest = $recipe->getManifest();
                    if (isset($manifest['post-install-output'])) {
                        $this->postInstallOutput[] = sprintf('<bg=yellow;fg=white> %s </> instructions:', $recipe->getName());
=======
                    $this->io->writeError(\sprintf('  - Configuring %s', $this->formatOrigin($recipe)));
                    $this->configurator->install($recipe, $this->lock, [
                        'force' => $event instanceof UpdateEvent && $event->force(),
                        'assumeYesForPrompts' => $event instanceof UpdateEvent && $event->assumeYesForPrompts(),
                    ]);
                    $manifest = $recipe->getManifest();
                    if (isset($manifest['post-install-output'])) {
                        $this->postInstallOutput[] = \sprintf('<bg=yellow;fg=white> %s </> instructions:', $recipe->getName());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        $this->postInstallOutput[] = '';
                        foreach ($manifest['post-install-output'] as $line) {
                            $this->postInstallOutput[] = $this->options->expandTargetDir($line);
                        }
                        $this->postInstallOutput[] = '';
                    }
                    break;
                case 'update':
                    break;
                case 'uninstall':
<<<<<<< HEAD
                    $this->io->writeError(sprintf('  - Unconfiguring %s', $this->formatOrigin($recipe)));
=======
                    $this->io->writeError(\sprintf('  - Unconfiguring %s', $this->formatOrigin($recipe)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    $this->configurator->unconfigure($recipe, $this->lock);
                    break;
            }
        }

        if (method_exists($this->configurator, 'postInstall')) {
            foreach ($postInstallRecipes as $recipe) {
                $this->configurator->postInstall($recipe, $this->lock, [
                    'force' => $event instanceof UpdateEvent && $event->force(),
<<<<<<< HEAD
=======
                    'assumeYesForPrompts' => $event instanceof UpdateEvent && $event->assumeYesForPrompts(),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ]);
            }
        }

        if (null !== $manifest) {
            array_unshift(
                $this->postInstallOutput,
                '<bg=blue;fg=white>              </>',
                '<bg=blue;fg=white> What\'s next? </>',
                '<bg=blue;fg=white>              </>',
                '',
                '<info>Some files have been created and/or updated to configure your new packages.</>',
                'Please <comment>review</>, <comment>edit</> and <comment>commit</> them: these files are <comment>yours</>.'
            );
        }

        $this->finish($rootDir, $originalComposerJsonHash);
    }

<<<<<<< HEAD
    public function finish(string $rootDir, string $originalComposerJsonHash = null): void
=======
    public function finish(string $rootDir, ?string $originalComposerJsonHash = null): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->synchronizePackageJson($rootDir);
        $this->lock->write();

        if ($originalComposerJsonHash && $this->getComposerJsonHash() !== $originalComposerJsonHash) {
            $this->updateComposerLock();
        }
    }

    private function synchronizePackageJson(string $rootDir)
    {
<<<<<<< HEAD
=======
        if (!($this->composer->getPackage()->getExtra()['symfony/flex']['synchronize_package_json'] ?? true)) {
            $this->io->writeError('<info>Skip synchronizing package.json with PHP packages</>');

            return;
        }

        if (!$this->downloader->isEnabled()) {
            $this->io->writeError('<warning>Synchronizing package.json is disabled: "symfony/flex" not found in the root composer.json</>');

            return;
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $rootDir = realpath($rootDir);
        $vendorDir = trim((new Filesystem())->makePathRelative($this->config->get('vendor-dir'), $rootDir), '/');

        $executor = new ScriptExecutor($this->composer, $this->io, $this->options);
        $synchronizer = new PackageJsonSynchronizer($rootDir, $vendorDir, $executor, $this->io);

        if ($synchronizer->shouldSynchronize()) {
            $lockData = $this->composer->getLocker()->getLockData();

            if ($synchronizer->synchronize(array_merge($lockData['packages'] ?? [], $lockData['packages-dev'] ?? []))) {
                $this->io->writeError('<info>Synchronizing package.json with PHP packages</>');
                $this->io->writeError('<warning>Don\'t forget to run npm install --force or yarn install --force to refresh your JavaScript dependencies!</>');
                $this->io->writeError('');
            }
        }
    }

    /**
     * @return void
     */
    public function uninstall(Composer $composer, IOInterface $io)
    {
        $this->lock->delete();
    }

    public function enableThanksReminder()
    {
        if (1 === $this->displayThanksReminder) {
            $this->displayThanksReminder = !class_exists(Thanks::class, false) ? 2 : 0;
        }
    }

    public function executeAutoScripts(Event $event)
    {
        $event->stopPropagation();

        // force reloading scripts as we might have added and removed during this run
        $json = new JsonFile(Factory::getComposerFile());
        $jsonContents = $json->read();

        $executor = new ScriptExecutor($this->composer, $this->io, $this->options);
        foreach ($jsonContents['scripts']['auto-scripts'] as $cmd => $type) {
            $executor->execute($type, $cmd);
        }

        $this->io->write($this->postInstallOutput);
        $this->postInstallOutput = [];
    }

    /**
     * @return Recipe[]
     */
    public function fetchRecipes(array $operations, bool $reset): array
    {
        if (!$this->downloader->isEnabled()) {
            $this->io->writeError('<warning>Symfony recipes are disabled: "symfony/flex" not found in the root composer.json</>');

            return [];
        }
        $devPackages = null;
        $data = $this->downloader->getRecipes($operations);
        $manifests = $data['manifests'] ?? [];
        $locks = $data['locks'] ?? [];
        // symfony/flex recipes should always be applied first
        $flexRecipe = [];
        // symfony/framework-bundle recipe should always be applied first after the metapackages
        $recipes = [
            'symfony/framework-bundle' => null,
        ];
        $packRecipes = [];
        $metaRecipes = [];

        foreach ($operations as $operation) {
            if ($operation instanceof UpdateOperation) {
                $package = $operation->getTargetPackage();
            } else {
                $package = $operation->getPackage();
            }

            // FIXME: Multi name with getNames()
            $name = $package->getName();
            $job = method_exists($operation, 'getOperationType') ? $operation->getOperationType() : $operation->getJobType();

            if (!isset($manifests[$name]) && isset($data['conflicts'][$name])) {
<<<<<<< HEAD
                $this->io->writeError(sprintf('  - Skipping recipe for %s: all versions of the recipe conflict with your package versions.', $name));
=======
                $this->io->writeError(\sprintf('  - Skipping recipe for %s: all versions of the recipe conflict with your package versions.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                continue;
            }

            while ($this->doesRecipeConflict($manifests[$name] ?? [], $operation)) {
                $this->downloader->removeRecipeFromIndex($name, $manifests[$name]['version']);
                $newData = $this->downloader->getRecipes([$operation]);
                $newManifests = $newData['manifests'] ?? [];

                if (!isset($newManifests[$name])) {
                    // no older recipe found
<<<<<<< HEAD
                    $this->io->writeError(sprintf('  - Skipping recipe for %s: all versions of the recipe conflict with your package versions.', $name));
=======
                    $this->io->writeError(\sprintf('  - Skipping recipe for %s: all versions of the recipe conflict with your package versions.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                    continue 2;
                }

                // push the "old" recipe into the $manifests
                $manifests[$name] = $newManifests[$name];
                $locks[$name] = $newData['locks'][$name];
            }

            if ($operation instanceof InstallOperation && isset($locks[$name])) {
                $ref = $this->lock->get($name)['recipe']['ref'] ?? null;
                if (!$reset && $ref && ($locks[$name]['recipe']['ref'] ?? null) === $ref) {
                    continue;
                }
                $this->lock->set($name, $locks[$name]);
            } elseif ($operation instanceof UninstallOperation) {
                if (!$this->lock->has($name)) {
                    continue;
                }
                $this->lock->remove($name);
            }

            if (isset($manifests[$name])) {
                $recipe = new Recipe($package, $name, $job, $manifests[$name], $locks[$name] ?? []);

                if ('symfony-pack' === $package->getType()) {
                    $packRecipes[$name] = $recipe;
                } elseif ('metapackage' === $package->getType()) {
                    $metaRecipes[$name] = $recipe;
                } elseif ('symfony/flex' === $name) {
                    $flexRecipe = [$name => $recipe];
                } else {
                    $recipes[$name] = $recipe;
                }
            } else {
                $bundles = [];

                if (null === $devPackages) {
                    $devPackages = array_column($this->composer->getLocker()->getLockData()['packages-dev'], 'name');
                }
                $envs = \in_array($name, $devPackages) ? ['dev', 'test'] : ['all'];
                $bundle = new SymfonyBundle($this->composer, $package, $job);
                foreach ($bundle->getClassNames() as $bundleClass) {
                    $bundles[$bundleClass] = $envs;
                }

                if ($bundles) {
                    $manifest = [
<<<<<<< HEAD
                        'origin' => sprintf('%s:%s@auto-generated recipe', $name, $package->getPrettyVersion()),
=======
                        'origin' => \sprintf('%s:%s@auto-generated recipe', $name, $package->getPrettyVersion()),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        'manifest' => ['bundles' => $bundles],
                    ];
                    $recipes[$name] = new Recipe($package, $name, $job, $manifest);

                    if ($operation instanceof InstallOperation) {
                        $this->lock->set($name, ['version' => $package->getPrettyVersion()]);
                    }
                }
            }
        }

        return array_merge($flexRecipe, $packRecipes, $metaRecipes, array_filter($recipes));
    }

    public function truncatePackages(PrePoolCreateEvent $event)
    {
        if (!$this->filter) {
            return;
        }

        $rootPackage = $this->composer->getPackage();
        $lockedPackages = $event->getRequest()->getFixedOrLockedPackages();

        $event->setPackages($this->filter->removeLegacyPackages($event->getPackages(), $rootPackage, $lockedPackages));
    }

    public function getComposerJsonHash(): string
    {
        return md5_file(Factory::getComposerFile());
    }

    public function getLock(): Lock
    {
        if (null === $this->lock) {
            throw new \Exception('Cannot access lock before calling activate().');
        }

        return $this->lock;
    }

    private function initOptions(): Options
    {
        $extra = $this->composer->getPackage()->getExtra();

        $options = array_merge([
            'bin-dir' => 'bin',
            'conf-dir' => 'conf',
            'config-dir' => 'config',
            'src-dir' => 'src',
            'var-dir' => 'var',
            'public-dir' => 'public',
            'root-dir' => $extra['symfony']['root-dir'] ?? '.',
            'runtime' => $extra['runtime'] ?? [],
        ], $extra);

<<<<<<< HEAD
        return new Options($options, $this->io);
=======
        return new Options($options, $this->io, $this->lock);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function formatOrigin(Recipe $recipe): string
    {
        if (method_exists($recipe, 'getFormattedOrigin')) {
            return $recipe->getFormattedOrigin();
        }

        // BC with upgrading from flex < 1.18
        $origin = $recipe->getOrigin();

        // symfony/translation:3.3@github.com/symfony/recipes:branch
        if (!preg_match('/^([^:]++):([^@]++)@(.+)$/', $origin, $matches)) {
            return $origin;
        }

<<<<<<< HEAD
        return sprintf('<info>%s</> (<comment>>=%s</>): From %s', $matches[1], $matches[2], 'auto-generated recipe' === $matches[3] ? '<comment>'.$matches[3].'</>' : $matches[3]);
    }

    private function shouldRecordOperation(OperationInterface $operation, bool $isDevMode, Composer $composer = null): bool
    {
        if ($this->dryRun || $this->reinstall) {
=======
        return \sprintf('<info>%s</> (<comment>>=%s</>): From %s', $matches[1], $matches[2], 'auto-generated recipe' === $matches[3] ? '<comment>'.$matches[3].'</>' : $matches[3]);
    }

    private function shouldRecordOperation(OperationInterface $operation, bool $isDevMode, ?Composer $composer = null): bool
    {
        if ($this->reinstall) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            return false;
        }

        if ($operation instanceof UpdateOperation) {
            $package = $operation->getTargetPackage();
        } else {
            $package = $operation->getPackage();
        }

        // when Composer runs with --no-dev, ignore uninstall operations on packages from require-dev
        if (!$isDevMode && $operation instanceof UninstallOperation) {
            foreach (($composer ?? $this->composer)->getLocker()->getLockData()['packages-dev'] as $p) {
                if ($package->getName() === $p['name']) {
                    return false;
                }
            }
        }

        // FIXME: Multi name with getNames()
        $name = $package->getName();
        if ($operation instanceof InstallOperation) {
            if (!$this->lock->has($name)) {
                return true;
            }
        } elseif ($operation instanceof UninstallOperation) {
            return true;
        }

        return false;
    }

    private function updateComposerLock()
    {
        $lock = substr(Factory::getComposerFile(), 0, -4).'lock';
        $composerJson = file_get_contents(Factory::getComposerFile());
        $lockFile = new JsonFile($lock, null, $this->io);
        $locker = new Locker($this->io, $lockFile, $this->composer->getInstallationManager(), $composerJson);
        $lockData = $locker->getLockData();
        $lockData['content-hash'] = Locker::getContentHash($composerJson);
        $lockFile->write($lockData);
    }

    private function unpack(Event $event)
    {
        $jsonPath = Factory::getComposerFile();
        $json = JsonFile::parseJson(file_get_contents($jsonPath));
        $sortPackages = $this->composer->getConfig()->get('sort-packages');
        $unpackOp = new Operation(true, $sortPackages);

        foreach (['require', 'require-dev'] as $type) {
            foreach ($json[$type] ?? [] as $package => $constraint) {
                $unpackOp->addPackage($package, $constraint, 'require-dev' === $type);
            }
        }

<<<<<<< HEAD
        $unpacker = new Unpacker($this->composer, new PackageResolver($this->downloader), $this->dryRun);
=======
        $unpacker = new Unpacker($this->composer, new PackageResolver($this->downloader), false); // 3rd arg to ease upgrading from flex <= 2.6.0
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $result = $unpacker->unpack($unpackOp);

        if (!$result->getUnpacked()) {
            return;
        }

<<<<<<< HEAD
        $this->io->writeError('<info>Unpacking Symfony packs</>');
        foreach ($result->getUnpacked() as $pkg) {
            $this->io->writeError(sprintf('  - Unpacked <info>%s</>', $pkg->getName()));
        }

        $unpacker->updateLock($result, $this->io);

        $this->reinstall($event, false);
    }

    private function reinstall(Event $event, bool $update)
=======
        foreach ($result->getUnpacked() as $pkg) {
            $this->io->writeError(\sprintf('  - Unpacked <info>%s</>', $pkg->getName()));
        }

        $unpacker->updateLock($result, $this->io);
    }

    private function reinstall(Event $event)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->reinstall = false;
        $event->stopPropagation();

        $ed = $this->composer->getEventDispatcher();
        $disableScripts = !method_exists($ed, 'setRunScripts') || !((array) $ed)["\0*\0runScripts"];
        $composer = Factory::create($this->io, null, false, $disableScripts);
<<<<<<< HEAD
=======
        $composer->getInstallationManager()->addInstaller(new SymfonyPackInstaller($this->io));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $installer = clone $this->installer;
        $installer->__construct(
            $this->io,
            $composer->getConfig(),
            $composer->getPackage(),
            $composer->getDownloadManager(),
            $composer->getRepositoryManager(),
            $composer->getLocker(),
            $composer->getInstallationManager(),
            $composer->getEventDispatcher(),
            $composer->getAutoloadGenerator()
        );
        if (method_exists($installer, 'setPlatformRequirementFilter')) {
            $installer->setPlatformRequirementFilter(((array) $this->installer)["\0*\0platformRequirementFilter"]);
        }

<<<<<<< HEAD
        if (!$update) {
            $installer->setUpdateAllowList(['php']);
        }

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $installer->run();

        $this->io->write($this->postInstallOutput);
        $this->postInstallOutput = [];
    }

    public static function getSubscribedEvents(): array
    {
        if (!self::$activated) {
            return [];
        }

        $events = [
            PackageEvents::POST_PACKAGE_UPDATE => 'enableThanksReminder',
            PackageEvents::POST_PACKAGE_INSTALL => 'recordFlexInstall',
            PackageEvents::POST_PACKAGE_UNINSTALL => 'record',
            InstallerEvents::PRE_OPERATIONS_EXEC => 'recordOperations',
            PluginEvents::PRE_POOL_CREATE => 'truncatePackages',
            ScriptEvents::POST_CREATE_PROJECT_CMD => 'configureProject',
            ScriptEvents::POST_INSTALL_CMD => 'install',
            ScriptEvents::PRE_UPDATE_CMD => 'configureInstaller',
            ScriptEvents::POST_UPDATE_CMD => 'update',
            'auto-scripts' => 'executeAutoScripts',
        ];

        return $events;
    }

    private function doesRecipeConflict(array $recipeData, OperationInterface $operation): bool
    {
        if (empty($recipeData['manifest']['conflict']) || $operation instanceof UninstallOperation) {
            return false;
        }

<<<<<<< HEAD
        $lockedRepository = $this->composer->getLocker()->getLockedRepository();
=======
        $lockedRepository = $this->composer->getLocker()->getLockedRepository(true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        foreach ($recipeData['manifest']['conflict'] as $conflictingPackage => $constraint) {
            if ($lockedRepository->findPackage($conflictingPackage, $constraint)) {
                return true;
            }
        }

        return false;
    }
}
