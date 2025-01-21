<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GueyeController extends AbstractController
{
    #[Route('/gueye', name: 'app_gueye')]
    public function index(): Response
    {
        return $this->render('gueye/index.html.twig', [
            'controller_name' => 'GueyeController',
        ]);
    }

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('/gueye/home.html.twig', [
            'title' => "home",
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('/gueye/cv.html.twig', [
           
        ]);
    }

    #[Route('/loisir', name: 'loisir')]
    public function loisir(): Response
    {
        return $this->render('/gueye/loisir.html.twig', [
            'title' => "loisir",
        ]);
    }

    #[Route('/Eportfolio', name: 'app_Eportfolio')]
    public function eportfolio(): Response
    {
        return $this->render('/gueye/Eportfolio.html.twig', [
            'title' => "Eportfolio",
        ]);
    }
}
