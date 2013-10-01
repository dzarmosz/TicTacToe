<?php

namespace Erunner\TicTacToeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormbuilderInterface;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Text', 'text')
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'message';
    }
}
