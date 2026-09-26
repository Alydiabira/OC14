<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use function array_fill_callback;

final class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
<<<<<<< HEAD
        $users = array_fill_callback(0, 25, fn (int $index): User => (new User)
=======
        $users = array_fill_callback(0, 10, fn (int $index): User => (new User)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->setEmail(sprintf('user+%d@email.com', $index))
            ->setPlainPassword('password')
            ->setUsername(sprintf('user+%d', $index))
        );

        array_walk($users, [$manager, 'persist']);

        $manager->flush();
    }
}
