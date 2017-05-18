<?php
/**
 * Created by PhpStorm.
 * User: azmi
 * Date: 24/03/2017
 * Time: 13:13
 */

namespace PI\guidesBundle\Controller;



use MyApp\UserBundle\Entity\Reservationr;
use PI\guidesBundle\Form\AjoutReser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\UriSignerTest;

class ReservationController extends Controller
{
    function Ajout2Action(Request $request)
    {
        $Offre=new Reservationr();
        $Form=$this->createForm(AjoutReser::class,$Offre);
        $Form->handleRequest($request);

        if ($Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("esprit_parc_aff1");
        }

        return $this->render("PIguidesBundle:offre:AjoutReservation.html.twig",array('form'=>$Form->createView()));
    }
    public function pdfAction($id)
    {
        $em= $this->getDoctrine()->getManager();
        $admin=$this->get("security.token_storage")->getToken()->getUser();

        $demande = $em->getRepository('MyAppUserBundle:Reservationr')
            ->find($id);
        $html = $this->renderView('PIguidesBundle:offre:Pdf.html.twig',array(
            'users'=>$admin,
            'demandes'=>$demande
        ));

        $filename = sprintf('test-%s.pdf', date('Y-m-d'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );


    }
    public function listAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM MyAppUserBundle:Reservationr a";
        $query = $em->createQuery($dql);
        $offre=$em->getRepository("MyAppUserBundle:Reservationr")->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->get('page', 1)/*page number*/,
            3/*limit per page*/
        );

// parameters to template
        return $this->render('PIguidesBundle:offre:afficherReservation.html.twig', array('pagination' => $pagination,'offre'=>$offre));
    }
    public function list1Action(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM MyAppUserBundle:Reservationr a";
        $query = $em->createQuery($dql);
        $offre=$em->getRepository("MyAppUserBundle:Reservationr")->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->get('page', 1)/*page number*/,
            3/*limit per page*/
        );

// parameters to template
        return $this->render('PIguidesBundle:offre:Reserver.html.twig', array('pagination' => $pagination,'offre'=>$offre));
    }/*

    /*

    function afficherAction()
    {
        $em=$this->getDoctrine()->getManager();
        $offres=$em->getRepository("MyAppUserBundle:Reservationr")->findAll();

        return $this->render("PIguidesBundle:offre:afficherReservation.html.twig",array("offres"=>$offres));
    }*/
    function suppAction($id){
        $em=$this->getDoctrine()->getManager();
        $offres=$em->getRepository("MyAppUserBundle:Reservationr")->find($id);
        $em->remove($offres);
        $em->flush();
        return$this->redirectToRoute("esprit_parc_aff1");
    }
    public function updateAction ($id, Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("MyAppUserBundle:Reservationr")->find($id);
        $form=$this->createForm(AjoutReser::class,$modele);
        $form->handleRequest($request);
        if($form->isValid()) {
            $em->persist($modele);
            $em->flush();
            return $this->redirectToRoute("esprit_parc_aff1");
        }
        return $this->render("PIguidesBundle:offre:AjoutReservation.html.twig",array('form'=>$form->createView()));

    }

}