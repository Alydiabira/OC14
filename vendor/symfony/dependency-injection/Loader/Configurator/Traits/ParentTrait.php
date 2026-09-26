<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

use Symfony\Component\DependencyInjection\ChildDefinition;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;

trait ParentTrait
{
    /**
     * Sets the Definition to inherit from.
     *
     * @return $this
     *
     * @throws InvalidArgumentException when parent cannot be set
     */
    final public function parent(string $parent): static
    {
        if (!$this->allowParent) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('A parent cannot be defined when either "_instanceof" or "_defaults" are also defined for service prototype "%s".', $this->id));
=======
            throw new InvalidArgumentException(\sprintf('A parent cannot be defined when either "_instanceof" or "_defaults" are also defined for service prototype "%s".', $this->id));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ($this->definition instanceof ChildDefinition) {
            $this->definition->setParent($parent);
        } else {
            // cast Definition to ChildDefinition
            $definition = serialize($this->definition);
            $definition = substr_replace($definition, '53', 2, 2);
            $definition = substr_replace($definition, 'Child', 44, 0);
<<<<<<< HEAD
            $definition = unserialize($definition);
=======
            $definition = unserialize($definition, ['allowed_classes' => true]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            $this->definition = $definition->setParent($parent);
        }

        return $this;
    }
}
