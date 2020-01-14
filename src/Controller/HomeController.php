<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 * @Route("/home", name="home")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/helloUser/{name?}", name="hello_user")
     */
    public function helloUser(Request $request, $name)
    {
        // request
        //$name = $request->get('name');

        //$form = $this->createFormBuilder();

        return $this->render('home/greet.html.twig', [
            'name' => $name
        ]);
    }
}
