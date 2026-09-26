<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Security\Model;

/**
 * @author Jesse Rushlow<jr@rushlow.dev>
 *
 * @internal
 */
<<<<<<< HEAD
final class Authenticator
=======
final class Authenticator implements \Stringable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    public function __construct(
        public AuthenticatorType $type,
        public string $firewallName,
        public ?string $authenticatorClass = null,
    ) {
    }

    /**
     * Useful for asking questions like "Which authenticator do you want to use?".
     */
    public function __toString(): string
    {
<<<<<<< HEAD
        return sprintf(
=======
        return \sprintf(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            '"%s" in the "%s" firewall',
            $this->authenticatorClass ?? $this->type->value,
            $this->firewallName,
        );
    }
}
