<?php

namespace Ecs\AgentManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\AgentManagerBundle\Entity\Position
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecs\AgentManagerBundle\Entity\PositionRepository")
 */
class Position
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $position_name
     *
     * @ORM\Column(name="position_name", type="string", length=255)
     */
    protected $position_name;

    /**
     * @var string $position_default_roles
     *
     * @ORM\Column(name="position_default_roles", type="string", length=255)
     */
    protected $position_default_roles;

    /**
     * ORM\OneToMany(targetEntity="User", mappedBy="position")
     */
	protected $users;


    public function __construct()
    {
        $this->users = new ArrayCollection();
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
     * Set position_name
     *
     * @param string $positionName
     */
    public function setPositionName($positionName)
    {
        $this->position_name = $positionName;
    }

    /**
     * Get position_name
     *
     * @return string 
     */
    public function getPositionName()
    {
        return $this->position_name;
    }

    /**
     * Set position_default_roles
     *
     * @param string $positionDefaultRoles
     */
    public function setPositionDefaultRoles($positionDefaultRoles)
    {
        $this->position_default_roles = $positionDefaultRoles;
    }

    /**
     * Get position_default_roles
     *
     * @return string 
     */
    public function getPositionDefaultRoles()
    {
        return $this->position_default_roles;
    }
}