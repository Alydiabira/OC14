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
        // Récupération des tags via références
        $tag1 = $this->getReference('tag-1', Tag::class);
        $tag2 = $this->getReference('tag-2', Tag::class);
        $tag3 = $this->getReference('tag-3', Tag::class);
        $tag4 = $this->getReference('tag-4', Tag::class);
        $tag5 = $this->getReference('tag-5', Tag::class);

        foreach (range(0, 49) as $i) {
            /** @var VideoGame $game */
            $game = $this->getReference('video-game-' . $i, VideoGame::class);

            // Tag 1 pour tous les jeux
            $game->addTag($tag1);

            // Tag 2 pour jeux >= 22
            if ($i >= 22) {
                $game->addTag($tag2);
            }

            // Tag 3 pour jeux >= 23
            if ($i >= 23) {
                $game->addTag($tag3);
            }

            // Tag 4 pour jeux >= 24
            if ($i >= 24) {
                $game->addTag($tag4);
            }

            // Tag 5 pour jeux >= 25
            if ($i >= 25) {
                $game->addTag($tag5);
            }
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
