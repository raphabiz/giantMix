<?php


namespace App\Controller;


use App\Repository\ProductRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PaiementController extends AbstractController
{
    public function add ($id, SessionInterface $session) {

        $panier = $session->get('panier',[]);
        $session->set('panier',$panier);
        if (!empty($panier[$id]))
        {
            $panier[$id]++;
        }
        else {
            $panier[$id]=1;

        }
        $session->set('panier',$panier);
        //au final cela ne marche pas et efface le panier et je n'arrive pas à le recréer
       /* if (!isset($_SESSION['CREATED'])) {
            $_SESSION['CREATED'] = time();
        } else if(time() - (int) $_SESSION['CREATED'] >300) {
            $session->set('panier',null);
            foreach($panier as $key => $val){
                unset($panier[$key]);
            }
        }
        else if(time() - (int) $_SESSION['CREATED'] <=300){
            $_SESSION['CREATED'] = time();
        }*/

        return $this->redirectToRoute("bag");
    }

    public function bag(Environment $twig, SessionInterface $session, ProductRepository $productRepository)
    {
        $panier = $session->get('panier',[]);
        $panierWithData =[];
        foreach ($panier as $id=> $quantity) {
            $panierWithData[] = [
                'product'=> $productRepository->find($id),
                'quantity'=> $quantity
            ];
        }
        $total=0;
        foreach ($panierWithData as $item){
            $totalItem = $item['product']->getPrice() *$item['quantity'];
            $total += $totalItem;
        }
        $content = $twig->render('bag.html.twig',[
            'items'=>$panierWithData,
            'total'=>$total
        ]);
        return new Response($content);
    }

    public function remove ($id, SessionInterface $session){
        $panier = $session->get('panier',[]);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }
        $session->set('panier',$panier);
        return $this->redirectToRoute("bag");
    }

    public function paiement(Environment $twig,ProductRepository $productRepository,  SessionInterface $session)
    {

        $panier = $session->get('panier',[]);
        $panierWithData =[];

        foreach ($panier as $id=> $quantity) {
            $panierWithData[] = [
                'product'=> $productRepository->find($id),
                'quantity'=> $quantity
            ];
        }
        $total=0;
        foreach ($panierWithData as $item){
            $totalItem = $item['product']->getPrice() *$item['quantity'];
            $total += $totalItem;
        }
        // dd($total);


        $content = $twig->render('paiement.html.twig',[
            'total'=>$total
        ]);
        echo("Paiement accepté");
        return new Response($content);

    }
}





