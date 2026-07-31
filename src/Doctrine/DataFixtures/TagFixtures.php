<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tags = ['Action', 'Aventure', 'RPG', 'Sport', 'Stratégie'];

        foreach ($tags as $name) {
            $tag = (new Tag())->setName($name);
            $manager->persist($tag);
            $this->addReference('tag_' . $name, $tag);
        }

        $manager->flush();
    }
}
