<?php

namespace PI\HediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIHediBundle:Default:index.html.twig');
        //aaaaaaaaaaaaaa
    }
}
