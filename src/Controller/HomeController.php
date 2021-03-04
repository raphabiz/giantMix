<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function home(){


        return $this->render('accueil.html.twig', [

        ]);
    }
}