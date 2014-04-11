<?php
/**
 * Created by PhpStorm.
 * User: Dominique
 * Date: 06/04/14
 * Time: 22:51
 */

namespace Pred\UserBundle\Handler;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{

    protected $router;
    protected $security;

    public function __construct(Router $router, SecurityContext $security)
    {
        $this->router = $router;
        $this->security = $security;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {

        if ($this->security->isGranted('ROLE_EVALUATEUR'))
        {
            $response = new RedirectResponse($this->router->generate('evaluateur'));
        }
        elseif ($this->security->isGranted('ROLE_ETABLISSEMENT'))
        {
            $response = new RedirectResponse($this->router->generate('etablissement_home'));
        }
        elseif ($this->security->isGranted('ROLE_ADMIN'))
        {
            // redirect the user to where they were before the login process begun.
           /* $referer_url = $request->headers->get('referer');*/

            $response = new RedirectResponse($this->router->generate('fos_user_register'));
        }

        return $response;
    }

}