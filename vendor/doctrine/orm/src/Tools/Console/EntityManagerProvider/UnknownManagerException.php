<?php

declare(strict_types=1);

namespace Doctrine\ORM\Tools\Console\EntityManagerProvider;

use OutOfBoundsException;

use function implode;
use function sprintf;

final class UnknownManagerException extends OutOfBoundsException
{
<<<<<<< HEAD
    /** @psalm-param list<string> $knownManagers */
=======
    /** @phpstan-param list<string> $knownManagers */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public static function unknownManager(string $unknownManager, array $knownManagers = []): self
    {
        return new self(sprintf(
            'Requested unknown entity manager: %s, known managers: %s',
            $unknownManager,
            implode(', ', $knownManagers),
        ));
    }
}
