<?php

declare(strict_types=1);

namespace App\Model\ValueObject;

final readonly class Info
{
    public function __construct(
        public int $count,
        public int $start,
        public int $end,
        public int $total
    ) {}
}
