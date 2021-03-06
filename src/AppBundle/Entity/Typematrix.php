<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typematrix
 *
 * @ORM\Table(name="typematrix", indexes={@ORM\Index(name="IDX_7C072AA42F67E8BC", columns={"id_type1"}), @ORM\Index(name="IDX_7C072AA4B66EB906", columns={"id_type2"}), @ORM\Index(name="IDX_7C072AA48CE51E5D", columns={"id_multiplicator"})})
 * @ORM\Entity
 */
class Typematrix
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Type
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Type")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type1", referencedColumnName="id")
     * })
     */
    private $idType1;

    /**
     * @var \AppBundle\Entity\Type
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Type")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type2", referencedColumnName="id")
     * })
     */
    private $idType2;

    /**
     * @var \AppBundle\Entity\Multiplicator
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Multiplicator")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_multiplicator", referencedColumnName="id")
     * })
     */
    private $idMultiplicator;



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
     * Set idType1
     *
     * @param \AppBundle\Entity\Type $idType1
     *
     * @return Typematrix
     */
    public function setIdType1(\AppBundle\Entity\Type $idType1 = null)
    {
        $this->idType1 = $idType1;

        return $this;
    }

    /**
     * Get idType1
     *
     * @return \AppBundle\Entity\Type
     */
    public function getIdType1()
    {
        return $this->idType1;
    }

    /**
     * Set idType2
     *
     * @param \AppBundle\Entity\Type $idType2
     *
     * @return Typematrix
     */
    public function setIdType2(\AppBundle\Entity\Type $idType2 = null)
    {
        $this->idType2 = $idType2;

        return $this;
    }

    /**
     * Get idType2
     *
     * @return \AppBundle\Entity\Type
     */
    public function getIdType2()
    {
        return $this->idType2;
    }

    /**
     * Set idMultiplicator
     *
     * @param \AppBundle\Entity\Multiplicator $idMultiplicator
     *
     * @return Typematrix
     */
    public function setIdMultiplicator(\AppBundle\Entity\Multiplicator $idMultiplicator = null)
    {
        $this->idMultiplicator = $idMultiplicator;

        return $this;
    }

    /**
     * Get idMultiplicator
     *
     * @return \AppBundle\Entity\Multiplicator
     */
    public function getIdMultiplicator()
    {
        return $this->idMultiplicator;
    }
}
