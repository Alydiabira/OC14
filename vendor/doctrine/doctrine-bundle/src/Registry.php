<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\Proxy;
use ProxyManager\Proxy\LazyLoadingInterface;
<<<<<<< HEAD
use Psr\Container\ContainerInterface;
use Symfony\Bridge\Doctrine\ManagerRegistry;
=======
use ReflectionClass;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Component\DependencyInjection\Container;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\VarExporter\LazyObjectInterface;
use Symfony\Contracts\Service\ResetInterface;

use function array_keys;
use function assert;
<<<<<<< HEAD
=======
use function method_exists;

use const PHP_VERSION_ID;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * References all Doctrine connections and entity managers in a given Container.
 */
class Registry extends ManagerRegistry implements ResetInterface
{
    /**
     * @param string[] $connections
     * @param string[] $entityManagers
     */
<<<<<<< HEAD
    public function __construct(ContainerInterface $container, array $connections, array $entityManagers, string $defaultConnection, string $defaultEntityManager)
=======
    public function __construct(Container $container, array $connections, array $entityManagers, string $defaultConnection, string $defaultEntityManager)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->container = $container;

        parent::__construct('ORM', $connections, $entityManagers, $defaultConnection, $defaultEntityManager, Proxy::class);
    }

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered entity managers.
     *
     * @see Configuration::getEntityNamespace
     *
     * @param string $alias The alias
     *
     * @return string The full namespace
     */
    public function getAliasNamespace($alias)
    {
        foreach (array_keys($this->getManagers()) as $name) {
            $objectManager = $this->getManager($name);

            if (! $objectManager instanceof EntityManagerInterface) {
                continue;
            }

            try {
<<<<<<< HEAD
                /** @psalm-suppress UndefinedMethod ORM < 3 specific */
                return $objectManager->getConfiguration()->getEntityNamespace($alias);
            } catch (ORMException $e) {
            }
        }

=======
                /** @phpstan-ignore method.notFound (ORM < 3 specific) */
                return $objectManager->getConfiguration()->getEntityNamespace($alias);
            /* @phpstan-ignore class.notFound */
            } catch (ORMException) {
            }
        }

        /* @phpstan-ignore class.notFound */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        throw ORMException::unknownEntityNamespace($alias);
    }

    public function reset(): void
    {
        foreach ($this->getManagerNames() as $managerName => $serviceId) {
            $this->resetOrClearManager($managerName, $serviceId);
        }
    }

    private function resetOrClearManager(string $managerName, string $serviceId): void
    {
        if (! $this->container->initialized($serviceId)) {
            return;
        }

        $manager = $this->container->get($serviceId);

        assert($manager instanceof EntityManagerInterface);

<<<<<<< HEAD
        if ((! $manager instanceof LazyLoadingInterface && ! $manager instanceof LazyObjectInterface) || $manager->isOpen()) {
            $manager->clear();

            return;
=======
        // Determine if the version of symfony/dependency-injection is >= 7.3
        /** @phpstan-ignore function.alreadyNarrowedType */
        $sfNativeLazyObjects = method_exists('Symfony\Component\DependencyInjection\ContainerBuilder', 'findTaggedResourceIds');

        if (PHP_VERSION_ID < 80400 || ! $sfNativeLazyObjects) {
            if ((! $manager instanceof LazyLoadingInterface && ! $manager instanceof LazyObjectInterface) || $manager->isOpen()) {
                $manager->clear();

                return;
            }
        } else {
            $r = new ReflectionClass($manager);
            if ($r->isUninitializedLazyObject($manager)) {
                return;
            }

            if ($manager->isOpen()) {
                $manager->clear();

                return;
            }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->resetManager($managerName);
    }
}
