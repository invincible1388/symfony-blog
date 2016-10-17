<?php

namespace VillieBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/blogpost")
     */
    public function indexAction()
    {
        return $this->render('VillieBlogBundle:Default:index.html.twig');
    }
}
