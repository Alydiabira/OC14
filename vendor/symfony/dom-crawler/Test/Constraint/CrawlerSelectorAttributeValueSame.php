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

final class CrawlerSelectorAttributeValueSame extends Constraint
{
    private string $selector;
    private string $attribute;
    private string $expectedText;

    public function __construct(string $selector, string $attribute, string $expectedText)
    {
        $this->selector = $selector;
        $this->attribute = $attribute;
        $this->expectedText = $expectedText;
    }

    public function toString(): string
    {
<<<<<<< HEAD
        return sprintf('has a node matching selector "%s" with attribute "%s" of value "%s"', $this->selector, $this->attribute, $this->expectedText);
=======
        return \sprintf('has a node matching selector "%s" with attribute "%s" of value "%s"', $this->selector, $this->attribute, $this->expectedText);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @param Crawler $crawler
     */
    protected function matches($crawler): bool
    {
        $crawler = $crawler->filter($this->selector);
        if (!\count($crawler)) {
            return false;
        }

        return $this->expectedText === trim($crawler->attr($this->attribute) ?? '');
    }

    /**
     * @param Crawler $crawler
     */
    protected function failureDescription($crawler): string
    {
        return 'the Crawler '.$this->toString();
    }
}
