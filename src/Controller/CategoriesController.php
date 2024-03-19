<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitsRepository;
use App\Repository\CategoriesRepository;

class CategoriesController extends AbstractController
{
    #[Route('/categories', name: 'app_categories')]
    public function listeCategorie(ProduitsRepository $ProduitsRepository, CategoriesRepository $CategoriesRepository): Response
    {
        $produits = $ProduitsRepository->findAll();
        $categories = $CategoriesRepository->findAll();
        return $this->render('categories/index.html.twig', [
            'controller_name' => 'CategoriesController',
            'produits' => $produits,
            'categories' => $categories
        ]);
    }

}
