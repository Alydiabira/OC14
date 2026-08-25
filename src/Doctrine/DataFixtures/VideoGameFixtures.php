<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\VideoGame;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class VideoGameFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        foreach (range(0, 49) as $i) {
            $videoGame = (new VideoGame())
                ->setTitle("Jeu vidéo $i")
                ->setSlug("jeu-video-$i")
                ->setDescription("Description du jeu vidéo $i")
                ->setReleaseDate(new \DateTimeImmutable('2024-01-01'))
                ->setTest("Test du jeu vidéo $i")
                ->setRating(($i % 5) + 1)
                ->setImageName("video_game_$i.png")
                ->setImageSize(1000);

            $manager->persist($videoGame);

            $this->addReference("video-game-$i", $videoGame);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            TagFixtures::class,
            UserFixtures::class,
        ];
    }
}
