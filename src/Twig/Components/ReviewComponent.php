<?php

declare(strict_types=1);

namespace App\Twig\Components;

use App\Model\Entity\Review;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('Review')]
class ReviewComponent
{
    public Review $review;
}
