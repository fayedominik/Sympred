<?php

namespace Pred\DemandeBundle\Controller;

use Pred\DemandeBundle\Entity\Diplome;

use Pred\DemandeBundle\Form\DiplomeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Diplome controller.
 *
 */
class DiplomeController extends Controller
{

    /**
     * Lists all Diplome entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PredDemandeBundle:Diplome')->findAll();

        return $this->render('PredDemandeBundle:Diplome:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Diplome entity.
     *
     */
    public function createAction(Request $request)
    {
        // On teste que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('ROLE_ETABLISSEMENT')) {
        // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException('Accès limité aux Etablissements');
        }

        $entity = new Diplome();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        /*si le formulaire est valide, il faudra alors lier le diplome a l'etablissment qui le soumet, cela passe par la
        recuperation de l'utilisateur courant et ensuite la recuperation de l'etab associe*/
        if ($form->isValid()) {
            //$security = $this->get('security.context');
            $security = $this->container->get('security.context');
            $token = $security->getToken();
            $user = $token->getUser();
            $currentSchool = $user->getEtablissement();
            //une fois l'etablissement recupere on la lie avec le diplome et on persiste
            $entity->setEtablissement($currentSchool);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('diplome_show', array('id' => $entity->getId())));
        }

        return $this->render('PredDemandeBundle:Diplome:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Diplome entity.
    *
    * @param Diplome $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Diplome $entity)
    {
        $form = $this->createForm(new DiplomeType(), $entity, array(
            'action' => $this->generateUrl('diplome_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Diplome entity.
     *
     */
    public function newAction()
    {
        $entity = new Diplome();
        $form   = $this->createCreateForm($entity);

        return $this->render('PredDemandeBundle:Diplome:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Diplome entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Diplome entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PredDemandeBundle:Diplome:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Diplome entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Diplome entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PredDemandeBundle:Diplome:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Diplome entity.
    *
    * @param Diplome $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Diplome $entity)
    {
        $form = $this->createForm(new DiplomeType(), $entity, array(
            'action' => $this->generateUrl('diplome_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Diplome entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Diplome entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('diplome_edit', array('id' => $id)));
        }

        return $this->render('PredDemandeBundle:Diplome:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Diplome entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PredDemandeBundle:Diplome')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Diplome entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('diplome'));
    }

    /**
     * Creates a form to delete a Diplome entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('diplome_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
