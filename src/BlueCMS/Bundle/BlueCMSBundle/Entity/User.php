<?php

namespace BlueCMS\Bundle\BlueCMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlueCMS\Bundle\BlueCMSBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer $iduser
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var text $name
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var text $usertype
     *
     * @ORM\Column(name="usertype", type="text", nullable=false)
     */
    private $usertype;

    /**
     * @var text $password
     *
     * @ORM\Column(name="password", type="text", nullable=false)
     */
    private $password;

    /**
     * @var text $alias
     *
     * @ORM\Column(name="alias", type="text", nullable=false)
     */
    private $alias;



    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
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
     * Set usertype
     *
     * @param text $usertype
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;
    }

    /**
     * Get usertype
     *
     * @return text 
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set password
     *
     * @param text $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return text 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set alias
     *
     * @param text $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * Get alias
     *
     * @return text 
     */
    public function getAlias()
    {
        return $this->alias;
    }
}