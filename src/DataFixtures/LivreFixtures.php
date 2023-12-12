<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Livre;

class LivreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // Utiliser le français comme langue pour Faker

        for ($i = 0; $i < 10; $i++) {
            $livre = new Livre();
            $livre->setTitre($faker->lastName()); // Correction ici

            $manager->persist($livre);
        }

        $manager->flush();
    }
}
