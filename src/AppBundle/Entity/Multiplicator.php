<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Multiplicator
 *
 * @ORM\Table(name="multiplicator")
 * @ORM\Entity
 */
class Multiplicator
{
    /**
     * @var float
     *
     * @ORM\Column(name="factor", type="float", precision=10, scale=0, nullable=true)
     */
    private $factor;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=50, nullable=false)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="multiplicator_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set factor
     *
     * @param float $factor
     *
     * @return Multiplicator
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;

        return $this;
    }

    /**
     * Get factor
     *
     * @return float
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Multiplicator
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
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
}
