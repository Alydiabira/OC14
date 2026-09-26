<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping\Driver;

<<<<<<< HEAD
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Doctrine\DBAL\Schema\Column;
=======
use Doctrine\DBAL\Schema\AbstractAsset;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\ForeignKeyConstraint;
use Doctrine\DBAL\Schema\Index;
use Doctrine\DBAL\Schema\Index\IndexedColumn;
use Doctrine\DBAL\Schema\Index\IndexType;
use Doctrine\DBAL\Schema\Name\UnqualifiedName;
use Doctrine\DBAL\Schema\NamedObject;
use Doctrine\DBAL\Schema\PrimaryKeyConstraint;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\DBAL\Schema\SchemaException;
use Doctrine\DBAL\Schema\Table;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\MappingException;
use Doctrine\Persistence\Mapping\ClassMetadata as PersistenceClassMetadata;
use Doctrine\Persistence\Mapping\Driver\MappingDriver;
use InvalidArgumentException;
use TypeError;

use function array_diff;
use function array_keys;
<<<<<<< HEAD
=======
use function array_map;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function array_merge;
use function assert;
use function count;
use function current;
<<<<<<< HEAD
use function get_debug_type;
use function in_array;
=======
use function enum_exists;
use function get_debug_type;
use function in_array;
use function method_exists;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function preg_replace;
use function sort;
use function sprintf;
use function strtolower;

/**
 * The DatabaseDriver reverse engineers the mapping metadata from a database.
 *
<<<<<<< HEAD
=======
 * @deprecated No replacement planned
 *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @link    www.doctrine-project.org
 */
class DatabaseDriver implements MappingDriver
{
    /**
     * Replacement for {@see Types::ARRAY}.
     *
     * To be removed as soon as support for DBAL 3 is dropped.
     */
    private const ARRAY = 'array';

    /**
     * Replacement for {@see Types::OBJECT}.
     *
     * To be removed as soon as support for DBAL 3 is dropped.
     */
    private const OBJECT = 'object';

    /** @var array<string,Table>|null */
    private array|null $tables = null;

    /** @var array<class-string, string> */
    private array $classToTableNames = [];

<<<<<<< HEAD
    /** @psalm-var array<string, Table> */
=======
    /** @phpstan-var array<string, Table> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private array $manyToManyTables = [];

    /** @var mixed[] */
    private array $classNamesForTables = [];

    /** @var mixed[] */
    private array $fieldNamesForColumns = [];

    /**
     * The namespace for the generated entities.
     */
    private string|null $namespace = null;

    private Inflector $inflector;

    public function __construct(private readonly AbstractSchemaManager $sm)
    {
        $this->inflector = InflectorFactory::create()->build();
    }

    /**
     * Set the namespace for the generated entities.
     */
    public function setNamespace(string $namespace): void
    {
        $this->namespace = $namespace;
    }

    public function isTransient(string $className): bool
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getAllClassNames(): array
    {
        $this->reverseEngineerMappingFromDatabase();

        return array_keys($this->classToTableNames);
    }

    /**
     * Sets class name for a table.
     */
    public function setClassNameForTable(string $tableName, string $className): void
    {
        $this->classNamesForTables[$tableName] = $className;
    }

    /**
     * Sets field name for a column on a specific table.
     */
    public function setFieldNameForColumn(string $tableName, string $columnName, string $fieldName): void
    {
        $this->fieldNamesForColumns[$tableName][$columnName] = $fieldName;
    }

    /**
     * Sets tables manually instead of relying on the reverse engineering capabilities of SchemaManager.
     *
     * @param Table[] $entityTables
     * @param Table[] $manyToManyTables
<<<<<<< HEAD
     * @psalm-param list<Table> $entityTables
     * @psalm-param list<Table> $manyToManyTables
=======
     * @phpstan-param list<Table> $entityTables
     * @phpstan-param list<Table> $manyToManyTables
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function setTables(array $entityTables, array $manyToManyTables): void
    {
        $this->tables = $this->manyToManyTables = $this->classToTableNames = [];

        foreach ($entityTables as $table) {
<<<<<<< HEAD
            $className = $this->getClassNameForTable($table->getName());

            $this->classToTableNames[$className] = $table->getName();
            $this->tables[$table->getName()]     = $table;
        }

        foreach ($manyToManyTables as $table) {
            $this->manyToManyTables[$table->getName()] = $table;
=======
            $className = $this->getClassNameForTable(self::getAssetName($table));

            $this->classToTableNames[$className]      = self::getAssetName($table);
            $this->tables[self::getAssetName($table)] = $table;
        }

        foreach ($manyToManyTables as $table) {
            $this->manyToManyTables[self::getAssetName($table)] = $table;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function setInflector(Inflector $inflector): void
    {
        $this->inflector = $inflector;
    }

    /**
     * {@inheritDoc}
     *
<<<<<<< HEAD
     * @psalm-param class-string<T> $className
     * @psalm-param ClassMetadata<T> $metadata
=======
     * @param class-string<T>  $className
     * @param ClassMetadata<T> $metadata
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @template T of object
     */
    public function loadMetadataForClass(string $className, PersistenceClassMetadata $metadata): void
    {
        if (! $metadata instanceof ClassMetadata) {
            throw new TypeError(sprintf(
                'Argument #2 passed to %s() must be an instance of %s, %s given.',
                __METHOD__,
                ClassMetadata::class,
                get_debug_type($metadata),
            ));
        }

        $this->reverseEngineerMappingFromDatabase();

        if (! isset($this->classToTableNames[$className])) {
            throw new InvalidArgumentException('Unknown class ' . $className);
        }

        $tableName = $this->classToTableNames[$className];

        $metadata->name          = $className;
        $metadata->table['name'] = $tableName;

        $this->buildIndexes($metadata);
        $this->buildFieldMappings($metadata);
        $this->buildToOneAssociationMappings($metadata);

        foreach ($this->manyToManyTables as $manyTable) {
            foreach ($manyTable->getForeignKeys() as $foreignKey) {
                // foreign key maps to the table of the current entity, many to many association probably exists
<<<<<<< HEAD
                if (! (strtolower($tableName) === strtolower($foreignKey->getForeignTableName()))) {
=======
                if (! (strtolower($tableName) === strtolower(self::getReferencedTableName($foreignKey)))) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    continue;
                }

                $myFk    = $foreignKey;
                $otherFk = null;

                foreach ($manyTable->getForeignKeys() as $foreignKey) {
                    if ($foreignKey !== $myFk) {
                        $otherFk = $foreignKey;
                        break;
                    }
                }

                if (! $otherFk) {
                    // the definition of this many to many table does not contain
                    // enough foreign key information to continue reverse engineering.
                    continue;
                }

<<<<<<< HEAD
                $localColumn = current($myFk->getLocalColumns());

                $associationMapping                 = [];
                $associationMapping['fieldName']    = $this->getFieldNameForColumn($manyTable->getName(), current($otherFk->getLocalColumns()), true);
                $associationMapping['targetEntity'] = $this->getClassNameForTable($otherFk->getForeignTableName());

                if (current($manyTable->getColumns())->getName() === $localColumn) {
                    $associationMapping['inversedBy'] = $this->getFieldNameForColumn($manyTable->getName(), current($myFk->getLocalColumns()), true);
                    $associationMapping['joinTable']  = [
                        'name' => strtolower($manyTable->getName()),
=======
                $localColumn = current(self::getReferencingColumnNames($myFk));

                $associationMapping                 = [];
                $associationMapping['fieldName']    = $this->getFieldNameForColumn(self::getAssetName($manyTable), current(self::getReferencingColumnNames($otherFk)), true);
                $associationMapping['targetEntity'] = $this->getClassNameForTable(self::getReferencedTableName($otherFk));

                if (self::getAssetName(current($manyTable->getColumns())) === $localColumn) {
                    $associationMapping['inversedBy'] = $this->getFieldNameForColumn(self::getAssetName($manyTable), current(self::getReferencingColumnNames($myFk)), true);
                    $associationMapping['joinTable']  = [
                        'name' => strtolower(self::getAssetName($manyTable)),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        'joinColumns' => [],
                        'inverseJoinColumns' => [],
                    ];

<<<<<<< HEAD
                    $fkCols = $myFk->getForeignColumns();
                    $cols   = $myFk->getLocalColumns();
=======
                    $fkCols = self::getReferencedColumnNames($myFk);
                    $cols   = self::getReferencingColumnNames($myFk);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                    for ($i = 0, $colsCount = count($cols); $i < $colsCount; $i++) {
                        $associationMapping['joinTable']['joinColumns'][] = [
                            'name' => $cols[$i],
                            'referencedColumnName' => $fkCols[$i],
                        ];
                    }

<<<<<<< HEAD
                    $fkCols = $otherFk->getForeignColumns();
                    $cols   = $otherFk->getLocalColumns();
=======
                    $fkCols = self::getReferencedColumnNames($otherFk);
                    $cols   = self::getReferencingColumnNames($otherFk);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                    for ($i = 0, $colsCount = count($cols); $i < $colsCount; $i++) {
                        $associationMapping['joinTable']['inverseJoinColumns'][] = [
                            'name' => $cols[$i],
                            'referencedColumnName' => $fkCols[$i],
                        ];
                    }
                } else {
<<<<<<< HEAD
                    $associationMapping['mappedBy'] = $this->getFieldNameForColumn($manyTable->getName(), current($myFk->getLocalColumns()), true);
=======
                    $associationMapping['mappedBy'] = $this->getFieldNameForColumn(
                        // @phpstan-ignore function.alreadyNarrowedType (DBAL 3 compatibility)
                        method_exists(Table::class, 'getObjectName')
                            ? $manyTable->getObjectName()->toString()
                            : $manyTable->getName(), // DBAL < 4.4
                        current(self::getReferencingColumnNames($myFk)),
                        true,
                    );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }

                $metadata->mapManyToMany($associationMapping);

                break;
            }
        }
    }

    /** @throws MappingException */
    private function reverseEngineerMappingFromDatabase(): void
    {
        if ($this->tables !== null) {
            return;
        }

        $this->tables = $this->manyToManyTables = $this->classToTableNames = [];

        foreach ($this->sm->listTables() as $table) {
<<<<<<< HEAD
            $tableName   = $table->getName();
=======
            $tableName   = self::getAssetName($table);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $foreignKeys = $table->getForeignKeys();

            $allForeignKeyColumns = [];

            foreach ($foreignKeys as $foreignKey) {
<<<<<<< HEAD
                $allForeignKeyColumns = array_merge($allForeignKeyColumns, $foreignKey->getLocalColumns());
            }

            $primaryKey = $table->getPrimaryKey();
=======
                $allForeignKeyColumns = array_merge($allForeignKeyColumns, self::getReferencingColumnNames($foreignKey));
            }

            if (method_exists($table, 'getPrimaryKeyConstraint')) {
                $primaryKey = $table->getPrimaryKeyConstraint();
            } else {
                $primaryKey = $table->getPrimaryKey();
            }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($primaryKey === null) {
                throw new MappingException(
                    'Table ' . $tableName . ' has no primary key. Doctrine does not ' .
                    "support reverse engineering from tables that don't have a primary key.",
                );
            }

<<<<<<< HEAD
            $pkColumns = $primaryKey->getColumns();
=======
            if ($primaryKey instanceof PrimaryKeyConstraint) {
                $pkColumns = array_map(static fn (UnqualifiedName $name) => $name->toString(), $primaryKey->getColumnNames());
            } else {
                $pkColumns = self::getIndexedColumns($primaryKey);
            }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            sort($pkColumns);
            sort($allForeignKeyColumns);

            if ($pkColumns === $allForeignKeyColumns && count($foreignKeys) === 2) {
                $this->manyToManyTables[$tableName] = $table;
            } else {
                // lower-casing is necessary because of Oracle Uppercase Tablenames,
                // assumption is lower-case + underscore separated.
                $className = $this->getClassNameForTable($tableName);

                $this->tables[$tableName]            = $table;
                $this->classToTableNames[$className] = $tableName;
            }
        }
    }

    /**
     * Build indexes from a class metadata.
     */
    private function buildIndexes(ClassMetadata $metadata): void
    {
<<<<<<< HEAD
        $tableName = $metadata->table['name'];
        $indexes   = $this->tables[$tableName]->getIndexes();

        foreach ($indexes as $index) {
            if ($index->isPrimary()) {
                continue;
            }

            $indexName      = $index->getName();
            $indexColumns   = $index->getColumns();
            $constraintType = $index->isUnique()
=======
        $tableName  = $metadata->table['name'];
        $table      = $this->tables[$tableName];
        $primaryKey = self::getPrimaryKey($table);
        $indexes    = $table->getIndexes();

        foreach ($indexes as $index) {
            if ($index === $primaryKey) {
                continue;
            }

            if (enum_exists(IndexType::class) && method_exists($index, 'getType')) {
                $isUnique = $index->getType() === IndexType::UNIQUE;
            } else {
                $isUnique = $index->isUnique();
            }

            $indexName      = self::getAssetName($index);
            $indexColumns   = self::getIndexedColumns($index);
            $constraintType = $isUnique
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ? 'uniqueConstraints'
                : 'indexes';

            $metadata->table[$constraintType][$indexName]['columns'] = $indexColumns;
        }
    }

    /**
     * Build field mapping from class metadata.
     */
    private function buildFieldMappings(ClassMetadata $metadata): void
    {
        $tableName      = $metadata->table['name'];
        $columns        = $this->tables[$tableName]->getColumns();
        $primaryKeys    = $this->getTablePrimaryKeys($this->tables[$tableName]);
        $foreignKeys    = $this->tables[$tableName]->getForeignKeys();
        $allForeignKeys = [];

        foreach ($foreignKeys as $foreignKey) {
<<<<<<< HEAD
            $allForeignKeys = array_merge($allForeignKeys, $foreignKey->getLocalColumns());
=======
            $allForeignKeys = array_merge($allForeignKeys, self::getReferencingColumnNames($foreignKey));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $ids           = [];
        $fieldMappings = [];

        foreach ($columns as $column) {
<<<<<<< HEAD
            if (in_array($column->getName(), $allForeignKeys, true)) {
=======
            if (in_array(self::getAssetName($column), $allForeignKeys, true)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                continue;
            }

            $fieldMapping = $this->buildFieldMapping($tableName, $column);

<<<<<<< HEAD
            if ($primaryKeys && in_array($column->getName(), $primaryKeys, true)) {
=======
            if ($primaryKeys && in_array(self::getAssetName($column), $primaryKeys, true)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $fieldMapping['id'] = true;
                $ids[]              = $fieldMapping;
            }

            $fieldMappings[] = $fieldMapping;
        }

        // We need to check for the columns here, because we might have associations as id as well.
        if ($ids && count($primaryKeys) === 1) {
            $metadata->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_AUTO);
        }

        foreach ($fieldMappings as $fieldMapping) {
            $metadata->mapField($fieldMapping);
        }
    }

    /**
     * Build field mapping from a schema column definition
     *
     * @return mixed[]
<<<<<<< HEAD
     * @psalm-return array{
=======
     * @phpstan-return array{
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *     fieldName: string,
     *     columnName: string,
     *     type: string,
     *     nullable: bool,
     *     options: array{
     *         unsigned?: bool,
     *         fixed?: bool,
     *         comment: string|null,
     *         default?: mixed
     *     },
     *     precision?: int,
     *     scale?: int,
     *     length?: int|null
     * }
     */
    private function buildFieldMapping(string $tableName, Column $column): array
    {
        $fieldMapping = [
<<<<<<< HEAD
            'fieldName'  => $this->getFieldNameForColumn($tableName, $column->getName(), false),
            'columnName' => $column->getName(),
=======
            'fieldName'  => $this->getFieldNameForColumn($tableName, self::getAssetName($column), false),
            'columnName' => self::getAssetName($column),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            'type'       => Type::getTypeRegistry()->lookupName($column->getType()),
            'nullable'   => ! $column->getNotnull(),
            'options'    => [
                'comment' => $column->getComment(),
            ],
        ];

        // Type specific elements
        switch ($fieldMapping['type']) {
            case self::ARRAY:
            case Types::BLOB:
            case Types::GUID:
            case self::OBJECT:
            case Types::SIMPLE_ARRAY:
            case Types::STRING:
            case Types::TEXT:
                $fieldMapping['length']           = $column->getLength();
                $fieldMapping['options']['fixed'] = $column->getFixed();
                break;

            case Types::DECIMAL:
            case Types::FLOAT:
                $fieldMapping['precision'] = $column->getPrecision();
                $fieldMapping['scale']     = $column->getScale();
                break;

            case Types::INTEGER:
            case Types::BIGINT:
            case Types::SMALLINT:
                $fieldMapping['options']['unsigned'] = $column->getUnsigned();
                break;
        }

        // Default
        $default = $column->getDefault();
        if ($default !== null) {
            $fieldMapping['options']['default'] = $default;
        }

        return $fieldMapping;
    }

    /**
     * Build to one (one to one, many to one) association mapping from class metadata.
     */
    private function buildToOneAssociationMappings(ClassMetadata $metadata): void
    {
        assert($this->tables !== null);

        $tableName   = $metadata->table['name'];
        $primaryKeys = $this->getTablePrimaryKeys($this->tables[$tableName]);
        $foreignKeys = $this->tables[$tableName]->getForeignKeys();

        foreach ($foreignKeys as $foreignKey) {
<<<<<<< HEAD
            $foreignTableName   = $foreignKey->getForeignTableName();
            $fkColumns          = $foreignKey->getLocalColumns();
            $fkForeignColumns   = $foreignKey->getForeignColumns();
=======
            $foreignTableName   = self::getReferencedTableName($foreignKey);
            $fkColumns          = self::getReferencingColumnNames($foreignKey);
            $fkForeignColumns   = self::getReferencedColumnNames($foreignKey);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $localColumn        = current($fkColumns);
            $associationMapping = [
                'fieldName'    => $this->getFieldNameForColumn($tableName, $localColumn, true),
                'targetEntity' => $this->getClassNameForTable($foreignTableName),
            ];

            if (isset($metadata->fieldMappings[$associationMapping['fieldName']])) {
                $associationMapping['fieldName'] .= '2'; // "foo" => "foo2"
            }

            if ($primaryKeys && in_array($localColumn, $primaryKeys, true)) {
                $associationMapping['id'] = true;
            }

            for ($i = 0, $fkColumnsCount = count($fkColumns); $i < $fkColumnsCount; $i++) {
                $associationMapping['joinColumns'][] = [
                    'name'                 => $fkColumns[$i],
                    'referencedColumnName' => $fkForeignColumns[$i],
                ];
            }

            // Here we need to check if $fkColumns are the same as $primaryKeys
            if (! array_diff($fkColumns, $primaryKeys)) {
                $metadata->mapOneToOne($associationMapping);
            } else {
                $metadata->mapManyToOne($associationMapping);
            }
        }
    }

    /**
     * Retrieve schema table definition primary keys.
     *
     * @return string[]
     */
    private function getTablePrimaryKeys(Table $table): array
    {
        try {
<<<<<<< HEAD
            return $table->getPrimaryKey()->getColumns();
=======
            if (method_exists($table, 'getPrimaryKeyConstraint')) {
                return array_map(static fn (UnqualifiedName $name) => $name->toString(), $table->getPrimaryKeyConstraint()->getColumnNames());
            }

            return self::getIndexedColumns($table->getPrimaryKey());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        } catch (SchemaException) {
            // Do nothing
        }

        return [];
    }

    /**
     * Returns the mapped class name for a table if it exists. Otherwise return "classified" version.
     *
<<<<<<< HEAD
     * @psalm-return class-string
=======
     * @return class-string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    private function getClassNameForTable(string $tableName): string
    {
        if (isset($this->classNamesForTables[$tableName])) {
            return $this->namespace . $this->classNamesForTables[$tableName];
        }

        return $this->namespace . $this->inflector->classify(strtolower($tableName));
    }

    /**
     * Return the mapped field name for a column, if it exists. Otherwise return camelized version.
     *
     * @param bool $fk Whether the column is a foreignkey or not.
     */
    private function getFieldNameForColumn(
        string $tableName,
        string $columnName,
        bool $fk = false,
    ): string {
        if (isset($this->fieldNamesForColumns[$tableName], $this->fieldNamesForColumns[$tableName][$columnName])) {
            return $this->fieldNamesForColumns[$tableName][$columnName];
        }

        $columnName = strtolower($columnName);

        // Replace _id if it is a foreignkey column
        if ($fk) {
            $columnName = preg_replace('/_id$/', '', $columnName);
        }

        return $this->inflector->camelize($columnName);
    }
<<<<<<< HEAD
=======

    private static function getReferencedTableName(ForeignKeyConstraint $foreignKey): string
    {
        if (method_exists(ForeignKeyConstraint::class, 'getReferencedTableName')) {
            return $foreignKey->getReferencedTableName()->toString();
        }

        return $foreignKey->getForeignTableName();
    }

    /** @return string[] */
    private static function getReferencingColumnNames(ForeignKeyConstraint $foreignKey): array
    {
        if (method_exists(ForeignKeyConstraint::class, 'getReferencingColumnNames')) {
            return array_map(static fn (UnqualifiedName $name) => $name->toString(), $foreignKey->getReferencingColumnNames());
        }

        return $foreignKey->getLocalColumns();
    }

    /** @return string[] */
    private static function getReferencedColumnNames(ForeignKeyConstraint $foreignKey): array
    {
        if (method_exists(ForeignKeyConstraint::class, 'getReferencedColumnNames')) {
            return array_map(static fn (UnqualifiedName $name) => $name->toString(), $foreignKey->getReferencedColumnNames());
        }

        return $foreignKey->getForeignColumns();
    }

    /** @return string[] */
    private static function getIndexedColumns(Index $index): array
    {
        if (method_exists(Index::class, 'getIndexedColumns')) {
            return array_map(static fn (IndexedColumn $indexedColumn) => $indexedColumn->getColumnName()->toString(), $index->getIndexedColumns());
        }

        return $index->getColumns();
    }

    private static function getPrimaryKey(Table $table): Index|null
    {
        $primaryKeyConstraint = null;

        if (method_exists(Table::class, 'getPrimaryKeyConstraint')) {
            $primaryKeyConstraint = $table->getPrimaryKeyConstraint();
        }

        foreach ($table->getIndexes() as $index) {
            if ($primaryKeyConstraint !== null) {
                $primaryKeyConstraintColumns = array_map(static fn (UnqualifiedName $name) => $name->toString(), $primaryKeyConstraint->getColumnNames());

                if ($primaryKeyConstraintColumns === self::getIndexedColumns($index)) {
                    return $index;
                }
            } elseif ($index->isPrimary()) {
                return $index;
            }
        }

        return null;
    }

    private static function getAssetName(AbstractAsset $asset): string
    {
        return $asset instanceof NamedObject
            ? $asset->getObjectName()->toString()
            // DBAL < 4.4
            : $asset->getName();
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
