<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Schema\Exception;

use Doctrine\DBAL\Schema\SchemaException;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class UniqueConstraintDoesNotExist extends SchemaException
{
    public static function new(string $constraintName, string $table): self
    {
        return new self(
            sprintf('There exists no unique constraint with the name "%s" on table "%s".', $constraintName, $table),
            self::CONSTRAINT_DOESNT_EXIST,
        );
    }
}
