<?php

namespace App\Controller;
use App\Entity\Entreprises;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class OffreStageController extends AbstractController
{
    /**
     * @Route("/offrestage", name="offrestages")
     */
    public function index(Request $request, EntityManagerInterface $manager): Response
    {

        
        

        $Entrep=new Entreprises();

        $form=$this->createFormBuilder($Entrep)
        ->add('Nomentreprise')
        ->add('Adressentreprise')
        ->add('Codepostaleentreprise')
        ->add('Villeentreprise')
        ->add('Telephonneentreprise')
        ->add('Emailentreprise')
        ->add('Siteintertentreprise')
      
        ->getForm();


        $form->handleRequest($request);


       
        if($form->isSubmitted() && $form->isValid()){

                
            $manager->persist($Entrep);

            $manager->flush();
     
            return $this->redirectToRoute('candidature');
        }
        return $this->render('offre_stage/index.html.twig', [
            'formstage'=>$form->createView(),
        ]);
    }
}
