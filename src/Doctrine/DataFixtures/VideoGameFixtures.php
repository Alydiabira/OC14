<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\VideoGame;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;

final class VideoGameFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(
        private readonly Generator $faker
    ) {}

    public function load(ObjectManager $manager): void
    {
        foreach (range(0, 49) as $i) {
            $videoGame = (new VideoGame())
                ->setTitle(sprintf('Jeu vidéo %d', $i))
                ->setSlug(sprintf('jeu-video-%d', $i))
                ->setDescription($this->faker->paragraphs(10, true))
                ->setReleaseDate(new \DateTimeImmutable())
                ->setTest($this->faker->paragraphs(6, true))
                ->setRating(($i % 5) + 1)
                ->setImageName(sprintf('video_game_%d.png', $i))
                ->setImageSize(2_098_872);

            $manager->persist($videoGame);

            // 🔥 OBLIGATOIRE : ajouter la référence
            $this->addReference('video-game-' . $i, $videoGame);
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
