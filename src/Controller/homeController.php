<?php

// chemin nécessaire pour retrouver la classe parmis les milliers de classes chargées par l'autoload
namespace App\Controller;

// on va donner le chemin pour envoyer en http une réponse au navigateur
use Symfony\Component\HttpFoundation\Response;

// on charge le module d'annotations
use Symfony\Component\Routing\Annotation\Route;

class homeController
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
     * @Route("/contact", name="Contact")
     */
    public function contacts(){
        return new Response("section contact");
    }

    /**
     * @Route("/produits", name="Product")
     */
    public function produit(){
        return new Response("Voici la liste de nos produits");
    }
    /**
     * route avec chemin vers le détail d'un produit avec passage de la variable get id {id} et $id dans la méthodes,
     *
     * name -> nom de la route
     * requirements -> la variable id doit être un numérique (regex \d+)
     * defaults -> id vaut 1 si on n'affiche rien après /produits/item/
     *
     * @Route("/produits/item/{id}", name="detailProduct", requirements={"id"="\d+"}, defaults={"id"=1})
     *
     */
    public function detailProduit($id){
        return new Response("Produit dont l'id est $id");
    }
}