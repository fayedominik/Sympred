<?php

use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'pred_demande_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pred',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etablissement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/etablissement/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etablissement_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/etablissement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etablissement_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/etablissement/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etablissement_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/etablissement/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etablissement_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/etablissement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etablissement_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/etablissement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etablissement_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\EtablissementController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/etablissement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diplome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diplome/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diplome_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/diplome',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diplome_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diplome/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diplome_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diplome/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diplome_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/diplome',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diplome_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/diplome',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diplome_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\DiplomeController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/diplome',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'school_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pred\\DemandeBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/school_login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/etablissement/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pred',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
