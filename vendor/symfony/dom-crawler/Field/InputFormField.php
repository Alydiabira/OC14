<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DomCrawler\Field;

/**
 * InputFormField represents an input form field (an HTML input tag).
 *
 * For inputs with type of file, checkbox, or radio, there are other more
 * specialized classes (cf. FileFormField and ChoiceFormField).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputFormField extends FormField
{
    /**
     * Initializes the form field.
     *
     * @return void
     *
     * @throws \LogicException When node type is incorrect
     */
    protected function initialize()
    {
        if ('input' !== $this->node->nodeName && 'button' !== $this->node->nodeName) {
<<<<<<< HEAD
            throw new \LogicException(sprintf('An InputFormField can only be created from an input or button tag (%s given).', $this->node->nodeName));
=======
            throw new \LogicException(\sprintf('An InputFormField can only be created from an input or button tag (%s given).', $this->node->nodeName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $type = strtolower($this->node->getAttribute('type'));
        if ('checkbox' === $type) {
            throw new \LogicException('Checkboxes should be instances of ChoiceFormField.');
        }

        if ('file' === $type) {
            throw new \LogicException('File inputs should be instances of FileFormField.');
        }

        $this->value = $this->node->getAttribute('value');
    }
}
