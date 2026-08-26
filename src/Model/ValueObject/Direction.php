<?php

declare(strict_types=1);

namespace App\Model\ValueObject;

enum Direction: string
{
    case Ascending = 'Ascending';
    case Descending = 'Descending';

    public function toSql(): string
    {
        return match($this) {
            self::Ascending => 'ASC',
            self::Descending => 'DESC',
        };
    }
}
