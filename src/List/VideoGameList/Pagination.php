<?php

declare(strict_types=1);

namespace App\List\VideoGameList;

use App\Model\ValueObject\Page;
use App\Model\ValueObject\Direction;
use App\Model\ValueObject\Sorting;

final class Pagination
{
    /** @var Page[] */
    private array $pages = [];

    public function __construct(
        private int $page,
        private int $limit,
        private Sorting $sorting,
        private Direction $direction,
        private int $total = 0,
        private int $count = 0
    ) {
    }

    public function init(int $total, int $count): void
    {
        $this->total = $total;
        $this->count = $count;
        $this->pages = [];
    }

    public function add(Page $page): void
    {
        $this->pages[] = $page;
    }

    /**
     * @return Page[]
     */
    public function getPages(): array
    {
        return $this->pages;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return ($this->page - 1) * $this->limit;
    }

    public function getLastPage(): int
    {
        if ($this->total === 0) {
            return 1;
        }

        return (int) ceil($this->total / $this->limit);
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getSorting(): Sorting
    {
        return $this->sorting;
    }

    public function getDirection(): Direction
    {
        return $this->direction;
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'limit'     => $this->limit,
            'sorting'   => $this->sorting->value,
            'direction' => $this->direction->value,
        ];
    }
}
