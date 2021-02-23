<?php

namespace App\Controller;
use App\Entity\Profil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
class CreateprofilController extends AbstractController
{
    /**
     * @Route("/Creation", name="createprofil")
     */
    public function index(Request $request, EntityManagerInterface $manager): Response
    {

        

        $Inscription=new Profil();

        $form=$this->createFormBuilder($Inscription)
        ->add('Prenom')
        ->add('Nom')
        ->add('Adress')
        ->add('Codepostale')
        ->add('ville')
        ->add('Telephonne')
        ->add('Email')
        ->add('Lienportfolio')
        ->add('Liengithub')
        ->add('lienCV')
        ->add('promotion')
        ->add('CompetenceUn')
        ->add('CompetenceDeux')
        ->add('CompetenceTrois')
        ->add('CompetenceQuatre')
        ->add('CompetenceCinq')
        ->add('CompetenceSix')
        ->add('Avatar')
        ->add('Mobilite')
        ->add('ZonneMobilite')
      
        ->getForm();


        $form->handleRequest($request);


       
        if($form->isSubmitted() && $form->isValid()){

                
            $manager->persist($Inscription);

            $manager->flush();
     
            return $this->redirectToRoute('security_login');
        }
        return $this->render('createprofil/Inscription.html.twig', [
            'formajouter'=>$form->createView(),

        ]);
    }
}
