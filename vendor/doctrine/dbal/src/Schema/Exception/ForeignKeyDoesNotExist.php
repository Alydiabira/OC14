<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Schema\Exception;

use Doctrine\DBAL\Schema\SchemaException;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class ForeignKeyDoesNotExist extends SchemaException
{
    public static function new(string $foreignKeyName, string $table): self
    {
        return new self(
            sprintf('There exists no foreign key with the name "%s" on table "%s".', $foreignKeyName, $table),
            self::FOREIGNKEY_DOESNT_EXIST,
        );
    }
}
