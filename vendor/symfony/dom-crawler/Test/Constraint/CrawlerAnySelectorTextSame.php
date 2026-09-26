<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DomCrawler\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\DomCrawler\Crawler;

final class CrawlerAnySelectorTextSame extends Constraint
{
    private string $selector;
    private string $expectedText;

    public function __construct(string $selector, string $expectedText)
    {
        $this->selector = $selector;
        $this->expectedText = $expectedText;
    }

    public function toString(): string
    {
<<<<<<< HEAD
        return sprintf('has at least a node matching selector "%s" with content "%s"', $this->selector, $this->expectedText);
=======
        return \sprintf('has at least a node matching selector "%s" with content "%s"', $this->selector, $this->expectedText);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    protected function matches($other): bool
    {
        if (!$other instanceof Crawler) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('"%s" constraint expected an argument of type "%s", got "%s".', self::class, Crawler::class, get_debug_type($other)));
=======
            throw new \InvalidArgumentException(\sprintf('"%s" constraint expected an argument of type "%s", got "%s".', self::class, Crawler::class, get_debug_type($other)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $other = $other->filter($this->selector);
        if (!\count($other)) {
            return false;
        }

<<<<<<< HEAD
        $nodes = $other->each(fn (Crawler $node) => trim($node->text(null, true)));
=======
        $nodes = $other->each(static fn (Crawler $node) => trim($node->text(null, true)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return \in_array($this->expectedText, $nodes, true);
    }

    protected function failureDescription($other): string
    {
        if (!$other instanceof Crawler) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('"%s" constraint expected an argument of type "%s", got "%s".', self::class, Crawler::class, get_debug_type($other)));
=======
            throw new \InvalidArgumentException(\sprintf('"%s" constraint expected an argument of type "%s", got "%s".', self::class, Crawler::class, get_debug_type($other)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return 'the Crawler '.$this->toString();
    }
}
