<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FilaireController extends AbstractController
{
    #[Route('/filaire', name: 'app_filaire')]
    public function index(): Response
    {
        return $this->render('filaire/index.html.twig', [
            'controller_name' => 'FilaireController',
        ]);
    }
}
