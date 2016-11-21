<?php

namespace Bs\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BsFrontOfficeBundle:Default:index.html.twig', array('name' => $name));
    }
    public function TestAction()
    {
        return $this->render('BsFrontOfficeBundle:Default:test.html.twig');
    }
}
