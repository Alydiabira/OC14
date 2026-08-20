<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\Review;
use App\Model\Entity\User;
use App\Model\Entity\VideoGame;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class ReviewFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        foreach (range(0, 49) as $i) {
            $review = new Review();

            $review->setVideoGame(
                $this->getReference('video-game-' . $i, VideoGame::class)
            );

            $review->setUser(
                $this->getReference('user-' . (($i % 2) + 1), User::class)
            );

            $review->setNote(($i % 5) + 1);
            $review->setComment('Commentaire ' . $i);

            $manager->persist($review);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
            VideoGameFixtures::class,
        ];
    }
}
