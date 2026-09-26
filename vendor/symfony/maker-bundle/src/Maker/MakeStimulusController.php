<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Maker;

use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\Str;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
<<<<<<< HEAD
use Symfony\Component\Console\Question\Question;
use Symfony\UX\StimulusBundle\StimulusBundle;
use Symfony\WebpackEncoreBundle\WebpackEncoreBundle;
=======
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Question\Question;
use Symfony\UX\StimulusBundle\StimulusBundle;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * @author Abdelilah Jabri <jbrabdelilah@gmail.com>
 *
 * @internal
 */
final class MakeStimulusController extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:stimulus-controller';
    }

    public static function getCommandDescription(): string
    {
        return 'Create a new Stimulus controller';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig): void
    {
        $command
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the Stimulus controller (e.g. <fg=yellow>hello</>)')
<<<<<<< HEAD
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeStimulusController.txt'));
=======
            ->addOption('typescript', 'ts', InputOption::VALUE_NONE, 'Create a TypeScript controller (default is JavaScript)')
            ->setHelp($this->getHelpFileContents('MakeStimulusController.txt'))
        ;

        $inputConfig->setArgumentAsNonInteractive('typescript');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function interact(InputInterface $input, ConsoleStyle $io, Command $command): void
    {
        $command->addArgument('extension', InputArgument::OPTIONAL);
        $command->addArgument('targets', InputArgument::OPTIONAL);
        $command->addArgument('values', InputArgument::OPTIONAL);
<<<<<<< HEAD

        $chosenExtension = $io->choice(
            'Language (<fg=yellow>JavaScript</> or <fg=yellow>TypeScript</>)',
            [
                'js' => 'JavaScript',
                'ts' => 'TypeScript',
            ]
        );

        $input->setArgument('extension', $chosenExtension);
=======
        $command->addArgument('classes', InputArgument::OPTIONAL);

        if ($input->getOption('typescript')) {
            $input->setArgument('extension', 'ts');
        } else {
            $chosenExtension = $io->choice(
                'Language (<fg=yellow>JavaScript</> or <fg=yellow>TypeScript</>)',
                [
                    'js' => 'JavaScript',
                    'ts' => 'TypeScript',
                ],
                'js',
            );

            $input->setArgument('extension', $chosenExtension);
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if ($io->confirm('Do you want to include targets?')) {
            $targets = [];
            $isFirstTarget = true;

            while (true) {
                $newTarget = $this->askForNextTarget($io, $targets, $isFirstTarget);
                $isFirstTarget = false;

                if (null === $newTarget) {
                    break;
                }

                $targets[] = $newTarget;
            }

            $input->setArgument('targets', $targets);
        }

        if ($io->confirm('Do you want to include values?')) {
            $values = [];
            $isFirstValue = true;
            while (true) {
                $newValue = $this->askForNextValue($io, $values, $isFirstValue);
                $isFirstValue = false;

                if (null === $newValue) {
                    break;
                }

                $values[$newValue['name']] = $newValue;
            }

            $input->setArgument('values', $values);
        }
<<<<<<< HEAD
=======

        if ($io->confirm('Do you want to add classes?', false)) {
            $classes = [];
            $isFirstClass = true;

            while (true) {
                $newClass = $this->askForNextClass($io, $classes, $isFirstClass);
                if (null === $newClass) {
                    break;
                }

                $isFirstClass = false;
                $classes[] = $newClass;
            }

            $input->setArgument('classes', $classes);
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator): void
    {
        $controllerName = Str::asSnakeCase($input->getArgument('name'));
        $chosenExtension = $input->getArgument('extension');
<<<<<<< HEAD
        $targets = $input->getArgument('targets');
        $values = $input->getArgument('values');

        $targets = empty($targets) ? $targets : sprintf("['%s']", implode("', '", $targets));

        $fileName = sprintf('%s_controller.%s', $controllerName, $chosenExtension);
        $filePath = sprintf('assets/controllers/%s', $fileName);
=======
        $targets = $targetArgs = $input->getArgument('targets') ?? [];
        $values = $valuesArg = $input->getArgument('values') ?? [];
        $classes = $classesArgs = $input->getArgument('classes') ?? [];

        $targets = empty($targets) ? $targets : \sprintf("['%s']", implode("', '", $targets));
        $classes = $classes ? \sprintf("['%s']", implode("', '", $classes)) : null;

        $fileName = \sprintf('%s_controller.%s', $controllerName, $chosenExtension);
        $filePath = \sprintf('assets/controllers/%s', $fileName);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $generator->generateFile(
            $filePath,
            'stimulus/Controller.tpl.php',
            [
                'targets' => $targets,
                'values' => $values,
<<<<<<< HEAD
=======
                'classes' => $classes,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ]
        );

        $generator->writeChanges();

        $this->writeSuccessMessage($io);

        $io->text([
            'Next:',
<<<<<<< HEAD
            sprintf('- Open <info>%s</info> and add the code you need', $filePath),
            'Find the documentation at <fg=yellow>https://github.com/symfony/stimulus-bridge</>',
=======
            \sprintf('- Open <info>%s</info> and add the code you need', $filePath),
            '- Use the controller in your templates:',
            ...array_map(
                static fn (string $line): string => "    $line",
                explode("\n", $this->generateUsageExample($controllerName, $targetArgs, $valuesArg, $classesArgs)),
            ),
            'Find the documentation at <fg=yellow>https://symfony.com/bundles/StimulusBundle</>',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ]);
    }

    /** @param string[] $targets */
    private function askForNextTarget(ConsoleStyle $io, array $targets, bool $isFirstTarget): ?string
    {
        $questionText = 'New target name (press <return> to stop adding targets)';

        if (!$isFirstTarget) {
            $questionText = 'Add another target? Enter the target name (or press <return> to stop adding targets)';
        }

<<<<<<< HEAD
        $targetName = $io->ask($questionText, validator: function (?string $name) use ($targets) {
            if (\in_array($name, $targets)) {
                throw new \InvalidArgumentException(sprintf('The "%s" target already exists.', $name));
=======
        $targetName = $io->ask($questionText, validator: static function (?string $name) use ($targets) {
            if (\in_array($name, $targets)) {
                throw new \InvalidArgumentException(\sprintf('The "%s" target already exists.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            return $name;
        });

        return !$targetName ? null : $targetName;
    }

    /**
     * @param array<string, array<string, string>> $values
     *
     * @return array<string, string>|null
     */
    private function askForNextValue(ConsoleStyle $io, array $values, bool $isFirstValue): ?array
    {
        $questionText = 'New value name (press <return> to stop adding values)';

        if (!$isFirstValue) {
            $questionText = 'Add another value? Enter the value name (or press <return> to stop adding values)';
        }

<<<<<<< HEAD
        $valueName = $io->ask($questionText, null, function ($name) use ($values) {
            if (\array_key_exists($name, $values)) {
                throw new \InvalidArgumentException(sprintf('The "%s" value already exists.', $name));
=======
        $valueName = $io->ask($questionText, null, static function ($name) use ($values) {
            if (\array_key_exists($name, $values)) {
                throw new \InvalidArgumentException(\sprintf('The "%s" value already exists.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            return $name;
        });

        if (!$valueName) {
            return null;
        }

        $defaultType = 'String';
        // try to guess the type by the value name prefix/suffix
        // convert to snake case for simplicity
        $snakeCasedField = Str::asSnakeCase($valueName);

        if (str_ends_with($snakeCasedField, '_id')) {
            $defaultType = 'Number';
        } elseif (str_starts_with($snakeCasedField, 'is_')) {
            $defaultType = 'Boolean';
        } elseif (str_starts_with($snakeCasedField, 'has_')) {
            $defaultType = 'Boolean';
        }

        $type = null;
        $types = $this->getValuesTypes();

        while (null === $type) {
            $question = new Question('Value type (enter <comment>?</comment> to see all types)', $defaultType);
            $question->setAutocompleterValues($types);
            $type = $io->askQuestion($question);

            if ('?' === $type) {
                $this->printAvailableTypes($io);
                $io->writeln('');

                $type = null;
            } elseif (!\in_array($type, $types)) {
                $this->printAvailableTypes($io);
<<<<<<< HEAD
                $io->error(sprintf('Invalid type "%s".', $type));
=======
                $io->error(\sprintf('Invalid type "%s".', $type));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $io->writeln('');

                $type = null;
            }
        }

        return ['name' => $valueName, 'type' => $type];
    }

<<<<<<< HEAD
    private function printAvailableTypes(ConsoleStyle $io): void
    {
        foreach ($this->getValuesTypes() as $type) {
            $io->writeln(sprintf('<info>%s</info>', $type));
=======
    /** @param string[] $classes */
    private function askForNextClass(ConsoleStyle $io, array $classes, bool $isFirstClass): ?string
    {
        $questionText = 'New class name (press <return> to stop adding classes)';

        if (!$isFirstClass) {
            $questionText = 'Add another class? Enter the class name (or press <return> to stop adding classes)';
        }

        $className = $io->ask($questionText, validator: static function (?string $name) use ($classes) {
            if (str_contains($name, ' ')) {
                throw new \InvalidArgumentException('Class name cannot contain spaces.');
            }
            if (\in_array($name, $classes, true)) {
                throw new \InvalidArgumentException(\sprintf('The "%s" class already exists.', $name));
            }

            return $name;
        });

        return $className ?: null;
    }

    private function printAvailableTypes(ConsoleStyle $io): void
    {
        foreach ($this->getValuesTypes() as $type) {
            $io->writeln(\sprintf('<info>%s</info>', $type));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    /** @return string[] */
    private function getValuesTypes(): array
    {
        return [
            'Array',
            'Boolean',
            'Number',
            'Object',
            'String',
        ];
    }

<<<<<<< HEAD
    public function configureDependencies(DependencyBuilder $dependencies): void
    {
        // lower than 8.1, allow WebpackEncoreBundle
        if (\PHP_VERSION_ID < 80100) {
            $dependencies->addClassDependency(
                WebpackEncoreBundle::class,
                'symfony/webpack-encore-bundle'
            );

            return;
        }

        // else: encourage StimulusBundle by requiring it
=======
    /**
     * @param array<int, string>                       $targets
     * @param array<array{name: string, type: string}> $values
     * @param array<int, string>                       $classes
     */
    private function generateUsageExample(string $name, array $targets, array $values, array $classes): string
    {
        $slugify = static fn (string $name) => str_replace('_', '-', Str::asSnakeCase($name));
        $controller = $slugify($name);

        $htmlTargets = [];
        foreach ($targets as $target) {
            $htmlTargets[] = \sprintf('<div data-%s-target="%s"></div>', $controller, $target);
        }

        $htmlValues = [];
        foreach ($values as ['name' => $name, 'type' => $type]) {
            $value = match ($type) {
                'Array' => '[]',
                'Boolean' => 'false',
                'Number' => '123',
                'Object' => '{}',
                'String' => 'abc',
                default => '',
            };
            $htmlValues[] = \sprintf('data-%s-%s-value="%s"', $controller, $slugify($name), $value);
        }

        $htmlClasses = [];
        foreach ($classes as $class) {
            $value = Str::asLowerCamelCase($class);
            $htmlClasses[] = \sprintf('data-%s-%s-class="%s"', $controller, $slugify($class), $value);
        }

        return \sprintf(
            '<div data-controller="%s"%s%s%s>%s%s</div>',
            $controller,
            $htmlValues ? ("\n    ".implode("\n    ", $htmlValues)) : '',
            $htmlClasses ? ("\n    ".implode("\n    ", $htmlClasses)) : '',
            ($htmlValues || $htmlClasses) ? "\n" : '',
            $htmlTargets ? ("\n        ".implode("\n        ", $htmlTargets)) : '',
            "\n        <!-- ... -->\n",
        );
    }

    public function configureDependencies(DependencyBuilder $dependencies): void
    {
        // Encourage StimulusBundle by requiring it
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $dependencies->addClassDependency(
            StimulusBundle::class,
            'symfony/stimulus-bundle'
        );
    }
}
