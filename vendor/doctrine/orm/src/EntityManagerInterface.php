<?php

declare(strict_types=1);

namespace Doctrine\ORM;

use DateTimeInterface;
<<<<<<< HEAD
use Doctrine\Common\EventManager;
=======
use Doctrine\Common\EventManagerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\LockMode;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\Internal\Hydration\AbstractHydrator;
use Doctrine\ORM\Mapping\ClassMetadataFactory;
use Doctrine\ORM\Proxy\ProxyFactory;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\Query\FilterCollection;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Persistence\ObjectManager;

interface EntityManagerInterface extends ObjectManager
{
    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-param class-string<T> $className
     *
     * @psalm-return EntityRepository<T>
=======
     * @param class-string<T> $className
     *
     * @return EntityRepository<T>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @template T of object
     */
    public function getRepository(string $className): EntityRepository;

    /**
     * Returns the cache API for managing the second level cache regions or NULL if the cache is not enabled.
     */
    public function getCache(): Cache|null;

    /**
     * Gets the database connection object used by the EntityManager.
     */
    public function getConnection(): Connection;

    public function getMetadataFactory(): ClassMetadataFactory;

    /**
     * Gets an ExpressionBuilder used for object-oriented construction of query expressions.
     *
     * Example:
     *
     * <code>
     *     $qb = $em->createQueryBuilder();
     *     $expr = $em->getExpressionBuilder();
     *     $qb->select('u')->from('User', 'u')
     *         ->where($expr->orX($expr->eq('u.id', 1), $expr->eq('u.id', 2)));
     * </code>
     */
    public function getExpressionBuilder(): Expr;

    /**
     * Starts a transaction on the underlying database connection.
     */
    public function beginTransaction(): void;

    /**
     * Executes a function in a transaction.
     *
     * The function gets passed this EntityManager instance as an (optional) parameter.
     *
     * {@link flush} is invoked prior to transaction commit.
     *
     * If an exception occurs during execution of the function or flushing or transaction commit,
     * the transaction is rolled back, the EntityManager closed and the exception re-thrown.
     *
<<<<<<< HEAD
     * @psalm-param callable(self): T $func The function to execute transactionally.
     *
     * @return mixed The value returned from the closure.
     * @psalm-return T
     *
=======
     * @phpstan-param callable(self): T $func The function to execute transactionally.
     *
     * @return mixed The value returned from the closure.
     * @phpstan-return T
     *
     * @param-immediately-invoked-callable $func
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @template T
     */
    public function wrapInTransaction(callable $func): mixed;

    /**
     * Commits a transaction on the underlying database connection.
     */
    public function commit(): void;

    /**
     * Performs a rollback on the underlying database connection.
     */
    public function rollback(): void;

    /**
     * Creates a new Query object.
     *
     * @param string $dql The DQL string.
     */
    public function createQuery(string $dql = ''): Query;

    /**
     * Creates a native SQL query.
     */
    public function createNativeQuery(string $sql, ResultSetMapping $rsm): NativeQuery;

    /**
     * Create a QueryBuilder instance
     */
    public function createQueryBuilder(): QueryBuilder;

    /**
     * Finds an Entity by its identifier.
     *
     * @param string            $className   The class name of the entity to find.
     * @param mixed             $id          The identity of the entity to find.
<<<<<<< HEAD
     * @param LockMode|int|null $lockMode    One of the \Doctrine\DBAL\LockMode::* constants
     *                                       or NULL if no specific lock mode should be used
     *                                       during the search.
     * @param int|null          $lockVersion The version of the entity to find when using
     *                                       optimistic locking.
     * @psalm-param class-string<T> $className
     * @psalm-param LockMode::*|null $lockMode
     *
     * @return object|null The entity instance or NULL if the entity can not be found.
     * @psalm-return T|null
=======
     * @param LockMode|int|null $lockMode    One of the \Doctrine\DBAL\LockMode::* constants.
     *                                       Passing NULL is deprecated, use LockMode::NONE
     *                                       instead.
     * @param int|null          $lockVersion The version of the entity to find when using
     *                                       optimistic locking.
     * @phpstan-param class-string<T> $className
     * @phpstan-param LockMode::*|null $lockMode
     *
     * @return object|null The entity instance or NULL if the entity can not be found.
     * @phpstan-return T|null
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws OptimisticLockException
     * @throws ORMInvalidArgumentException
     * @throws TransactionRequiredException
     * @throws ORMException
     *
     * @template T of object
     */
<<<<<<< HEAD
    public function find(string $className, mixed $id, LockMode|int|null $lockMode = null, int|null $lockVersion = null): object|null;
=======
    public function find(string $className, mixed $id, LockMode|int|null $lockMode = LockMode::NONE, int|null $lockVersion = null): object|null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Refreshes the persistent state of an object from the database,
     * overriding any local changes that have not yet been persisted.
     *
<<<<<<< HEAD
     * @param LockMode|int|null $lockMode One of the \Doctrine\DBAL\LockMode::* constants
     *                                    or NULL if no specific lock mode should be used
     *                                    during the search.
     * @psalm-param LockMode::*|null $lockMode
=======
     * @param LockMode|int|null $lockMode One of the \Doctrine\DBAL\LockMode::* constants.
     *                                    Passing NULL is deprecated, use LockMode::NONE
     *                                    instead.
     * @phpstan-param LockMode::*|null $lockMode
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws ORMInvalidArgumentException
     * @throws ORMException
     * @throws TransactionRequiredException
     */
<<<<<<< HEAD
    public function refresh(object $object, LockMode|int|null $lockMode = null): void;
=======
    public function refresh(object $object, LockMode|int|null $lockMode = LockMode::NONE): void;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Gets a reference to the entity identified by the given type and identifier
     * without actually loading it, if the entity is not yet loaded.
     *
<<<<<<< HEAD
     * @param string $entityName The name of the entity type.
     * @param mixed  $id         The entity identifier.
     * @psalm-param class-string<T> $entityName
     *
     * @psalm-return T|null
=======
     * @param class-string<T> $entityName The name of the entity type.
     * @param mixed           $id         The entity identifier.
     *
     * @return T|null The entity reference.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws ORMException
     *
     * @template T of object
     */
    public function getReference(string $entityName, mixed $id): object|null;

    /**
     * Closes the EntityManager. All entities that are currently managed
     * by this EntityManager become detached. The EntityManager may no longer
     * be used after it is closed.
     */
    public function close(): void;

    /**
     * Acquire a lock on the given entity.
     *
<<<<<<< HEAD
     * @psalm-param LockMode::* $lockMode
=======
     * @phpstan-param LockMode::* $lockMode
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws OptimisticLockException
     * @throws PessimisticLockException
     */
    public function lock(object $entity, LockMode|int $lockMode, DateTimeInterface|int|null $lockVersion = null): void;

    /**
<<<<<<< HEAD
     * Gets the EventManager used by the EntityManager.
     */
    public function getEventManager(): EventManager;
=======
     * Gets the EventManagerInterface used by the EntityManager.
     */
    public function getEventManager(): EventManagerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Gets the Configuration used by the EntityManager.
     */
    public function getConfiguration(): Configuration;

    /**
     * Check if the Entity manager is open or closed.
     */
    public function isOpen(): bool;

    /**
     * Gets the UnitOfWork used by the EntityManager to coordinate operations.
     */
    public function getUnitOfWork(): UnitOfWork;

    /**
     * Create a new instance for the given hydration mode.
     *
<<<<<<< HEAD
     * @psalm-param string|AbstractQuery::HYDRATE_* $hydrationMode
=======
     * @phpstan-param string|AbstractQuery::HYDRATE_* $hydrationMode
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws ORMException
     */
    public function newHydrator(string|int $hydrationMode): AbstractHydrator;

    /**
     * Gets the proxy factory used by the EntityManager to create entity proxies.
     */
    public function getProxyFactory(): ProxyFactory;

    /**
     * Gets the enabled filters.
     */
    public function getFilters(): FilterCollection;

    /**
     * Checks whether the state of the filter collection is clean.
     */
    public function isFiltersStateClean(): bool;

    /**
     * Checks whether the Entity Manager has filters.
     */
    public function hasFilters(): bool;

    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-param string|class-string<T> $className
     *
     * @psalm-return ($className is class-string<T> ? Mapping\ClassMetadata<T> : Mapping\ClassMetadata<object>)
     *
     * @psalm-template T of object
=======
     * @param string|class-string<T> $className
     *
     * @phpstan-return ($className is class-string<T> ? Mapping\ClassMetadata<T> : Mapping\ClassMetadata<object>)
     *
     * @phpstan-template T of object
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getClassMetadata(string $className): Mapping\ClassMetadata;
}
