<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Schema\Exception;

use Doctrine\DBAL\Schema\SchemaException;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class ColumnDoesNotExist extends SchemaException
{
    public static function new(string $columnName, string $table): self
    {
        return new self(
            sprintf('There is no column with name "%s" on table "%s".', $columnName, $table),
            self::COLUMN_DOESNT_EXIST,
        );
    }
}
