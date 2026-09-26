<?php

namespace Vich\UploaderBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\Yaml\Yaml;

/**
 * @internal
 */
final class RegisterMappingDriversPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        $drivers = [
            new Reference('vich_uploader.metadata_driver.xml'),
        ];

        $managers = [];
        if ($container->hasDefinition('doctrine_mongodb')) {
            $managers[] = new Reference('doctrine_mongodb');
        }
        if ($container->hasDefinition('doctrine')) {
            $managers[] = new Reference('doctrine');
        }
        if ($container->hasDefinition('doctrine_phpcr')) {
            $managers[] = new Reference('doctrine_phpcr');
        }

<<<<<<< HEAD
        if (count($managers) > 0) {
            $drivers[] = $container->getDefinition('vich_uploader.metadata_driver.annotation')
=======
        if (\count($managers) > 0) {
            // Support both new 'attribute' service and deprecated 'annotation' service
            $driverServiceId = $container->hasDefinition('vich_uploader.metadata_driver.attribute')
                ? 'vich_uploader.metadata_driver.attribute'
                : 'vich_uploader.metadata_driver.annotation';

            $drivers[] = $container->getDefinition($driverServiceId)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ->replaceArgument('$managerRegistryList', $managers);
        }

        if (\class_exists(Yaml::class)) {
            $drivers[] = new Reference('vich_uploader.metadata_driver.yaml');
            $drivers[] = new Reference('vich_uploader.metadata_driver.yml');
        }

        $container
            ->getDefinition('vich_uploader.metadata_driver.chain')
            ->replaceArgument(0, $drivers);
    }
}
