<?php

namespace Moneydrop\MoneyDropBundle\Controller;

use MoneyDrop\MoneyDropBundle\Entity\Question;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    public function indexAction(Request $request)
    {
        $question = new Question();

        $form = $this->createFormBuilder($question)
            ->add('name', 'text')
            ->add('level', 'integer')
            ->add('save', 'submit')
            ->getForm();

        return $this->render('MoneyDropBundle:Game:questionnaire.html.twig', array('form' => $form->createView()));
    }

    public function changeParametersAction()
    {
        return $this->render('MoneyDropBundle:Game:parameters.html.twig');
    }
}