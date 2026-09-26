<?php

namespace Doctrine\DBAL\Driver\OCI8\Middleware;

use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\Driver\Middleware;
use Doctrine\DBAL\Driver\Middleware\AbstractDriverMiddleware;
use SensitiveParameter;

class InitializeSession implements Middleware
{
    public function wrap(Driver $driver): Driver
    {
        return new class ($driver) extends AbstractDriverMiddleware {
            /**
             * {@inheritDoc}
             */
            public function connect(
                #[SensitiveParameter]
                array $params
            ): Connection {
                $connection = parent::connect($params);

                $connection->exec(
                    'ALTER SESSION SET'
                        . " NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS'"
                        . " NLS_TIME_FORMAT = 'HH24:MI:SS'"
<<<<<<< HEAD
                        . " NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS'"
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        . " NLS_TIMESTAMP_FORMAT = 'YYYY-MM-DD HH24:MI:SS'"
                        . " NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS TZH:TZM'"
                        . " NLS_NUMERIC_CHARACTERS = '.,'",
                );

                return $connection;
            }
        };
    }
}
