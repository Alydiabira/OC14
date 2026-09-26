<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DomCrawler;

/**
 * Link represents an HTML link (an HTML a, area or link tag).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Link extends AbstractUriElement
{
    protected function getRawUri(): string
    {
        return $this->node->getAttribute('href');
    }

    /**
     * @return void
     */
    protected function setNode(\DOMElement $node)
    {
        if ('a' !== $node->nodeName && 'area' !== $node->nodeName && 'link' !== $node->nodeName) {
<<<<<<< HEAD
            throw new \LogicException(sprintf('Unable to navigate from a "%s" tag.', $node->nodeName));
=======
            throw new \LogicException(\sprintf('Unable to navigate from a "%s" tag.', $node->nodeName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->node = $node;
    }
}
