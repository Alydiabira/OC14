<?php

namespace Doctrine\DBAL\Exception;

use Doctrine\DBAL\Exception;

use function sprintf;

<<<<<<< HEAD
/**
 * @internal
 *
 * @psalm-immutable
 */
=======
/** @internal */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class NoKeyValue extends Exception
{
    public static function fromColumnCount(int $columnCount): self
    {
        return new self(
            sprintf(
                'Fetching as key-value pairs requires the result to contain at least 2 columns, %d given.',
                $columnCount,
            ),
        );
    }
}
