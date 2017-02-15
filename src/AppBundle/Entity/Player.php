<?php
/**
 * Created by PhpStorm.
 * User: gberger
 * Date: 2/02/17
 * Time: 01:23
 */

namespace AppBundle\Entity;


use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Player
 * @ApiResource
 * @ORM\Entity
 * @package AppBundle\Entity
 * @ORM\Table(name="players")
 */
class Player {

	/**
	 * @var
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;
	/**
	 * @ORM\Column(name="name",type="string", length=100)
	 */
	private $name;
	/**
	 * @ORM\Column(name="email", type="string", length=200)
	 */
	private $email;

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
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail( $email ) {
		$this->email = $email;
	}


}