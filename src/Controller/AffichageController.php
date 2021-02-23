<?php

namespace App\Controller;
use App\Entity\Entreprises;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AffichageController extends AbstractController
{
    /**
     * @Route("/affichage", name="affichages")
     */
    public function index(): Response
    {
        $repot=$this->getDoctrine()->getRepository(Entreprises::class);
        for ($i=1; $i<10; $i++) {
         $formentreprisee=$repot->findall(array('id' => $i));
        return $this->render('affichage/index.html.twig', [
            'controller_name' => 'AffichageController',
            'formentreprise'=>$formentreprisee,
        ]);
    }
}


}