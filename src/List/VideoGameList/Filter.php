<?php

declare(strict_types=1);

namespace App\List\VideoGameList;

use App\Model\Entity\Tag;

final class Filter
{
    /**
     * @param Tag[] $tags
     */
    public function __construct(
        private ?string $search = null,
        private array $tags = []
    ) {
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setSearch(?string $search): Filter
    {
        $this->search = $search;
        return $this;
    }

<<<<<<< HEAD
    /**
     * @return Tag[]
     */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getTags(): array
    {
        return $this->tags;
    }

<<<<<<< HEAD
    /**
     * @param Tag[] $tags
     */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function setTags(array $tags): Filter
    {
        $this->tags = $tags;
        return $this;
    }
}
