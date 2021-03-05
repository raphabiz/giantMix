<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Repository\ProductRepository;





class ProductController extends AbstractController
{



    public function product(Environment $twig,ProductRepository $produitRepository, SessionInterface $session)
    {

        $produits = $produitRepository->findAll();

        return $this->render('product.html.twig', [
            'products' => $produits

        ]);
    }


}