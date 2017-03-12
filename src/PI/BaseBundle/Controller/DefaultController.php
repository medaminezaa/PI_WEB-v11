<?php

namespace PI\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UserBundle\Entity\Materiel;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIBaseBundle:Default:index.html.twig');
    }
}
