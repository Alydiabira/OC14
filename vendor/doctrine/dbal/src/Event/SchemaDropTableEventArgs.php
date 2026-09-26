<?php

namespace Doctrine\DBAL\Event;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Schema\Table;
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Event Arguments used when the SQL query for dropping tables are generated inside {@see AbstractPlatform}.
 *
 * @deprecated
 */
class SchemaDropTableEventArgs extends SchemaEventArgs
{
    /** @var string|Table */
    private $table;

    private AbstractPlatform $platform;

    /** @var string|null */
    private $sql;

<<<<<<< HEAD
    /**
     * @param string|Table $table
     *
     * @throws InvalidArgumentException
     */
=======
    /** @param string|Table $table */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct($table, AbstractPlatform $platform)
    {
        $this->table    = $table;
        $this->platform = $platform;
    }

    /** @return string|Table */
    public function getTable()
    {
        return $this->table;
    }

    /** @return AbstractPlatform */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string $sql
     *
     * @return SchemaDropTableEventArgs
     */
    public function setSql($sql)
    {
        $this->sql = $sql;

        return $this;
    }

    /** @return string|null */
    public function getSql()
    {
        return $this->sql;
    }
}
