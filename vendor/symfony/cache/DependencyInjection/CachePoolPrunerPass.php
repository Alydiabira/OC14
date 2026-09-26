<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\DependencyInjection;

use Symfony\Component\Cache\PruneableInterface;
use Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
<<<<<<< HEAD
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author Rob Frawley 2nd <rmf@src.run>
 */
class CachePoolPrunerPass implements CompilerPassInterface
{
    /**
     * @return void
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('console.command.cache_pool_prune')) {
            return;
        }

        $services = [];

        foreach ($container->findTaggedServiceIds('cache.pool') as $id => $tags) {
<<<<<<< HEAD
            $class = $container->getParameterBag()->resolveValue($container->getDefinition($id)->getClass());

            if (!$reflection = $container->getReflectionClass($class)) {
                throw new InvalidArgumentException(sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id));
            }

            if ($reflection->implementsInterface(PruneableInterface::class)) {
                $services[$id] = new Reference($id);
=======
            if ($tags[0]['pruneable'] ?? $container->getReflectionClass($container->getDefinition($id)->getClass(), false)?->implementsInterface(PruneableInterface::class) ?? false) {
                $services[$tags[0]['name'] ?? $id] = new Reference($id);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        $container->getDefinition('console.command.cache_pool_prune')->replaceArgument(0, new IteratorArgument($services));
    }
}
