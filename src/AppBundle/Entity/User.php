<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 *
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="roles",
 *          column=@ORM\Column(
 *              type =  "array",
 *              name     = "roles",
 *              nullable = true,
 *              unique   = false
 *          )
 *      )
 * })
 */
class User extends BaseUser
{
    /**
     * @var int $id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string name
     * @ORM\Column(name="name", type="string", length=50)
     * @Assert\NotBlank
     */
    protected $name;

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
