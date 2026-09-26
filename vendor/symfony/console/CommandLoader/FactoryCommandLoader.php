<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\CommandLoader;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\CommandNotFoundException;

/**
 * A simple command loader using factories to instantiate commands lazily.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class FactoryCommandLoader implements CommandLoaderInterface
{
    private array $factories;

    /**
     * @param callable[] $factories Indexed by command names
     */
    public function __construct(array $factories)
    {
        $this->factories = $factories;
    }

    public function has(string $name): bool
    {
        return isset($this->factories[$name]);
    }

    public function get(string $name): Command
    {
        if (!isset($this->factories[$name])) {
<<<<<<< HEAD
            throw new CommandNotFoundException(sprintf('Command "%s" does not exist.', $name));
=======
            throw new CommandNotFoundException(\sprintf('Command "%s" does not exist.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $factory = $this->factories[$name];

        return $factory();
    }

    public function getNames(): array
    {
        return array_keys($this->factories);
    }
}
