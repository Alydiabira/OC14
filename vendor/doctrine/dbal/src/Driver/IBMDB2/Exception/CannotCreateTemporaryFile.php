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
final class CannotCreateTemporaryFile extends AbstractException
{
    /** @psalm-param array{message: string}|null $error */
=======
/** @internal */
final class CannotCreateTemporaryFile extends AbstractException
{
    /** @param array{message: string}|null $error */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public static function new(?array $error): self
    {
        $message = 'Could not create temporary file';

        if ($error !== null) {
            $message .= ': ' . $error['message'];
        }

        return new self($message);
    }
}
