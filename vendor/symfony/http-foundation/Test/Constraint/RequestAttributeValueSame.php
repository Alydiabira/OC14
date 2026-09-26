<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\HttpFoundation\Request;

final class RequestAttributeValueSame extends Constraint
{
    private string $name;
    private string $value;

    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function toString(): string
    {
<<<<<<< HEAD
        return sprintf('has attribute "%s" with value "%s"', $this->name, $this->value);
=======
        return \sprintf('has attribute "%s" with value "%s"', $this->name, $this->value);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @param Request $request
     */
    protected function matches($request): bool
    {
        return $this->value === $request->attributes->get($this->name);
    }

    /**
     * @param Request $request
     */
    protected function failureDescription($request): string
    {
        return 'the Request '.$this->toString();
    }
}
