<?php
/**
 * @link http://www.thaiyii.com
 * 4/1/2020 AD 11:26
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response('Hello!');
    }

    /**
     * @Route("/hello/{name}")
     */
    public function hello($name)
    {
        return new Response("Hello $name!");
    }

    /**
     * @Route("/simplicity")
     */
    public function simple()
    {
        return new Response('Simple! Easy! Greate!');
    }
}