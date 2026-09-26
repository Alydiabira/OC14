<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\CacheWarmer;

/**
 * Abstract cache warmer that knows how to write a file to the cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class CacheWarmer implements CacheWarmerInterface
{
    /**
     * @return void
     */
    protected function writeCacheFile(string $file, $content)
    {
        $tmpFile = @tempnam(\dirname($file), basename($file));
        if (false !== @file_put_contents($tmpFile, $content) && @rename($tmpFile, $file)) {
<<<<<<< HEAD
            @chmod($file, 0666 & ~umask());
=======
            @chmod($file, 0o666 & ~umask());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return;
        }

<<<<<<< HEAD
        throw new \RuntimeException(sprintf('Failed to write cache file "%s".', $file));
=======
        throw new \RuntimeException(\sprintf('Failed to write cache file "%s".', $file));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
