<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\Review;
use App\Model\Entity\Tag;
use App\Model\Entity\User;
use App\Model\Entity\VideoGame;
use App\Rating\CalculateAverageRating;
use App\Rating\CountRatingsPerValue;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;

final class VideoGameFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(
        private readonly Generator $faker,
        private readonly CalculateAverageRating $calculateAverageRating,
        private readonly CountRatingsPerValue $countRatingsPerValue,
    ) {}

    public function load(ObjectManager $manager): void
    {
        $tags = $manager->getRepository(Tag::class)->findAll();

        /** @var list<User> $allUsers */
        $allUsers = $manager->getRepository(User::class)->findAll();
        $users = array_chunk($allUsers, 5);

        /** @var string $fakeText */
        $fakeText = $this->faker->paragraphs(5, true);

        // Création des jeux vidéo
        $videoGames = [];

        for ($i = 0; $i < 50; $i++) {
            $videoGame = (new VideoGame())
                ->setTitle(sprintf('Jeu vidéo %d', $i))
                ->setDescription($fakeText)
                ->setReleaseDate((new \DateTimeImmutable())->sub(new \DateInterval(sprintf('P%dD', $i))))
                ->setTest($fakeText)
                ->setRating(($i % 5) + 1)
                ->setImageName(sprintf('video_game_%d.png', $i))
                ->setImageSize(2_098_872);

            $videoGames[] = $videoGame;
            $manager->persist($videoGame);
        }

        // Ajout des tags
        foreach ($videoGames as $index => $videoGame) {
            for ($tagIndex = 0; $tagIndex < 5; $tagIndex++) {
                $videoGame->getTags()->add($tags[($index + $tagIndex) % count($tags)]);
            }
        }

        // Ajout des reviews
        foreach ($videoGames as $index => $videoGame) {
            $filteredUsers = $users[$index % 5] ?? [];

            foreach ($filteredUsers as $user) {
                /** @var string $comment */
                $comment = $this->faker->paragraphs(1, true);

                $review = (new Review())
                    ->setUser($user)
                    ->setVideoGame($videoGame)
                    ->setNote($this->faker->numberBetween(1, 5))
                    ->setComment($comment);

                $videoGame->getReviews()->add($review);
                $manager->persist($review);
            }

            $this->calculateAverageRating->calculateAverage($videoGame);
            $this->countRatingsPerValue->countRatingsPerValue($videoGame);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [TagFixtures::class, UserFixtures::class];
    }
}
