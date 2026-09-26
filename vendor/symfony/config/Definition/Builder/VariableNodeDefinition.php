<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Definition\Builder;

use Symfony\Component\Config\Definition\NodeInterface;
use Symfony\Component\Config\Definition\VariableNode;

/**
 * This class provides a fluent interface for defining a node.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class VariableNodeDefinition extends NodeDefinition
{
    /**
     * Instantiate a Node.
     */
    protected function instantiateNode(): VariableNode
    {
        return new VariableNode($this->name, $this->parent, $this->pathSeparator);
    }

    protected function createNode(): NodeInterface
    {
        $node = $this->instantiateNode();

        if (isset($this->normalization)) {
            $node->setNormalizationClosures($this->normalization->before);
        }

        if (isset($this->merge)) {
            $node->setAllowOverwrite($this->merge->allowOverwrite);
        }

<<<<<<< HEAD
        if (true === $this->default) {
=======
        if ($this->default) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $node->setDefaultValue($this->defaultValue);
        }

        $node->setAllowEmptyValue($this->allowEmptyValue);
        $node->addEquivalentValue(null, $this->nullEquivalent);
        $node->addEquivalentValue(true, $this->trueEquivalent);
        $node->addEquivalentValue(false, $this->falseEquivalent);
        $node->setRequired($this->required);

        if ($this->deprecation) {
            $node->setDeprecated($this->deprecation['package'], $this->deprecation['version'], $this->deprecation['message']);
        }

        if (isset($this->validation)) {
            $node->setFinalValidationClosures($this->validation->rules);
        }

        return $node;
    }
}
