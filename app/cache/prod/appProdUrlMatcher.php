<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // pred_demande_homepage
        if ($pathinfo === '/pred') {
            return array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pred_demande_homepage',);
        }

        if (0 === strpos($pathinfo, '/etablissement')) {
            // etablissement
            if (rtrim($pathinfo, '/') === '/etablissement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etablissement');
                }

                return array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::indexAction',  '_route' => 'etablissement',);
            }

            // etablissement_show
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_show')), array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::showAction',));
            }

            // etablissement_new
            if ($pathinfo === '/etablissement/new') {
                return array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::newAction',  '_route' => 'etablissement_new',);
            }

            // etablissement_create
            if ($pathinfo === '/etablissement/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_etablissement_create;
                }

                return array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::createAction',  '_route' => 'etablissement_create',);
            }
            not_etablissement_create:

            // etablissement_edit
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_edit')), array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::editAction',));
            }

            // etablissement_update
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_etablissement_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_update')), array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::updateAction',));
            }
            not_etablissement_update:

            // etablissement_delete
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_etablissement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_delete')), array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::deleteAction',));
            }
            not_etablissement_delete:

        }

        if (0 === strpos($pathinfo, '/diplome')) {
            // diplome
            if (rtrim($pathinfo, '/') === '/diplome') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'diplome');
                }

                return array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::indexAction',  '_route' => 'diplome',);
            }

            // diplome_show
            if (preg_match('#^/diplome/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_show')), array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::showAction',));
            }

            // diplome_new
            if ($pathinfo === '/diplome/new') {
                return array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::newAction',  '_route' => 'diplome_new',);
            }

            // diplome_create
            if ($pathinfo === '/diplome/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_diplome_create;
                }

                return array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::createAction',  '_route' => 'diplome_create',);
            }
            not_diplome_create:

            // diplome_edit
            if (preg_match('#^/diplome/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_edit')), array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::editAction',));
            }

            // diplome_update
            if (preg_match('#^/diplome/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_diplome_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_update')), array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::updateAction',));
            }
            not_diplome_update:

            // diplome_delete
            if (preg_match('#^/diplome/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_diplome_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_delete')), array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::deleteAction',));
            }
            not_diplome_delete:

        }

        // school_login
        if ($pathinfo === '/school_login') {
            return array (  '_controller' => 'Pred\\DemandeBundle\\Controller\\SecurityController::loginAction',  '_route' => 'school_login',);
        }

        // login_check
        if ($pathinfo === '/etablissement/login_check') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/pred') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
