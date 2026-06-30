<?php

declare(strict_types=1);

namespace App\Twig\Components;

use App\Model\Entity\VideoGame;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Progress
{
    public VideoGame $videoGame;

    public function getPercent(): int
    {
        $reviews = $this->videoGame->getReviews();

        if ($reviews->count() === 0) {
            return 0;
        }

        $sum = 0;

        foreach ($reviews as $review) {
            // IMPORTANT : remplacer note par rating
            $sum += $review->getRating();
        }

        // Calcul OC14 : rating sur 5 → pourcentage
        return (int) round(($sum / ($reviews->count() * 5)) * 100);
    }
}
