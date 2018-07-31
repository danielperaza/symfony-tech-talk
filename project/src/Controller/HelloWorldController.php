<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="hello_world", requirements={"name"="[a-zA-Z]+"})
     */
    public function index($name)
    {
        return $this->render('hello.html.twig', ['name' => $name]);
    }
}
