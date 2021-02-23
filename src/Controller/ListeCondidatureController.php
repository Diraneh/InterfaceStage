<?php

namespace App\Controller;
use App\Entity\ListeCandidatureenvoyer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
class ListeCondidatureController extends AbstractController
{
    /**
     * @Route("/listecondidature", name="listecondidatures")
     */
    public function index(Request $request, EntityManagerInterface $manager): Response
    {

        $Liste=new ListeCandidatureenvoyer();

        $form=$this->createFormBuilder($Liste)
        ->add('EntrepriseContact')
        ->add('datedemande')
        ->add('daterelance')
        ->add('dateentretient')
        ->add('Statut1')
        ->add('Statut2')
        ->add('Statut3')
        ->add('Statut4')
        ->getForm();


        $form->handleRequest($request);


       
        if($form->isSubmitted() && $form->isValid()){

                
            $manager->persist($Liste);

            $manager->flush();
     
           
        }
        return $this->render('liste_condidature/index.html.twig', [
            'formCandidature'=>$form->createView(),
        ]);
    }
}
