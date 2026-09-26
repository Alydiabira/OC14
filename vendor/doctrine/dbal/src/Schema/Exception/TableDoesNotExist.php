<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Schema\Exception;

use Doctrine\DBAL\Schema\SchemaException;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class TableDoesNotExist extends SchemaException
{
    public static function new(string $tableName): self
    {
        return new self(
            sprintf('There is no table with name "%s" in the schema.', $tableName),
            self::TABLE_DOESNT_EXIST,
        );
    }
}
