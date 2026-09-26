<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\IpTraceable;

use Doctrine\Persistence\Mapping\ClassMetadata;
use Gedmo\AbstractTrackingListener;
use Gedmo\Exception\InvalidArgumentException;
<<<<<<< HEAD
use Gedmo\Mapping\Event\AdapterInterface;
=======
use Gedmo\IpTraceable\Mapping\Event\IpTraceableAdapter;
use Gedmo\Tool\IpAddressProviderInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * The IpTraceable listener handles the update of
 * IPs on creation and update.
 *
<<<<<<< HEAD
=======
 * @phpstan-extends AbstractTrackingListener<array, IpTraceableAdapter>
 *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Pierre-Charles Bertineau <pc.bertineau@alterphp.com>
 *
 * @final since gedmo/doctrine-extensions 3.11
 */
class IpTraceableListener extends AbstractTrackingListener
{
<<<<<<< HEAD
=======
    protected ?IpAddressProviderInterface $ipAddressProvider = null;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * @var string|null
     */
    protected $ip;

    /**
<<<<<<< HEAD
     * Get the ipValue value to set on a ip field
     *
     * @param ClassMetadata    $meta
     * @param string           $field
     * @param AdapterInterface $eventAdapter
=======
     * Get the IP address value to set on an IP address field
     *
     * @param ClassMetadata<object> $meta
     * @param string                $field
     * @param IpTraceableAdapter    $eventAdapter
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return string|null
     */
    public function getFieldValue($meta, $field, $eventAdapter)
    {
<<<<<<< HEAD
=======
        if ($this->ipAddressProvider instanceof IpAddressProviderInterface) {
            return $this->ipAddressProvider->getAddress();
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return $this->ip;
    }

    /**
<<<<<<< HEAD
     * Set a ip value to return
=======
     * Set an IP address provider for the IP address value.
     */
    public function setIpAddressProvider(IpAddressProviderInterface $ipAddressProvider): void
    {
        $this->ipAddressProvider = $ipAddressProvider;
    }

    /**
     * Set an IP address value to return.
     *
     * If an IP address provider is also provided, it will take precedence over this value.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @param string|null $ip
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public function setIpValue($ip = null)
    {
        if (isset($ip) && false === filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new InvalidArgumentException("ip address is not valid $ip");
        }

        $this->ip = $ip;
    }

    protected function getNamespace()
    {
        return __NAMESPACE__;
    }
}
