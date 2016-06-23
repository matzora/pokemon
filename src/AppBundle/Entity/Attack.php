<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attack
 *
 * @ORM\Table(name="attack")
 * @ORM\Entity
 */
class Attack
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=12, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="physical", type="boolean", nullable=false)
     */
    private $physical;

    /**
     * @var integer
     *
     * @ORM\Column(name="power", type="smallint", nullable=false)
     */
    private $power;

    /**
     * @var integer
     *
     * @ORM\Column(name="accuracy", type="integer", nullable=false)
     */
    private $accuracy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=false)
     */
    private $idType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="attack_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Pokemon", mappedBy="idAttack")
     */
    private $idPokemon;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPokemon = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Attack
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

    /**
     * Set physical
     *
     * @param boolean $physical
     *
     * @return Attack
     */
    public function setPhysical($physical)
    {
        $this->physical = $physical;

        return $this;
    }

    /**
     * Get physical
     *
     * @return boolean
     */
    public function getPhysical()
    {
        return $this->physical;
    }

    /**
     * Set power
     *
     * @param integer $power
     *
     * @return Attack
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return integer
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set accuracy
     *
     * @param integer $accuracy
     *
     * @return Attack
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    /**
     * Get accuracy
     *
     * @return integer
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return Attack
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return integer
     */
    public function getIdType()
    {
        return $this->idType;
    }

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
     * Add idPokemon
     *
     * @param \AppBundle\Entity\Pokemon $idPokemon
     *
     * @return Attack
     */
    public function addIdPokemon(\AppBundle\Entity\Pokemon $idPokemon)
    {
        $this->idPokemon[] = $idPokemon;

        return $this;
    }

    /**
     * Remove idPokemon
     *
     * @param \AppBundle\Entity\Pokemon $idPokemon
     */
    public function removeIdPokemon(\AppBundle\Entity\Pokemon $idPokemon)
    {
        $this->idPokemon->removeElement($idPokemon);
    }

    /**
     * Get idPokemon
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPokemon()
    {
        return $this->idPokemon;
    }
}
