<?php

namespace Pred\DemandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PredDemandeBundle:Default:index.html.twig');
    }
}
