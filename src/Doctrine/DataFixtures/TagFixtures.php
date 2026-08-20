<?php

namespace App\Doctrine\DataFixtures;

use App\Model\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $names = ['Action', 'Aventure', 'RPG', 'Sport', 'Stratégie'];

        foreach ($names as $i => $name) {
            $tag = (new Tag())->setName($name);
            $manager->persist($tag);

            // IMPORTANT : références conformes au corrigé OC
            $this->addReference('tag-' . ($i + 1), $tag);
        }

        $manager->flush();
    }
}
