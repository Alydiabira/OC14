<?php

namespace Doctrine\DBAL\Exception;

use Doctrine\DBAL\Exception;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
class InvalidLockMode extends Exception
{
    public static function fromLockMode(int $lockMode): self
    {
        return new self(
            sprintf(
                'Lock mode %d is invalid. The valid values are LockMode::NONE, LockMode::OPTIMISTIC'
                    . ', LockMode::PESSIMISTIC_READ and LockMode::PESSIMISTIC_WRITE',
                $lockMode,
            ),
        );
    }
}
