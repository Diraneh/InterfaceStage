<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/registration", name="security")
     */
    public function index(Request $request, EntityManagerInterface $manager,UserPasswordEncoderInterface $encoders): Response
    {
       
        $user=new User();
      
        $form = $this->createForm(RegistrationType::class,$user);
       
       
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

             
            $hash = $encoders->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);   
            $manager->persist($user);

            $manager->flush();
            return $this->redirectToRoute('createprofil');

        }
        dump($user);
        return $this->render('security/registration.html.twig', [
            'form'=>$form->createView(),

        ]);
    }


    /**
     * @Route("/connexion", name="security_login")
     */
    public function Connect()
    {

       
                     
        return $this->render('connexion/login.html.twig');

        
    }


      /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function deconnect(){}
   
    
}

