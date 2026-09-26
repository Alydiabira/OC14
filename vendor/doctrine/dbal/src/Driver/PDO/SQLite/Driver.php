<?php

namespace Doctrine\DBAL\Driver\PDO\SQLite;

use Doctrine\DBAL\Driver\AbstractSQLiteDriver;
use Doctrine\DBAL\Driver\API\SQLite\UserDefinedFunctions;
use Doctrine\DBAL\Driver\PDO\Connection;
use Doctrine\DBAL\Driver\PDO\Exception;
<<<<<<< HEAD
use Doctrine\Deprecations\Deprecation;
use PDO;
=======
use Doctrine\DBAL\Driver\PDO\PDOConnect;
use Doctrine\Deprecations\Deprecation;
use Pdo\Sqlite;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use PDOException;
use SensitiveParameter;

use function array_intersect_key;

final class Driver extends AbstractSQLiteDriver
{
<<<<<<< HEAD
=======
    use PDOConnect;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * {@inheritDoc}
     *
     * @return Connection
     */
    public function connect(
        #[SensitiveParameter]
        array $params
    ) {
        $driverOptions        = $params['driverOptions'] ?? [];
        $userDefinedFunctions = [];

        if (isset($driverOptions['userDefinedFunctions'])) {
            Deprecation::trigger(
                'doctrine/dbal',
                'https://github.com/doctrine/dbal/pull/5742',
                'The SQLite-specific driver option "userDefinedFunctions" is deprecated.'
                    . ' Register function directly on the native connection instead.',
            );

            $userDefinedFunctions = $driverOptions['userDefinedFunctions'];
            unset($driverOptions['userDefinedFunctions']);
        }

        try {
<<<<<<< HEAD
            $pdo = new PDO(
=======
            $pdo = $this->doConnect(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $this->constructPdoDsn(array_intersect_key($params, ['path' => true, 'memory' => true])),
                $params['user'] ?? '',
                $params['password'] ?? '',
                $driverOptions,
            );
        } catch (PDOException $exception) {
            throw Exception::new($exception);
        }

        UserDefinedFunctions::register(
<<<<<<< HEAD
            [$pdo, 'sqliteCreateFunction'],
=======
            $pdo instanceof Sqlite ? [$pdo, 'createFunction'] : [$pdo, 'sqliteCreateFunction'],
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $userDefinedFunctions,
        );

        return new Connection($pdo);
    }

    /**
     * Constructs the Sqlite PDO DSN.
     *
     * @param array<string, mixed> $params
     */
    private function constructPdoDsn(array $params): string
    {
        $dsn = 'sqlite:';
        if (isset($params['path'])) {
            $dsn .= $params['path'];
        } elseif (isset($params['memory'])) {
            $dsn .= ':memory:';
        }

        return $dsn;
    }
}
