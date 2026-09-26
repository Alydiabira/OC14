<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\Mysqli\Exception;

use Doctrine\DBAL\Driver\AbstractException;
use mysqli;
use mysqli_sql_exception;
use ReflectionProperty;

<<<<<<< HEAD
/**
 * @internal
 *
 * @psalm-immutable
 */
=======
use const PHP_VERSION_ID;

/** @internal */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class ConnectionError extends AbstractException
{
    public static function new(mysqli $connection): self
    {
        return new self($connection->error, $connection->sqlstate, $connection->errno);
    }

    public static function upcast(mysqli_sql_exception $exception): self
    {
        $p = new ReflectionProperty(mysqli_sql_exception::class, 'sqlstate');
<<<<<<< HEAD
        $p->setAccessible(true);
=======
        if (PHP_VERSION_ID < 80100) {
            $p->setAccessible(true);
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return new self($exception->getMessage(), $p->getValue($exception), (int) $exception->getCode(), $exception);
    }
}
