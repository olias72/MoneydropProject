<?php

namespace Moneydrop\MoneyDropBundle\Controller;

use Moneydrop\MoneyDropBundle\Entity\Question;
use Moneydrop\MoneyDropBundle\Form\Type\QuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    public function addQuestionAction(Request $request)
    {
        $question = new Question();
        $form = $this->createForm(new QuestionType(), $question);

        $form->handleRequest($request);

        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();

//return $this->redirect($this->generateUrl(''));
        }

        return $this->render('MoneyDropBundle:Question:questionnaire.html.twig', array('form' => $form->createView()));
    }
}

