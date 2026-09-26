<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestMatcherInterface;
use Symfony\Component\Security\Http\Firewall\ExceptionListener;
<<<<<<< HEAD
=======
use Symfony\Component\Security\Http\Firewall\FirewallListenerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Security\Http\Firewall\LogoutListener;

/**
 * FirewallMap allows configuration of different firewalls for specific parts
 * of the website.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FirewallMap implements FirewallMapInterface
{
    /**
<<<<<<< HEAD
     * @var list<array{RequestMatcherInterface, list<callable>, ExceptionListener|null, LogoutListener|null}>
=======
     * @var list<array{RequestMatcherInterface, list<callable|FirewallListenerInterface>, ExceptionListener|null, LogoutListener|null}>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    private array $map = [];

    /**
<<<<<<< HEAD
     * @param list<callable> $listeners
=======
     * @param list<callable|FirewallListenerInterface> $listeners
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return void
     */
    public function add(?RequestMatcherInterface $requestMatcher = null, array $listeners = [], ?ExceptionListener $exceptionListener = null, ?LogoutListener $logoutListener = null)
    {
        $this->map[] = [$requestMatcher, $listeners, $exceptionListener, $logoutListener];
    }

    public function getListeners(Request $request): array
    {
        foreach ($this->map as $elements) {
            if (null === $elements[0] || $elements[0]->matches($request)) {
                return [$elements[1], $elements[2], $elements[3]];
            }
        }

        return [[], null, null];
    }
}
