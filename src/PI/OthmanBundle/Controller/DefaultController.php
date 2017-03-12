<?php

namespace PI\OthmanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIOthmanBundle:Default:index.html.twig');
    }
}
