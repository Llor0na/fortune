<?php

namespace App\Controller;

use App\Repository\LivreRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RelationController extends AbstractController
{
    #[Route('/livre', name: 'app_livre')]
    public function afficherRelation(LivreRepository $livreRepository): Response
    {       
            $livres = $livreRepository->findAll();
            return $this->render('afficher.html.twig', [
            'livres' => $livres,
        ]);
    }
    
}
 