<?php

namespace BlueCMS\Bundle\BlueCMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('BlueCMSBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function gestorAction()
    {
        return $this->render('BlueCMSBundle:Default:gestor.html.twig');
    }
}
