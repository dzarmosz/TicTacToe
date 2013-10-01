<?php

namespace Erunner\TicTacToeBundle\Form;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class DefaultHandler
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @var \Symfony\Component\HttpFoundation\Request
     */
    protected $request;

    public function __construct(Request $request, EntityManager $em)
    {
        $this->request=$request;
        $this->em = $em;
    }

    public function process(Form $form, $object)
    {
        $form->handleRequest($this->request);
        if ($form->isValid()){
            //var_dump($object); exit;
            $this->onSuccess($object);
            return true;
        }

        return false;
    }

    protected function onSuccess($object)
    {
        $this->em->persist($object);
        $this->em->flush();
    }
}
