<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\RuntimeLoader;

use Psr\Container\ContainerInterface;

/**
 * Lazily loads Twig runtime implementations from a PSR-11 container.
 *
 * Note that the runtime services MUST use their class names as identifiers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class ContainerRuntimeLoader implements RuntimeLoaderInterface
{
<<<<<<< HEAD
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
=======
    public function __construct(
        private ContainerInterface $container,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function load(string $class)
    {
        return $this->container->has($class) ? $this->container->get($class) : null;
    }
}
