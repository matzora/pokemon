<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemonattack
 *
 * @ORM\Table(name="pokemonattack", indexes={@ORM\Index(name="IDX_221178F3BC413983", columns={"id_pokemon"}), @ORM\Index(name="IDX_221178F361F798D6", columns={"id_attack"})})
 * @ORM\Entity
 */
class Pokemonattack
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
     * @var \AppBundle\Entity\Attack
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Attack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_attack", referencedColumnName="id")
     * })
     */
    private $idAttack;



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
     * @return Pokemonattack
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
     * Set idAttack
     *
     * @param \AppBundle\Entity\Attack $idAttack
     *
     * @return Pokemonattack
     */
    public function setIdAttack(\AppBundle\Entity\Attack $idAttack = null)
    {
        $this->idAttack = $idAttack;

        return $this;
    }

    /**
     * Get idAttack
     *
     * @return \AppBundle\Entity\Attack
     */
    public function getIdAttack()
    {
        return $this->idAttack;
    }
}
