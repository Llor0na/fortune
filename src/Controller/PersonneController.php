<?php

namespace App\Controller;

use App\Repository\PersonneRepository; // Assurez-vous que le chemin est correct
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    #[Route('/personne', name: 'app_personne')]
    public function index(PersonneRepository $personneRepository
 ):Response
     {
         // Récupérer toutes les personnes depuis le repository
         $personnes = $personneRepository->findAll();
 
 
         return $this->render('personne/index.html.twig', [
             'controller_name' => 'PersonneController',
             'personnes' => $personnes,


        ]);
    }
}
