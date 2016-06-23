<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="area")
 * @ORM\Entity
 */
class Area
{
    /**
     * @var string
     *
     * @ORM\Column(name="picture_path", type="string", length=255, nullable=false)
     */
    private $picturePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="area_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Pokemon", inversedBy="idArea")
     * @ORM\JoinTable(name="areatrainer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_area", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_trainer", referencedColumnName="id")
     *   }
     * )
     */
    private $idTrainer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTrainer = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set picturePath
     *
     * @param string $picturePath
     *
     * @return Area
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;

        return $this;
    }

    /**
     * Get picturePath
     *
     * @return string
     */
    public function getPicturePath()
    {
        return $this->picturePath;
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
     * Add idTrainer
     *
     * @param \AppBundle\Entity\Pokemon $idTrainer
     *
     * @return Area
     */
    public function addIdTrainer(\AppBundle\Entity\Pokemon $idTrainer)
    {
        $this->idTrainer[] = $idTrainer;

        return $this;
    }

    /**
     * Remove idTrainer
     *
     * @param \AppBundle\Entity\Pokemon $idTrainer
     */
    public function removeIdTrainer(\AppBundle\Entity\Pokemon $idTrainer)
    {
        $this->idTrainer->removeElement($idTrainer);
    }

    /**
     * Get idTrainer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTrainer()
    {
        return $this->idTrainer;
    }
}
