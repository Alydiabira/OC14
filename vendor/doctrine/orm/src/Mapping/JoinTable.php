<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final class JoinTable implements MappingAttribute
{
    /** @var array<JoinColumn> */
    public readonly array $joinColumns;

    /** @var array<JoinColumn> */
    public readonly array $inverseJoinColumns;

    /**
     * @param array<JoinColumn>|JoinColumn $joinColumns
     * @param array<JoinColumn>|JoinColumn $inverseJoinColumns
     * @param array<string, mixed>         $options
     */
    public function __construct(
        public readonly string|null $name = null,
        public readonly string|null $schema = null,
        array|JoinColumn $joinColumns = [],
        array|JoinColumn $inverseJoinColumns = [],
<<<<<<< HEAD
=======
        public readonly string|null $foreignKeyName = null,
        public readonly string|null $inverseForeignKeyName = null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        public readonly array $options = [],
    ) {
        $this->joinColumns        = $joinColumns instanceof JoinColumn ? [$joinColumns] : $joinColumns;
        $this->inverseJoinColumns = $inverseJoinColumns instanceof JoinColumn
            ? [$inverseJoinColumns]
            : $inverseJoinColumns;
    }
}
