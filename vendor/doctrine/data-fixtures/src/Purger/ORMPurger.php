<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Purger;

use Doctrine\Common\DataFixtures\Sorter\TopologicalSorter;
use Doctrine\DBAL\Platforms\AbstractPlatform;
<<<<<<< HEAD
=======
use Doctrine\DBAL\Schema\AbstractNamedObject;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\DBAL\Schema\Identifier;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\ManyToManyOwningSideMapping;

use function array_map;
use function array_reverse;
<<<<<<< HEAD
use function assert;
=======
use function class_exists;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function count;
use function in_array;

/**
 * Class responsible for purging databases of data before reloading data fixtures.
 */
<<<<<<< HEAD
class ORMPurger implements PurgerInterface, ORMPurgerInterface
=======
final class ORMPurger implements ORMPurgerInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    public const PURGE_MODE_DELETE   = 1;
    public const PURGE_MODE_TRUNCATE = 2;

<<<<<<< HEAD
    private ?EntityManagerInterface $em;

    /**
     * If the purge should be done through DELETE or TRUNCATE statements
     *
     * @var int
     */
    private $purgeMode = self::PURGE_MODE_DELETE;
=======
    /**
     * If the purge should be done through DELETE or TRUNCATE statements
     */
    private int $purgeMode = self::PURGE_MODE_DELETE;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Table/view names to be excluded from purge
     *
     * @var string[]
     */
    private array $excluded;

    /** @var list<string>|null */
<<<<<<< HEAD
    private ?array $cachedSqlStatements = null;
=======
    private array|null $cachedSqlStatements = null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Construct new purger instance.
     *
     * @param EntityManagerInterface|null $em       EntityManagerInterface instance used for persistence.
     * @param string[]                    $excluded array of table/view names to be excluded from purge
     */
<<<<<<< HEAD
    public function __construct(?EntityManagerInterface $em = null, array $excluded = [])
    {
        $this->em       = $em;
=======
    public function __construct(private EntityManagerInterface|null $em = null, array $excluded = [])
    {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->excluded = $excluded;
    }

    /**
     * Set the purge mode
<<<<<<< HEAD
     *
     * @param int $mode
     *
     * @return void
     */
    public function setPurgeMode($mode)
=======
     */
    public function setPurgeMode(int $mode): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->purgeMode           = $mode;
        $this->cachedSqlStatements = null;
    }

    /**
     * Get the purge mode
<<<<<<< HEAD
     *
     * @return int
     */
    public function getPurgeMode()
=======
     */
    public function getPurgeMode(): int
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->purgeMode;
    }

<<<<<<< HEAD
    /** @inheritDoc */
    public function setEntityManager(EntityManagerInterface $em)
=======
    public function setEntityManager(EntityManagerInterface $em): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->em                  = $em;
        $this->cachedSqlStatements = null;
    }

    /**
     * Retrieve the EntityManagerInterface instance this purger instance is using.
<<<<<<< HEAD
     *
     * @return EntityManagerInterface
     */
    public function getObjectManager()
=======
     */
    public function getObjectManager(): EntityManagerInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->em;
    }

<<<<<<< HEAD
    /** @inheritDoc */
    public function purge()
=======
    public function purge(): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $connection = $this->em->getConnection();
        array_map([$connection, 'executeStatement'], $this->getPurgeStatements());
    }

    /** @return list<string> */
    private function getPurgeStatements(): array
    {
        if ($this->cachedSqlStatements !== null) {
            return $this->cachedSqlStatements;
        }

        $connection = $this->em->getConnection();
        $classes    = [];

        foreach ($this->em->getMetadataFactory()->getAllMetadata() as $metadata) {
<<<<<<< HEAD
=======
            // @phpstan-ignore isset.property (ORM 2 support)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($metadata->isMappedSuperclass || (isset($metadata->isEmbeddedClass) && $metadata->isEmbeddedClass)) {
                continue;
            }

            $classes[] = $metadata;
        }

        $commitOrder = $this->getCommitOrder($this->em, $classes);

        // Get platform parameters
        $platform = $connection->getDatabasePlatform();

        // Drop association tables first
        $orderedTables = $this->getAssociationTables($commitOrder, $platform);

        // Drop tables in reverse commit order
        for ($i = count($commitOrder) - 1; $i >= 0; --$i) {
            $class = $commitOrder[$i];

            if (
<<<<<<< HEAD
                (isset($class->isEmbeddedClass) && $class->isEmbeddedClass) ||
                $class->isMappedSuperclass ||
                ($class->isInheritanceTypeSingleTable() && $class->name !== $class->rootEntityName)
=======
                // @phpstan-ignore isset.property (ORM 2 support)
                (isset($class->isEmbeddedClass) && $class->isEmbeddedClass)
                || $class->isMappedSuperclass
                || ($class->isInheritanceTypeSingleTable() && $class->name !== $class->rootEntityName)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ) {
                continue;
            }

            $orderedTables[] = $this->getTableName($class, $platform);
        }

        $connectionConfiguration = $connection->getConfiguration();

        $schemaAssetsFilter = $connectionConfiguration->getSchemaAssetsFilter()
            ?? static fn (): bool => true;

        $this->cachedSqlStatements = [];
        foreach ($orderedTables as $tbl) {
            // If the table is excluded, skip it as well
            if (in_array($tbl, $this->excluded)) {
                continue;
            }

            // Support schema asset filters as presented in
            if (! $schemaAssetsFilter($tbl)) {
                continue;
            }

            if ($this->purgeMode === self::PURGE_MODE_DELETE) {
                $this->cachedSqlStatements[] = $this->getDeleteFromTableSQL($tbl, $platform);
            } else {
                $this->cachedSqlStatements[] = $platform->getTruncateTableSQL($tbl, true);
            }
        }

        return $this->cachedSqlStatements;
    }

    /**
     * @param ClassMetadata[] $classes
     *
     * @return ClassMetadata[]
     */
    private function getCommitOrder(EntityManagerInterface $em, array $classes): array
    {
        $sorter = new TopologicalSorter();

        foreach ($classes as $class) {
            if (! $sorter->hasNode($class->name)) {
                $sorter->addNode($class->name, $class);
            }

            // $class before its parents
            foreach ($class->parentClasses as $parentClass) {
                $parentClass     = $em->getClassMetadata($parentClass);
                $parentClassName = $parentClass->getName();

                if (! $sorter->hasNode($parentClassName)) {
                    $sorter->addNode($parentClassName, $parentClass);
                }

                $sorter->addDependency($class->name, $parentClassName);
            }

            foreach ($class->associationMappings as $assoc) {
                if (! $assoc['isOwningSide']) {
                    continue;
                }

<<<<<<< HEAD
                $targetClass = $em->getClassMetadata($assoc['targetEntity']);
                assert($targetClass instanceof ClassMetadata);
=======
                $targetClass     = $em->getClassMetadata($assoc['targetEntity']);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $targetClassName = $targetClass->getName();

                if (! $sorter->hasNode($targetClassName)) {
                    $sorter->addNode($targetClassName, $targetClass);
                }

                // add dependency ($targetClass before $class)
                $sorter->addDependency($targetClassName, $class->name);

                // parents of $targetClass before $class, too
                foreach ($targetClass->parentClasses as $parentClass) {
                    $parentClass     = $em->getClassMetadata($parentClass);
                    $parentClassName = $parentClass->getName();

                    if (! $sorter->hasNode($parentClassName)) {
                        $sorter->addNode($parentClassName, $parentClass);
                    }

                    $sorter->addDependency($parentClassName, $class->name);
                }
            }
        }

        return array_reverse($sorter->sort());
    }

    /**
     * @param ClassMetadata[] $classes
     *
     * @return string[]
     */
    private function getAssociationTables(array $classes, AbstractPlatform $platform): array
    {
        $associationTables = [];

        foreach ($classes as $class) {
            foreach ($class->associationMappings as $assoc) {
                if (! $assoc['isOwningSide'] || $assoc['type'] !== ClassMetadata::MANY_TO_MANY) {
                    continue;
                }

                $associationTables[] = $this->getJoinTableName($assoc, $class, $platform);
            }
        }

        return $associationTables;
    }

    private function getTableName(ClassMetadata $class, AbstractPlatform $platform): string
    {
        return $this->em->getConfiguration()->getQuoteStrategy()->getTableName($class, $platform);
    }

    /** @param ManyToManyOwningSideMapping|mixed[] $assoc */
    private function getJoinTableName(
        $assoc,
        ClassMetadata $class,
<<<<<<< HEAD
        AbstractPlatform $platform
=======
        AbstractPlatform $platform,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ): string {
        return $this->em->getConfiguration()->getQuoteStrategy()->getJoinTableName($assoc, $class, $platform);
    }

    private function getDeleteFromTableSQL(string $tableName, AbstractPlatform $platform): string
    {
        $tableIdentifier = new Identifier($tableName);

<<<<<<< HEAD
        return 'DELETE FROM ' . $tableIdentifier->getQuotedName($platform);
=======
        if (class_exists(AbstractNamedObject::class)) {
            $identifier = $tableIdentifier->getObjectName()->toSQL($platform);
        } else {
            $identifier = $tableIdentifier->getQuotedName($platform);
        }

        return 'DELETE FROM ' . $identifier;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
