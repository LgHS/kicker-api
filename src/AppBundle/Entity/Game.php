<?php
/**
 * Created by PhpStorm.
 * User: gberger
 * Date: 2/02/17
 * Time: 02:19
 */

namespace AppBundle\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;



/**
 * Class Game
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="games")
 * @ApiResource
 */
class Game {

	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $location;
	/**
	 * @ORM\Column(name="started_at", type="datetime", nullable=true)
	 * @var \DateTime $startedAt
	 */
	private $startedAt;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
	 * @var Team $team1
	 */
	private $team1;
	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
	 * @var Team $team2
	 */
	private $team2;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $score1;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $score2;

	/**
	 * @var Team
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
	 */
	private $winner;

	/**
	 * @var Collection $events
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Event", mappedBy="game")
	 */
	private $events;

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * @param mixed $location
	 */
	public function setLocation( $location ) {
		$this->location = $location;
	}

	/**
	 * @return mixed
	 */
	public function getStartedAt() {
		return $this->startedAt;
	}

	/**
	 * @param mixed $startedAt
	 */
	public function setStartedAt( $startedAt ) {
		$this->startedAt = $startedAt;
	}

	/**
	 * @return mixed
	 */
	public function getTeam1() {
		return $this->team1;
	}

	/**
	 * @param mixed $team1
	 */
	public function setTeam1( $team1 ) {
		$this->team1 = $team1;
	}

	/**
	 * @return mixed
	 */
	public function getTeam2() {
		return $this->team2;
	}

	/**
	 * @param mixed $team2
	 */
	public function setTeam2( $team2 ) {
		$this->team2 = $team2;
	}

	/**
	 * @return mixed
	 */
	public function getScore1() {
		return $this->score1;
	}

	/**
	 * @param mixed $score1
	 */
	public function setScore1( $score1 ) {
		$this->score1 = $score1;
	}

	/**
	 * @return mixed
	 */
	public function getScore2() {
		return $this->score2;
	}

	/**
	 * @param mixed $score2
	 */
	public function setScore2( $score2 ) {
		$this->score2 = $score2;
	}

	/**
	 * @return Collection
	 */
	public function getEvents(): Collection {
		return $this->events;
	}

	/**
	 * @param Collection $events
	 */
	public function setEvents( Collection $events ) {
		$this->events = $events;
	}

	public function addEvent(Event $event){
		$this->events->add($event);
	}

	public function removeEvent(Event $event){
		$this->events->removeElement($event);
	}

	/**
	 * @return Team
	 */
	public function getWinner(): Team {
		return $this->winner;
	}

	/**
	 * @param Team $winner
	 */
	public function setWinner( Team $winner ) {
		$this->winner = $winner;
	}

	

}