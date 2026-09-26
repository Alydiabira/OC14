<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping\Builder;

<<<<<<< HEAD
=======
use SortDirection;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * OneToMany Association Builder
 *
 * @link        www.doctrine-project.com
 */
class OneToManyAssociationBuilder extends AssociationBuilder
{
    /**
<<<<<<< HEAD
     * @psalm-param array<string, string> $fieldNames
=======
     * @phpstan-param array<string, string|SortDirection> $fieldNames
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return $this
     */
    public function setOrderBy(array $fieldNames): static
    {
        $this->mapping['orderBy'] = $fieldNames;

        return $this;
    }

    /** @return $this */
    public function setIndexBy(string $fieldName): static
    {
        $this->mapping['indexBy'] = $fieldName;

        return $this;
    }

    public function build(): ClassMetadataBuilder
    {
        $mapping = $this->mapping;
        if ($this->joinColumns) {
            $mapping['joinColumns'] = $this->joinColumns;
        }

        $cm = $this->builder->getClassMetadata();
        $cm->mapOneToMany($mapping);

        return $this->builder;
    }
}
