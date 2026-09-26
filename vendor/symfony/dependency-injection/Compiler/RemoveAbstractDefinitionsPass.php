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

/**
 * Removes abstract Definitions.
 */
class RemoveAbstractDefinitionsPass implements CompilerPassInterface
{
    /**
     * Removes abstract definitions from the ContainerBuilder.
     *
     * @return void
     */
    public function process(ContainerBuilder $container)
    {
        foreach ($container->getDefinitions() as $id => $definition) {
            if ($definition->isAbstract()) {
<<<<<<< HEAD
                $container->removeDefinition($id);
                $container->log($this, sprintf('Removed service "%s"; reason: abstract.', $id));
=======
                $container->resolveEnvPlaceholders($definition);
                $container->removeDefinition($id);
                $container->log($this, \sprintf('Removed service "%s"; reason: abstract.', $id));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }
    }
}
