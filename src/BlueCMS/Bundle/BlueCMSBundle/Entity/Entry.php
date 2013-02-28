<?php

namespace BlueCMS\Bundle\BlueCMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlueCMS\Bundle\BlueCMSBundle\Entity\Entry
 *
 * @ORM\Table(name="entry")
 * @ORM\Entity
 */
class Entry
{
    /**
     * @var integer $identry
     *
     * @ORM\Column(name="identry", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identry;

    /**
     * @var text $title
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var text $content
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var datetime $created
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var integer $iduser
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;



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
     * Set title
     *
     * @param text $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return text 
     */
    public function getTitle()
    {
        return $this->title;
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
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
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
}