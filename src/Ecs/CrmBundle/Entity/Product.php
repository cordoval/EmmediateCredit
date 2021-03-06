<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\CrmBundle\Entity\Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var decimal $price
     *
     * @ORM\Column(name="price", type="decimal", nullable=false)
     */
    private $price;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var boolean $reoccurring
     *
     * @ORM\Column(name="reoccurring", type="boolean", nullable=false)
     */
    private $reoccurring;

    /**
     * @var smallint $billFrequency
     *
     * @ORM\Column(name="bill_frequency", type="smallint", nullable=true)
     */
    private $billFrequency;

    /**
     * @var smallint $billTimes
     *
     * @ORM\Column(name="bill_times", type="smallint", nullable=true)
     */
    private $billTimes;

    /**
     * @var boolean $trial
     *
     * @ORM\Column(name="trial", type="boolean", nullable=true)
     */
    private $trial;

    /**
     * @var smallint $trialLength
     *
     * @ORM\Column(name="trial_length", type="smallint", nullable=true)
     */
    private $trialLength;

    /**
     * @var smallint $billdelay
     *
     * @ORM\Column(name="bill_delay", type="smallint", nullable=true)
     */
    private $billdelay;

    /**
     * Get idproduct
     *
     * @return integer 
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set price
     *
     * @param decimal $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return decimal 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set reoccurring
     *
     * @param boolean $reoccurring
     */
    public function setReoccurring($reoccurring)
    {
        $this->reoccurring = $reoccurring;
    }

    /**
     * Get reoccurring
     *
     * @return boolean 
     */
    public function getReoccurring()
    {
        return $this->reoccurring;
    }

    /**
     * Set billFrequency
     *
     * @param smallint $billFrequency
     */
    public function setBillFrequency($billFrequency)
    {
        $this->billFrequency = $billFrequency;
    }

    /**
     * Get billFrequency
     *
     * @return smallint 
     */
    public function getBillFrequency()
    {
        return $this->billFrequency;
    }

    /**
     * Set billTimes
     *
     * @param smallint $billTimes
     */
    public function setBillTimes($billTimes)
    {
        $this->billTimes = $billTimes;
    }

    /**
     * Get billTimes
     *
     * @return smallint 
     */
    public function getBillTimes()
    {
        return $this->billTimes;
    }

    /**
     * Set trial
     *
     * @param boolean $trial
     */
    public function setTrial($trial)
    {
        $this->trial = $trial;
    }

    /**
     * Get trial
     *
     * @return boolean 
     */
    public function getTrial()
    {
        return $this->trial;
    }

    /**
     * Set trialLength
     *
     * @param smallint $trialLength
     */
    public function setTrialLength($trialLength)
    {
        $this->trialLength = $trialLength;
    }

    /**
     * Get trialLength
     *
     * @return smallint 
     */
    public function getTrialLength()
    {
        return $this->trialLength;
    }

    /**
     * Set billdelay
     *
     * @param smallint $billdelay
     */
    public function setBillDelay($billdelay)
    {
        $this->billdelay = $billdelay;
    }

    /**
     * Get getBillDelay
     *
     * @return smallint 
     */
    public function getBillDelay()
    {
        return $this->billdelay;
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