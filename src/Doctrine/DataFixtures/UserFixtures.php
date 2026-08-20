<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class UserFixtures extends Fixture
{
    public function __construct(
        private readonly UserPasswordHasherInterface $passwordHasher
    ) {}

    public function load(ObjectManager $manager): void
    {
        // On crée 2 utilisateurs pour les reviews
        foreach (range(1, 2) as $i) {
            $user = new User();
            $user->setUsername('user+' . $i);
            $user->setEmail('user' . $i . '@example.com');
            $user->setPlainPassword('password');

            // Hash du mot de passe
            $hashed = $this->passwordHasher->hashPassword($user, 'password');
            $user->setPassword($hashed);

            $manager->persist($user);

            // IMPORTANT : ajouter la référence
            $this->addReference('user-' . $i, $user);
        }

        $manager->flush();
    }
}
