<?php

namespace App\Controller;

//use App\Form\SearchForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Repository\ProductRepository;





class ProductController extends AbstractController
{
   /* public function categorie(Environment $twig)
    {

        $content = $twig->render('product/categorie.html.twig');
        return new Response($content);
    }*/


    public function product(Environment $twig,ProductRepository $produitRepository, Request $request)
    {
        //$data = new SortData();
        //$form = $this->createForm(SearchForm::class, $data);
        //$form->handleRequest($request);

        // $produits = $this->maCategorie($produitRepository, $id);
        $produits = $produitRepository->findAll();

        return $this->render('product.html.twig', [
            'products' => $produits
           // 'form' => $form->createView()
        ]);
    }


}