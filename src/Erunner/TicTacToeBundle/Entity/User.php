<?php

namespace Erunner\TicTacToeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="user")
     */
    protected $messages;

    /**
     * @ORM\OneToOne(targetEntity="Game", inversedBy="user")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="id")
     */
    protected $game;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add messages
     *
     * @param \Erunner\TicTacToeBundle\Entity\Message $messages
     * @return User
     */
    public function addMessage(\Erunner\TicTacToeBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;
    
        return $this;
    }

    /**
     * Remove messages
     *
     * @param \Erunner\TicTacToeBundle\Entity\Message $messages
     */
    public function removeMessage(\Erunner\TicTacToeBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set game
     *
     * @param \Erunner\TicTacToeBundle\Entity\Game $game
     * @return User
     */
    public function setGame(\Erunner\TicTacToeBundle\Entity\Game $game = null)
    {
        $this->game = $game;
    
        return $this;
    }

    /**
     * Get game
     *
     * @return \Erunner\TicTacToeBundle\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }
}