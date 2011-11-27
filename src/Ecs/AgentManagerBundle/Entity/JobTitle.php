<?php

namespace Ecs\AgentManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\AgentManagerBundle\Entity\JobTitle
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class JobTitle
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $position_name
     *
     * @ORM\Column(name="position_name", type="string", length=255)
     */
    private $position_name;

    /**
     * @var string $default_roles
     *
     * @ORM\Column(name="default_roles", type="string", length=255)
     */
    private $default_roles;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * @return JobTitle
     */
    public function setPositionName($positionName)
    {
        $this->position_name = $positionName;
        return $this;
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
     * Set default_roles
     *
     * @param string $defaultRoles
     * @return JobTitle
     */
    public function setDefaultRoles($defaultRoles)
    {
        $this->default_roles = $defaultRoles;
        return $this;
    }

    /**
     * Get default_roles
     *
     * @return string 
     */
    public function getDefaultRoles()
    {
        return $this->default_roles;
    }

    /**
     * Set description
     *
     * @param text $description
     * @return JobTitle
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }
}