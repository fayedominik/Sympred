<?php
/**
 * Created by PhpStorm.
 * User: Dominique
 * Date: 24/03/14
 * Time: 23:18
 * src/Pred/DemandeBundle/Controller/SecurityController.php
 */

  namespace Pred\DemandeBundle\Controller;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\Security\Core\SecurityContext;

  //use Symfony\Component\HttpFoundation\Request;

 class SecurityController extends Controller{
     public function loginAction(){

         // Si le visiteur est déjà identifié, on le redirige vers l'accueil
           /*if($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
           {
               return $this->redirect($this->generateUrl('pred_demande'));
           }*/

         $request = $this->getRequest();
         $session = $request->getSession();

         // On vérifie s'il y a des erreurs d'une précédente soumission du fornulaire
         if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
         }else{
             $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
             $session->remove(SecurityContext::AUTHENTICATION_ERROR);
         }

         // Valeur du précédent nom d'utilisateur entré par l'internaute

         return $this->render('PredDemandeBundle:Security:login.html.twig', array(
             'last_username' => $session->get(SecurityContext::LAST_USERNAME),
             'error'        => $error,
         ));
     }
 }