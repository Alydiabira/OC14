<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

<<<<<<< HEAD
interface ToManyAssociationMapping
{
    /** @psalm-assert-if-true string $this->indexBy() */
=======
use SortDirection;

interface ToManyAssociationMapping
{
    /** @phpstan-assert-if-true string $this->indexBy() */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function isIndexed(): bool;

    public function indexBy(): string;

<<<<<<< HEAD
    /** @return array<string, 'asc'|'desc'> */
=======
    /** @return array<string, SortDirection|'asc'|'desc'> */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function orderBy(): array;
}
