<?php

namespace BlueCMS\Bundle\BlueCMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlueCMS\Bundle\BlueCMSBundle\Entity\Settings
 *
 * @ORM\Table(name="settings")
 * @ORM\Entity
 */
class Settings
{
    /**
     * @var integer $idsetting
     *
     * @ORM\Column(name="idsetting", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsetting;

    /**
     * @var text $name
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var text $value
     *
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private $value;



    /**
     * Get idsetting
     *
     * @return integer 
     */
    public function getIdsetting()
    {
        return $this->idsetting;
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
     * Set value
     *
     * @param text $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return text 
     */
    public function getValue()
    {
        return $this->value;
    }
}