<?php

namespace Ecs\AgentManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecs\AgentManagerBundle\Entity\Position;
use Ecs\AgentManagerBundle\Form\PositionType;

/**
 * Position controller.
 *
 */
class PositionController extends Controller
{
    /**
     * Lists all Position entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('EcsAgentManagerBundle:Position')->findAll();

        return $this->render('EcsAgentManagerBundle:Position:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Position entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:Position')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Position entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsAgentManagerBundle:Position:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Position entity.
     *
     */
    public function newAction()
    {
        $entity = new Position();
        $form   = $this->createForm(new PositionType(), $entity);

        return $this->render('EcsAgentManagerBundle:Position:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Position entity.
     *
     */
    public function createAction()
    {
        $entity  = new Position();
        $request = $this->getRequest();
        $form    = $this->createForm(new PositionType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agentmanager_empositions_show', array('id' => $entity->getId())));
            
        }

        return $this->render('EcsAgentManagerBundle:Position:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Position entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:Position')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Position entity.');
        }

        $editForm = $this->createForm(new PositionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsAgentManagerBundle:Position:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Position entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:Position')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Position entity.');
        }

        $editForm   = $this->createForm(new PositionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agentmanager_empositions_edit', array('id' => $id)));
        }

        return $this->render('EcsAgentManagerBundle:Position:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Position entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EcsAgentManagerBundle:Position')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Position entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('agentmanager_empositions'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
