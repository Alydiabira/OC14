<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Schema\Exception;

use Doctrine\DBAL\Schema\SchemaException;

use function sprintf;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class NamespaceAlreadyExists extends SchemaException
{
    public static function new(string $namespaceName): self
    {
        return new self(
            sprintf('The namespace with name "%s" already exists.', $namespaceName),
            self::NAMESPACE_ALREADY_EXISTS,
        );
    }
}
