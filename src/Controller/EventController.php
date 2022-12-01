<?php

namespace App\Controller;

use App\Repository\ManifestationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function index(ManifestationsRepository $manifestationsRepository, Request $request): Response
    {
        $id = $request->query->get('id_event');
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
            'event' => $manifestationsRepository->findBy(array('id',$id)),
        ]);
    }
}
