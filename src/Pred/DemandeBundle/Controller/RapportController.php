<?php

namespace Pred\DemandeBundle\Controller;

use Pred\DemandeBundle\Entity\Rapport;
use Pred\DemandeBundle\Form\RapportType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

/**
 * Rapport controller.
 *
 */
class RapportController extends Controller
{

    /**
     * Lists all Rapport entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PredDemandeBundle:Rapport')->findAll();

        return $this->render('PredDemandeBundle:Rapport:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Rapport entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Rapport();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rapport_show', array('id' => $entity->getId())));
        }

        return $this->render('PredDemandeBundle:Rapport:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Rapport entity.
    *
    * @param Rapport $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Rapport $entity)
    {
        $form = $this->createForm(new RapportType(), $entity, array(
            'action' => $this->generateUrl('rapport_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rapport entity.
     *
     */
    public function newAction()
    {
        $entity = new Rapport();
        $form   = $this->createCreateForm($entity);

        return $this->render('PredDemandeBundle:Rapport:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rapport entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Rapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PredDemandeBundle:Rapport:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Rapport entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Rapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapport entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PredDemandeBundle:Rapport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rapport entity.
    *
    * @param Rapport $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rapport $entity)
    {
        $form = $this->createForm(new RapportType(), $entity, array(
            'action' => $this->generateUrl('rapport_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Rapport entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Rapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rapport_edit', array('id' => $id)));
        }

        return $this->render('PredDemandeBundle:Rapport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Rapport entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PredDemandeBundle:Rapport')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rapport entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rapport'));
    }

    /**
     * Creates a form to delete a Rapport entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rapport_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
