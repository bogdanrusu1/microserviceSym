<?php

// chemin nécessaire pour retrouver la classe parmis les milliers de classes chargées par l'autoload
namespace App\Controller;

// on va donner le chemin pour envoyer en http une réponse au navigateur

use Symfony\Component\HttpFoundation\Response;

// on charge le module d'annotations
use Symfony\Component\Routing\Annotation\Route;

// On prend le contrôleur abstrait de Symfony qui contient de multiples outils préconstruit, dont Twig dans notre cas
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// on étend notre contrôleur par le contrôleur abstrait de Symfony, ce qui charge des bibliothèques dont Twig
class homeController extends AbstractController
{
    // méthode appelée à l'accueil
    /**
     * @Route("/", name="homepage")
     *
     */
    public function homepage(){
        // envoie d'une réponse http
        return new Response("Hello World!");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){
        // dump dans la barre de profiler
        dump($slug,$_SERVER);
        // utilisation de twig (déjà chargé via AbstractController)
        return $this->render("base.html.twig",
                ["titre"=>"Titre : $slug",
                "h1"=>"<h1>Titre : $slug</h1>"]);

    }
}