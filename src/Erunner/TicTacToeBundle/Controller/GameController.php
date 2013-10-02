<?php

namespace Erunner\TicTacToeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Erunner\TicTacToeBundle\Entity\Message;
use Erunner\TicTacToeBundle\Form\Type\MessageType;
use Erunner\TicTacToeBundle\Form\DefaultHandler;

class GameController extends Controller{

    /**
     * @Route("/game/list", name="game_list")
     * @Template()
     */
    public function gameListAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $games = $em->getRepository('ErunnerTicTacToeBundle:Game')->findAll();

        return array('games' => $games);
    }
}
