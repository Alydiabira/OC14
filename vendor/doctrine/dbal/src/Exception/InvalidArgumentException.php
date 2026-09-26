<?php

namespace Doctrine\DBAL\Exception;

use Doctrine\DBAL\Exception;

/**
 * Exception to be thrown when invalid arguments are passed to any DBAL API
<<<<<<< HEAD
 *
 * @psalm-immutable
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
class InvalidArgumentException extends Exception
{
    /** @return self */
    public static function fromEmptyCriteria()
    {
        return new self('Empty criteria was used, expected non-empty criteria');
    }
}
