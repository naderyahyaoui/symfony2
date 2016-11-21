<?php

namespace Bs\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BsBackOfficeBundle:Default:index.html.twig', array('name' => $name));
    }
}
