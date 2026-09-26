<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

use function array_combine;
use function array_keys;
use function array_map;

final class ServiceRepositoryCompilerPass implements CompilerPassInterface
{
    public const REPOSITORY_SERVICE_TAG = 'doctrine.repository_service';

    public function process(ContainerBuilder $container): void
    {
        // when ORM is not enabled
        if (! $container->hasDefinition('doctrine.orm.container_repository_factory')) {
            return;
        }

        $locatorDef = $container->getDefinition('doctrine.orm.container_repository_factory');

        $repoServiceIds = array_keys($container->findTaggedServiceIds(self::REPOSITORY_SERVICE_TAG));
<<<<<<< HEAD

        $repoReferences = array_map(static function ($id) {
            return new Reference($id);
        }, $repoServiceIds);
=======
        $repoReferences = array_map(static fn (string $id): Reference => new Reference($id), $repoServiceIds);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $ref = ServiceLocatorTagPass::register($container, array_combine($repoServiceIds, $repoReferences));
        $locatorDef->replaceArgument(0, $ref);
    }
}
