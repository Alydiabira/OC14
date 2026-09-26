<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver\IBMDB2\Exception;

use Doctrine\DBAL\Driver\AbstractException;

use function preg_match;

<<<<<<< HEAD
/**
 * @internal
 *
 * @psalm-immutable
 */
=======
/** @internal */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class Factory
{
    /**
     * @param callable(int): T $constructor
     *
     * @return T
     *
     * @template T of AbstractException
     */
    public static function create(string $message, callable $constructor): AbstractException
    {
        $code = 0;

        if (preg_match('/ SQL(\d+)N /', $message, $matches) === 1) {
            $code = -(int) $matches[1];
        }

        return $constructor($code);
    }
}
