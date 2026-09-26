<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Finder\Comparator;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Comparator
{
    private string $target;
    private string $operator;

    public function __construct(string $target, string $operator = '==')
    {
        if (!\in_array($operator, ['>', '<', '>=', '<=', '==', '!='])) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Invalid operator "%s".', $operator));
=======
            throw new \InvalidArgumentException(\sprintf('Invalid operator "%s".', $operator));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->target = $target;
        $this->operator = $operator;
    }

    /**
     * Gets the target value.
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * Gets the comparison operator.
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * Tests against the target.
     */
    public function test(mixed $test): bool
    {
        return match ($this->operator) {
            '>' => $test > $this->target,
            '>=' => $test >= $this->target,
            '<' => $test < $this->target,
            '<=' => $test <= $this->target,
            '!=' => $test != $this->target,
            default => $test == $this->target,
        };
    }
}
