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

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
final class FirewallConfig
{
    public function __construct(
        private readonly string $name,
        private readonly string $userChecker,
        private readonly ?string $requestMatcher = null,
        private readonly bool $securityEnabled = true,
        private readonly bool $stateless = false,
        private readonly ?string $provider = null,
        private readonly ?string $context = null,
        private readonly ?string $entryPoint = null,
        private readonly ?string $accessDeniedHandler = null,
        private readonly ?string $accessDeniedUrl = null,
        private readonly array $authenticators = [],
        private readonly ?array $switchUser = null,
<<<<<<< HEAD
        private readonly ?array $logout = null
=======
        private readonly ?array $logout = null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null The request matcher service id or null if neither the request matcher, pattern or host
     *                     options were provided
     */
    public function getRequestMatcher(): ?string
    {
        return $this->requestMatcher;
    }

    public function isSecurityEnabled(): bool
    {
        return $this->securityEnabled;
    }

    public function isStateless(): bool
    {
        return $this->stateless;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * @return string|null The context key (will be null if the firewall is stateless)
     */
    public function getContext(): ?string
    {
        return $this->context;
    }

    public function getEntryPoint(): ?string
    {
        return $this->entryPoint;
    }

    public function getUserChecker(): string
    {
        return $this->userChecker;
    }

    public function getAccessDeniedHandler(): ?string
    {
        return $this->accessDeniedHandler;
    }

    public function getAccessDeniedUrl(): ?string
    {
        return $this->accessDeniedUrl;
    }

    public function getAuthenticators(): array
    {
        return $this->authenticators;
    }

    public function getSwitchUser(): ?array
    {
        return $this->switchUser;
    }

    public function getLogout(): ?array
    {
        return $this->logout;
    }
}
