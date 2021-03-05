<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\RegistrationType;
use App\Service\Encoder;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class SecurityController extends AbstractController
{
        /**
     * @Route("/register",name="app_register")
     */
   public function registration(Request $request,Encoder $encoder){
    $user=new User;
    $form=$this->createForm(RegistrationType::class,$user);
    $form->handleRequest($request);
    if($form->isSubmitted()&&$form->isValid()){
       $encoder->encoder($user);
       return $this->redirectToRoute('app_login');
    }
    return $this->render('security/registration.html.twig',['RegistrationForm'=>$form->createView()]);
}

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
