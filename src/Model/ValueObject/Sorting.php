<?php

declare(strict_types=1);

namespace App\Model\ValueObject;

enum Sorting: string
{
    case ReleaseDate = 'ReleaseDate';
    case Title = 'Title';
    case Rating = 'Rating';
    case AverageRating = 'AverageRating';

    public function toSql(): string
    {
        return match ($this) {
            self::ReleaseDate => 'vg.releaseDate',
            self::Title => 'vg.title',
            self::Rating => 'vg.rating',
            self::AverageRating => 'vg.averageRating',
        };
    }
}
