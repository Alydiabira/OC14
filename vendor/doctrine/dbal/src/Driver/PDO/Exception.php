<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\PDO;

use Doctrine\DBAL\Driver\AbstractException;
use PDOException;

<<<<<<< HEAD
/**
 * @internal
 *
 * @psalm-immutable
 */
=======
/** @internal */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class Exception extends AbstractException
{
    public static function new(PDOException $exception): self
    {
        if ($exception->errorInfo !== null) {
            [$sqlState, $code] = $exception->errorInfo;

            $code ??= 0;
        } else {
            $code     = $exception->getCode();
            $sqlState = null;
        }

        return new self($exception->getMessage(), $sqlState, $code, $exception);
    }
}
