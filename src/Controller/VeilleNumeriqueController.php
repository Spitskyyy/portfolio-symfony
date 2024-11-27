<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VeilleNumeriqueController extends AbstractController
{
    #[Route('/veille-numerique', name: 'app_veille_numerique')]
    public function index(): Response
    {
        // URL du flux RSS
        $rssUrl = 'https://www.google.fr/alerts/feeds/07191991245695552641/5959140832944015005'; // Remplace par ton URL de flux RSS

        // Charger et analyser le flux RSS
        try {
            $rssContent = simplexml_load_file($rssUrl);
            $articles = [];

            if ($rssContent !== false) {
                // Parcourir les éléments du flux
                foreach ($rssContent->channel->item as $item) {
                    $articles[] = [
                        'title' => (string) $item->title,
                        'link' => (string) $item->link,
                        'description' => (string) $item->description,
                        'pubDate' => (string) $item->pubDate,
                        'image' => (string) $item->enclosure['url'], // Ajout de l'image
                    ];
                }
            }
        } catch (\Exception $e) {
            $articles = []; // Si une erreur survient, la liste reste vide
        }

        // Rendre le template avec les articles
        return $this->render('veille_numerique/index.html.twig', [
            'controller_name' => 'VeilleNumeriqueController',
            'articles' => $articles,
        ]);
    }
}