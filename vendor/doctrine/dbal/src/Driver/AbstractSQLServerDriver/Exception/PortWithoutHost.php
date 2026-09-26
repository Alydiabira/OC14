<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\AbstractSQLServerDriver\Exception;

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
final class PortWithoutHost extends AbstractException
{
    public static function new(): self
    {
        return new self('Connection port specified without the host');
    }
}
