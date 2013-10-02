<?php

namespace Erunner\TicTacToeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Game
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="player1", type="string", length=255)
     */
    private $player1;

    /**
     * @var string

     * @ORM\Column(name="player2", type="string", length=255)
     */
    private $player2;

    /**
     * @var integer
     *
     * @ORM\Column(name="winner", type="integer")
     */
    private $winner;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @ORM\OneToOne(targetEntity="User", mappedBy="game")
     */
    protected $user;

    /**
     * @ORM\OneToOne(targetEntity="Board", inversedBy="game")
     * @ORM\JoinColumn(name="board_id", referencedColumnName="id")
     */
    protected $board;
    
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
     * Set player1
     *
     * @param string $player1
     * @return Game
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;
    
        return $this;
    }

    /**
     * Get player1
     *
     * @return string 
     */
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * Set player2
     *
     * @param string $player2
     * @return Game
     */
    public function setPlayer2($player2)
    {
        $this->player2 = $player2;
    
        return $this;
    }

    /**
     * Get player2
     *
     * @return string 
     */
    public function getPlayer2()
    {
        return $this->player2;
    }

    /**
     * Set winner
     *
     * @param integer $winner
     * @return Game
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
    
        return $this;
    }

    /**
     * Get winner
     *
     * @return integer 
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Game
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param \Erunner\TicTacToeBundle\Entity\User $user
     * @return Game
     */
    public function setUser(\Erunner\TicTacToeBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Erunner\TicTacToeBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set board
     *
     * @param \Erunner\TicTacToeBundle\Entity\Board $board
     * @return Game
     */
    public function setBoard(\Erunner\TicTacToeBundle\Entity\Board $board = null)
    {
        $this->board = $board;
    
        return $this;
    }

    /**
     * Get board
     *
     * @return \Erunner\TicTacToeBundle\Entity\Board 
     */
    public function getBoard()
    {
        return $this->board;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Game
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}