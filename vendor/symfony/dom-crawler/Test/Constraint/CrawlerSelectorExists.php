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

final class CrawlerSelectorExists extends Constraint
{
    private string $selector;

    public function __construct(string $selector)
    {
        $this->selector = $selector;
    }

    public function toString(): string
    {
<<<<<<< HEAD
        return sprintf('matches selector "%s"', $this->selector);
=======
        return \sprintf('matches selector "%s"', $this->selector);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @param Crawler $crawler
     */
    protected function matches($crawler): bool
    {
        return 0 < \count($crawler->filter($this->selector));
    }

    /**
     * @param Crawler $crawler
     */
    protected function failureDescription($crawler): string
    {
        return 'the Crawler '.$this->toString();
    }
}
