<?php
/**
 * Created by PhpStorm.
 * User: gberger
 * Date: 2/02/17
 * Time: 02:13
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Team
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="teams")
 */
class Team {

	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 *
	 */
	private $id;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Player")
	 */
	private $player1;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Player")
	 */
	private $player2;
	/**
	 * @ORM\Column(type="string",length=100)
	 */
	private $name;

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
	public function getPlayer1() {
		return $this->player1;
	}

	/**
	 * @param mixed $player1
	 */
	public function setPlayer1( $player1 ) {
		$this->player1 = $player1;
	}

	/**
	 * @return mixed
	 */
	public function getPlayer2() {
		return $this->player2;
	}

	/**
	 * @param mixed $player2
	 */
	public function setPlayer2( $player2 ) {
		$this->player2 = $player2;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

}