<?php

namespace Pred\DemandeBundle\Controller;

use Pred\DemandeBundle\Entity\Etablissement;
use Pred\DemandeBundle\Form\EtablissementType;

use Pred\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Etablissement controller.
 *
 */
class EtablissementController extends Controller
{

    /**
     * Lists all Etablissement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PredDemandeBundle:Etablissement')->findAll();

        return $this->render('PredDemandeBundle:Etablissement:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Etablissement entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Etablissement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            //on lie cet evaluateur avec un objet user de notre table utilisateur
            $user = new User();
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($user);
            $password = $entity->getPassword();
            $password = $encoder->encodePassword($password, $user->getSalt());
            $user->setPassword($password);
            $user->setEmail($entity->getEmail());
            $user->setUsername($entity->getUsername());
            $user->setEnabled(true);
            $roles = array('ROLE_ETABLISSEMENT');
            $user->setRoles($roles);
            $user->setProfil("etablissement");
            $user->setEtablissement($entity);
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('etablissement_show', array('id' => $entity->getId())));
        }

        return $this->render('PredDemandeBundle:Etablissement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Etablissement entity.
    *
    * @param Etablissement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Etablissement $entity)
    {
        $form = $this->createForm(new EtablissementType(), $entity, array(
            'action' => $this->generateUrl('etablissement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Etablissement entity.
     *
     */
    public function newAction()
    {
        $entity = new Etablissement();
        $form   = $this->createCreateForm($entity);

        return $this->render('PredDemandeBundle:Etablissement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Etablissement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Etablissement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etablissement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PredDemandeBundle:Etablissement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Etablissement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Etablissement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etablissement entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PredDemandeBundle:Etablissement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Etablissement entity.
    *
    * @param Etablissement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Etablissement $entity)
    {
        $form = $this->createForm(new EtablissementType(), $entity, array(
            'action' => $this->generateUrl('etablissement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Etablissement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Etablissement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etablissement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('etablissement_edit', array('id' => $id)));
        }

        return $this->render('PredDemandeBundle:Etablissement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Etablissement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PredDemandeBundle:Etablissement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Etablissement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('etablissement'));
    }

    /**
     * Creates a form to delete a Etablissement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etablissement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function schoolhomeAction(){
        return $this->render('PredDemandeBundle:Etablissement:schoolhome.html.twig');
    }
}
