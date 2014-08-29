<?php

namespace BDBStudios\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BDBStudiosAuthBundle:Default:index.html.twig', array('name' => $name));
    }
}
