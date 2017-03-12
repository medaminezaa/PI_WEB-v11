<?php

namespace PI\AzmiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIAzmiBundle:Default:index.html.twig');
    }
}
