<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;
<<<<<<< HEAD
=======
use Doctrine\Deprecations\Deprecation;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

#[Attribute(Attribute::TARGET_CLASS)]
final class Table implements MappingAttribute
{
    /**
     * @param array<Index>|null            $indexes
     * @param array<UniqueConstraint>|null $uniqueConstraints
     * @param array<string,mixed>          $options
     */
    public function __construct(
        public readonly string|null $name = null,
        public readonly string|null $schema = null,
        public readonly array|null $indexes = null,
        public readonly array|null $uniqueConstraints = null,
        public readonly array $options = [],
    ) {
<<<<<<< HEAD
=======
        if ($this->indexes !== null) {
            Deprecation::trigger(
                'doctrine/orm',
                'https://github.com/doctrine/orm/pull/11357',
                'Providing the property $indexes on %s does not have any effect and will be removed in Doctrine ORM 4.0. Please use the %s attribute instead.',
                self::class,
                Index::class,
            );
        }

        if ($this->uniqueConstraints !== null) {
            Deprecation::trigger(
                'doctrine/orm',
                'https://github.com/doctrine/orm/pull/11357',
                'Providing the property $uniqueConstraints on %s does not have any effect and will be removed in Doctrine ORM 4.0. Please use the %s attribute instead.',
                self::class,
                UniqueConstraint::class,
            );
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
