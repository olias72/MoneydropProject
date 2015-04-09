<?php

namespace Moneydrop\MoneyDropBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MoneyDropBundle:Default:index.html.twig');
    }

    public function historyAction()
    {
        return $this->render('MoneyDropBundle:History:history.html.twig');
    }



    public function successAction()
    {
        return $this->render('MoneyDropBundle:Default:success.html.twig');
    }
}
