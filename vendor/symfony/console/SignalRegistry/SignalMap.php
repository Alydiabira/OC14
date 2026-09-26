<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\SignalRegistry;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class SignalMap
{
    private static array $map;

    public static function getSignalName(int $signal): ?string
    {
        if (!\extension_loaded('pcntl')) {
            return null;
        }

        if (!isset(self::$map)) {
            $r = new \ReflectionExtension('pcntl');
            $c = $r->getConstants();
<<<<<<< HEAD
            $map = array_filter($c, fn ($k) => str_starts_with($k, 'SIG') && !str_starts_with($k, 'SIG_'), \ARRAY_FILTER_USE_KEY);
=======
            $map = array_filter($c, static fn ($k) => str_starts_with($k, 'SIG') && !str_starts_with($k, 'SIG_') && 'SIGBABY' !== $k, \ARRAY_FILTER_USE_KEY);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            self::$map = array_flip($map);
        }

        return self::$map[$signal] ?? null;
    }
}
