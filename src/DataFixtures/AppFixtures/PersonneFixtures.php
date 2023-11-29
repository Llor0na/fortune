<?php

namespace App\DataFixtures\AppFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Personne;


class PersonneFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // Utiliser le français comme langue pour Faker


        for ($i = 0; $i < 10; $i++) {
            $personne = new Personne();
            $personne->setNom($faker->lastName());
            $personne->setPrenom($faker->firstName());
             //Génère un numéro de téléphone aléatoire en france
            $personne->setTelephone($faker->regexify('0[1-9][0-9]{8}')); // avec la méthode regexify() de Faker
            


             $personne->setDateDeNaissance($faker->dateTimeBetween('18 years', '100 years')); // Génère une date de naissance aléatoire entre 18 et 100 ans
             $personne->setjob($faker->jobTitle());

            $manager->persist($personne);
        }
        $manager->flush();

    }
}
