<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgController extends AbstractController
{
    #[Route('/prog', name: 'app_prog')]
    public function index(): Response
    {
        return $this->render('manifs/index.html.twig', [
            'controller_name' => 'ProgController',
        ]);
    }
}
