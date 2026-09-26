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

use Symfony\Component\Security\Http\Firewall\ExceptionListener;
<<<<<<< HEAD
=======
use Symfony\Component\Security\Http\Firewall\FirewallListenerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Security\Http\Firewall\LogoutListener;

/**
 * This is a wrapper around the actual firewall configuration which allows us
 * to lazy load the context for one specific firewall only when we need it.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class FirewallContext
{
    private iterable $listeners;
    private ?ExceptionListener $exceptionListener;
    private ?LogoutListener $logoutListener;
    private ?FirewallConfig $config;

    /**
<<<<<<< HEAD
     * @param iterable<mixed, callable> $listeners
=======
     * @param iterable<mixed, callable|FirewallListenerInterface> $listeners
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(iterable $listeners, ?ExceptionListener $exceptionListener = null, ?LogoutListener $logoutListener = null, ?FirewallConfig $config = null)
    {
        $this->listeners = $listeners;
        $this->exceptionListener = $exceptionListener;
        $this->logoutListener = $logoutListener;
        $this->config = $config;
    }

    /**
     * @return FirewallConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
<<<<<<< HEAD
     * @return iterable<mixed, callable>
=======
     * @return iterable<mixed, callable|FirewallListenerInterface>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getListeners(): iterable
    {
        return $this->listeners;
    }

    /**
     * @return ExceptionListener|null
     */
    public function getExceptionListener()
    {
        return $this->exceptionListener;
    }

    /**
     * @return LogoutListener|null
     */
    public function getLogoutListener()
    {
        return $this->logoutListener;
    }
}
