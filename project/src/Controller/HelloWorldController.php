<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloWorldController extends Controller
{
    /**
     * @Route("/hello/world", name="hello_world")
     */
    public function index()
    {
        return new Response("<h1>Hello World!</h1>");
    }
}
