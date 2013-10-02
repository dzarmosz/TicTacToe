<?php

namespace Erunner\TicTacToeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Erunner\TicTacToeBundle\Entity\Board;
use Erunner\TicTacToeBundle\Form\Type\BoardType;
use Erunner\TicTacToeBundle\Form\DefaultHandler;

class BoardController extends Controller{

    /**
     * @Route("/board/new", name="board_new")
     * @Template()
     */
    public function newBoardAction()
    {
        $board = new Board();

        $form = $this->createForm(new BoardType(), $board);

        $handler = new DefaultHandler($this->get('request'), $this->get('doctrine.orm.entity_manager'));
        if ($handler->process($form, $board)){
            return $this->redirect($this->generateUrl('chat'));
        }
        return array('board' => $board, 'form'=>$form->createView());
    }

    /**
     * @Route("/board/printing", name="board_printing")
     * @Template()
     */
    public function printBoardAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $width = $em->getRepository('ErunnerTicTacToeBundle:Board')->findBy(array('width'));
        $height = $em->getRepository('ErunnerTicTacToeBundle:Board')->findBy(array('height'));

        return array('size' => $width, 'height' => $height);
    }
}
