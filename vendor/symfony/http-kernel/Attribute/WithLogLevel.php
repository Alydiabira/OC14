<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Attribute;

use Psr\Log\LogLevel;

/**
 * @author Dejan Angelov <angelovdejan@protonmail.com>
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class WithLogLevel
{
    /**
     * @param LogLevel::* $level
     */
    public function __construct(public readonly string $level)
    {
        if (!\defined('Psr\Log\LogLevel::'.strtoupper($this->level))) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Invalid log level "%s".', $this->level));
=======
            throw new \InvalidArgumentException(\sprintf('Invalid log level "%s".', $this->level));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
