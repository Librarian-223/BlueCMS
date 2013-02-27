<?php

namespace Blog\Bundle\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog\Bundle\BlogBundle\Entity\Comentario
 */
class Comentario
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * @var string $comentario
     */
    private $comentario;

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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
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
     * @var Blog\Bundle\BlogBundle\Entity\Entrada
     */
    private $entrada;


    /**
     * Set entrada
     *
     * @param Blog\Bundle\BlogBundle\Entity\Entrada $entrada
     */
    public function setEntrada(\Blog\Bundle\BlogBundle\Entity\Entrada $entrada)
    {
        $this->entrada = $entrada;
    }

    /**
     * Get entrada
     *
     * @return Blog\Bundle\BlogBundle\Entity\Entrada 
     */
    public function getEntrada()
    {
        return $this->entrada;
    }
}