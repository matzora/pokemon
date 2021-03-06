<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

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

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @var \AppBundle\Entity\Trainer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Trainer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_trainer", referencedColumnName="id")
     * })
     */
    protected $trainer;

    /**
     * Set trainer
     *
     * @param \AppBundle\Entity\Trainer $trainer
     *
     * @return User
     */
    public function setTrainer(\AppBundle\Entity\Trainer $trainer = null)
    {
        $this->trainer = $trainer;

        return $this;
    }

    /**
     * Get trainer
     *
     * @return \AppBundle\Entity\Trainer
     */
    public function getTrainer()
    {
        return $this->trainer;
    }
}
