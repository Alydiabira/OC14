<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tags = [];

        // Création de 10 tags
        for ($i = 0; $i < 10; $i++) {
            $tag = (new Tag())
                ->setName(sprintf('Tag %d', $i));

            $manager->persist($tag);
            $tags[] = $tag;
        }

        $manager->flush();
    }
}
