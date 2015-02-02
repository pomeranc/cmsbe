<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bemenu")
 */
class BEMenu extends \Kdyby\Doctrine\Entities\BaseEntity {

	/**
	 * @ORM\Column(name="nLink",type="text")
	 */
	public $nLink;

	/**
	 * @ORM\Column(type="text")
	 */
	public $name;

	/**
	 * @ORM\Column(type="text")
	 */
	public $orderLine;

	/**
	 * @ORM\Column(type="text")
	 */
	public $parent;

	/**
	 * @ORM\Column(type="text")
	 */
	public $module;

	/**
	 * @ORM\Column(type="text")
	 */
	public $faIcon;

}
