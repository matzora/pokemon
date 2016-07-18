<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Areatrainer
 *
 * @ORM\Table(name="areatrainer", indexes={@ORM\Index(name="IDX_5AAD1E215CB4216A", columns={"id_area"}), @ORM\Index(name="IDX_5AAD1E211B88A150", columns={"id_trainer"})})
 * @ORM\Entity
 */
class Areatrainer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="areatrainer_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Area
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Area")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area", referencedColumnName="id")
     * })
     */
    private $idArea;

    /**
     * @var \AppBundle\Entity\Trainer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Trainer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_trainer", referencedColumnName="id")
     * })
     */
    private $idTrainer;



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
     * Set idArea
     *
     * @param \AppBundle\Entity\Area $idArea
     *
     * @return Areatrainer
     */
    public function setIdArea(\AppBundle\Entity\Area $idArea = null)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * Get idArea
     *
     * @return \AppBundle\Entity\Area
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * Set idTrainer
     *
     * @param \AppBundle\Entity\Trainer $idTrainer
     *
     * @return Areatrainer
     */
    public function setIdTrainer(\AppBundle\Entity\Trainer $idTrainer = null)
    {
        $this->idTrainer = $idTrainer;

        return $this;
    }

    /**
     * Get idTrainer
     *
     * @return \AppBundle\Entity\Trainer
     */
    public function getIdTrainer()
    {
        return $this->idTrainer;
    }
}
