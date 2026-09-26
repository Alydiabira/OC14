<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\OCI8\Exception;

use Doctrine\DBAL\Driver\AbstractException;

<<<<<<< HEAD
/**
 * @internal
 *
 * @psalm-immutable
 */
=======
/** @internal */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class SequenceDoesNotExist extends AbstractException
{
    public static function new(): self
    {
        return new self('lastInsertId failed: Query was executed but no result was returned.');
    }
}
