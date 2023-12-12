<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RelationController extends AbstractController
{
    #[Route('/livre', name: 'app_livre')]
    public function afficherRelation(LivreRepository $livreRepository): Response
    {
            return $this->render('afficher.html.twig', [
            'livres' => $livres,
        ]);
    }
    
}
 