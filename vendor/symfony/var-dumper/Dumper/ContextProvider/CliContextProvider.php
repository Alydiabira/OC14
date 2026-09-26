<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Dumper\ContextProvider;

/**
 * Tries to provide context on CLI.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class CliContextProvider implements ContextProviderInterface
{
    public function getContext(): ?array
    {
        if ('cli' !== \PHP_SAPI) {
            return null;
        }

        return [
            'command_line' => $commandLine = implode(' ', $_SERVER['argv'] ?? []),
<<<<<<< HEAD
            'identifier' => hash('crc32b', $commandLine.$_SERVER['REQUEST_TIME_FLOAT']),
=======
            'identifier' => hash('xxh128', $commandLine.'@'.$_SERVER['REQUEST_TIME_FLOAT']),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ];
    }
}
