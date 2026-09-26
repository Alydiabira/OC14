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
final class PrepareFailed extends AbstractException
{
    /** @psalm-param array{message: string}|null $error */
=======
/** @internal */
final class PrepareFailed extends AbstractException
{
    /** @param array{message: string}|null $error */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public static function new(?array $error): self
    {
        if ($error === null) {
            return new self('Unknown error');
        }

        return new self($error['message']);
    }
}
