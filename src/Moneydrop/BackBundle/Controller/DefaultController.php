<?php

namespace Moneydrop\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MoneydropBackBundle:Default:index.html.twig');
    }
}
