<?php

<<<<<<< HEAD
namespace Doctrine\Bundle\DoctrineBundle\Repository;

=======
declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\Repository;

use Doctrine\ORM\EntityManagerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use LogicException;
use Symfony\Component\VarExporter\LazyObjectInterface;

use function debug_backtrace;
use function sprintf;

use const DEBUG_BACKTRACE_IGNORE_ARGS;

/**
 * @internal Extend {@see ServiceEntityRepository} instead.
 *
 * @template T of object
 * @template-extends EntityRepository<T>
 */
class LazyServiceEntityRepository extends EntityRepository implements ServiceEntityRepositoryInterface
{
<<<<<<< HEAD
    private ManagerRegistry $registry;
    private string $entityClass;

    /**
     * @param string $entityClass The class name of the entity this repository manages
     * @psalm-param class-string<T> $entityClass
     */
    public function __construct(ManagerRegistry $registry, string $entityClass)
    {
        $this->registry    = $registry;
        $this->entityClass = $entityClass;

=======
    /**
     * @param string $entityClass The class name of the entity this repository manages
     * @phpstan-param class-string<T> $entityClass
     */
    public function __construct(
        private readonly ManagerRegistry $registry,
        private readonly string $entityClass,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if ($this instanceof LazyObjectInterface) {
            $this->initialize();

            return;
        }

        unset($this->_em);
        unset($this->_class);
        unset($this->_entityName);
    }

    /** @return mixed */
    public function __get(string $name)
    {
        $this->initialize();

        $scope = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2)[1]['class'] ?? null;

<<<<<<< HEAD
        return (function () use ($name) {
            return $this->$name;
        })->bindTo($this, $scope)();
=======
        return (fn (): mixed => $this->$name)->bindTo($this, $scope)();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function __isset(string $name): bool
    {
        $this->initialize();

        $scope = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2)[1]['class'] ?? null;

<<<<<<< HEAD
        return (function () use ($name) {
            return isset($this->$name);
        })->bindTo($this, $scope)();
=======
        return (fn (): bool => isset($this->$name))->bindTo($this, $scope)();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function initialize(): void
    {
        $manager = $this->registry->getManagerForClass($this->entityClass);

<<<<<<< HEAD
        if ($manager === null) {
=======
        if (! $manager instanceof EntityManagerInterface) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            throw new LogicException(sprintf(
                'Could not find the entity manager for class "%s". Check your Doctrine configuration to make sure it is configured to load this entity’s metadata.',
                $this->entityClass,
            ));
        }

        parent::__construct($manager, $manager->getClassMetadata($this->entityClass));
    }
}
