<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Schema\Exception;

use Doctrine\DBAL\Schema\ForeignKeyConstraint;
use Doctrine\DBAL\Schema\SchemaException;
use Doctrine\DBAL\Schema\Table;

use function implode;
use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class NamedForeignKeyRequired extends SchemaException
{
    public static function new(Table $localTable, ForeignKeyConstraint $foreignKey): self
    {
        return new self(
            sprintf(
                'The performed schema operation on "%s" requires a named foreign key, ' .
                'but the given foreign key from (%s) onto foreign table "%s" (%s) is currently unnamed.',
                $localTable->getName(),
                implode(', ', $foreignKey->getColumns()),
                $foreignKey->getForeignTableName(),
                implode(', ', $foreignKey->getForeignColumns()),
            ),
        );
    }
}
