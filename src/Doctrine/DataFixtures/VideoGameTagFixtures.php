<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\VideoGame;
use App\Model\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class VideoGameTagFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $games = $manager->getRepository(VideoGame::class)->findAll();
        $tags = $manager->getRepository(Tag::class)->findAll();

        foreach ($games as $game) {
            // Chaque jeu reçoit 2 tags
            $game->addTag($tags[array_rand($tags)]);
            $game->addTag($tags[array_rand($tags)]);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            VideoGameFixtures::class,
            TagFixtures::class,
        ];
    }
}
