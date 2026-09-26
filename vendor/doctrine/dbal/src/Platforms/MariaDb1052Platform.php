<?php

namespace Doctrine\DBAL\Platforms;

use Doctrine\DBAL\Schema\Index;
use Doctrine\DBAL\Schema\TableDiff;

/**
<<<<<<< HEAD
 * Provides the behavior, features and SQL dialect of the MariaDB 10.5 (10.5.2 GA) database platform.
 *
 * Note: Should not be used with versions prior to 10.5.2.
=======
 * Provides the behavior, features and SQL dialect of the MariaDB 10.5 database platform.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
class MariaDb1052Platform extends MariaDb1043Platform
{
    /**
     * {@inheritDoc}
     */
    protected function getPreAlterTableRenameIndexForeignKeySQL(TableDiff $diff)
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    protected function getPostAlterTableRenameIndexForeignKeySQL(TableDiff $diff)
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    protected function getRenameIndexSQL($oldIndexName, Index $index, $tableName)
    {
        return ['ALTER TABLE ' . $tableName . ' RENAME INDEX ' . $oldIndexName . ' TO ' . $index->getQuotedName($this)];
    }
}
