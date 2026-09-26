<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

trait JoinColumnProperties
{
    /** @param array<string, mixed> $options */
    public function __construct(
        public readonly string|null $name = null,
<<<<<<< HEAD
        public readonly string $referencedColumnName = 'id',
        public readonly bool $unique = false,
        public readonly bool $nullable = true,
        public readonly mixed $onDelete = null,
        public readonly string|null $columnDefinition = null,
        public readonly string|null $fieldName = null,
=======
        public readonly string|null $referencedColumnName = null,
        public readonly bool $deferrable = false,
        public readonly bool $unique = false,
        public readonly bool|null $nullable = null,
        public readonly mixed $onDelete = null,
        public readonly string|null $columnDefinition = null,
        public readonly string|null $fieldName = null,
        public readonly string|null $foreignKeyName = null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        public readonly array $options = [],
    ) {
    }
}
