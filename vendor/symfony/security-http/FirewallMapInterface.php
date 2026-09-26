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
use Symfony\Component\Security\Http\Firewall\ExceptionListener;
<<<<<<< HEAD
=======
use Symfony\Component\Security\Http\Firewall\FirewallListenerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Security\Http\Firewall\LogoutListener;

/**
 * This interface must be implemented by firewall maps.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface FirewallMapInterface
{
    /**
     * Returns the authentication listeners, and the exception listener to use
     * for the given request.
     *
     * If there are no authentication listeners, the first inner array must be
     * empty.
     *
     * If there is no exception listener, the second element of the outer array
     * must be null.
     *
     * If there is no logout listener, the third element of the outer array
     * must be null.
     *
<<<<<<< HEAD
     * @return array{iterable<mixed, callable>, ExceptionListener, LogoutListener}
=======
     * @return array{iterable<mixed, callable|FirewallListenerInterface>, ExceptionListener, LogoutListener}
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getListeners(Request $request);
}
