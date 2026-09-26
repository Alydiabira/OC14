<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Exception;

use Doctrine\DBAL\Exception;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
class DatabaseRequired extends Exception
{
    public static function new(string $methodName): self
    {
        return new self(sprintf('A database is required for the method: %s.', $methodName));
    }
}
