<?php

namespace Doctrine\DBAL\Exception;

use InvalidArgumentException;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
class MalformedDsnException extends InvalidArgumentException
{
    public static function new(): self
    {
        return new self('Malformed database connection URL');
    }
}
