<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class RemoveBuildParametersPass implements CompilerPassInterface
{
    /**
     * @var array<string, mixed>
     */
    private array $removedParameters = [];

<<<<<<< HEAD
=======
    public function __construct(
        private bool $preserveArrays = false,
    ) {
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * @return void
     */
    public function process(ContainerBuilder $container)
    {
        $parameterBag = $container->getParameterBag();
        $this->removedParameters = [];

        foreach ($parameterBag->all() as $name => $value) {
<<<<<<< HEAD
            if ('.' === ($name[0] ?? '')) {
                $this->removedParameters[$name] = $value;

                $parameterBag->remove($name);
                $container->log($this, sprintf('Removing build parameter "%s".', $name));
=======
            if ('.' !== ($name[0] ?? '')) {
                continue;
            }
            if (!$this->preserveArrays || !\is_array($value)) {
                $this->removedParameters[$name] = $value;
                $parameterBag->remove($name);
                $container->log($this, \sprintf('Removing build parameter "%s".', $name));
            } else {
                $container->log($this, \sprintf('Keeping array build parameter "%s" for placeholder resolution.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }
    }

    /**
     * @return array<string, mixed>
     */
    public function getRemovedParameters(): array
    {
        return $this->removedParameters;
    }
}
