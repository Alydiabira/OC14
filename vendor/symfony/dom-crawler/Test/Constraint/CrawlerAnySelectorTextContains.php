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

final class CrawlerAnySelectorTextContains extends Constraint
{
    private string $selector;
    private string $expectedText;
    private bool $hasNode = false;

    public function __construct(string $selector, string $expectedText)
    {
        $this->selector = $selector;
        $this->expectedText = $expectedText;
    }

    public function toString(): string
    {
        if ($this->hasNode) {
<<<<<<< HEAD
            return sprintf('the text of any node matching selector "%s" contains "%s"', $this->selector, $this->expectedText);
        }

        return sprintf('the Crawler has a node matching selector "%s"', $this->selector);
=======
            return \sprintf('the text of any node matching selector "%s" contains "%s"', $this->selector, $this->expectedText);
        }

        return \sprintf('the Crawler has a node matching selector "%s"', $this->selector);
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
            $this->hasNode = false;

            return false;
        }

        $this->hasNode = true;

<<<<<<< HEAD
        $nodes = $other->each(fn (Crawler $node) => $node->text(null, true));
        $matches = array_filter($nodes, function (string $node): bool {
            return str_contains($node, $this->expectedText);
        });
=======
        $nodes = $other->each(static fn (Crawler $node) => $node->text(null, true));
        $matches = array_filter($nodes, fn (string $node): bool => str_contains($node, $this->expectedText));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return 0 < \count($matches);
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

        return $this->toString();
    }
}
