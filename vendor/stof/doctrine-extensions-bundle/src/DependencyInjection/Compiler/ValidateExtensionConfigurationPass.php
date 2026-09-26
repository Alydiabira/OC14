<?php

namespace Stof\DoctrineExtensionsBundle\DependencyInjection\Compiler;

<<<<<<< HEAD
=======
use Stof\DoctrineExtensionsBundle\DependencyInjection\StofDoctrineExtensionsExtension;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * @internal
 */
class ValidateExtensionConfigurationPass implements CompilerPassInterface
{
    /**
     * Validate the DoctrineExtensions DIC extension config.
     *
     * This validation runs in a discrete compiler pass because it depends on
     * DBAL and ODM services, which aren't available during the config merge
     * compiler pass.
     *
     * @param ContainerBuilder $container
     *
     * @return void
     */
<<<<<<< HEAD
    public function process(ContainerBuilder $container)
    {
        $container->getExtension('stof_doctrine_extensions')->configValidate($container);
=======
    public function process(ContainerBuilder $container): void
    {
        $extension = $container->getExtension('stof_doctrine_extensions');
        \assert($extension instanceof StofDoctrineExtensionsExtension);

        $extension->configValidate($container);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
