<?php

namespace App\Controller;

use App\Repository\SallesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SallesController extends AbstractController
{
    #[Route('/salles', name: 'app_salles')]
    public function index(SallesRepository $sallesRepository): Response
    {
        return $this->render('salles/index.html.twig', [
            'controller_name' => 'SallesController',
            'salles' => $sallesRepository->findAll(),
        ]);
    }
}
