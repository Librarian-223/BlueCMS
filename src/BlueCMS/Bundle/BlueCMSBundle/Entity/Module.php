<?php

namespace BlueCMS\Bundle\BlueCMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlueCMS\Bundle\BlueCMSBundle\Entity\Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity
 */
class Module
{
    /**
     * @var integer $idmodule
     *
     * @ORM\Column(name="idmodule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodule;

    /**
     * @var text $name
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var text $code
     *
     * @ORM\Column(name="code", type="text", nullable=false)
     */
    private $code;

    /**
     * @var text $position
     *
     * @ORM\Column(name="position", type="text", nullable=false)
     */
    private $position;

    /**
     * @var integer $activity
     *
     * @ORM\Column(name="activity", type="integer", nullable=false)
     */
    private $activity;

    /**
     * @var integer $order
     *
     * @ORM\Column(name="order", type="integer", nullable=false)
     */
    private $order;



    /**
     * Get idmodule
     *
     * @return integer 
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }

    /**
     * Set name
     *
     * @param text $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return text 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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

    /**
     * Set code
     *
     * @param text $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get code
     *
     * @return text 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set position
     *
     * @param text $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * Get position
     *
     * @return text 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set activity
     *
     * @param integer $activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    }

    /**
     * Get activity
     *
     * @return integer 
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set order
     *
     * @param integer $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * Get order
     *
     * @return integer 
     */
    public function getOrder()
    {
        return $this->order;
    }
}