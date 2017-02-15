<?php
/**
 * Created by PhpStorm.
 * User: gberger
 * Date: 2/02/17
 * Time: 02:23
 */

namespace AppBundle\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Event
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="events")
 * 
 */
class Event {

	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;
	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Game",inversedBy="events")
	 */
	private $game;
	/**
	 * @ORM\Column(type="string", length=256)
	 */
	private $data;
	/**
	 * @var
	 * @ORM\Column(type="string", length=256)
	 */
	private $eventType;
	/**
	 * @ORM\Column(type="time")
	 */
	private $timestamp;

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
	public function getGame() {
		return $this->game;
	}

	/**
	 * @param mixed $game
	 */
	public function setGame( $game ) {
		$this->game = $game;
	}

	/**
	 * @return mixed
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * @param mixed $data
	 */
	public function setData( $data ) {
		$this->data = $data;
	}

	/**
	 * @return mixed
	 */
	public function getEventType() {
		return $this->eventType;
	}

	/**
	 * @param mixed $eventType
	 */
	public function setEventType( $eventType ) {
		$this->eventType = $eventType;
	}

	/**
	 * @return mixed
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}

	/**
	 * @param mixed $timestamp
	 */
	public function setTimestamp( $timestamp ) {
		$this->timestamp = $timestamp;
	}


}