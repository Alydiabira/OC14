<?php

namespace Doctrine\DBAL\Driver\PgSQL\Exception;

use Doctrine\DBAL\Driver\AbstractException;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class UnknownParameter extends AbstractException
{
    public static function new(string $param): self
    {
        return new self(
            sprintf('Could not find parameter %s in the SQL statement', $param),
        );
    }
}
