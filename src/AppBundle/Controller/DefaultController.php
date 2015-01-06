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
//        return $this->render('default/index.html.twig', ['page_title' => 'Home Page']);
        return $this->redirectToRoute('hello', ['name'=>'zoltan']);
    }

    /**
     * @Route("/plain_text", name="plain_text")
     */
    public function plainTextAction()
    {
        return new Response('Just a plain text response');
    }

    /**
     * @Route("/error", name="error")
     */
    public function errorAction()
    {
        throw $this->createNotFoundException();
    }

    /**
     * @Route("/hello/{name}.{_format}",
     *  defaults={"_format"="json", "name"="there"},
     *  requirements = { "_format" = "json" },
     *  name="hello")
     *
     */
    public function helloAction($name, $_format)
    {
        return $this->render('default/hello.'.$_format.'.twig', array(
            'name' => $name
        ));
    }
}
