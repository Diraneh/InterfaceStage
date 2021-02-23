<?php

namespace App\Controller;
use App\Entity\ListeCandidatureenvoyer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
class AffichelistedecandidatureController extends AbstractController
{
    /**
     * @Route("/affichelistedecandidature", name="affichelistedecandidatures")
     */
    public function index(Request $request, EntityManagerInterface $manager): Response
    {

        if($request ->request->count()>0){

            $Liste=new ListeCandidatureenvoyer();

            

            $Liste->setEntrepriseContact($request ->request->get('EntrepriseContact'))
                    ->setDaterelance($request ->request->get('Daterelance'))
                    ->setDatedemande($request ->request->get('Datedemande'))
                    ->setDateentretient($request ->request->get('dateentretient'))
                    ->setStatut1($request ->request->get('weblink'));

                    $manager->persist($Liste);

                    $manager->flush();

        
        
                    }           
        $repot=$this->getDoctrine()->getRepository(ListeCandidatureenvoyer::class);
        for ($i=0; $i<1; $i++) {
         $formentlistes=$repot->findAll();
        

        
        return $this->render('affichelistedecandidature/index.html.twig', [
            'controller_name' => 'AffichelistedecandidatureController',
            'formentliste'=>$formentlistes,
        ]);




        }


    }
}
