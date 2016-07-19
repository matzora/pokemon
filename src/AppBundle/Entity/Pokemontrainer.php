<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemontrainer
 *
 * @ORM\Table(name="pokemontrainer", indexes={@ORM\Index(name="IDX_50CF93F7BC413983", columns={"id_pokemon"}), @ORM\Index(name="IDX_50CF93F71B88A150", columns={"id_trainer"})})
 * @ORM\Entity
 */
class Pokemontrainer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isdead", type="boolean", nullable=false)
     */
    private $isdead;

    /**
     * @var integer
     *
     * @ORM\Column(name="actual_pv", type="integer", nullable=false)
     */
    private $actualPv;

    /**
     * @var integer
     *
     * @ORM\Column(name="actual_atk", type="integer", nullable=false)
     */
    private $actualAtk;

    /**
     * @var integer
     *
     * @ORM\Column(name="actual_def", type="integer", nullable=false)
     */
    private $actualDef;

    /**
     * @var integer
     *
     * @ORM\Column(name="actual_vit", type="integer", nullable=false)
     */
    private $actualVit;

    /**
     * @var integer
     *
     * @ORM\Column(name="actual_atk_spe", type="integer", nullable=false)
     */
    private $actualAtkSpe;

    /**
     * @var integer
     *
     * @ORM\Column(name="actual_def_spe", type="integer", nullable=false)
     */
    private $actualDefSpe;

    /**
     * @var integer
     *
     * @ORM\Column(name="battle_pv", type="integer", nullable=false)
     */
    private $battlePv;

    /**
     * @var integer
     *
     * @ORM\Column(name="battle_atk", type="integer", nullable=false)
     */
    private $battleAtk;

    /**
     * @var integer
     *
     * @ORM\Column(name="battle_def", type="integer", nullable=false)
     */
    private $battleDef;

    /**
     * @var integer
     *
     * @ORM\Column(name="battle_vit", type="integer", nullable=false)
     */
    private $battleVit;

    /**
     * @var integer
     *
     * @ORM\Column(name="battle_atk_spe", type="integer", nullable=false)
     */
    private $battleAtkSpe;

    /**
     * @var integer
     *
     * @ORM\Column(name="battle_def_spe", type="integer", nullable=false)
     */
    private $battleDefSpe;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="pokemontrainer_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AppBundle\Entity\Trainer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Trainer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_trainer", referencedColumnName="id")
     * })
     */
    private $idTrainer;



    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Pokemontrainer
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set isdead
     *
     * @param boolean $isdead
     *
     * @return Pokemontrainer
     */
    public function setIsdead($isdead)
    {
        $this->isdead = $isdead;

        return $this;
    }

    /**
     * Get isdead
     *
     * @return boolean
     */
    public function getIsdead()
    {
        return $this->isdead;
    }

    /**
     * Set actualPv
     *
     * @param integer $actualPv
     *
     * @return Pokemontrainer
     */
    public function setActualPv($actualPv)
    {
        $this->actualPv = $actualPv;

        return $this;
    }

    /**
     * Get actualPv
     *
     * @return integer
     */
    public function getActualPv()
    {
        return $this->actualPv;
    }

    /**
     * Set actualAtk
     *
     * @param integer $actualAtk
     *
     * @return Pokemontrainer
     */
    public function setActualAtk($actualAtk)
    {
        $this->actualAtk = $actualAtk;

        return $this;
    }

    /**
     * Get actualAtk
     *
     * @return integer
     */
    public function getActualAtk()
    {
        return $this->actualAtk;
    }

    /**
     * Set actualDef
     *
     * @param integer $actualDef
     *
     * @return Pokemontrainer
     */
    public function setActualDef($actualDef)
    {
        $this->actualDef = $actualDef;

        return $this;
    }

    /**
     * Get actualDef
     *
     * @return integer
     */
    public function getActualDef()
    {
        return $this->actualDef;
    }

    /**
     * Set actualVit
     *
     * @param integer $actualVit
     *
     * @return Pokemontrainer
     */
    public function setActualVit($actualVit)
    {
        $this->actualVit = $actualVit;

        return $this;
    }

    /**
     * Get actualVit
     *
     * @return integer
     */
    public function getActualVit()
    {
        return $this->actualVit;
    }

    /**
     * Set actualAtkSpe
     *
     * @param integer $actualAtkSpe
     *
     * @return Pokemontrainer
     */
    public function setActualAtkSpe($actualAtkSpe)
    {
        $this->actualAtkSpe = $actualAtkSpe;

        return $this;
    }

    /**
     * Get actualAtkSpe
     *
     * @return integer
     */
    public function getActualAtkSpe()
    {
        return $this->actualAtkSpe;
    }

    /**
     * Set actualDefSpe
     *
     * @param integer $actualDefSpe
     *
     * @return Pokemontrainer
     */
    public function setActualDefSpe($actualDefSpe)
    {
        $this->actualDefSpe = $actualDefSpe;

        return $this;
    }

    /**
     * Get actualDefSpe
     *
     * @return integer
     */
    public function getActualDefSpe()
    {
        return $this->actualDefSpe;
    }

    /**
     * Set battlePv
     *
     * @param integer $battlePv
     *
     * @return Pokemontrainer
     */
    public function setBattlePv($battlePv)
    {
        $this->battlePv = $battlePv;

        return $this;
    }

    /**
     * Get battlePv
     *
     * @return integer
     */
    public function getBattlePv()
    {
        return $this->battlePv;
    }

    /**
     * Set battleAtk
     *
     * @param integer $battleAtk
     *
     * @return Pokemontrainer
     */
    public function setBattleAtk($battleAtk)
    {
        $this->battleAtk = $battleAtk;

        return $this;
    }

    /**
     * Get battleAtk
     *
     * @return integer
     */
    public function getBattleAtk()
    {
        return $this->battleAtk;
    }

    /**
     * Set battleDef
     *
     * @param integer $battleDef
     *
     * @return Pokemontrainer
     */
    public function setBattleDef($battleDef)
    {
        $this->battleDef = $battleDef;

        return $this;
    }

    /**
     * Get battleDef
     *
     * @return integer
     */
    public function getBattleDef()
    {
        return $this->battleDef;
    }

    /**
     * Set battleVit
     *
     * @param integer $battleVit
     *
     * @return Pokemontrainer
     */
    public function setBattleVit($battleVit)
    {
        $this->battleVit = $battleVit;

        return $this;
    }

    /**
     * Get battleVit
     *
     * @return integer
     */
    public function getBattleVit()
    {
        return $this->battleVit;
    }

    /**
     * Set battleAtkSpe
     *
     * @param integer $battleAtkSpe
     *
     * @return Pokemontrainer
     */
    public function setBattleAtkSpe($battleAtkSpe)
    {
        $this->battleAtkSpe = $battleAtkSpe;

        return $this;
    }

    /**
     * Get battleAtkSpe
     *
     * @return integer
     */
    public function getBattleAtkSpe()
    {
        return $this->battleAtkSpe;
    }

    /**
     * Set battleDefSpe
     *
     * @param integer $battleDefSpe
     *
     * @return Pokemontrainer
     */
    public function setBattleDefSpe($battleDefSpe)
    {
        $this->battleDefSpe = $battleDefSpe;

        return $this;
    }

    /**
     * Get battleDefSpe
     *
     * @return integer
     */
    public function getBattleDefSpe()
    {
        return $this->battleDefSpe;
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
     * Set idPokemon
     *
     * @param \AppBundle\Entity\Pokemon $idPokemon
     *
     * @return Pokemontrainer
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
     * Set idTrainer
     *
     * @param \AppBundle\Entity\Trainer $idTrainer
     *
     * @return Pokemontrainer
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
