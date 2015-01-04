<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', ['page_title' => 'Home Page']);
    }

    /**
     * @Route("/plain_text", name="plain_text")
     */
    public function plainTextAction()
    {
        return new Response('Just a plain text response');
    }
}
