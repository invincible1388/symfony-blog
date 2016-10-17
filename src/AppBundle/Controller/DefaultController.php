<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
	/**
     * @Route("/about", name="aboutpage")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:about.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
	/**
     * @Route("/profile", name="profilepage")
     */
    public function profileAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:profile.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
	
	/**
     * @Route("/contact", name="contactpage")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:contact.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
	
	public function wrongRouteAction($url)
    {
        //$user = $this->get('security.context')->getToken()->getUser();

        return $this->render('AppBundle:Default:error404.html.twig', array("url" => $url));

    }
}
