<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\DependencyInjection;

use Doctrine\Bundle\FixturesBundle\DependencyInjection\CompilerPass\FixturesCompilerPass;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
<<<<<<< HEAD
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
=======
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

use function dirname;

class DoctrineFixturesExtension extends Extension
{
    /**
     * {@inheritDoc}
     *
     * @return void
     */
    public function load(array $configs, ContainerBuilder $container)
    {
<<<<<<< HEAD
        $loader = new XmlFileLoader($container, new FileLocator(dirname(__DIR__) . '/../config'));

        $loader->load('services.xml');
=======
        $loader = new PhpFileLoader($container, new FileLocator(dirname(__DIR__) . '/../config'));

        $loader->load('services.php');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $container->registerForAutoconfiguration(ORMFixtureInterface::class)
            ->addTag(FixturesCompilerPass::FIXTURE_TAG);
    }
}
