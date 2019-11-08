<?php

// chemin nécessaire pour retrouver la classe parmis les milliers de classes chargées par l'autoload
namespace App\Controller;

// on va donner le chemin pour envoyer en http une réponse au navigateur
use Symfony\Component\HttpFoundation\Response;

class homeController
{
    // méthode appelée à l'accueil (voir config/routes.yaml)
    public function homepage(){
        // envoie d'une réponse http
        return new Response("Hello World!");
    }

    public function contact(){
        return new Response("section contact");
    }

    public function byme(){
        return new Response("Vive moi!");
    }
}