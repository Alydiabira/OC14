<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ChildDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
<<<<<<< HEAD
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;
=======
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;
use Symfony\Component\Lock\LockFactory;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Lock\LockInterface;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use Symfony\Component\RateLimiter\Storage\CacheStorage;
use Symfony\Component\Security\Http\RateLimiter\DefaultLoginRateLimiter;

/**
 * @author Wouter de Jong <wouter@wouterj.nl>
 *
 * @internal
 */
class LoginThrottlingFactory implements AuthenticatorFactoryInterface
{
    public function getPriority(): int
    {
        // this factory doesn't register any authenticators, this priority doesn't matter
        return 0;
    }

    public function getKey(): string
    {
        return 'login_throttling';
    }

    /**
     * @param ArrayNodeDefinition $builder
     */
    public function addConfiguration(NodeDefinition $builder): void
    {
        $builder
            ->children()
<<<<<<< HEAD
                ->scalarNode('limiter')->info(sprintf('A service id implementing "%s".', RequestRateLimiterInterface::class))->end()
                ->integerNode('max_attempts')->defaultValue(5)->end()
                ->scalarNode('interval')->defaultValue('1 minute')->end()
                ->scalarNode('lock_factory')->info('The service ID of the lock factory used by the login rate limiter (or null to disable locking)')->defaultNull()->end()
=======
                ->scalarNode('limiter')->info(\sprintf('A service id implementing "%s".', RequestRateLimiterInterface::class))->end()
                ->integerNode('max_attempts')->defaultValue(5)->end()
                ->scalarNode('interval')->defaultValue('1 minute')->end()
                ->scalarNode('lock_factory')->info('The service ID of the lock factory used by the login rate limiter ("auto" to use the default one when the Lock component is configured, or null to disable locking)')->defaultValue('auto')->end()
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->end();
    }

    public function createAuthenticator(ContainerBuilder $container, string $firewallName, array $config, string $userProviderId): array
    {
        if (!class_exists(RateLimiterFactory::class)) {
            throw new \LogicException('Login throttling requires the Rate Limiter component. Try running "composer require symfony/rate-limiter".');
        }

        if (!isset($config['limiter'])) {
            $limiterOptions = [
                'policy' => 'fixed_window',
                'limit' => $config['max_attempts'],
                'interval' => $config['interval'],
<<<<<<< HEAD
                'lock_factory' => $config['lock_factory'],
=======
                'lock_factory' => 'auto' === $config['lock_factory'] ? null : $config['lock_factory'],
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ];
            $this->registerRateLimiter($container, $localId = '_login_local_'.$firewallName, $limiterOptions);

            $limiterOptions['limit'] = 5 * $config['max_attempts'];
            $this->registerRateLimiter($container, $globalId = '_login_global_'.$firewallName, $limiterOptions);

<<<<<<< HEAD
=======
            if ('auto' === $config['lock_factory'] && class_exists(LockFactory::class)) {
                // resolved when the container is compiled, so that the order in which extensions are loaded does not matter
                $lockFactory = new Reference('lock.factory', ContainerInterface::NULL_ON_INVALID_REFERENCE);
                $container->getDefinition('limiter.'.$localId)->replaceArgument(2, $lockFactory);
                $container->getDefinition('limiter.'.$globalId)->replaceArgument(2, $lockFactory);
            }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $container->register($config['limiter'] = 'security.login_throttling.'.$firewallName.'.limiter', DefaultLoginRateLimiter::class)
                ->addArgument(new Reference('limiter.'.$globalId))
                ->addArgument(new Reference('limiter.'.$localId))
                ->addArgument('%kernel.secret%')
            ;
        }

        $container
            ->setDefinition('security.listener.login_throttling.'.$firewallName, new ChildDefinition('security.listener.login_throttling'))
            ->replaceArgument(1, new Reference($config['limiter']))
            ->addTag('kernel.event_subscriber', ['dispatcher' => 'security.event_dispatcher.'.$firewallName]);

        return [];
    }

    private function registerRateLimiter(ContainerBuilder $container, string $name, array $limiterConfig): void
    {
        // default configuration (when used by other DI extensions)
        $limiterConfig += ['lock_factory' => 'lock.factory', 'cache_pool' => 'cache.rate_limiter'];

        $limiter = $container->setDefinition($limiterId = 'limiter.'.$name, new ChildDefinition('limiter'));

        if (null !== $limiterConfig['lock_factory']) {
            if (!interface_exists(LockInterface::class)) {
<<<<<<< HEAD
                throw new LogicException(sprintf('Rate limiter "%s" requires the Lock component to be installed. Try running "composer require symfony/lock".', $name));
=======
                throw new LogicException(\sprintf('Rate limiter "%s" requires the Lock component to be installed. Try running "composer require symfony/lock".', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            $limiter->replaceArgument(2, new Reference($limiterConfig['lock_factory']));
        }
        unset($limiterConfig['lock_factory']);

        if (null === $storageId = $limiterConfig['storage_service'] ?? null) {
            $container->register($storageId = 'limiter.storage.'.$name, CacheStorage::class)->addArgument(new Reference($limiterConfig['cache_pool']));
        }

        $limiter->replaceArgument(1, new Reference($storageId));
        unset($limiterConfig['storage_service'], $limiterConfig['cache_pool']);

        $limiterConfig['id'] = $name;
        $limiter->replaceArgument(0, $limiterConfig);

        $container->registerAliasForArgument($limiterId, RateLimiterFactory::class, $name.'.limiter');
    }
}
