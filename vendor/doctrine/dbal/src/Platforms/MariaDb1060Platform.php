<?php

namespace Doctrine\DBAL\Platforms;

use Doctrine\DBAL\SQL\Builder\SelectSQLBuilder;

/**
<<<<<<< HEAD
 * Provides the behavior, features and SQL dialect of the MariaDB 10.6 (10.6.0 GA) database platform.
=======
 * Provides the behavior, features and SQL dialect of the MariaDB 10.6 database platform.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
class MariaDb1060Platform extends MariaDb1052Platform
{
    public function createSelectSQLBuilder(): SelectSQLBuilder
    {
        return AbstractPlatform::createSelectSQLBuilder();
    }
}
