<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tags = [
            'Action',
            'Aventure',
            'RPG',
            'Stratégie',
            'Simulation',
        ];

        foreach ($tags as $index => $name) {
            $tag = new Tag();
            $tag->setName($name);
            $manager->persist($tag);

            $this->addReference('tag_' . ($index + 1), $tag);
        }

        $manager->flush();
    }
}
