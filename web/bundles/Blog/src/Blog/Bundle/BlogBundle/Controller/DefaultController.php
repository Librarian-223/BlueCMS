<?php

namespace Blog\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\Bundle\BlogBundle\Entity\Entrada;
use Blog\Bundle\BlogBundle\Entity\Comentario;
use Blog\Bundle\BlogBundle\Entity\Mensaje;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
	$entradas= $em->getRepository('BlogBlogBundle:Entrada')->findAll();
	$query=$em->createQuery('SELECT e FROM BlogBlogBundle:Entrada e ORDER BY e.fecha DESC');
        $entradas= $query->getResult();
        
    	return $this->render('BlogBlogBundle:Default:index.html.twig', array('entradas' => $entradas));
     
    }
    
    public function entradaAction($name)
    {
    	$em = $this->getDoctrine()->getEntityManager();
	$entradas= $em->getRepository('BlogBlogBundle:Entrada')->findAll();
    	
	$entrada= $em->getRepository('BlogBlogBundle:Entrada')->findOneBytitulo($name);
	$comentarios= $em->getRepository('BlogBlogBundle:Comentario')->findByEntrada($entrada->getId());
    	$entradaid=$entrada->getId();
        $query=$em->createQuery('SELECT c FROM BlogBlogBundle:Comentario c WHERE c.entrada = ?1 ORDER BY c.fecha DESC');
        $query->setParameter(1, $entradaid);
        $comentarios= $query->getResult();
        return $this->render('BlogBlogBundle:Default:entrada.html.twig', array('name' => $name, 'entradas' => $entradas,'entrada' => $entrada,'comentarios' => $comentarios));
    	}
    
    public function adminAction()
    {
        return $this->render('BlogBlogBundle:Default:backend.html.twig');
    }
    
    public function nuevaentradaAction()
    {
        return $this->render('BlogBlogBundle:Default:nuevaentrada.html.twig');
    }
    
    public function crearentradaAction()
    {
        $titulo=$_POST["titulo"];
        $contenido=$_POST["contenido"];
        $fecha=new \DateTime();
       
        $entity  = new Entrada();
        $entity->setTitulo($titulo);
        $entity->setContenido($contenido);
        $entity->setFecha($fecha);
        
        $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
            
        $em = $this->getDoctrine()->getEntityManager();
	$entradas= $em->getRepository('BlogBlogBundle:Entrada')->findAll();
        
	return $this->redirect($this->generateUrl('BlogBlogBundle_homepage'));

    }
    
    public function crearcomentarioAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $nombre=$_POST["nombre"];
        $comentario=$_POST["comentario"];
        $fecha=new \DateTime();
        $entradaid=$em->getRepository('BlogBlogBundle:Entrada')->findOneById($_POST["entrada"]);
        
        $entity  = new Comentario();
        $entity->setNombre($nombre);
        $entity->setComentario($comentario);
        $entity->setFecha($fecha);
        $entity->setEntrada($entradaid);
        
        
            $em->persist($entity);
            $em->flush();
            
  
	$entradas= $em->getRepository('BlogBlogBundle:Entrada')->findAll();
    	
	$entrada= $entradaid;
	$entradaid=$entrada->getId();
        $query=$em->createQuery('SELECT c FROM BlogBlogBundle:Comentario c WHERE c.entrada = ?1 ORDER BY c.fecha DESC');
        $query->setParameter(1, $entradaid);
        $comentarios= $query->getResult();
    	return $this->render('BlogBlogBundle:Default:entrada.html.twig', array('entradas' => $entradas,'entrada' => $entrada,'comentarios' => $comentarios));
    }
    
    public function archivoanioAction($anio){
        $em = $this->getDoctrine()->getEntityManager();
	$entradas= $em->getRepository('BlogBlogBundle:Entrada')->findAll();
	$query=$em->createQuery('SELECT e FROM BlogBlogBundle:Entrada e ORDER BY e.fecha DESC');
        $entradas= $query->getResult();
        
    	return $this->render('BlogBlogBundle:Default:anio.html.twig', array('entradas' => $entradas, 'anio' => $anio));
    }
    
    public function contactoAction()
    {
        $entradas=null;
        $name="";
	return $this->render('BlogBlogBundle:Default:contacto.html.twig',array('entradas' => $entradas, 'name' => $name));
    }
    
    public function enviarmailAction()
{
        $entradas=null;
        $nombre=$_POST["nombre"];
        $email=$_POST["email"];
        $tlf=$_POST["tlf"];
        $asunto=$_POST["asunto"];
        $mensaje=$_POST["mensaje"];
    $message = \Swift_Message::newInstance()
        ->setSubject($asunto)
        ->setFrom('symfony@symfony.com')
        ->setTo('docencia@aulatecnica.es')
        ->setBody($this->renderView('BlogBlogBundle:Default:mail.txt.twig', array('nombre' => $nombre, 
            'email' => $email, 'tlf' => $tlf, 'asunto' => $asunto, 'mensaje' => $mensaje)))
    ;
    $this->get('mailer')->send($message);
    
    $entity  = new Mensaje();
    $entity->setNombre($nombre);
    $entity->setEmail($email);
    $entity->setTelefono($tlf);
    $entity->setAsunto($asunto);
    $entity->setMensaje($mensaje);
    $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
    
    return $this->render('BlogBlogBundle:Default:contacto.html.twig',array('entradas' => $entradas,'name' => 'Enviado'));
}
    
   
}
