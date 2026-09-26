<?php

namespace Doctrine\DBAL\Driver\PDO\OCI;

use Doctrine\DBAL\Driver\AbstractOracleDriver;
use Doctrine\DBAL\Driver\PDO\Connection;
use Doctrine\DBAL\Driver\PDO\Exception;
<<<<<<< HEAD
=======
use Doctrine\DBAL\Driver\PDO\PDOConnect;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use PDO;
use PDOException;
use SensitiveParameter;

final class Driver extends AbstractOracleDriver
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
        $driverOptions = $params['driverOptions'] ?? [];

        if (! empty($params['persistent'])) {
            $driverOptions[PDO::ATTR_PERSISTENT] = true;
        }

        $safeParams = $params;
        unset($safeParams['password'], $safeParams['url']);

        try {
<<<<<<< HEAD
            $pdo = new PDO(
=======
            $pdo = $this->doConnect(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $this->constructPdoDsn($params),
                $params['user'] ?? '',
                $params['password'] ?? '',
                $driverOptions,
            );
        } catch (PDOException $exception) {
            throw Exception::new($exception);
        }

        return new Connection($pdo);
    }

    /**
     * Constructs the Oracle PDO DSN.
     *
     * @param mixed[] $params
     */
    private function constructPdoDsn(array $params): string
    {
        $dsn = 'oci:dbname=' . $this->getEasyConnectString($params);

        if (isset($params['charset'])) {
            $dsn .= ';charset=' . $params['charset'];
        }

        return $dsn;
    }
}
