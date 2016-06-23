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
     * @var \AppBundle\Entity\Types
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Types")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type1", referencedColumnName="id")
     * })
     */
    private $idType1;

    /**
     * @var \AppBundle\Entity\Types
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Types")
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
     * Set idType1
     *
     * @param \AppBundle\Entity\Types $idType1
     *
     * @return Typematrix
     */
    public function setIdType1(\AppBundle\Entity\Types $idType1)
    {
        $this->idType1 = $idType1;

        return $this;
    }

    /**
     * Get idType1
     *
     * @return \AppBundle\Entity\Types
     */
    public function getIdType1()
    {
        return $this->idType1;
    }

    /**
     * Set idType2
     *
     * @param \AppBundle\Entity\Types $idType2
     *
     * @return Typematrix
     */
    public function setIdType2(\AppBundle\Entity\Types $idType2)
    {
        $this->idType2 = $idType2;

        return $this;
    }

    /**
     * Get idType2
     *
     * @return \AppBundle\Entity\Types
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
