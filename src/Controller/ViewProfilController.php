<?php

namespace App\Controller;
use App\Entity\Profil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewProfilController extends AbstractController
{
    /**
     * @Route("/View", name="viewprofil")
     */
    public function index(): Response
    {

        $repo=$this->getDoctrine()->getRepository(Profil::class);
        for ($i=1; $i<5; $i++) {
         $profile=$repo->findBy(array('id' => $i));
        return $this->render('view_profil/profil.html.twig', [
            'controller_name' => 'ViewProfilController',
            'profileAppremant'=>$profile,
        ]);
        }

    }

}

