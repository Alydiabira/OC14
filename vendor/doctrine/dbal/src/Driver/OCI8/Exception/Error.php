<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\OCI8\Exception;

use Doctrine\DBAL\Driver\AbstractException;

use function assert;
use function oci_error;

<<<<<<< HEAD
/**
 * @internal
 *
 * @psalm-immutable
 */
=======
/** @internal */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class Error extends AbstractException
{
    /** @param resource $resource */
    public static function new($resource): self
    {
        $error = oci_error($resource);
        assert($error !== false);

        return new self($error['message'], null, $error['code']);
    }
}
