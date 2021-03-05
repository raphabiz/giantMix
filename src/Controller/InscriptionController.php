<?php


namespace App\Controller;



use App\Form\InscriptionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class InscriptionController extends AbstractController
{


        public function inscription (Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
        {


            $form = $this->createForm(InscriptionType::class);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {


                return $this->redirectToRoute('home');

            }
            return $this->render('inscription.html.twig', [
                'form' => $form->createView()
            ]);

        }
}