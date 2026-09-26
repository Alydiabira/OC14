<?php

namespace Doctrine\DBAL\ArrayParameters\Exception;

use Doctrine\DBAL\ArrayParameters\Exception;
use LogicException;

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
class MissingPositionalParameter extends LogicException implements Exception
{
    public static function new(int $index): self
    {
        return new self(
            sprintf('Positional parameter at index %d does not have a bound value.', $index),
        );
    }
}
