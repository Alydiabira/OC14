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
<<<<<<< HEAD
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
=======
use Symfony\Bundle\MakerBundle\Util\ClassSource\Model\ClassData;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Vote;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeVoter extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:voter';
    }

    public static function getCommandDescription(): string
    {
        return 'Create a new security voter class';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig): void
    {
        $command
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the security voter class (e.g. <fg=yellow>BlogPostVoter</>)')
<<<<<<< HEAD
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeVoter.txt'))
=======
            ->setHelp($this->getHelpFileContents('MakeVoter.txt'))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ;
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator): void
    {
<<<<<<< HEAD
        $voterClassNameDetails = $generator->createClassNameDetails(
            $input->getArgument('name'),
            'Security\\Voter\\',
            'Voter'
        );

        $generator->generateClass(
            $voterClassNameDetails->getFullName(),
            'security/Voter.tpl.php',
            []
=======
        $voterClassData = ClassData::create(
            class: \sprintf('Security\Voter\%s', $input->getArgument('name')),
            suffix: 'Voter',
            extendsClass: Voter::class,
            useStatements: [
                TokenInterface::class,
                Voter::class,
                UserInterface::class,
                Vote::class,
            ]
        );

        $generator->generateClassFromClassData(
            $voterClassData,
            'security/Voter.tpl.php',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        );

        $generator->writeChanges();

        $this->writeSuccessMessage($io);

        $io->text([
            'Next: Open your voter and add your logic.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/security/voters.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder $dependencies): void
    {
        $dependencies->addClassDependency(
            Voter::class,
            'security'
        );
    }
}
