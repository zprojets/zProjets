<?php

namespace zProjets\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('zProjetsUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
