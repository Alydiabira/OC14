<?php

declare(strict_types=1);

namespace App\Model\ValueObject;

enum Sorting: string
{
    case Title = 'title';
    case ReleaseDate = 'releaseDate';
    case Rating = 'rating';
    case AverageRating = 'averageRating';

    public function toSql(): string
    {
        return $this->value; // PAS "vg.title"
    }
}
