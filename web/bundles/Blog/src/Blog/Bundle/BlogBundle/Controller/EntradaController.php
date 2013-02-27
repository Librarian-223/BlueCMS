<?php

namespace Blog\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Blog\Bundle\BlogBundle\Entity\Entrada;
use Blog\Bundle\BlogBundle\Form\EntradaType;

/**
 * Entrada controller.
 *
 */
class EntradaController extends Controller
{
    /**
     * Lists all Entrada entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BlogBlogBundle:Entrada')->findAll();

        return $this->render('BlogBlogBundle:Entrada:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Entrada entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BlogBlogBundle:Entrada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entrada entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BlogBlogBundle:Entrada:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Entrada entity.
     *
     */
    public function newAction()
    {
        $entity = new Entrada();
        $form   = $this->createForm(new EntradaType(), $entity);

        return $this->render('BlogBlogBundle:Entrada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Entrada entity.
     *
     */
    public function createAction()
    {
        $entity  = new Entrada();
        $request = $this->getRequest();
        $form    = $this->createForm(new EntradaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('manage_entrada_show', array('id' => $entity->getId())));
            
        }

        return $this->render('BlogBlogBundle:Entrada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Entrada entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BlogBlogBundle:Entrada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entrada entity.');
        }

        $editForm = $this->createForm(new EntradaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BlogBlogBundle:Entrada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Entrada entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BlogBlogBundle:Entrada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entrada entity.');
        }

        $editForm   = $this->createForm(new EntradaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('manage_entrada_edit', array('id' => $id)));
        }

        return $this->render('BlogBlogBundle:Entrada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Entrada entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BlogBlogBundle:Entrada')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Entrada entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('manage_entrada'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
