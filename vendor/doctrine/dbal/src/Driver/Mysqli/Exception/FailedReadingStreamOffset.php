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
final class FailedReadingStreamOffset extends AbstractException
{
    public static function new(int $parameter): self
    {
        return new self(sprintf('Failed reading the stream resource for parameter #%d.', $parameter));
    }
}
