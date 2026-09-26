<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\Mysqli\Exception;

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
final class InvalidOption extends AbstractException
{
    /** @param mixed $value */
    public static function fromOption(int $option, $value): self
    {
        return new self(
            sprintf('Failed to set option %d with value "%s"', $option, $value),
        );
    }
}
