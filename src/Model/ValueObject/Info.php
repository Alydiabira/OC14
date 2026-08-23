<?php

declare(strict_types=1);

namespace App\Model\ValueObject;

final class Info
{
    public function __construct(
        private int $count,
        private int $offsetFrom,
        private int $offsetTo,
        private int $total
    ) {}

    public function getCount(): int
    {
        return $this->count;
    }

    public function getOffsetFrom(): int
    {
        return $this->offsetFrom;
    }

    public function getOffsetTo(): int
    {
        return $this->offsetTo;
    }

    public function getTotal(): int
    {
        return $this->total;
    }
}
