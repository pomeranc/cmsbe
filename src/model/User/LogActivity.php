<?php

namespace Cothema\Model\User;

use \Doctrine\ORM\Mapping as ORM;
use \Kdyby\Doctrine\Entities;

/**
 * @ORM\Entity
 * @ORM\Table(name="log_activity")
 */
class LogActivity extends Entities\BaseEntity
{

    use Entities\Attributes\Identifier;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    public $user;

    /**
     * @ORM\Column(name="time_from", type="datetime")
     */
    public $timeFrom;

    /**
     * @ORM\Column(name="time_to", type="datetime")
     */
    public $timeTo;

    public function getDuration()
    {
        if (isset($this->timeFrom) && isset($this->timeTo)) {
            $diff = $this->timeFrom->diff($this->timeTo);

            return $diff->format('%h:%I:%S');
        }

        return null;
    }
}
