<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\TwigComponent;

use Psr\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\DependencyInjection\ServiceLocator;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
<<<<<<< HEAD
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Event\PostMountEvent;
use Symfony\UX\TwigComponent\Event\PreMountEvent;
=======
use Symfony\Contracts\Service\ResetInterface;
use Symfony\UX\TwigComponent\Event\PostMountEvent;
use Symfony\UX\TwigComponent\Event\PreMountEvent;
use Twig\Environment;
use Twig\Runtime\EscaperRuntime;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 *
 * @internal
 */
<<<<<<< HEAD
final class ComponentFactory
{
=======
final class ComponentFactory implements ResetInterface
{
    private array $mountMethods = [];
    private array $writableProperties = [];

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * @param array<string, array>        $config
     * @param array<class-string, string> $classMap
     */
    public function __construct(
        private ComponentTemplateFinderInterface $componentTemplateFinder,
        private ServiceLocator $components,
        private PropertyAccessorInterface $propertyAccessor,
        private EventDispatcherInterface $eventDispatcher,
        private array $config,
<<<<<<< HEAD
        private array $classMap,
=======
        private readonly array $classMap,
        private readonly Environment $twig,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
    }

    public function metadataFor(string $name): ComponentMetadata
    {
<<<<<<< HEAD
        $name = $this->classMap[$name] ?? $name;

        if (!$config = $this->config[$name] ?? null) {
            if (($template = $this->componentTemplateFinder->findAnonymousComponentTemplate($name)) !== null) {
                return new ComponentMetadata([
                    'key' => $name,
                    'template' => $template,
                ]);
            }

            $this->throwUnknownComponentException($name);
        }

        return new ComponentMetadata($config);
=======
        if ($config = $this->config[$name] ?? null) {
            return new ComponentMetadata($config);
        }

        if ($template = $this->componentTemplateFinder->findAnonymousComponentTemplate($name)) {
            $this->config[$name] = [
                'key' => $name,
                'template' => $template,
            ];

            return new ComponentMetadata($this->config[$name]);
        }

        if ($mappedName = $this->classMap[$name] ?? null) {
            if ($config = $this->config[$mappedName] ?? null) {
                return new ComponentMetadata($config);
            }

            throw new \InvalidArgumentException(\sprintf('Unknown component "%s".', $name));
        }

        $this->throwUnknownComponentException($name);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Creates the component and "mounts" it with the passed data.
     */
    public function create(string $name, array $data = []): MountedComponent
    {
<<<<<<< HEAD
        return $this->mountFromObject(
            $this->getComponent($name),
            $data,
            $this->metadataFor($name)
        );
=======
        $metadata = $this->metadataFor($name);

        if ($metadata->isAnonymous()) {
            return $this->mountFromObject(new AnonymousComponent(), $data, $metadata);
        }

        return $this->mountFromObject($this->components->get($metadata->getName()), $data, $metadata);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @internal
     */
    public function mountFromObject(object $component, array $data, ComponentMetadata $componentMetadata): MountedComponent
    {
        $originalData = $data;
<<<<<<< HEAD
        $data = $this->preMount($component, $data, $componentMetadata);

        $this->mount($component, $data);

        // set data that wasn't set in mount on the component directly
        foreach ($data as $property => $value) {
            if ($this->propertyAccessor->isWritable($component, $property)) {
                $this->propertyAccessor->setValue($component, $property, $value);

                unset($data[$property]);
=======
        $event = $this->preMount($component, $data, $componentMetadata);
        $data = $event->getData();

        $this->mount($component, $data, $componentMetadata);

        if (!$componentMetadata->isAnonymous()) {
            // set data that wasn't set in mount on the component directly
            foreach ($data as $property => $value) {
                if ($this->writableProperties[$componentMetadata->getName()][$property] ??= $this->propertyAccessor->isWritable($component, $property)) {
                    $this->propertyAccessor->setValue($component, $property, $value);
                    unset($data[$property]);
                }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        $postMount = $this->postMount($component, $data, $componentMetadata);
<<<<<<< HEAD
        $data = $postMount['data'];
        $extraMetadata = $postMount['extraMetadata'];
=======
        $data = $postMount->getData();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        // create attributes from "attributes" key if exists
        $attributesVar = $componentMetadata->getAttributesVar();
        $attributes = $data[$attributesVar] ?? [];
        unset($data[$attributesVar]);

<<<<<<< HEAD
        // ensure remaining data is scalar
        foreach ($data as $key => $value) {
            if ($value instanceof \Stringable) {
                $data[$key] = (string) $value;
                continue;
            }

            $data[$key] = $value;
=======
        foreach ($data as $key => $value) {
            if ($value instanceof \Stringable) {
                $data[$key] = (string) $value;
            }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return new MountedComponent(
            $componentMetadata->getName(),
            $component,
<<<<<<< HEAD
            new ComponentAttributes(array_merge($attributes, $data)),
            $originalData,
            $extraMetadata,
=======
            new ComponentAttributes([...$attributes, ...$data], $this->twig->getRuntime(EscaperRuntime::class)),
            $originalData,
            $postMount->getExtraMetadata(),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        );
    }

    /**
     * Returns the "unmounted" component.
<<<<<<< HEAD
     */
    public function get(string $name): object
    {
        return $this->getComponent($name);
    }

    private function mount(object $component, array &$data): void
    {
        try {
            $method = (new \ReflectionClass($component))->getMethod('mount');
        } catch (\ReflectionException) {
            // no hydrate method
            return;
        }

=======
     *
     * @internal
     */
    public function get(string $name): object
    {
        $metadata = $this->metadataFor($name);

        if ($metadata->isAnonymous()) {
            return new AnonymousComponent();
        }

        return $this->components->get($metadata->getName());
    }

    private function mount(object $component, array &$data, ComponentMetadata $componentMetadata): void
    {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if ($component instanceof AnonymousComponent) {
            $component->mount($data);

            return;
        }

<<<<<<< HEAD
        $parameters = [];

        foreach ($method->getParameters() as $refParameter) {
            $name = $refParameter->getName();

            if (\array_key_exists($name, $data)) {
                $parameters[] = $data[$name];

=======
        if (!$componentMetadata->getMounts()) {
            return;
        }

        $mount = $this->mountMethods[$component::class] ??= (new \ReflectionClass($component))->getMethod('mount');

        $parameters = [];
        foreach ($mount->getParameters() as $refParameter) {
            if (\array_key_exists($name = $refParameter->getName(), $data)) {
                $parameters[] = $data[$name];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                // remove the data element so it isn't used to set the property directly.
                unset($data[$name]);
            } elseif ($refParameter->isDefaultValueAvailable()) {
                $parameters[] = $refParameter->getDefaultValue();
            } else {
<<<<<<< HEAD
                throw new \LogicException(sprintf('%s::mount() has a required $%s parameter. Make sure this is passed or make give a default value.', $component::class, $refParameter->getName()));
            }
        }

        $component->mount(...$parameters);
    }

    private function getComponent(string $name): object
    {
        $name = $this->classMap[$name] ?? $name;

        if (!$this->components->has($name)) {
            if ($this->isAnonymousComponent($name)) {
                return new AnonymousComponent();
            }

            $this->throwUnknownComponentException($name);
        }

        return $this->components->get($name);
    }

    private function preMount(object $component, array $data, ComponentMetadata $componentMetadata): array
    {
        $event = new PreMountEvent($component, $data, $componentMetadata);
        $this->eventDispatcher->dispatch($event);
        $data = $event->getData();

        foreach (AsTwigComponent::preMountMethods($component) as $method) {
            $newData = $component->{$method->name}($data);

            if (null !== $newData) {
                $data = $newData;
            }
        }

        return $data;
    }

    /**
     * @return array{data: array<string, mixed>, extraMetadata: array<string, mixed>}
     */
    private function postMount(object $component, array $data, ComponentMetadata $componentMetadata): array
    {
        $event = new PostMountEvent($component, $data, $componentMetadata);
        $this->eventDispatcher->dispatch($event);
        $data = $event->getData();
        $extraMetadata = $event->getExtraMetadata();

        foreach (AsTwigComponent::postMountMethods($component) as $method) {
            $newData = $component->{$method->name}($data);

            if (null !== $newData) {
                $data = $newData;
            }
        }

        return [
            'data' => $data,
            'extraMetadata' => $extraMetadata,
        ];
    }

    private function isAnonymousComponent(string $name): bool
    {
        return null !== $this->componentTemplateFinder->findAnonymousComponentTemplate($name);
=======
                throw new \LogicException(\sprintf('"%s" has a required $%s parameter. Make sure to pass it or give it a default value.', $component::class.'::mount()', $name));
            }
        }

        $mount->invoke($component, ...$parameters);
    }

    private function preMount(object $component, array $data, ComponentMetadata $componentMetadata): PreMountEvent
    {
        $event = new PreMountEvent($component, $data, $componentMetadata);
        $this->eventDispatcher->dispatch($event);

        $data = $event->getData();
        foreach ($componentMetadata->getPreMounts() as $preMount) {
            if (null !== $newData = $component->$preMount($data)) {
                $event->setData($data = $newData);
            }
        }

        return $event;
    }

    private function postMount(object $component, array $data, ComponentMetadata $componentMetadata): PostMountEvent
    {
        $event = new PostMountEvent($component, $data, $componentMetadata);
        $this->eventDispatcher->dispatch($event);

        $data = $event->getData();
        foreach ($componentMetadata->getPostMounts() as $postMount) {
            if (null !== $newData = $component->$postMount($data)) {
                $event->setData($data = $newData);
            }
        }

        return $event;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @return never
     */
    private function throwUnknownComponentException(string $name): void
    {
<<<<<<< HEAD
        $message = sprintf('Unknown component "%s".', $name);
=======
        $message = \sprintf('Unknown component "%s".', $name);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $lowerName = strtolower($name);
        $nameLength = \strlen($lowerName);
        $alternatives = [];

        foreach (array_keys($this->config) as $type) {
            $lowerType = strtolower($type);
            $lev = levenshtein($lowerName, $lowerType);

            if ($lev <= $nameLength / 3 || str_contains($lowerType, $lowerName)) {
                $alternatives[] = $type;
            }
        }

        if ($alternatives) {
            if (1 === \count($alternatives)) {
                $message .= ' Did you mean this: "';
            } else {
                $message .= ' Did you mean one of these: "';
            }

            $message .= implode('", "', $alternatives).'"?';
        } else {
            $message .= ' And no matching anonymous component template was found.';
        }

        throw new \InvalidArgumentException($message);
    }
<<<<<<< HEAD
=======

    public function reset(): void
    {
        $this->mountMethods = [];
        $this->writableProperties = [];
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
