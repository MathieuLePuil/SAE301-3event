<?php

namespace App\Controller;

use App\Entity\Manifestations;
use App\Repository\ManifestationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(ManifestationsRepository $manifestationsRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'acc' => $manifestationsRepository->findAll(),
        ]);
    }
}
