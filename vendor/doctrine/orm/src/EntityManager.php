<?php

declare(strict_types=1);

namespace Doctrine\ORM;

use BackedEnum;
use DateTimeInterface;
use Doctrine\Common\EventManager;
<<<<<<< HEAD
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\LockMode;
=======
use Doctrine\Common\EventManagerInterface;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\LockMode;
use Doctrine\Deprecations\Deprecation;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\Exception\EntityManagerClosed;
use Doctrine\ORM\Exception\InvalidHydrationMode;
use Doctrine\ORM\Exception\MissingIdentifierField;
use Doctrine\ORM\Exception\MissingMappingDriverImplementation;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\Exception\UnrecognizedIdentifierFields;
use Doctrine\ORM\Internal\Hydration\AbstractHydrator;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\ClassMetadataFactory;
use Doctrine\ORM\Proxy\DefaultProxyClassNameResolver;
use Doctrine\ORM\Proxy\ProxyFactory;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\Query\FilterCollection;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Repository\RepositoryFactory;
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

use function array_keys;
use function is_array;
use function is_object;
use function ltrim;
use function method_exists;

/**
 * The EntityManager is the central access point to ORM functionality.
 *
 * It is a facade to all different ORM subsystems such as UnitOfWork,
 * Query Language and Repository API. The quickest way to obtain a fully
 * configured EntityManager is:
 *
 *     use Doctrine\ORM\Tools\ORMSetup;
 *     use Doctrine\ORM\EntityManager;
 *
 *     $paths = ['/path/to/entity/mapping/files'];
 *
<<<<<<< HEAD
 *     $config = ORMSetup::createAttributeMetadataConfiguration($paths);
=======
 *     $config = ORMSetup::createAttributeMetadataConfig($paths);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *     $connection = DriverManager::getConnection(['driver' => 'pdo_sqlite', 'memory' => true], $config);
 *     $entityManager = new EntityManager($connection, $config);
 *
 * For more information see
 * {@link http://docs.doctrine-project.org/projects/doctrine-orm/en/stable/reference/configuration.html}
 *
 * You should never attempt to inherit from the EntityManager: Inheritance
 * is not a valid extension point for the EntityManager. Instead you
 * should take a look at the {@see \Doctrine\ORM\Decorator\EntityManagerDecorator}
 * and wrap your entity manager in a decorator.
 *
 * @final
 */
class EntityManager implements EntityManagerInterface
{
    /**
     * The metadata factory, used to retrieve the ORM metadata of entity classes.
     */
<<<<<<< HEAD
    private readonly ClassMetadataFactory $metadataFactory;
=======
    private ClassMetadataFactory $metadataFactory;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * The UnitOfWork used to coordinate object-level transactions.
     */
<<<<<<< HEAD
    private readonly UnitOfWork $unitOfWork;
=======
    private UnitOfWork $unitOfWork;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * The event manager that is the central point of the event system.
     */
<<<<<<< HEAD
    private readonly EventManager $eventManager;
=======
    private EventManager $eventManager;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * The proxy factory used to create dynamic proxies.
     */
<<<<<<< HEAD
    private readonly ProxyFactory $proxyFactory;
=======
    private ProxyFactory $proxyFactory;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * The repository factory used to create dynamic repositories.
     */
<<<<<<< HEAD
    private readonly RepositoryFactory $repositoryFactory;
=======
    private RepositoryFactory $repositoryFactory;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * The expression builder instance used to generate query expressions.
     */
    private Expr|null $expressionBuilder = null;

    /**
     * Whether the EntityManager is closed or not.
     */
    private bool $closed = false;

    /**
     * Collection of query filters.
     */
    private FilterCollection|null $filterCollection = null;

    /**
     * The second level cache regions API.
     */
    private Cache|null $cache = null;

    /**
     * Creates a new EntityManager that operates on the given database connection
     * and uses the given Configuration and EventManager implementations.
     *
     * @param Connection $conn The database connection used by the EntityManager.
     */
    public function __construct(
<<<<<<< HEAD
        private readonly Connection $conn,
        private readonly Configuration $config,
=======
        private Connection $conn,
        private Configuration $config,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        EventManager|null $eventManager = null,
    ) {
        if (! $config->getMetadataDriverImpl()) {
            throw MissingMappingDriverImplementation::create();
        }

        $this->eventManager = $eventManager
            ?? (method_exists($conn, 'getEventManager')
                ? $conn->getEventManager()
                : new EventManager()
            );

        $metadataFactoryClassName = $config->getClassMetadataFactoryName();

        $this->metadataFactory = new $metadataFactoryClassName();
        $this->metadataFactory->setEntityManager($this);

        $this->configureMetadataCache();

        $this->repositoryFactory = $config->getRepositoryFactory();
        $this->unitOfWork        = new UnitOfWork($this);
<<<<<<< HEAD
        $this->proxyFactory      = new ProxyFactory(
            $this,
            $config->getProxyDir(),
            $config->getProxyNamespace(),
            $config->getAutoGenerateProxyClasses(),
        );
=======
        if ($config->isNativeLazyObjectsEnabled()) {
            $this->proxyFactory = new ProxyFactory($this);
        } else {
            $this->proxyFactory = new ProxyFactory(
                $this,
                $config->getProxyDir(),
                $config->getProxyNamespace(),
                $config->getAutoGenerateProxyClasses(),
            );
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if ($config->isSecondLevelCacheEnabled()) {
            $cacheConfig  = $config->getSecondLevelCacheConfiguration();
            $cacheFactory = $cacheConfig->getCacheFactory();
            $this->cache  = $cacheFactory->createCache($this);
        }
    }

    public function getConnection(): Connection
    {
        return $this->conn;
    }

    public function getMetadataFactory(): ClassMetadataFactory
    {
        return $this->metadataFactory;
    }

    public function getExpressionBuilder(): Expr
    {
        return $this->expressionBuilder ??= new Expr();
    }

    public function beginTransaction(): void
    {
        $this->conn->beginTransaction();
    }

    public function getCache(): Cache|null
    {
        return $this->cache;
    }

    public function wrapInTransaction(callable $func): mixed
    {
        $this->conn->beginTransaction();

<<<<<<< HEAD
=======
        $successful = false;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        try {
            $return = $func($this);

            $this->flush();
            $this->conn->commit();

<<<<<<< HEAD
            return $return;
        } catch (Throwable $e) {
            $this->close();
            $this->conn->rollBack();

            throw $e;
=======
            $successful = true;

            return $return;
        } finally {
            if (! $successful) {
                $this->close();
                if ($this->conn->isTransactionActive()) {
                    $this->conn->rollBack();
                }
            }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function commit(): void
    {
        $this->conn->commit();
    }

    public function rollback(): void
    {
        $this->conn->rollBack();
    }

    /**
     * Returns the ORM metadata descriptor for a class.
     *
     * Internal note: Performance-sensitive method.
     *
     * {@inheritDoc}
     */
    public function getClassMetadata(string $className): Mapping\ClassMetadata
    {
        return $this->metadataFactory->getMetadataFor($className);
    }

    public function createQuery(string $dql = ''): Query
    {
        $query = new Query($this);

        if (! empty($dql)) {
            $query->setDQL($dql);
        }

        return $query;
    }

    public function createNativeQuery(string $sql, ResultSetMapping $rsm): NativeQuery
    {
        $query = new NativeQuery($this);

        $query->setSQL($sql);
        $query->setResultSetMapping($rsm);

        return $query;
    }

    public function createQueryBuilder(): QueryBuilder
    {
        return new QueryBuilder($this);
    }

    /**
     * Flushes all changes to objects that have been queued up to now to the database.
     * This effectively synchronizes the in-memory state of managed objects with the
     * database.
     *
     * If an entity is explicitly passed to this method only this entity and
     * the cascade-persist semantics + scheduled inserts/removals are synchronized.
     *
     * @throws OptimisticLockException If a version check on an entity that
     * makes use of optimistic locking fails.
     * @throws ORMException
     */
    public function flush(): void
    {
        $this->errorIfClosed();
        $this->unitOfWork->commit();
    }

    /**
     * {@inheritDoc}
     */
<<<<<<< HEAD
    public function find($className, mixed $id, LockMode|int|null $lockMode = null, int|null $lockVersion = null): object|null
    {
        $class = $this->metadataFactory->getMetadataFor(ltrim($className, '\\'));

        if ($lockMode !== null) {
            $this->checkLockRequirements($lockMode, $class);
        }
=======
    public function find($className, mixed $id, LockMode|int|null $lockMode = LockMode::NONE, int|null $lockVersion = null): object|null
    {
        if ($lockMode === null) {
            Deprecation::trigger(
                'doctrine/orm',
                'https://github.com/doctrine/orm/pull/12548',
                'Passing null as lock mode to %s() is deprecated and will not be possible in Doctrine ORM 4.0, pass LockMode::NONE instead.',
                __METHOD__,
            );

            $lockMode = LockMode::NONE;
        }

        $class = $this->metadataFactory->getMetadataFor(ltrim($className, '\\'));

        $this->checkLockRequirements($lockMode, $class);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (! is_array($id)) {
            if ($class->isIdentifierComposite) {
                throw ORMInvalidArgumentException::invalidCompositeIdentifier();
            }

            $id = [$class->identifier[0] => $id];
        }

        foreach ($id as $i => $value) {
            if (is_object($value)) {
                $className = DefaultProxyClassNameResolver::getClass($value);
                if ($this->metadataFactory->hasMetadataFor($className)) {
                    $id[$i] = $this->unitOfWork->getSingleIdentifierValue($value);

                    if ($id[$i] === null) {
                        throw ORMInvalidArgumentException::invalidIdentifierBindingEntity($className);
                    }
                }
            }
        }

        $sortedId = [];

        foreach ($class->identifier as $identifier) {
            if (! isset($id[$identifier])) {
                throw MissingIdentifierField::fromFieldAndClass($identifier, $class->name);
            }

            if ($id[$identifier] instanceof BackedEnum) {
                $sortedId[$identifier] = $id[$identifier]->value;
            } else {
                $sortedId[$identifier] = $id[$identifier];
            }

            unset($id[$identifier]);
        }

        if ($id) {
            throw UnrecognizedIdentifierFields::fromClassAndFieldNames($class->name, array_keys($id));
        }

        $unitOfWork = $this->getUnitOfWork();

        $entity = $unitOfWork->tryGetById($sortedId, $class->rootEntityName);

        // Check identity map first
        if ($entity !== false) {
            if (! ($entity instanceof $class->name)) {
                return null;
            }

            switch (true) {
                case $lockMode === LockMode::OPTIMISTIC:
                    $this->lock($entity, $lockMode, $lockVersion);
                    break;

<<<<<<< HEAD
                case $lockMode === LockMode::NONE:
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                case $lockMode === LockMode::PESSIMISTIC_READ:
                case $lockMode === LockMode::PESSIMISTIC_WRITE:
                    $persister = $unitOfWork->getEntityPersister($class->name);
                    $persister->refresh($sortedId, $entity, $lockMode);
                    break;
            }

            return $entity; // Hit!
        }

        $persister = $unitOfWork->getEntityPersister($class->name);

        switch (true) {
            case $lockMode === LockMode::OPTIMISTIC:
                $entity = $persister->load($sortedId);

                if ($entity !== null) {
                    $unitOfWork->lock($entity, $lockMode, $lockVersion);
                }

                return $entity;

            case $lockMode === LockMode::PESSIMISTIC_READ:
            case $lockMode === LockMode::PESSIMISTIC_WRITE:
                return $persister->load($sortedId, null, null, [], $lockMode);

            default:
                return $persister->loadById($sortedId);
        }
    }

    public function getReference(string $entityName, mixed $id): object|null
    {
        $class = $this->metadataFactory->getMetadataFor(ltrim($entityName, '\\'));

        if (! is_array($id)) {
            $id = [$class->identifier[0] => $id];
        }

        $sortedId = [];

        foreach ($class->identifier as $identifier) {
            if (! isset($id[$identifier])) {
                throw MissingIdentifierField::fromFieldAndClass($identifier, $class->name);
            }

            $sortedId[$identifier] = $id[$identifier];
            unset($id[$identifier]);
        }

        if ($id) {
            throw UnrecognizedIdentifierFields::fromClassAndFieldNames($class->name, array_keys($id));
        }

        $entity = $this->unitOfWork->tryGetById($sortedId, $class->rootEntityName);

        // Check identity map first, if its already in there just return it.
        if ($entity !== false) {
            return $entity instanceof $class->name ? $entity : null;
        }

        if ($class->subClasses) {
            return $this->find($entityName, $sortedId);
        }

        $entity = $this->proxyFactory->getProxy($class->name, $sortedId);

<<<<<<< HEAD
        $this->unitOfWork->registerManaged($entity, $sortedId, []);
=======
        $this->unitOfWork->registerManagedProxy($entity, $sortedId);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $entity;
    }

    /**
     * Clears the EntityManager. All entities that are currently managed
     * by this EntityManager become detached.
     */
    public function clear(): void
    {
        $this->unitOfWork->clear();
    }

    public function close(): void
    {
        $this->clear();

        $this->closed = true;
    }

    /**
     * Tells the EntityManager to make an instance managed and persistent.
     *
     * The entity will be entered into the database at or before transaction
     * commit or as a result of the flush operation.
     *
     * NOTE: The persist operation always considers entities that are not yet known to
     * this EntityManager as NEW. Do not pass detached entities to the persist operation.
     *
     * @throws ORMInvalidArgumentException
     * @throws ORMException
     */
    public function persist(object $object): void
    {
        $this->errorIfClosed();

        $this->unitOfWork->persist($object);
    }

    /**
     * Removes an entity instance.
     *
     * A removed entity will be removed from the database at or before transaction commit
     * or as a result of the flush operation.
     *
     * @throws ORMInvalidArgumentException
     * @throws ORMException
     */
    public function remove(object $object): void
    {
        $this->errorIfClosed();

        $this->unitOfWork->remove($object);
    }

<<<<<<< HEAD
    public function refresh(object $object, LockMode|int|null $lockMode = null): void
    {
=======
    public function refresh(object $object, LockMode|int|null $lockMode = LockMode::NONE): void
    {
        if ($lockMode === null) {
            Deprecation::trigger(
                'doctrine/orm',
                'https://github.com/doctrine/orm/pull/12548',
                'Passing null as lock mode to %s() is deprecated and will not be possible in Doctrine ORM 4.0, pass LockMode::NONE instead.',
                __METHOD__,
            );

            $lockMode = LockMode::NONE;
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->errorIfClosed();

        $this->unitOfWork->refresh($object, $lockMode);
    }

    /**
     * Detaches an entity from the EntityManager, causing a managed entity to
     * become detached.  Unflushed changes made to the entity if any
     * (including removal of the entity), will not be synchronized to the database.
     * Entities which previously referenced the detached entity will continue to
     * reference it.
     *
     * @throws ORMInvalidArgumentException
     */
    public function detach(object $object): void
    {
        $this->unitOfWork->detach($object);
    }

    public function lock(object $entity, LockMode|int $lockMode, DateTimeInterface|int|null $lockVersion = null): void
    {
        $this->unitOfWork->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * Gets the repository for an entity class.
     *
<<<<<<< HEAD
     * @psalm-param class-string<T> $className
     *
     * @psalm-return EntityRepository<T>
=======
     * @param class-string<T> $className The name of the entity.
     *
     * @return EntityRepository<T> The repository class.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @template T of object
     */
    public function getRepository(string $className): EntityRepository
    {
        return $this->repositoryFactory->getRepository($this, $className);
    }

    /**
     * Determines whether an entity instance is managed in this EntityManager.
     *
     * @return bool TRUE if this EntityManager currently manages the given entity, FALSE otherwise.
     */
    public function contains(object $object): bool
    {
        return $this->unitOfWork->isScheduledForInsert($object)
            || $this->unitOfWork->isInIdentityMap($object)
            && ! $this->unitOfWork->isScheduledForDelete($object);
    }

<<<<<<< HEAD
    public function getEventManager(): EventManager
=======
    public function getEventManager(): EventManagerInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->eventManager;
    }

    public function getConfiguration(): Configuration
    {
        return $this->config;
    }

    /**
     * Throws an exception if the EntityManager is closed or currently not active.
     *
     * @throws EntityManagerClosed If the EntityManager is closed.
     */
    private function errorIfClosed(): void
    {
        if ($this->closed) {
            throw EntityManagerClosed::create();
        }
    }

    public function isOpen(): bool
    {
        return ! $this->closed;
    }

    public function getUnitOfWork(): UnitOfWork
    {
        return $this->unitOfWork;
    }

    public function newHydrator(string|int $hydrationMode): AbstractHydrator
    {
        return match ($hydrationMode) {
            Query::HYDRATE_OBJECT => new Internal\Hydration\ObjectHydrator($this),
            Query::HYDRATE_ARRAY => new Internal\Hydration\ArrayHydrator($this),
            Query::HYDRATE_SCALAR => new Internal\Hydration\ScalarHydrator($this),
            Query::HYDRATE_SINGLE_SCALAR => new Internal\Hydration\SingleScalarHydrator($this),
            Query::HYDRATE_SIMPLEOBJECT => new Internal\Hydration\SimpleObjectHydrator($this),
            Query::HYDRATE_SCALAR_COLUMN => new Internal\Hydration\ScalarColumnHydrator($this),
            default => $this->createCustomHydrator((string) $hydrationMode),
        };
    }

    public function getProxyFactory(): ProxyFactory
    {
        return $this->proxyFactory;
    }

    public function initializeObject(object $obj): void
    {
        $this->unitOfWork->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
<<<<<<< HEAD
    public function isUninitializedObject($obj): bool
    {
        return $this->unitOfWork->isUninitializedObject($obj);
=======
    public function isUninitializedObject($value): bool
    {
        return $this->unitOfWork->isUninitializedObject($value);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getFilters(): FilterCollection
    {
        return $this->filterCollection ??= new FilterCollection($this);
    }

    public function isFiltersStateClean(): bool
    {
        return $this->filterCollection === null || $this->filterCollection->isClean();
    }

    public function hasFilters(): bool
    {
        return $this->filterCollection !== null;
    }

    /**
<<<<<<< HEAD
     * @psalm-param LockMode::* $lockMode
=======
     * @phpstan-param LockMode::* $lockMode
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws OptimisticLockException
     * @throws TransactionRequiredException
     */
    private function checkLockRequirements(LockMode|int $lockMode, ClassMetadata $class): void
    {
        switch ($lockMode) {
            case LockMode::OPTIMISTIC:
                if (! $class->isVersioned) {
                    throw OptimisticLockException::notVersioned($class->name);
                }

                break;
            case LockMode::PESSIMISTIC_READ:
            case LockMode::PESSIMISTIC_WRITE:
                if (! $this->getConnection()->isTransactionActive()) {
                    throw TransactionRequiredException::transactionRequired();
                }
        }
    }

    private function configureMetadataCache(): void
    {
        $metadataCache = $this->config->getMetadataCache();
        if (! $metadataCache) {
            return;
        }

        $this->metadataFactory->setCache($metadataCache);
    }

    private function createCustomHydrator(string $hydrationMode): AbstractHydrator
    {
        $class = $this->config->getCustomHydrationMode($hydrationMode);

        if ($class !== null) {
            return new $class($this);
        }

        throw InvalidHydrationMode::fromMode($hydrationMode);
    }
}
