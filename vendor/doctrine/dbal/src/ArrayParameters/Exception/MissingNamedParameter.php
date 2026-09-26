<?php

namespace Doctrine\DBAL\ArrayParameters\Exception;

use Doctrine\DBAL\ArrayParameters\Exception;
use LogicException;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
class MissingNamedParameter extends LogicException implements Exception
{
    public static function new(string $name): self
    {
        return new self(
            sprintf('Named parameter "%s" does not have a bound value.', $name),
        );
    }
}
