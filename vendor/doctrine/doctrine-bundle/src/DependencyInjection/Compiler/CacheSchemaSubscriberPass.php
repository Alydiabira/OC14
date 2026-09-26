<?php

<<<<<<< HEAD
namespace Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler;

use Symfony\Component\Cache\Adapter\DoctrineDbalAdapter;
use Symfony\Component\Cache\Adapter\PdoAdapter;
=======
declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler;

use Symfony\Component\Cache\Adapter\DoctrineDbalAdapter;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
<<<<<<< HEAD
 * Injects Doctrine DBAL and legacy PDO adapters into their schema subscribers.
=======
 * Injects Doctrine DBAL adapters into their schema subscriber.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * Must be run later after ResolveChildDefinitionsPass.
 *
 * @final since 2.9
 */
class CacheSchemaSubscriberPass implements CompilerPassInterface
{
    /** @return void */
    public function process(ContainerBuilder $container)
    {
<<<<<<< HEAD
        // deprecated in Symfony 6.3
        $this->injectAdapters($container, 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', DoctrineDbalAdapter::class);

        $this->injectAdapters($container, 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener', DoctrineDbalAdapter::class);

        // available in Symfony 5.1 and up to Symfony 5.4 (deprecated)
        $this->injectAdapters($container, 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', PdoAdapter::class);
    }

    private function injectAdapters(ContainerBuilder $container, string $subscriberId, string $class)
    {
        if (! $container->hasDefinition($subscriberId)) {
            return;
        }

        $subscriber = $container->getDefinition($subscriberId);
=======
        if (! $container->hasDefinition('doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener')) {
            return;
        }

        $subscriber = $container->getDefinition('doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $cacheAdaptersReferences = [];
        foreach ($container->getDefinitions() as $id => $definition) {
            if ($definition->isAbstract() || $definition->isSynthetic()) {
                continue;
            }

<<<<<<< HEAD
            if ($definition->getClass() !== $class) {
=======
            if ($definition->getClass() !== DoctrineDbalAdapter::class) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                continue;
            }

            $cacheAdaptersReferences[] = new Reference($id);
        }

        $subscriber->replaceArgument(0, $cacheAdaptersReferences);
    }
}
