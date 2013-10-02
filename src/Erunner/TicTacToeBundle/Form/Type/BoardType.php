<?php

namespace Erunner\TicTacToeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormbuilderInterface;

class BoardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Width', 'text')
            ->add('Height', 'text')
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'board';
    }
}
