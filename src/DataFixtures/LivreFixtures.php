<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LivreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Obtenez les références aux auteurs si vous en avez besoin
        $auteur1 = $this->getReference(AuteurFixtures::AUTEUR_REFERENCE_1);
        $auteur2 = $this->getReference(AuteurFixtures::AUTEUR_REFERENCE_2);

        // Créez des instances de Livre avec des données de test
        $livre1 = new Livre();
        $livre1->setTitre('Titre du Livre 1');
        $livre1->setAuteur($auteur1);

        $livre2 = new Livre();
        $livre2->setTitre('Titre du Livre 2');
        $livre2->setAuteur($auteur2);

        // Persistez les instances de Livre
        $manager->persist($livre1);
        $manager->persist($livre2);

        // Flush pour sauvegarder les données en base de données
        $manager->flush();
    }
}
