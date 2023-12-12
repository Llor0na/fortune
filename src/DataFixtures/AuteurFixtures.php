<?php

namespace App\DataFixtures\AppFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Auteur;


class AuteurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // Utiliser le français comme langue pour Faker


        for ($i = 0; $i < 10; $i++) {
            $auteur = new Auteur();
            $auteur->setNom($faker->lastName());

            $manager->persist($auteur);
        }
        $manager->flush();

    }
}
