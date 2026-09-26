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
<<<<<<< HEAD
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
=======
use Symfony\Bundle\MakerBundle\Util\ClassSource\Model\ClassData;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Validator\Validation;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeValidator extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:validator';
    }

    public static function getCommandDescription(): string
    {
        return 'Create a new validator and constraint class';
    }

    /** @return void */
    public function configureCommand(Command $command, InputConfiguration $inputConf)
    {
        $command
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the validator class (e.g. <fg=yellow>EnabledValidator</>)')
<<<<<<< HEAD
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeValidator.txt'))
=======
            ->setHelp($this->getHelpFileContents('MakeValidator.txt'))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ;
    }

    /** @return void */
    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator)
    {
<<<<<<< HEAD
        $validatorClassNameDetails = $generator->createClassNameDetails(
            $input->getArgument('name'),
            'Validator\\',
            'Validator'
        );

        $constraintFullClassName = Str::removeSuffix($validatorClassNameDetails->getFullName(), 'Validator');

        $generator->generateClass(
            $validatorClassNameDetails->getFullName(),
            'validator/Validator.tpl.php',
            [
                'constraint_class_name' => Str::getShortClassName($constraintFullClassName),
            ]
        );

        $generator->generateClass(
            $constraintFullClassName,
            'validator/Constraint.tpl.php',
            []
=======
        $validatorClassData = ClassData::create(
            class: \sprintf('Validator\\%s', $input->getArgument('name')),
            suffix: 'Validator',
            extendsClass: ConstraintValidator::class,
            useStatements: [
                Constraint::class,
            ],
        );

        $constraintDataClass = ClassData::create(
            class: \sprintf('Validator\\%s', Str::removeSuffix($validatorClassData->getClassName(), 'Validator')),
            extendsClass: Constraint::class,
        );

        $generator->generateClassFromClassData(
            $validatorClassData,
            'validator/Validator.tpl.php',
            [
                'constraint_class_name' => $constraintDataClass->getClassName(),
            ]
        );

        $generator->generateClassFromClassData(
            $constraintDataClass,
            'validator/Constraint.tpl.php',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        );

        $generator->writeChanges();

        $this->writeSuccessMessage($io);

        $io->text([
            'Next: Open your new constraint & validators and add your logic.',
            'Find the documentation at <fg=yellow>http://symfony.com/doc/current/validation/custom_constraint.html</>',
        ]);
    }

    /** @return void */
    public function configureDependencies(DependencyBuilder $dependencies)
    {
        $dependencies->addClassDependency(
            Validation::class,
            'validator'
        );
    }
}
