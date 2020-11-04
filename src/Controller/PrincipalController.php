<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrincipalController extends AbstractController
{
    /**
     * @Route("/principal", name="principal")
     */
    public function index(): Response
    {
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }
    /**
     * @Route ("/welcome/{nom}")
     */
    public function welcome ($nom){
        return $this->render('principal/welcome.html.twig',array(
                            "nom"=>$nom
        ));
    }
    /**
     * @Route ("/TutoSymfony/{departement} {sexe}")
     */
    public function TutoSymfony ($departement,$sexe){
        return $this->render('principal/TutoSymfony.html.twig',array("departement"=>$departement,"sexe"=>$sexe));
    }
}
