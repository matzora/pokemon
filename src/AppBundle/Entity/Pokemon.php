<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon")
 * @ORM\Entity
 */
class Pokemon
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="pv", type="integer", nullable=false)
     */
    private $pv;

    /**
     * @var integer
     *
     * @ORM\Column(name="atk", type="integer", nullable=false)
     */
    private $atk;

    /**
     * @var integer
     *
     * @ORM\Column(name="def", type="integer", nullable=false)
     */
    private $def;

    /**
     * @var integer
     *
     * @ORM\Column(name="vit", type="integer", nullable=false)
     */
    private $vit;

    /**
     * @var integer
     *
     * @ORM\Column(name="atk_spe", type="integer", nullable=false)
     */
    private $atkSpe;

    /**
     * @var integer
     *
     * @ORM\Column(name="def_spe", type="integer", nullable=false)
     */
    private $defSpe;

    /**
     * @var integer
     *
     * @ORM\Column(name="xp_factor", type="integer", nullable=false)
     */
    private $xpFactor;

    /**
     * @var integer
     *
     * @ORM\Column(name="capture", type="integer", nullable=false)
     */
    private $capture;

    /**
     * @var integer
     *
     * @ORM\Column(name="appear_chance", type="integer", nullable=false)
     */
    private $appearChance;

    /**
     * @var \AppBundle\Entity\Types
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Types")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Attack", inversedBy="idPokemon")
     * @ORM\JoinTable(name="pokemonattack",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_pokemon", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_attack", referencedColumnName="id")
     *   }
     * )
     */
    private $idAttack;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Area", mappedBy="idTrainer")
     */
    private $idArea;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAttack = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idArea = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Pokemon
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
     * Set pv
     *
     * @param integer $pv
     *
     * @return Pokemon
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get pv
     *
     * @return integer
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set atk
     *
     * @param integer $atk
     *
     * @return Pokemon
     */
    public function setAtk($atk)
    {
        $this->atk = $atk;

        return $this;
    }

    /**
     * Get atk
     *
     * @return integer
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * Set def
     *
     * @param integer $def
     *
     * @return Pokemon
     */
    public function setDef($def)
    {
        $this->def = $def;

        return $this;
    }

    /**
     * Get def
     *
     * @return integer
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * Set vit
     *
     * @param integer $vit
     *
     * @return Pokemon
     */
    public function setVit($vit)
    {
        $this->vit = $vit;

        return $this;
    }

    /**
     * Get vit
     *
     * @return integer
     */
    public function getVit()
    {
        return $this->vit;
    }

    /**
     * Set atkSpe
     *
     * @param integer $atkSpe
     *
     * @return Pokemon
     */
    public function setAtkSpe($atkSpe)
    {
        $this->atkSpe = $atkSpe;

        return $this;
    }

    /**
     * Get atkSpe
     *
     * @return integer
     */
    public function getAtkSpe()
    {
        return $this->atkSpe;
    }

    /**
     * Set defSpe
     *
     * @param integer $defSpe
     *
     * @return Pokemon
     */
    public function setDefSpe($defSpe)
    {
        $this->defSpe = $defSpe;

        return $this;
    }

    /**
     * Get defSpe
     *
     * @return integer
     */
    public function getDefSpe()
    {
        return $this->defSpe;
    }

    /**
     * Set xpFactor
     *
     * @param integer $xpFactor
     *
     * @return Pokemon
     */
    public function setXpFactor($xpFactor)
    {
        $this->xpFactor = $xpFactor;

        return $this;
    }

    /**
     * Get xpFactor
     *
     * @return integer
     */
    public function getXpFactor()
    {
        return $this->xpFactor;
    }

    /**
     * Set capture
     *
     * @param integer $capture
     *
     * @return Pokemon
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * Get capture
     *
     * @return integer
     */
    public function getCapture()
    {
        return $this->capture;
    }

    /**
     * Set appearChance
     *
     * @param integer $appearChance
     *
     * @return Pokemon
     */
    public function setAppearChance($appearChance)
    {
        $this->appearChance = $appearChance;

        return $this;
    }

    /**
     * Get appearChance
     *
     * @return integer
     */
    public function getAppearChance()
    {
        return $this->appearChance;
    }

    /**
     * Set id
     *
     * @param \AppBundle\Entity\Types $id
     *
     * @return Pokemon
     */
    public function setId(\AppBundle\Entity\Types $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \AppBundle\Entity\Types
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add idAttack
     *
     * @param \AppBundle\Entity\Attack $idAttack
     *
     * @return Pokemon
     */
    public function addIdAttack(\AppBundle\Entity\Attack $idAttack)
    {
        $this->idAttack[] = $idAttack;

        return $this;
    }

    /**
     * Remove idAttack
     *
     * @param \AppBundle\Entity\Attack $idAttack
     */
    public function removeIdAttack(\AppBundle\Entity\Attack $idAttack)
    {
        $this->idAttack->removeElement($idAttack);
    }

    /**
     * Get idAttack
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdAttack()
    {
        return $this->idAttack;
    }

    /**
     * Add idArea
     *
     * @param \AppBundle\Entity\Area $idArea
     *
     * @return Pokemon
     */
    public function addIdArea(\AppBundle\Entity\Area $idArea)
    {
        $this->idArea[] = $idArea;

        return $this;
    }

    /**
     * Remove idArea
     *
     * @param \AppBundle\Entity\Area $idArea
     */
    public function removeIdArea(\AppBundle\Entity\Area $idArea)
    {
        $this->idArea->removeElement($idArea);
    }

    /**
     * Get idArea
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdArea()
    {
        return $this->idArea;
    }
}
