<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\WebLink;

use Psr\Link\LinkInterface;

/**
 * Serializes a list of Link instances to an HTTP Link header.
 *
 * @see https://tools.ietf.org/html/rfc5988
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
final class HttpHeaderSerializer
{
    /**
     * Builds the value of the "Link" HTTP header.
     *
     * @param LinkInterface[]|\Traversable $links
     */
    public function serialize(iterable $links): ?string
    {
        $elements = [];
        foreach ($links as $link) {
            if ($link->isTemplated()) {
                continue;
            }

<<<<<<< HEAD
            $attributesParts = ['', sprintf('rel="%s"', implode(' ', $link->getRels()))];
            foreach ($link->getAttributes() as $key => $value) {
                if (\is_array($value)) {
                    foreach ($value as $v) {
                        $attributesParts[] = sprintf('%s="%s"', $key, preg_replace('/(?<!\\\\)"/', '\"', $v));
=======
            $attributesParts = ['', \sprintf('rel="%s"', implode(' ', $link->getRels()))];
            foreach ($link->getAttributes() as $key => $value) {
                if (\is_array($value)) {
                    foreach ($value as $v) {
                        $attributesParts[] = \sprintf('%s="%s"', $key, preg_replace('/(?<!\\\\)"/', '\"', $v));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    }

                    continue;
                }

                if (!\is_bool($value)) {
<<<<<<< HEAD
                    $attributesParts[] = sprintf('%s="%s"', $key, preg_replace('/(?<!\\\\)"/', '\"', $value));
=======
                    $attributesParts[] = \sprintf('%s="%s"', $key, preg_replace('/(?<!\\\\)"/', '\"', $value));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                    continue;
                }

                if (true === $value) {
                    $attributesParts[] = $key;
                }
            }

<<<<<<< HEAD
            $elements[] = sprintf('<%s>%s', $link->getHref(), implode('; ', $attributesParts));
=======
            $elements[] = \sprintf('<%s>%s', $link->getHref(), implode('; ', $attributesParts));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $elements ? implode(',', $elements) : null;
    }
}
