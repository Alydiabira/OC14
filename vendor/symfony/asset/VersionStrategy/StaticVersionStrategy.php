<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Asset\VersionStrategy;

/**
 * Returns the same version for all assets.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StaticVersionStrategy implements VersionStrategyInterface
{
    private string $version;
    private string $format;

    /**
     * @param string $version Version number
     * @param string $format  Url format
     */
    public function __construct(string $version, ?string $format = null)
    {
        $this->version = $version;
        $this->format = $format ?: '%s?%s';
    }

    public function getVersion(string $path): string
    {
        return $this->version;
    }

    public function applyVersion(string $path): string
    {
<<<<<<< HEAD
        $versionized = sprintf($this->format, ltrim($path, '/'), $this->getVersion($path));
=======
        $versionized = \sprintf($this->format, ltrim($path, '/'), $this->getVersion($path));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if ($path && '/' === $path[0]) {
            return '/'.$versionized;
        }

        return $versionized;
    }
}
