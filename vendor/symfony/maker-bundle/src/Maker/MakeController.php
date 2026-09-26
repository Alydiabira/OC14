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

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
<<<<<<< HEAD
=======
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
<<<<<<< HEAD
use Symfony\Bundle\MakerBundle\Str;
use Symfony\Bundle\MakerBundle\Util\PhpCompatUtil;
use Symfony\Bundle\MakerBundle\Util\UseStatementGenerator;
=======
use Symfony\Bundle\MakerBundle\Maker\Common\CanGenerateTestsTrait;
use Symfony\Bundle\MakerBundle\Str;
use Symfony\Bundle\MakerBundle\Util\ClassSource\Model\ClassData;
use Symfony\Bundle\MakerBundle\Util\PhpCompatUtil;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeController extends AbstractMaker
{
<<<<<<< HEAD
=======
    use CanGenerateTestsTrait;

    private bool $isInvokable;
    private ClassData $controllerClassData;
    private bool $usesTwigTemplate;
    private string $twigTemplatePath;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(private ?PhpCompatUtil $phpCompatUtil = null)
    {
        if (null !== $phpCompatUtil) {
            @trigger_deprecation(
                'symfony/maker-bundle',
                '1.55.0',
<<<<<<< HEAD
                sprintf('Initializing MakeCommand while providing an instance of "%s" is deprecated. The $phpCompatUtil param will be removed in a future version.', PhpCompatUtil::class)
=======
                \sprintf('Initializing MakeCommand while providing an instance of "%s" is deprecated. The $phpCompatUtil param will be removed in a future version.', PhpCompatUtil::class)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            );
        }
    }

    public static function getCommandName(): string
    {
        return 'make:controller';
    }

    public static function getCommandDescription(): string
    {
        return 'Create a new controller class';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig): void
    {
        $command
<<<<<<< HEAD
            ->addArgument('controller-class', InputArgument::OPTIONAL, sprintf('Choose a name for your controller class (e.g. <fg=yellow>%sController</>)', Str::asClassName(Str::getRandomTerm())))
            ->addOption('no-template', null, InputOption::VALUE_NONE, 'Use this option to disable template generation')
            ->addOption('invokable', 'i', InputOption::VALUE_NONE, 'Use this option to create an invokable controller')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeController.txt'))
        ;
=======
            ->addArgument('controller-class', InputArgument::OPTIONAL, \sprintf('Choose a name for your controller class (e.g. <fg=yellow>%sController</>)', Str::asClassName(Str::getRandomTerm())))
            ->addOption('no-template', null, InputOption::VALUE_NONE, 'Use this option to disable template generation')
            ->addOption('invokable', null, InputOption::VALUE_NONE, 'Use this option to create an invokable controller')
            ->setHelp($this->getHelpFileContents('MakeController.txt'))
        ;

        $this->configureCommandWithTestsOption($command);
    }

    public function interact(InputInterface $input, ConsoleStyle $io, Command $command): void
    {
        $this->usesTwigTemplate = $this->isTwigInstalled() && !$input->getOption('no-template');
        $this->isInvokable = (bool) $input->getOption('invokable');

        $controllerClass = $input->getArgument('controller-class');
        $controllerClassName = \sprintf('Controller\%s', $controllerClass);

        // If the class name provided is absolute, we do not assume it will live in src/Controller
        // e.g. src/Custom/Location/For/MyController instead of src/Controller/MyController
        if ($isAbsoluteNamespace = '\\' === $controllerClass[0]) {
            $controllerClassName = substr($controllerClass, 1);
        }

        $this->controllerClassData = ClassData::create(
            class: $controllerClassName,
            suffix: 'Controller',
            extendsClass: AbstractController::class,
            useStatements: [
                $this->usesTwigTemplate ? Response::class : JsonResponse::class,
                Route::class,
            ]
        );

        // Again if the class name is absolute, lets not make assumptions about where the Twig template
        // should live. E.g. templates/custom/location/for/my_controller.html.twig instead of
        // templates/my/controller.html.twig. We do however remove the root_namespace prefix in either case
        // so we don't end up with templates/app/my/controller.html.twig
        $templateName = $isAbsoluteNamespace ?
            $this->controllerClassData->getFullClassName(withoutRootNamespace: true, withoutSuffix: true) :
            $this->controllerClassData->getClassName(relative: true, withoutSuffix: true)
        ;

        // Convert the Twig template name into a file path where it will be generated.
        $this->twigTemplatePath = \sprintf('%s%s', Str::asFilePath($templateName), $this->isInvokable ? '.html.twig' : '/index.html.twig');

        $this->interactSetGenerateTests($input, $io);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator): void
    {
<<<<<<< HEAD
        $controllerClassNameDetails = $generator->createClassNameDetails(
            $input->getArgument('controller-class'),
            'Controller\\',
            'Controller'
        );

        $withTemplate = $this->isTwigInstalled() && !$input->getOption('no-template');
        $isInvokable = (bool) $input->getOption('invokable');

        $useStatements = new UseStatementGenerator([
            AbstractController::class,
            $withTemplate ? Response::class : JsonResponse::class,
            Route::class,
        ]);

        $templateName = Str::asFilePath($controllerClassNameDetails->getRelativeNameWithoutSuffix())
            .($isInvokable ? '.html.twig' : '/index.html.twig');

        $controllerPath = $generator->generateController(
            $controllerClassNameDetails->getFullName(),
            'controller/Controller.tpl.php',
            [
                'use_statements' => $useStatements,
                'route_path' => Str::asRoutePath($controllerClassNameDetails->getRelativeNameWithoutSuffix()),
                'route_name' => Str::asRouteName($controllerClassNameDetails->getRelativeNameWithoutSuffix()),
                'method_name' => $isInvokable ? '__invoke' : 'index',
                'with_template' => $withTemplate,
                'template_name' => $templateName,
            ]
        );

        if ($withTemplate) {
            $generator->generateTemplate(
                $templateName,
=======
        $controllerPath = $generator->generateClassFromClassData($this->controllerClassData, 'controller/Controller.tpl.php', [
            'route_path' => Str::asRoutePath($this->controllerClassData->getClassName(relative: true, withoutSuffix: true)),
            'route_name' => Str::AsRouteName($this->controllerClassData->getClassName(relative: true, withoutSuffix: true)),
            'method_name' => $this->isInvokable ? '__invoke' : 'index',
            'with_template' => $this->usesTwigTemplate,
            'template_name' => $this->twigTemplatePath,
        ], true);

        if ($this->usesTwigTemplate) {
            $generator->generateTemplate(
                $this->twigTemplatePath,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                'controller/twig_template.tpl.php',
                [
                    'controller_path' => $controllerPath,
                    'root_directory' => $generator->getRootDirectory(),
<<<<<<< HEAD
                    'class_name' => $controllerClassNameDetails->getShortName(),
=======
                    'class_name' => $this->controllerClassData->getClassName(),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ]
            );
        }

<<<<<<< HEAD
=======
        if ($this->shouldGenerateTests()) {
            $testClassData = ClassData::create(
                class: \sprintf('Tests\Controller\%s', $this->controllerClassData->getClassName(relative: true, withoutSuffix: true)),
                suffix: 'ControllerTest',
                extendsClass: WebTestCase::class,
            );

            $generator->generateClassFromClassData($testClassData, 'controller/test/Test.tpl.php', [
                'route_path' => Str::asRoutePath($this->controllerClassData->getClassName(relative: true, withoutSuffix: true)),
            ]);

            if (!class_exists(WebTestCase::class)) {
                $io->caution('You\'ll need to install the `symfony/test-pack` to execute the tests for your new controller.');
            }
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $generator->writeChanges();

        $this->writeSuccessMessage($io);
        $io->text('Next: Open your new controller class and add some pages!');
    }

    public function configureDependencies(DependencyBuilder $dependencies): void
    {
    }

    private function isTwigInstalled(): bool
    {
        return class_exists(TwigBundle::class);
    }
}
