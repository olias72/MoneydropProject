<?php

namespace Moneydrop\MoneyDropBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('label' => 'Intitulé de la question'))
            ->add('level', 'integer', array('label' => 'Niveau'))
            ->add('submit', 'submit');
    }

    public function getName()
    {
        return 'question';
    }
}