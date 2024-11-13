<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FilieresController extends AbstractController
{
    #[Route('/filieres', name: 'app_filieres')]
    public function index(): Response
    {
        return $this->render('filieres/index.html.twig', [
            'controller_name' => 'filieresController',
        ]);
    }
}
