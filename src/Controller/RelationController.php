<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RelationController extends AbstractController
{
    #[Route('/relation', name: 'app_relation')]
    public function afficherRelation(LivreRepository $livreRepository): Response
    {
        // Utilisez le repository pour récupérer les données nécessaires
        $livres = $livreRepository->findAll();

        // Vous pouvez faire quelque chose avec les données récupérées, par exemple les passer à un template Twig
        return $this->render('relation/afficher_relation.html.twig', [
            'livres' => $livres,
        ]);
    }
}
