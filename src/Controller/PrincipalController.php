<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Employe;
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
    /**
     * @Route ("/employes", name ="employe")
     * @param RegistryInterface $doctrine
     */
    public function afficheEmployes(ManagerRegistry $doctrine){
        $employes = $doctrine->getRepository(Employe::class)->findAll();
        $titre = "Liste des employés";
        return $this->render('principal/employes.html.twig', compact('titre','employes'));
    }
    /**
     * @Route("/employe/{id}", name="unemploye" , requirements={"id":"\d+"})
     * @param ManagerRegistry $doctrine
     * @param int $id
     * @return type
     */
    public function affciheUnEmploye(ManagerRegistry $doctrine,int $id){
        $employe = $doctrine->getRepository(Employe::class)->find($id);
        $titre = "Employé n° " . $id;
        return $this->render('principal/unemploye.html.twig',compact('titre','employe'));
    }
}
