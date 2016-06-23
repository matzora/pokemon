<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemontype
 *
 * @ORM\Table(name="pokemontype")
 * @ORM\Entity
 */
class Pokemontype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pokemon", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPokemon;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idType;



    /**
     * Set idPokemon
     *
     * @param integer $idPokemon
     *
     * @return Pokemontype
     */
    public function setIdPokemon($idPokemon)
    {
        $this->idPokemon = $idPokemon;

        return $this;
    }

    /**
     * Get idPokemon
     *
     * @return integer
     */
    public function getIdPokemon()
    {
        return $this->idPokemon;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return Pokemontype
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
}
