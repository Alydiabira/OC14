<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\Mysqli\Exception;

use Doctrine\DBAL\Driver\AbstractException;
use mysqli;
use mysqli_sql_exception;
use ReflectionProperty;

use function sprintf;

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
final class InvalidCharset extends AbstractException
{
    public static function fromCharset(mysqli $connection, string $charset): self
    {
        return new self(
            sprintf('Failed to set charset "%s": %s', $charset, $connection->error),
            $connection->sqlstate,
            $connection->errno,
        );
    }

    public static function upcast(mysqli_sql_exception $exception, string $charset): self
    {
        $p = new ReflectionProperty(mysqli_sql_exception::class, 'sqlstate');
<<<<<<< HEAD
        $p->setAccessible(true);
=======
        if (PHP_VERSION_ID < 80100) {
            $p->setAccessible(true);
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return new self(
            sprintf('Failed to set charset "%s": %s', $charset, $exception->getMessage()),
            $p->getValue($exception),
            (int) $exception->getCode(),
            $exception,
        );
    }
}
