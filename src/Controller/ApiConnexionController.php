<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiConnexionController extends AbstractController
{
    #[Route('/api/connexion', name: 'app_api_connexion')]
    public function index(): Response
    {
        return $this->render('api_connexion/index.html.twig', [
            'controller_name' => 'ApiConnexionController',
        ]);
    }
}
