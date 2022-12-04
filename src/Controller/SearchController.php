<?php

namespace App\Controller;

use App\Repository\ManifestationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(ManifestationsRepository $manifestationsRepository): Response
    {
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
            'prog' => $manifestationsRepository->findAll()
        ]);
    }
}
