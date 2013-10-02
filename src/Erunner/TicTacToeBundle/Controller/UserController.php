<?php

namespace Erunner\TicTacToeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Erunner\TicTacToeBundle\Form\Type\UserType;
use Erunner\TicTacToeBundle\Form\DefaultHandler;

class UserController extends Controller{

    /**
     * @Route("/show/profile", name="show_profile")
     * @Template()
     */
    public function showProfileAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->get('doctrine.orm.entity_manager');
        $users = $em->getRepository('ErunnerTicTacToeBundle:User')->findBy(array('id' => $user));
        return array('users' => $users);
    }

    /**
     * @Route("/edit/profile", name="edit_profile")
     * @Template()
     */
    public function editProfileAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $form = $this->createForm(new UserType(), $user);

        $handler = new DefaultHandler($this->get('request'), $this->get('doctrine.orm.entity_manager'));

        if ($handler->process($form, $user)){
            return $this->redirect($this->generateUrl('show_profile'));
        }

        return array('form'=>$form->createView());
    }
}