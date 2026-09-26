<?php

declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\Repository;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\Selectable;
use Doctrine\DBAL\LockMode;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use LogicException;
use Symfony\Component\VarExporter\LazyObjectInterface;

use function sprintf;

/**
 * @internal Extend {@see ServiceEntityRepository} instead.
 *
 * @template T of object
 * @template-extends EntityRepository<T>
 */
class ServiceEntityRepositoryProxy extends EntityRepository implements ServiceEntityRepositoryInterface
{
<<<<<<< HEAD
    private ?EntityRepository $repository = null;
=======
    /** @var EntityRepository<T> */
    private EntityRepository|null $repository = null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /** @param class-string<T> $entityClass The class name of the entity this repository manages */
    public function __construct(
        private readonly ManagerRegistry $registry,
        private readonly string $entityClass,
    ) {
        if (! $this instanceof LazyObjectInterface) {
            return;
        }

        $this->repository = $this->resolveRepository();
    }

<<<<<<< HEAD
    public function createQueryBuilder(string $alias, ?string $indexBy = null): QueryBuilder
=======
    public function createQueryBuilder(string $alias, string|null $indexBy = null): QueryBuilder
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return ($this->repository ??= $this->resolveRepository())
            ->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder(string $alias): ResultSetMappingBuilder
    {
        return ($this->repository ??= $this->resolveRepository())
            ->createResultSetMappingBuilder($alias);
    }

    public function find(mixed $id, LockMode|int|null $lockMode = null, int|null $lockVersion = null): object|null
    {
        /** @psalm-suppress InvalidReturnStatement This proxy is used only in combination with newer parent class */
        return ($this->repository ??= $this->resolveRepository())
            ->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     *
     * @psalm-suppress InvalidReturnStatement This proxy is used only in combination with newer parent class
     * @psalm-suppress InvalidReturnType This proxy is used only in combination with newer parent class
     */
<<<<<<< HEAD
    public function findBy(array $criteria, ?array $orderBy = null, ?int $limit = null, ?int $offset = null): array
=======
    public function findBy(array $criteria, array|null $orderBy = null, int|null $limit = null, int|null $offset = null): array
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return ($this->repository ??= $this->resolveRepository())
            ->findBy($criteria, $orderBy, $limit, $offset);
    }

    /** {@inheritDoc} */
<<<<<<< HEAD
    public function findOneBy(array $criteria, ?array $orderBy = null): object|null
=======
    public function findOneBy(array $criteria, array|null $orderBy = null): object|null
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        /** @psalm-suppress InvalidReturnStatement This proxy is used only in combination with newer parent class */
        return ($this->repository ??= $this->resolveRepository())
            ->findOneBy($criteria, $orderBy);
    }

    /** {@inheritDoc} */
    public function count(array $criteria = []): int
    {
        return ($this->repository ??= $this->resolveRepository())->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call(string $method, array $arguments): mixed
    {
        return ($this->repository ??= $this->resolveRepository())->$method(...$arguments);
    }

    protected function getEntityName(): string
    {
        return ($this->repository ??= $this->resolveRepository())->getEntityName();
    }

    protected function getEntityManager(): EntityManagerInterface
    {
        return ($this->repository ??= $this->resolveRepository())->getEntityManager();
    }

    /** @psalm-suppress InvalidReturnType This proxy is used only in combination with newer parent class */
    protected function getClassMetadata(): ClassMetadata
    {
        /** @psalm-suppress InvalidReturnStatement This proxy is used only in combination with newer parent class */
        return ($this->repository ??= $this->resolveRepository())->getClassMetadata();
    }

<<<<<<< HEAD
=======
    /** @phpstan-return AbstractLazyCollection<int, T>&Selectable<int, T> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function matching(Criteria $criteria): AbstractLazyCollection&Selectable
    {
        return ($this->repository ??= $this->resolveRepository())->matching($criteria);
    }

<<<<<<< HEAD
=======
    /** @return EntityRepository<T> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private function resolveRepository(): EntityRepository
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

<<<<<<< HEAD
        return new EntityRepository($manager, $manager->getClassMetadata($this->entityClass));
=======
        /** @var ClassMetadata<T> $classMetadata */
        $classMetadata = $manager->getClassMetadata($this->entityClass);

        return new EntityRepository($manager, $classMetadata);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
