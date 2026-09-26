<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\IBMDB2\Exception;

use Doctrine\DBAL\Driver\AbstractException;

<<<<<<< HEAD
/**
 * @internal
 *
 * @psalm-immutable
 */
final class CannotCopyStreamToStream extends AbstractException
{
    /** @psalm-param array{message: string}|null $error */
=======
/** @internal */
final class CannotCopyStreamToStream extends AbstractException
{
    /** @param array{message: string}|null $error */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public static function new(?array $error): self
    {
        $message = 'Could not copy source stream to temporary file';

        if ($error !== null) {
            $message .= ': ' . $error['message'];
        }

        return new self($message);
    }
}
