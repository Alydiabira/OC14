<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\LazyProxy\PhpDumper;

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\VarExporter\Exception\LogicException;
use Symfony\Component\VarExporter\ProxyHelper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class LazyServiceDumper implements DumperInterface
{
    public function __construct(
        private string $salt = '',
    ) {
    }

    public function isProxyCandidate(Definition $definition, ?bool &$asGhostObject = null, ?string $id = null): bool
    {
        $asGhostObject = false;

        if ($definition->hasTag('proxy')) {
            if (!$definition->isLazy()) {
<<<<<<< HEAD
                throw new InvalidArgumentException(sprintf('Invalid definition for service "%s": setting the "proxy" tag on a service requires it to be "lazy".', $id ?? $definition->getClass()));
=======
                throw new InvalidArgumentException(\sprintf('Invalid definition for service "%s": setting the "proxy" tag on a service requires it to be "lazy".', $id ?? $definition->getClass()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            return true;
        }

        if (!$definition->isLazy()) {
            return false;
        }

        if (!($class = $definition->getClass()) || !(class_exists($class) || interface_exists($class, false))) {
            return false;
        }

        if ($definition->getFactory()) {
            return true;
        }

        foreach ($definition->getMethodCalls() as $call) {
            if ($call[2] ?? false) {
                return true;
            }
        }

        try {
            $asGhostObject = (bool) ProxyHelper::generateLazyGhost(new \ReflectionClass($class));
        } catch (LogicException) {
        }

        return true;
    }

    public function getProxyFactoryCode(Definition $definition, string $id, string $factoryCode): string
    {
        $instantiation = 'return';

        if ($definition->isShared()) {
<<<<<<< HEAD
            $instantiation .= sprintf(' $container->%s[%s] =', $definition->isPublic() && !$definition->isPrivate() ? 'services' : 'privates', var_export($id, true));
=======
            $instantiation .= \sprintf(' $container->%s[%s] =', $definition->isPublic() && !$definition->isPrivate() ? 'services' : 'privates', var_export($id, true));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $asGhostObject = str_contains($factoryCode, '$proxy');
        $proxyClass = $this->getProxyClass($definition, $asGhostObject);

        if (!$asGhostObject) {
            return <<<EOF
<<<<<<< HEAD
                    if (true === \$lazyLoad) {
                        $instantiation \$container->createProxy('$proxyClass', static fn () => \\$proxyClass::createLazyProxy(static fn () => $factoryCode));
=======
                        if (true === \$lazyLoad) {
                            $instantiation \$container->createProxy('$proxyClass', static fn () => \\$proxyClass::createLazyProxy(static fn () => $factoryCode));
                        }


                EOF;
        }

        $factoryCode = \sprintf('static fn ($proxy) => %s', $factoryCode);

        return <<<EOF
                    if (true === \$lazyLoad) {
                        $instantiation \$container->createProxy('$proxyClass', static fn () => \\$proxyClass::createLazyGhost($factoryCode));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    }


            EOF;
<<<<<<< HEAD
        }

        $factoryCode = sprintf('static fn ($proxy) => %s', $factoryCode);

        return <<<EOF
                if (true === \$lazyLoad) {
                    $instantiation \$container->createProxy('$proxyClass', static fn () => \\$proxyClass::createLazyGhost($factoryCode));
                }


        EOF;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getProxyCode(Definition $definition, ?string $id = null): string
    {
        if (!$this->isProxyCandidate($definition, $asGhostObject, $id)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('Cannot instantiate lazy proxy for service "%s".', $id ?? $definition->getClass()));
=======
            throw new InvalidArgumentException(\sprintf('Cannot instantiate lazy proxy for service "%s".', $id ?? $definition->getClass()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
        $proxyClass = $this->getProxyClass($definition, $asGhostObject, $class);

        if ($asGhostObject) {
            try {
                return (\PHP_VERSION_ID >= 80200 && $class?->isReadOnly() ? 'readonly ' : '').'class '.$proxyClass.ProxyHelper::generateLazyGhost($class);
            } catch (LogicException $e) {
<<<<<<< HEAD
                throw new InvalidArgumentException(sprintf('Cannot generate lazy ghost for service "%s".', $id ?? $definition->getClass()), 0, $e);
=======
                throw new InvalidArgumentException(\sprintf('Cannot generate lazy ghost for service "%s".', $id ?? $definition->getClass()), 0, $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }
        $interfaces = [];

        if ($definition->hasTag('proxy')) {
<<<<<<< HEAD
            foreach ($definition->getTag('proxy') as $tag) {
                if (!isset($tag['interface'])) {
                    throw new InvalidArgumentException(sprintf('Invalid definition for service "%s": the "interface" attribute is missing on a "proxy" tag.', $id ?? $definition->getClass()));
                }
                if (!interface_exists($tag['interface']) && !class_exists($tag['interface'], false)) {
                    throw new InvalidArgumentException(sprintf('Invalid definition for service "%s": several "proxy" tags found but "%s" is not an interface.', $id ?? $definition->getClass(), $tag['interface']));
                }
                if ('object' !== $definition->getClass() && !is_a($class->name, $tag['interface'], true)) {
                    throw new InvalidArgumentException(sprintf('Invalid "proxy" tag for service "%s": class "%s" doesn\'t implement "%s".', $id ?? $definition->getClass(), $definition->getClass(), $tag['interface']));
=======
            $tags = $definition->getTag('proxy');

            foreach ($tags as $tag) {
                if (!isset($tag['interface'])) {
                    throw new InvalidArgumentException(\sprintf('Invalid definition for service "%s": the "interface" attribute is missing on a "proxy" tag.', $id ?? $definition->getClass()));
                }
                if (!interface_exists($tag['interface'])) {
                    if (!class_exists($tag['interface'], false)) {
                        throw new InvalidArgumentException(\sprintf('Invalid "proxy" tag for service "%s": "%s" is neither a class nor an interface.', $id ?? $definition->getClass(), $tag['interface']));
                    }
                    if (1 < \count($tags)) {
                        throw new InvalidArgumentException(\sprintf('Invalid "proxy" tag for service "%s": several "proxy" tags found but "%s" is not an interface.', $id ?? $definition->getClass(), $tag['interface']));
                    }
                }
                if ('object' !== $definition->getClass() && !is_a($class->name, $tag['interface'], true)) {
                    throw new InvalidArgumentException(\sprintf('Invalid "proxy" tag for service "%s": class "%s" doesn\'t implement "%s".', $id ?? $definition->getClass(), $definition->getClass(), $tag['interface']));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
                $interfaces[] = new \ReflectionClass($tag['interface']);
            }

            $class = 1 === \count($interfaces) && !$interfaces[0]->isInterface() ? array_pop($interfaces) : null;
        } elseif ($class->isInterface()) {
            $interfaces = [$class];
            $class = null;
        }

        try {
            return (\PHP_VERSION_ID >= 80200 && $class?->isReadOnly() ? 'readonly ' : '').'class '.$proxyClass.ProxyHelper::generateLazyProxy($class, $interfaces);
        } catch (LogicException $e) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('Cannot generate lazy proxy for service "%s".', $id ?? $definition->getClass()), 0, $e);
=======
            throw new InvalidArgumentException(\sprintf('Cannot generate lazy proxy for service "%s".', $id ?? $definition->getClass()), 0, $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function getProxyClass(Definition $definition, bool $asGhostObject, ?\ReflectionClass &$class = null): string
    {
        $class = 'object' !== $definition->getClass() ? $definition->getClass() : 'stdClass';
        $class = new \ReflectionClass($class);

        return preg_replace('/^.*\\\\/', '', $definition->getClass())
            .($asGhostObject ? 'Ghost' : 'Proxy')
            .ucfirst(substr(hash('sha256', $this->salt.'+'.$class->name.'+'.serialize($definition->getTag('proxy'))), -7));
    }
}
