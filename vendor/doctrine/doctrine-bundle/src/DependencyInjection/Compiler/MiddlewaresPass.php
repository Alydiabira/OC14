<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler;

use Doctrine\Bundle\DoctrineBundle\Middleware\ConnectionNameAwareInterface;
use Symfony\Component\DependencyInjection\ChildDefinition;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
<<<<<<< HEAD
=======
use Symfony\Component\DependencyInjection\Reference;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

use function array_key_exists;
use function array_keys;
use function array_map;
use function array_values;
use function is_subclass_of;
use function sprintf;
<<<<<<< HEAD
use function uasort;
=======
use function usort;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

final class MiddlewaresPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (! $container->hasParameter('doctrine.connections')) {
            return;
        }

        $middlewareAbstractDefs = [];
        $middlewareConnections  = [];
        $middlewarePriorities   = [];
        foreach ($container->findTaggedServiceIds('doctrine.middleware') as $id => $tags) {
            $middlewareAbstractDefs[$id] = $container->getDefinition($id);
            // When a def has doctrine.middleware tags with connection attributes equal to connection names
            // registration of this middleware is limited to the connections with these names
            foreach ($tags as $tag) {
                if (! isset($tag['connection'])) {
                    if (isset($tag['priority']) && ! isset($middlewarePriorities[$id])) {
                        $middlewarePriorities[$id] = $tag['priority'];
                    }

                    continue;
                }

                $middlewareConnections[$id][$tag['connection']] = $tag['priority'] ?? null;
            }
        }

        foreach (array_keys($container->getParameter('doctrine.connections')) as $name) {
<<<<<<< HEAD
            $middlewareDefs = [];
=======
            $middlewareRefs = [];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $i              = 0;
            foreach ($middlewareAbstractDefs as $id => $abstractDef) {
                if (isset($middlewareConnections[$id]) && ! array_key_exists($name, $middlewareConnections[$id])) {
                    continue;
                }

<<<<<<< HEAD
                $middlewareDefs[$id] = [
                    $childDef = $container->setDefinition(
                        sprintf('%s.%s', $id, $name),
                        new ChildDefinition($id),
                    ),
                    ++$i,
                ];
=======
                $childDef    = $container->setDefinition(
                    $childId = sprintf('%s.%s', $id, $name),
                    (new ChildDefinition($id))
                        ->setTags($abstractDef->getTags())->clearTag('doctrine.middleware')
                        ->setAutoconfigured($abstractDef->isAutoconfigured())
                        ->setAutowired($abstractDef->isAutowired()),
                );
                $middlewareRefs[$id] = [new Reference($childId), ++$i];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                if (! is_subclass_of($abstractDef->getClass(), ConnectionNameAwareInterface::class)) {
                    continue;
                }

                $childDef->addMethodCall('setConnectionName', [$name]);
            }

<<<<<<< HEAD
            $middlewareDefs = array_map(
                static fn ($id, $def) => [
                    $middlewareConnections[$id][$name] ?? $middlewarePriorities[$id] ?? 0,
                    $def[1],
                    $def[0],
                ],
                array_keys($middlewareDefs),
                array_values($middlewareDefs),
            );
            uasort($middlewareDefs, static fn ($a, $b) => $b[0] <=> $a[0] ?: $a[1] <=> $b[1]);
            $middlewareDefs = array_map(static fn ($value) => $value[2], $middlewareDefs);

            $container
                ->getDefinition(sprintf('doctrine.dbal.%s_connection.configuration', $name))
                ->addMethodCall('setMiddlewares', [$middlewareDefs]);
=======
            $middlewareRefs = array_map(
                static fn (string $id, array $ref) => [
                    $middlewareConnections[$id][$name] ?? $middlewarePriorities[$id] ?? 0,
                    $ref[1],
                    $ref[0],
                ],
                array_keys($middlewareRefs),
                array_values($middlewareRefs),
            );
            usort($middlewareRefs, static fn (array $a, array $b): int => $b[0] <=> $a[0] ?: $a[1] <=> $b[1]);
            $middlewareRefs = array_map(static fn (array $value): Reference => $value[2], $middlewareRefs);

            $container
                ->getDefinition(sprintf('doctrine.dbal.%s_connection.configuration', $name))
                ->addMethodCall('setMiddlewares', [$middlewareRefs]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
