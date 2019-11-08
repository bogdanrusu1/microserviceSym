<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class travauxController
{
    public function index(){
        return new Response("Ici la liste de nos travaux");
    }
    public function detail($titre){
        return new Response("Le titre de mon travail est: $titre");
    }
}