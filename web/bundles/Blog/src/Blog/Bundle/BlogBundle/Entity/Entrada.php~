<?php

namespace Blog\Bundle\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog\Bundle\BlogBundle\Entity\Entrada
 */
class Entrada
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $titulo
     */
    private $titulo;

    /**
     * @var string $contenido
     */
    private $contenido;

    /**
     * @var datetime $fecha
     */
    private $fecha;


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
     * Set titulo
     *
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set fecha
     *
     * @param datetime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return datetime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * @var Blog\Bundle\BlogBundle\Entity\Comentario
     */
    private $entradaid;

    public function __construct()
    {
        $this->entradaid = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add entradaid
     *
     * @param Blog\Bundle\BlogBundle\Entity\Comentario $entradaid
     */
    public function addComentario(\Blog\Bundle\BlogBundle\Entity\Comentario $entradaid)
    {
        $this->entradaid[] = $entradaid;
    }

    /**
     * Get entradaid
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEntradaid()
    {
        return $this->entradaid;
    }
}