<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Console\Descriptor;

use Symfony\Component\Console\Exception\LogicException;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Alias;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class MarkdownDescriptor extends Descriptor
{
    protected function describeRouteCollection(RouteCollection $routes, array $options = []): void
    {
        $first = true;
        foreach ($routes->all() as $name => $route) {
            if ($first) {
                $first = false;
            } else {
                $this->write("\n\n");
            }
            $this->describeRoute($route, ['name' => $name]);
            if (($showAliases ??= $options['show_aliases'] ?? false) && $aliases = ($reverseAliases ??= $this->getReverseAliases($routes))[$name] ?? []) {
<<<<<<< HEAD
                $this->write(sprintf("- Aliases: \n%s", implode("\n", array_map(static fn (string $alias): string => sprintf('    - %s', $alias), $aliases))));
=======
                $this->write(\sprintf("- Aliases: \n%s", implode("\n", array_map(static fn (string $alias): string => \sprintf('    - %s', $alias), $aliases))));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }
        $this->write("\n");
    }

    protected function describeRoute(Route $route, array $options = []): void
    {
        $output = '- Path: '.$route->getPath()
            ."\n".'- Path Regex: '.$route->compile()->getRegex()
            ."\n".'- Host: '.('' !== $route->getHost() ? $route->getHost() : 'ANY')
            ."\n".'- Host Regex: '.('' !== $route->getHost() ? $route->compile()->getHostRegex() : '')
            ."\n".'- Scheme: '.($route->getSchemes() ? implode('|', $route->getSchemes()) : 'ANY')
            ."\n".'- Method: '.($route->getMethods() ? implode('|', $route->getMethods()) : 'ANY')
            ."\n".'- Class: '.$route::class
            ."\n".'- Defaults: '.$this->formatRouterConfig($route->getDefaults())
            ."\n".'- Requirements: '.($route->getRequirements() ? $this->formatRouterConfig($route->getRequirements()) : 'NO CUSTOM')
            ."\n".'- Options: '.$this->formatRouterConfig($route->getOptions());

        if ('' !== $route->getCondition()) {
            $output .= "\n".'- Condition: '.$route->getCondition();
        }

        $this->write(isset($options['name'])
            ? $options['name']."\n".str_repeat('-', \strlen($options['name']))."\n\n".$output
            : $output);
        $this->write("\n");
    }

    protected function describeContainerParameters(ParameterBag $parameters, array $options = []): void
    {
        $deprecatedParameters = $parameters->allDeprecated();

        $this->write("Container parameters\n====================\n");
        foreach ($this->sortParameters($parameters) as $key => $value) {
<<<<<<< HEAD
            $this->write(sprintf(
                "\n- `%s`: `%s`%s",
                $key,
                $this->formatParameter($value),
                isset($deprecatedParameters[$key]) ? sprintf(' *Since %s %s: %s*', $deprecatedParameters[$key][0], $deprecatedParameters[$key][1], sprintf(...\array_slice($deprecatedParameters[$key], 2))) : ''
=======
            $this->write(\sprintf(
                "\n- `%s`: `%s`%s",
                $key,
                $this->formatParameter($value),
                isset($deprecatedParameters[$key]) ? \sprintf(' *Since %s %s: %s*', $deprecatedParameters[$key][0], $deprecatedParameters[$key][1], \sprintf(...\array_slice($deprecatedParameters[$key], 2))) : ''
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ));
        }
    }

    protected function describeContainerTags(ContainerBuilder $container, array $options = []): void
    {
        $showHidden = isset($options['show_hidden']) && $options['show_hidden'];
        $this->write("Container tags\n==============");

        foreach ($this->findDefinitionsByTag($container, $showHidden) as $tag => $definitions) {
            $this->write("\n\n".$tag."\n".str_repeat('-', \strlen($tag)));
            foreach ($definitions as $serviceId => $definition) {
                $this->write("\n\n");
                $this->describeContainerDefinition($definition, ['omit_tags' => true, 'id' => $serviceId], $container);
            }
        }
    }

    protected function describeContainerService(object $service, array $options = [], ?ContainerBuilder $container = null): void
    {
        if (!isset($options['id'])) {
            throw new \InvalidArgumentException('An "id" option must be provided.');
        }

        $childOptions = array_merge($options, ['id' => $options['id'], 'as_array' => true]);

        if ($service instanceof Alias) {
            $this->describeContainerAlias($service, $childOptions, $container);
        } elseif ($service instanceof Definition) {
            $this->describeContainerDefinition($service, $childOptions, $container);
        } else {
<<<<<<< HEAD
            $this->write(sprintf('**`%s`:** `%s`', $options['id'], $service::class));
=======
            $this->write(\sprintf('**`%s`:** `%s`', $options['id'], $service::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    protected function describeContainerDeprecations(ContainerBuilder $container, array $options = []): void
    {
<<<<<<< HEAD
        $containerDeprecationFilePath = sprintf('%s/%sDeprecations.log', $container->getParameter('kernel.build_dir'), $container->getParameter('kernel.container_class'));
=======
        $containerDeprecationFilePath = \sprintf('%s/%sDeprecations.log', $container->getParameter('kernel.build_dir'), $container->getParameter('kernel.container_class'));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (!file_exists($containerDeprecationFilePath)) {
            throw new RuntimeException('The deprecation file does not exist, please try warming the cache first.');
        }

<<<<<<< HEAD
        $logs = unserialize(file_get_contents($containerDeprecationFilePath));
=======
        $logs = unserialize(file_get_contents($containerDeprecationFilePath), ['allowed_classes' => false]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (0 === \count($logs)) {
            $this->write("## There are no deprecations in the logs!\n");

            return;
        }

        $formattedLogs = [];
        $remainingCount = 0;
        foreach ($logs as $log) {
<<<<<<< HEAD
            $formattedLogs[] = sprintf("- %sx: \"%s\" in %s:%s\n", $log['count'], $log['message'], $log['file'], $log['line']);
            $remainingCount += $log['count'];
        }

        $this->write(sprintf("## Remaining deprecations (%s)\n\n", $remainingCount));
=======
            $formattedLogs[] = \sprintf("- %sx: \"%s\" in %s:%s\n", $log['count'], $log['message'], $log['file'], $log['line']);
            $remainingCount += $log['count'];
        }

        $this->write(\sprintf("## Remaining deprecations (%s)\n\n", $remainingCount));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        foreach ($formattedLogs as $formattedLog) {
            $this->write($formattedLog);
        }
    }

    protected function describeContainerServices(ContainerBuilder $container, array $options = []): void
    {
        $showHidden = isset($options['show_hidden']) && $options['show_hidden'];

        $title = $showHidden ? 'Hidden services' : 'Services';
        if (isset($options['tag'])) {
            $title .= ' with tag `'.$options['tag'].'`';
        }
        $this->write($title."\n".str_repeat('=', \strlen($title)));

        $serviceIds = isset($options['tag']) && $options['tag']
            ? $this->sortTaggedServicesByPriority($container->findTaggedServiceIds($options['tag']))
            : $this->sortServiceIds($container->getServiceIds());
        $showArguments = isset($options['show_arguments']) && $options['show_arguments'];
        $services = ['definitions' => [], 'aliases' => [], 'services' => []];

        if (isset($options['filter'])) {
            $serviceIds = array_filter($serviceIds, $options['filter']);
        }

        foreach ($serviceIds as $serviceId) {
            $service = $this->resolveServiceDefinition($container, $serviceId);

            if ($showHidden xor '.' === ($serviceId[0] ?? null)) {
                continue;
            }

            if ($service instanceof Alias) {
                $services['aliases'][$serviceId] = $service;
            } elseif ($service instanceof Definition) {
                if ($service->hasTag('container.excluded')) {
                    continue;
                }
                $services['definitions'][$serviceId] = $service;
            } else {
                $services['services'][$serviceId] = $service;
            }
        }

        if (!empty($services['definitions'])) {
            $this->write("\n\nDefinitions\n-----------\n");
            foreach ($services['definitions'] as $id => $service) {
                $this->write("\n");
                $this->describeContainerDefinition($service, ['id' => $id, 'show_arguments' => $showArguments], $container);
            }
        }

        if (!empty($services['aliases'])) {
            $this->write("\n\nAliases\n-------\n");
            foreach ($services['aliases'] as $id => $service) {
                $this->write("\n");
                $this->describeContainerAlias($service, ['id' => $id]);
            }
        }

        if (!empty($services['services'])) {
            $this->write("\n\nServices\n--------\n");
            foreach ($services['services'] as $id => $service) {
                $this->write("\n");
<<<<<<< HEAD
                $this->write(sprintf('- `%s`: `%s`', $id, $service::class));
=======
                $this->write(\sprintf('- `%s`: `%s`', $id, $service::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }
    }

    protected function describeContainerDefinition(Definition $definition, array $options = [], ?ContainerBuilder $container = null): void
    {
        $output = '';

        if ('' !== $classDescription = $this->getClassDescription((string) $definition->getClass())) {
            $output .= '- Description: `'.$classDescription.'`'."\n";
        }

        $output .= '- Class: `'.$definition->getClass().'`'
            ."\n".'- Public: '.($definition->isPublic() && !$definition->isPrivate() ? 'yes' : 'no')
            ."\n".'- Synthetic: '.($definition->isSynthetic() ? 'yes' : 'no')
            ."\n".'- Lazy: '.($definition->isLazy() ? 'yes' : 'no')
            ."\n".'- Shared: '.($definition->isShared() ? 'yes' : 'no')
            ."\n".'- Abstract: '.($definition->isAbstract() ? 'yes' : 'no')
            ."\n".'- Autowired: '.($definition->isAutowired() ? 'yes' : 'no')
            ."\n".'- Autoconfigured: '.($definition->isAutoconfigured() ? 'yes' : 'no')
        ;

        if ($definition->isDeprecated()) {
            $output .= "\n".'- Deprecated: yes';
            $output .= "\n".'- Deprecation message: '.$definition->getDeprecation($options['id'])['message'];
        } else {
            $output .= "\n".'- Deprecated: no';
        }

        if (isset($options['show_arguments']) && $options['show_arguments']) {
            $output .= "\n".'- Arguments: '.($definition->getArguments() ? 'yes' : 'no');
        }

        if ($definition->getFile()) {
            $output .= "\n".'- File: `'.$definition->getFile().'`';
        }

        if ($factory = $definition->getFactory()) {
            if (\is_array($factory)) {
                if ($factory[0] instanceof Reference) {
                    $output .= "\n".'- Factory Service: `'.$factory[0].'`';
                } elseif ($factory[0] instanceof Definition) {
<<<<<<< HEAD
                    $output .= "\n".sprintf('- Factory Service: inline factory service (%s)', $factory[0]->getClass() ? sprintf('`%s`', $factory[0]->getClass()) : 'not configured');
=======
                    $output .= "\n".\sprintf('- Factory Service: inline factory service (%s)', $factory[0]->getClass() ? \sprintf('`%s`', $factory[0]->getClass()) : 'not configured');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                } else {
                    $output .= "\n".'- Factory Class: `'.$factory[0].'`';
                }
                $output .= "\n".'- Factory Method: `'.$factory[1].'`';
            } else {
                $output .= "\n".'- Factory Function: `'.$factory.'`';
            }
        }

        $calls = $definition->getMethodCalls();
        foreach ($calls as $callData) {
            $output .= "\n".'- Call: `'.$callData[0].'`';
        }

        if (!(isset($options['omit_tags']) && $options['omit_tags'])) {
<<<<<<< HEAD
            foreach ($this->sortTagsByPriority($definition->getTags()) as $tagName => $tagData) {
=======
            foreach ($this->sortTagsByPriority($container ? $this->resolvePriorityServiceTags($container, $definition) : $definition->getTags()) as $tagName => $tagData) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                foreach ($tagData as $parameters) {
                    $output .= "\n".'- Tag: `'.$tagName.'`';
                    foreach ($parameters as $name => $value) {
                        $output .= "\n".'    - '.ucfirst($name).': '.(\is_array($value) ? $this->formatParameter($value) : $value);
                    }
                }
            }
        }

        $inEdges = null !== $container && isset($options['id']) ? $this->getServiceEdges($container, $options['id']) : [];
        $output .= "\n".'- Usages: '.($inEdges ? implode(', ', $inEdges) : 'none');

<<<<<<< HEAD
        $this->write(isset($options['id']) ? sprintf("### %s\n\n%s\n", $options['id'], $output) : $output);
=======
        $this->write(isset($options['id']) ? \sprintf("### %s\n\n%s\n", $options['id'], $output) : $output);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    protected function describeContainerAlias(Alias $alias, array $options = [], ?ContainerBuilder $container = null): void
    {
        $output = '- Service: `'.$alias.'`'
            ."\n".'- Public: '.($alias->isPublic() && !$alias->isPrivate() ? 'yes' : 'no');

        if (!isset($options['id'])) {
            $this->write($output);

            return;
        }

<<<<<<< HEAD
        $this->write(sprintf("### %s\n\n%s\n", $options['id'], $output));
=======
        $this->write(\sprintf("### %s\n\n%s\n", $options['id'], $output));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (!$container) {
            return;
        }

        $this->write("\n");
        $this->describeContainerDefinition($container->getDefinition((string) $alias), array_merge($options, ['id' => (string) $alias]), $container);
    }

    protected function describeContainerParameter(mixed $parameter, ?array $deprecation, array $options = []): void
    {
        if (isset($options['parameter'])) {
<<<<<<< HEAD
            $this->write(sprintf("%s\n%s\n\n%s%s", $options['parameter'], str_repeat('=', \strlen($options['parameter'])), $this->formatParameter($parameter), $deprecation ? sprintf("\n\n*Since %s %s: %s*", $deprecation[0], $deprecation[1], sprintf(...\array_slice($deprecation, 2))) : ''));
=======
            $this->write(\sprintf("%s\n%s\n\n%s%s", $options['parameter'], str_repeat('=', \strlen($options['parameter'])), $this->formatParameter($parameter), $deprecation ? \sprintf("\n\n*Since %s %s: %s*", $deprecation[0], $deprecation[1], \sprintf(...\array_slice($deprecation, 2))) : ''));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        } else {
            $this->write($parameter);
        }
    }

    protected function describeContainerEnvVars(array $envs, array $options = []): void
    {
        throw new LogicException('Using the markdown format to debug environment variables is not supported.');
    }

    protected function describeEventDispatcherListeners(EventDispatcherInterface $eventDispatcher, array $options = []): void
    {
        $event = $options['event'] ?? null;
        $dispatcherServiceName = $options['dispatcher_service_name'] ?? null;

        $title = 'Registered listeners';

        if (null !== $dispatcherServiceName) {
<<<<<<< HEAD
            $title .= sprintf(' of event dispatcher "%s"', $dispatcherServiceName);
        }

        if (null !== $event) {
            $title .= sprintf(' for event `%s` ordered by descending priority', $event);
            $registeredListeners = $eventDispatcher->getListeners($event);
        } else {
            // Try to see if "events" exists
            $registeredListeners = \array_key_exists('events', $options) ? array_combine($options['events'], array_map(fn ($event) => $eventDispatcher->getListeners($event), $options['events'])) : $eventDispatcher->getListeners();
        }

        $this->write(sprintf('# %s', $title)."\n");

        if (null !== $event) {
            foreach ($registeredListeners as $order => $listener) {
                $this->write("\n".sprintf('## Listener %d', $order + 1)."\n");
                $this->describeCallable($listener);
                $this->write(sprintf('- Priority: `%d`', $eventDispatcher->getListenerPriority($event, $listener))."\n");
=======
            $title .= \sprintf(' of event dispatcher "%s"', $dispatcherServiceName);
        }

        if (null !== $event) {
            $title .= \sprintf(' for event `%s` ordered by descending priority', $event);
            $registeredListeners = $eventDispatcher->getListeners($event);
        } else {
            // Try to see if "events" exists
            $registeredListeners = \array_key_exists('events', $options) ? array_combine($options['events'], array_map(static fn ($event) => $eventDispatcher->getListeners($event), $options['events'])) : $eventDispatcher->getListeners();
        }

        $this->write(\sprintf('# %s', $title)."\n");

        if (null !== $event) {
            foreach ($registeredListeners as $order => $listener) {
                $this->write("\n".\sprintf('## Listener %d', $order + 1)."\n");
                $this->describeCallable($listener);
                $this->write(\sprintf('- Priority: `%d`', $eventDispatcher->getListenerPriority($event, $listener))."\n");
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        } else {
            ksort($registeredListeners);

            foreach ($registeredListeners as $eventListened => $eventListeners) {
<<<<<<< HEAD
                $this->write("\n".sprintf('## %s', $eventListened)."\n");

                foreach ($eventListeners as $order => $eventListener) {
                    $this->write("\n".sprintf('### Listener %d', $order + 1)."\n");
                    $this->describeCallable($eventListener);
                    $this->write(sprintf('- Priority: `%d`', $eventDispatcher->getListenerPriority($eventListened, $eventListener))."\n");
=======
                $this->write("\n".\sprintf('## %s', $eventListened)."\n");

                foreach ($eventListeners as $order => $eventListener) {
                    $this->write("\n".\sprintf('### Listener %d', $order + 1)."\n");
                    $this->describeCallable($eventListener);
                    $this->write(\sprintf('- Priority: `%d`', $eventDispatcher->getListenerPriority($eventListened, $eventListener))."\n");
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            }
        }
    }

    protected function describeCallable(mixed $callable, array $options = []): void
    {
        $string = '';

        if (\is_array($callable)) {
            $string .= "\n- Type: `function`";

            if (\is_object($callable[0])) {
<<<<<<< HEAD
                $string .= "\n".sprintf('- Name: `%s`', $callable[1]);
                $string .= "\n".sprintf('- Class: `%s`', $callable[0]::class);
            } else {
                if (!str_starts_with($callable[1], 'parent::')) {
                    $string .= "\n".sprintf('- Name: `%s`', $callable[1]);
                    $string .= "\n".sprintf('- Class: `%s`', $callable[0]);
                    $string .= "\n- Static: yes";
                } else {
                    $string .= "\n".sprintf('- Name: `%s`', substr($callable[1], 8));
                    $string .= "\n".sprintf('- Class: `%s`', $callable[0]);
=======
                $string .= "\n".\sprintf('- Name: `%s`', $callable[1]);
                $string .= "\n".\sprintf('- Class: `%s`', $callable[0]::class);
            } else {
                if (!str_starts_with($callable[1], 'parent::')) {
                    $string .= "\n".\sprintf('- Name: `%s`', $callable[1]);
                    $string .= "\n".\sprintf('- Class: `%s`', $callable[0]);
                    $string .= "\n- Static: yes";
                } else {
                    $string .= "\n".\sprintf('- Name: `%s`', substr($callable[1], 8));
                    $string .= "\n".\sprintf('- Class: `%s`', $callable[0]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    $string .= "\n- Static: yes";
                    $string .= "\n- Parent: yes";
                }
            }

            $this->write($string."\n");

            return;
        }

        if (\is_string($callable)) {
            $string .= "\n- Type: `function`";

            if (!str_contains($callable, '::')) {
<<<<<<< HEAD
                $string .= "\n".sprintf('- Name: `%s`', $callable);
            } else {
                $callableParts = explode('::', $callable);

                $string .= "\n".sprintf('- Name: `%s`', $callableParts[1]);
                $string .= "\n".sprintf('- Class: `%s`', $callableParts[0]);
=======
                $string .= "\n".\sprintf('- Name: `%s`', $callable);
            } else {
                $callableParts = explode('::', $callable);

                $string .= "\n".\sprintf('- Name: `%s`', $callableParts[1]);
                $string .= "\n".\sprintf('- Class: `%s`', $callableParts[0]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $string .= "\n- Static: yes";
            }

            $this->write($string."\n");

            return;
        }

        if ($callable instanceof \Closure) {
            $string .= "\n- Type: `closure`";

            $r = new \ReflectionFunction($callable);
            if (str_contains($r->name, '{closure')) {
                $this->write($string."\n");

                return;
            }
<<<<<<< HEAD
            $string .= "\n".sprintf('- Name: `%s`', $r->name);

            if ($class = \PHP_VERSION_ID >= 80111 ? $r->getClosureCalledClass() : $r->getClosureScopeClass()) {
                $string .= "\n".sprintf('- Class: `%s`', $class->name);
=======
            $string .= "\n".\sprintf('- Name: `%s`', $r->name);

            if ($class = \PHP_VERSION_ID >= 80111 ? $r->getClosureCalledClass() : $r->getClosureScopeClass()) {
                $string .= "\n".\sprintf('- Class: `%s`', $class->name);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                if (!$r->getClosureThis()) {
                    $string .= "\n- Static: yes";
                }
            }

            $this->write($string."\n");

            return;
        }

        if (method_exists($callable, '__invoke')) {
            $string .= "\n- Type: `object`";
<<<<<<< HEAD
            $string .= "\n".sprintf('- Name: `%s`', $callable::class);
=======
            $string .= "\n".\sprintf('- Name: `%s`', $callable::class);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            $this->write($string."\n");

            return;
        }

        throw new \InvalidArgumentException('Callable is not describable.');
    }

    private function formatRouterConfig(array $array): string
    {
        if (!$array) {
            return 'NONE';
        }

        $string = '';
        ksort($array);
        foreach ($array as $name => $value) {
            $string .= "\n".'    - `'.$name.'`: '.$this->formatValue($value);
        }

        return $string;
    }
}
