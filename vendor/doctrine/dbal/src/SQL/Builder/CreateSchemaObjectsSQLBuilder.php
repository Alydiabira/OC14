<?php

namespace Doctrine\DBAL\SQL\Builder;

use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\Sequence;
use Doctrine\DBAL\Schema\Table;

use function array_merge;

final class CreateSchemaObjectsSQLBuilder
{
    private AbstractPlatform $platform;

    public function __construct(AbstractPlatform $platform)
    {
        $this->platform = $platform;
    }

    /**
     * @return list<string>
     *
     * @throws Exception
     */
    public function buildSQL(Schema $schema): array
    {
        return array_merge(
            $this->buildNamespaceStatements($schema->getNamespaces()),
            $this->buildSequenceStatements($schema->getSequences()),
            $this->buildTableStatements($schema->getTables()),
        );
    }

    /**
<<<<<<< HEAD
     * @param list<string> $namespaces
=======
     * @param string[] $namespaces
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return list<string>
     *
     * @throws Exception
     */
    private function buildNamespaceStatements(array $namespaces): array
    {
        $statements = [];

        if ($this->platform->supportsSchemas()) {
            foreach ($namespaces as $namespace) {
                $statements[] = $this->platform->getCreateSchemaSQL($namespace);
            }
        }

        return $statements;
    }

    /**
<<<<<<< HEAD
     * @param list<Table> $tables
=======
     * @param Table[] $tables
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return list<string>
     *
     * @throws Exception
     */
    private function buildTableStatements(array $tables): array
    {
        return $this->platform->getCreateTablesSQL($tables);
    }

    /**
<<<<<<< HEAD
     * @param list<Sequence> $sequences
=======
     * @param Sequence[] $sequences
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return list<string>
     *
     * @throws Exception
     */
    private function buildSequenceStatements(array $sequences): array
    {
        $statements = [];

        foreach ($sequences as $sequence) {
            $statements[] = $this->platform->getCreateSequenceSQL($sequence);
        }

        return $statements;
    }
}
