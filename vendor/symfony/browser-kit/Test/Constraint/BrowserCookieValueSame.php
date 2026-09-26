<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\BrowserKit\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\BrowserKit\AbstractBrowser;

final class BrowserCookieValueSame extends Constraint
{
    private string $name;
    private string $value;
    private bool $raw;
    private string $path;
    private ?string $domain;

    public function __construct(string $name, string $value, bool $raw = false, string $path = '/', ?string $domain = null)
    {
        $this->name = $name;
        $this->path = $path;
        $this->domain = $domain;
        $this->value = $value;
        $this->raw = $raw;
    }

    public function toString(): string
    {
<<<<<<< HEAD
        $str = sprintf('has cookie "%s"', $this->name);
        if ('/' !== $this->path) {
            $str .= sprintf(' with path "%s"', $this->path);
        }
        if ($this->domain) {
            $str .= sprintf(' for domain "%s"', $this->domain);
        }
        $str .= sprintf(' with %svalue "%s"', $this->raw ? 'raw ' : '', $this->value);
=======
        $str = \sprintf('has cookie "%s"', $this->name);
        if ('/' !== $this->path) {
            $str .= \sprintf(' with path "%s"', $this->path);
        }
        if ($this->domain) {
            $str .= \sprintf(' for domain "%s"', $this->domain);
        }
        $str .= \sprintf(' with %svalue "%s"', $this->raw ? 'raw ' : '', $this->value);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $str;
    }

    /**
     * @param AbstractBrowser $browser
     */
    protected function matches($browser): bool
    {
        $cookie = $browser->getCookieJar()->get($this->name, $this->path, $this->domain);
        if (!$cookie) {
            return false;
        }

        return $this->value === ($this->raw ? $cookie->getRawValue() : $cookie->getValue());
    }

    /**
     * @param AbstractBrowser $browser
     */
    protected function failureDescription($browser): string
    {
        return 'the Browser '.$this->toString();
    }
}
