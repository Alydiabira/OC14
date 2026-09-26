<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Header;

use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Exception\RfcComplianceException;

/**
 * A Path Header, such a Return-Path (one address).
 *
 * @author Chris Corbyn
 */
final class PathHeader extends AbstractHeader
{
    private Address $address;

    public function __construct(string $name, Address $address)
    {
        parent::__construct($name);

        $this->setAddress($address);
    }

    /**
     * @param Address $body
     *
     * @throws RfcComplianceException
     */
    public function setBody(mixed $body): void
    {
        $this->setAddress($body);
    }

    public function getBody(): Address
    {
        return $this->getAddress();
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getBodyAsString(): string
    {
<<<<<<< HEAD
        return '<'.$this->address->toString().'>';
=======
        return '<'.$this->address->getEncodedAddress().'>';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
