<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Loader\Configurator;

use Symfony\Component\Routing\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ImportConfigurator
{
    use Traits\HostTrait;
    use Traits\PrefixTrait;
    use Traits\RouteTrait;

    private RouteCollection $parent;

    public function __construct(RouteCollection $parent, RouteCollection $route)
    {
        $this->parent = $parent;
        $this->route = $route;
    }

<<<<<<< HEAD
    public function __sleep(): array
=======
    public function __serialize(): array
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        throw new \BadMethodCallException('Cannot serialize '.__CLASS__);
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function __wakeup()
=======
    public function __unserialize(array $data): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        throw new \BadMethodCallException('Cannot unserialize '.__CLASS__);
    }

    public function __destruct()
    {
        $this->parent->addCollection($this->route);
    }

    /**
     * Sets the prefix to add to the path of all child routes.
     *
     * @param string|array $prefix the prefix, or the localized prefixes
     *
     * @return $this
     */
    final public function prefix(string|array $prefix, bool $trailingSlashOnRoot = true): static
    {
        $this->addPrefix($this->route, $prefix, $trailingSlashOnRoot);

        return $this;
    }

    /**
     * Sets the prefix to add to the name of all child routes.
     *
     * @return $this
     */
    final public function namePrefix(string $namePrefix): static
    {
        $this->route->addNamePrefix($namePrefix);

        return $this;
    }

    /**
     * Sets the host to use for all child routes.
     *
     * @param string|array $host the host, or the localized hosts
     *
     * @return $this
     */
    final public function host(string|array $host): static
    {
        $this->addHost($this->route, $host);

        return $this;
    }
}
