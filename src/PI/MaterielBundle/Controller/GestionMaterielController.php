<?php
/**
 * Created by PhpStorm.
 * User: balha
 * Date: 21/03/2017
 * Time: 11:03
 */

namespace PI\MaterielBundle\Controller;
use Symfony\Component\HttpFoundation\Request;

use MyApp\UserBundle\Entity\Materiel;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionMaterielController extends Controller
{
    function afficherAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $materiel=$em->getRepository("MyAppUserBundle:Materiel")->findAll();
        return $this->render("PIMaterielBundle:Affichage:AfficherMateriel.html.twig",array("materiels"=>$materiel));
    }

}