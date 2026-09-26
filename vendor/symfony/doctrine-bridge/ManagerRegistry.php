<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine;

use Doctrine\Persistence\AbstractManagerRegistry;
use ProxyManager\Proxy\GhostObjectInterface;
use ProxyManager\Proxy\LazyLoadingInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\VarExporter\LazyObjectInterface;

/**
 * References Doctrine connections and entity/document managers.
 *
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 */
abstract class ManagerRegistry extends AbstractManagerRegistry
{
    /**
     * @var Container
     */
    protected $container;

    protected function getService($name): object
    {
        return $this->container->get($name);
    }

    protected function resetService($name): void
    {
        if (!$this->container->initialized($name)) {
            return;
        }
        $manager = $this->container->get($name);

        if ($manager instanceof LazyObjectInterface) {
            if (!$manager->resetLazyObject()) {
<<<<<<< HEAD
                throw new \LogicException(sprintf('Resetting a non-lazy manager service is not supported. Declare the "%s" service as lazy.', $name));
=======
                throw new \LogicException(\sprintf('Resetting a non-lazy manager service is not supported. Declare the "%s" service as lazy.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            return;
        }
        if (!$manager instanceof LazyLoadingInterface) {
<<<<<<< HEAD
            throw new \LogicException(sprintf('Resetting a non-lazy manager service is not supported. Declare the "%s" service as lazy.', $name));
=======
            throw new \LogicException(\sprintf('Resetting a non-lazy manager service is not supported. Declare the "%s" service as lazy.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
        if ($manager instanceof GhostObjectInterface) {
            throw new \LogicException('Resetting a lazy-ghost-object manager service is not supported.');
        }
        $manager->setProxyInitializer(\Closure::bind(
            function (&$wrappedInstance, LazyLoadingInterface $manager) use ($name) {
                if (isset($this->aliases[$name])) {
                    $name = $this->aliases[$name];
                }
                if (isset($this->fileMap[$name])) {
                    $wrappedInstance = $this->load($this->fileMap[$name], false);
<<<<<<< HEAD
=======
                } elseif ((new \ReflectionMethod($this, $this->methodMap[$name]))->isStatic()) {
                    $wrappedInstance = $this->{$this->methodMap[$name]}($this, false);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                } else {
                    $wrappedInstance = $this->{$this->methodMap[$name]}(false);
                }

                $manager->setProxyInitializer(null);

                return true;
            },
            $this->container,
            Container::class
        ));
    }
}
