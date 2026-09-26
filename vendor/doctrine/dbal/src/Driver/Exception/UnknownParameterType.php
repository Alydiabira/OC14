<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\Exception;

use Doctrine\DBAL\Driver\AbstractException;

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
final class UnknownParameterType extends AbstractException
{
    /** @param mixed $type */
    public static function new($type): self
    {
        return new self(sprintf('Unknown parameter type, %d given.', $type));
    }
}
