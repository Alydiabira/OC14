<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Schema\Exception;

use Doctrine\DBAL\Schema\SchemaException;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class SequenceAlreadyExists extends SchemaException
{
    public static function new(string $sequenceName): self
    {
        return new self(
            sprintf('The sequence "%s" already exists.', $sequenceName),
            self::SEQUENCE_ALREADY_EXISTS,
        );
    }
}
