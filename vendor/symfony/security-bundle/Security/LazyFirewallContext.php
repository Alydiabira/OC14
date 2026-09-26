<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\SecurityBundle\Security;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Http\Event\LazyResponseEvent;
use Symfony\Component\Security\Http\Firewall\ExceptionListener;
use Symfony\Component\Security\Http\Firewall\FirewallListenerInterface;
use Symfony\Component\Security\Http\Firewall\LogoutListener;

/**
 * Lazily calls authentication listeners when actually required by the access listener.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class LazyFirewallContext extends FirewallContext
{
    private TokenStorage $tokenStorage;

    public function __construct(iterable $listeners, ?ExceptionListener $exceptionListener, ?LogoutListener $logoutListener, ?FirewallConfig $config, TokenStorage $tokenStorage)
    {
        parent::__construct($listeners, $exceptionListener, $logoutListener, $config);

        $this->tokenStorage = $tokenStorage;
    }

    public function getListeners(): iterable
    {
        return [$this];
    }

    public function __invoke(RequestEvent $event): void
    {
        $listeners = [];
        $request = $event->getRequest();
<<<<<<< HEAD
        $lazy = $request->isMethodCacheable();
=======
        $lazy = true;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        foreach (parent::getListeners() as $listener) {
            if (!$lazy || !$listener instanceof FirewallListenerInterface) {
                $listeners[] = $listener;
                $lazy = $lazy && $listener instanceof FirewallListenerInterface;
            } elseif (false !== $supports = $listener->supports($request)) {
                $listeners[] = [$listener, 'authenticate'];
                $lazy = null === $supports;
            }
        }

        if (!$lazy) {
            foreach ($listeners as $listener) {
                $listener($event);

                if ($event->hasResponse()) {
                    return;
                }
            }

            return;
        }

<<<<<<< HEAD
        $this->tokenStorage->setInitializer(function () use ($event, $listeners) {
=======
        $this->tokenStorage->setInitializer(static function () use ($event, $listeners) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $event = new LazyResponseEvent($event);
            foreach ($listeners as $listener) {
                $listener($event);
            }
        });
    }
}
