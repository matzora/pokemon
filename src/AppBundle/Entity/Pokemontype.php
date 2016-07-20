<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemontype
 *
 * @ORM\Table(name="pokemontype", indexes={@ORM\Index(name="IDX_6B2FDCF7BC413983", columns={"id_pokemon"}), @ORM\Index(name="IDX_6B2FDCF77FE4B2B", columns={"id_type"})})
 * @ORM\Entity
 */
class Pokemontype
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
     * @var \AppBundle\Entity\Pokemon
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pokemon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pokemon", referencedColumnName="id")
     * })
     */
    private $idPokemon;

    /**
     * @var \AppBundle\Entity\Type
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Type")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type", referencedColumnName="id")
     * })
     */
    private $idType;



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
     * Set idPokemon
     *
     * @param \AppBundle\Entity\Pokemon $idPokemon
     *
     * @return Pokemontype
     */
    public function setIdPokemon(\AppBundle\Entity\Pokemon $idPokemon = null)
    {
        $this->idPokemon = $idPokemon;

        return $this;
    }

    /**
     * Get idPokemon
     *
     * @return \AppBundle\Entity\Pokemon
     */
    public function getIdPokemon()
    {
        return $this->idPokemon;
    }

    /**
     * Set idType
     *
     * @param \AppBundle\Entity\Type $idType
     *
     * @return Pokemontype
     */
    public function setIdType(\AppBundle\Entity\Type $idType = null)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return \AppBundle\Entity\Type
     */
    public function getIdType()
    {
        return $this->idType;
    }
}
