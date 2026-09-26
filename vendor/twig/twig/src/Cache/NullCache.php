<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Cache;

/**
 * Implements a no-cache strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
<<<<<<< HEAD
final class NullCache implements CacheInterface
=======
final class NullCache implements CacheInterface, RemovableCacheInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    public function generateKey(string $name, string $className): string
    {
        return '';
    }

    public function write(string $key, string $content): void
    {
    }

    public function load(string $key): void
    {
    }

    public function getTimestamp(string $key): int
    {
        return 0;
    }
<<<<<<< HEAD
=======

    public function remove(string $name, string $cls): void
    {
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
