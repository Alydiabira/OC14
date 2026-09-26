<?php

namespace Stof\DoctrineExtensionsBundle;

<<<<<<< HEAD
=======
use Stof\DoctrineExtensionsBundle\DependencyInjection\Compiler\ReaderPass;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Stof\DoctrineExtensionsBundle\DependencyInjection\Compiler\ValidateExtensionConfigurationPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class StofDoctrineExtensionsBundle extends Bundle
{
    /**
     * {@inheritdoc}
     *
     * @return void
     */
<<<<<<< HEAD
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ValidateExtensionConfigurationPass());
=======
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new ValidateExtensionConfigurationPass());
        $container->addCompilerPass(new ReaderPass());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
