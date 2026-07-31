<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\Review;
use App\Model\Entity\User;
use App\Model\Entity\VideoGame;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

final class ReviewFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        $users = $manager->getRepository(User::class)->findAll();
        $games = $manager->getRepository(VideoGame::class)->findAll();

        foreach ($games as $game) {
            // 3 reviews par jeu
            for ($i = 0; $i < 3; $i++) {
                $review = (new Review())
                    ->setRating($faker->numberBetween(1, 5))
                    ->setComment($faker->sentence(10))
                    ->setUser($faker->randomElement($users))
                    ->setVideoGame($game);

                $manager->persist($review);
            }
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
