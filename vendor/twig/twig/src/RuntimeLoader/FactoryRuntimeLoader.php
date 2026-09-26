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

/**
 * Lazy loads the runtime implementations for a Twig element.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class FactoryRuntimeLoader implements RuntimeLoaderInterface
{
<<<<<<< HEAD
    private $map;

    /**
     * @param array $map An array where keys are class names and values factory callables
     */
    public function __construct(array $map = [])
    {
        $this->map = $map;
=======
    /**
     * @param array $map An array where keys are class names and values factory callables
     */
    public function __construct(
        private array $map = [],
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function load(string $class)
    {
        if (!isset($this->map[$class])) {
            return null;
        }

        $runtimeFactory = $this->map[$class];

        return $runtimeFactory();
    }
}
