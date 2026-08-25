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
        $tag1 = $this->getReference('tag-1', Tag::class);
        $tag2 = $this->getReference('tag-2', Tag::class);
        $tag3 = $this->getReference('tag-3', Tag::class);
        $tag4 = $this->getReference('tag-4', Tag::class);
        $tag5 = $this->getReference('tag-5', Tag::class);

        foreach (range(0, 49) as $i) {
            /** @var VideoGame $game */
            $game = $this->getReference("video-game-$i", VideoGame::class);

            // Tag 1
            if (in_array($i, [0, 21, 22, 23, 24, 25, 46, 47, 48, 49])) {
                $game->addTag($tag1);
            }

            // Tag 2
            if (in_array($i, [22, 23, 24, 25, 47, 48, 49])) {
                $game->addTag($tag2);
            }

            // Tag 3
            if (in_array($i, [23, 24, 25, 48, 49])) {
                $game->addTag($tag3);
            }

            // Tag 4
            if (in_array($i, [24, 25, 49])) {
                $game->addTag($tag4);
            }

            // Tag 5
            if ($i === 25) {
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
