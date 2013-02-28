<?php

namespace BlueCMS\Bundle\BlueCMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Practicas\Bundle\Practica1Bundle\Entity\Entry;


class DefaultController extends Controller
{
    
    public function indexAction($nombre)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$entradas= $em->getRepository('BlueCMSBundle:Entry')->findAll();

        return $this->render('BlueCMSBundle:Default:index.html.twig', array('name' => $nombre,'entradas' => $entradas));
    }
    
    public function gestorAction()
    {
        return $this->render('BlueCMSBundle:Default:gestor.html.twig');
    }
}
