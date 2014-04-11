<?php

namespace Pred\DemandeBundle\Controller;

use Pred\DemandeBundle\Entity\Evaluateur;
use Pred\DemandeBundle\Form\EvaluateurType;

use Pred\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Evaluateur controller.
 *
 */
class EvaluateurController extends Controller
{

    /**
     * Lists all Evaluateur entities.
     *
     */
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PredDemandeBundle:Evaluateur')->findAll();

        return $this->render('PredDemandeBundle:Evaluateur:index.html.twig', array(
            'entities' => $entities,
        ));*/
        return $this->render('PredDemandeBundle:Evaluateur:index.html.twig');
    }
    /**
     * Creates a new Evaluateur entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Evaluateur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush(); //on fait un

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
            $roles = array('ROLE_EVALUATEUR');
            $user->setRoles($roles);
            $user->setProfil("evaluateur");
            $user->setEvaluateur($entity);
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('evaluateur_show', array('id' => $entity->getId())));
        }

        return $this->render('PredDemandeBundle:Evaluateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Evaluateur entity.
    *
    * @param Evaluateur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Evaluateur $entity)
    {
        $form = $this->createForm(new EvaluateurType(), $entity, array(
            'action' => $this->generateUrl('evaluateur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Evaluateur entity.
     *
     */
    public function newAction()
    {
        $entity = new Evaluateur();
        $form   = $this->createCreateForm($entity);

        return $this->render('PredDemandeBundle:Evaluateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Evaluateur entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Evaluateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evaluateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PredDemandeBundle:Evaluateur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Evaluateur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Evaluateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evaluateur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PredDemandeBundle:Evaluateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Evaluateur entity.
    *
    * @param Evaluateur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Evaluateur $entity)
    {
        $form = $this->createForm(new EvaluateurType(), $entity, array(
            'action' => $this->generateUrl('evaluateur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Evaluateur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PredDemandeBundle:Evaluateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evaluateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('evaluateur_edit', array('id' => $id)));
        }

        return $this->render('PredDemandeBundle:Evaluateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Evaluateur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PredDemandeBundle:Evaluateur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Evaluateur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('evaluateur'));
    }

    /**
     * Creates a form to delete a Evaluateur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evaluateur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public  function listeAction(){
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PredDemandeBundle:Evaluateur')->findAll();

        return $this->render('PredDemandeBundle:Evaluateur:liste.html.twig', array(
            'entities' => $entities,
        ));
    }
}
