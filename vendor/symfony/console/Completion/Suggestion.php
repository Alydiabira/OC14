<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Completion;

/**
 * Represents a single suggested value.
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
class Suggestion implements \Stringable
{
    public function __construct(
        private readonly string $value,
<<<<<<< HEAD
        private readonly string $description = ''
=======
        private readonly string $description = '',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}
