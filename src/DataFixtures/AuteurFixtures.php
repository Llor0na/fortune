<?php

namespace App\DataFixtures;

use App\Entity\Auteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuteurFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $auteur1 = new Auteur();
        $auteur1->setNom('Nom de l\'Auteur 1');

        $auteur2 = new Auteur();
        $auteur2->setNom('Nom de l\'Auteur 2');

        $manager->persist($auteur1);
        $manager->persist($auteur2);

        $manager->flush();
    }
}