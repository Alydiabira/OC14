<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\PgSQL\Exception;

use Doctrine\DBAL\Driver\Exception;
use UnexpectedValueException;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class UnexpectedValue extends UnexpectedValueException implements Exception
{
    public static function new(string $value, string $type): self
    {
        return new self(sprintf(
            'Unexpected value "%s" of type "%s" returned by Postgres',
            $value,
            $type,
        ));
    }

    /** @return null */
    public function getSQLState()
    {
        return null;
    }
}
