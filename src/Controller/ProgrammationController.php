<?php

namespace App\Controller;

use App\Repository\ManifestationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProgrammationController extends AbstractController
{
    #[Route('/programmation', name: 'app_programmation')]
    public function index(ManifestationsRepository $manifestationsRepository): Response
    {
        return $this->render('programmation/index.html.twig', [
            'controller_name' => 'ProgrammationController',
            'concert' => $manifestationsRepository->findBy(
                ['manif_genre' => 'Concert'],
            ),
            'spectacle' => $manifestationsRepository->findBy(
                ['manif_genre' => 'Spectacle'],
            ),
            'football' => $manifestationsRepository->findBy(
                ['manif_genre' => 'Football'],
            ),
        ]);
    }
}
