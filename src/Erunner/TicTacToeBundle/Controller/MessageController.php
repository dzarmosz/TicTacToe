<?php

namespace Erunner\TicTacToeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Erunner\TicTacToeBundle\Entity\Message;
use Erunner\TicTacToeBundle\Form\Type\MessageType;
use Erunner\TicTacToeBundle\Form\DefaultHandler;

class MessageController extends Controller{

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('chat'));
    }

    /**
     * @Route("/chat", name="chat")
     * @Template("ErunnerTicTacToeBundle:Message:chat.html.twig")
     */
    public function listAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->get('doctrine.orm.entity_manager');
        $messages = $em->getRepository('ErunnerTicTacToeBundle:Message')->findAll();

        $message = new Message();
        $message->setUser($user);

        $form = $this->createForm(new MessageType(), $message);

        $handler = new DefaultHandler($this->get('request'), $this->get('doctrine.orm.entity_manager'));
        if ($handler->process($form, $message)){
            return $this->redirect($this->generateUrl('chat'));
        }

        return array('messages' => $messages, 'form'=>$form->createView());
    }

    /**
     * @Route("/chat/delete/message/{id}", name="delete_message")
     */
    public function deleteMessageAction(Message $message)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $em->remove($message);
        $em->flush();

        return $this->redirect($this->generateUrl('chat'));
    }
}
