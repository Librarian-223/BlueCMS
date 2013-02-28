<?php

namespace BlueCMS\Bundle\BlueCMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlueCMS\Bundle\BlueCMSBundle\Entity\Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer $idcomment
     *
     * @ORM\Column(name="idcomment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomment;

    /**
     * @var text $content
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var integer $identry
     *
     * @ORM\Column(name="identry", type="integer", nullable=false)
     */
    private $identry;

    /**
     * @var integer $iduser
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var date $created
     *
     * @ORM\Column(name="created", type="date", nullable=false)
     */
    private $created;



    /**
     * Get idcomment
     *
     * @return integer 
     */
    public function getIdcomment()
    {
        return $this->idcomment;
    }

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set identry
     *
     * @param integer $identry
     */
    public function setIdentry($identry)
    {
        $this->identry = $identry;
    }

    /**
     * Get identry
     *
     * @return integer 
     */
    public function getIdentry()
    {
        return $this->identry;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }

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
     * Set created
     *
     * @param date $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return date 
     */
    public function getCreated()
    {
        return $this->created;
    }
}