<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MblController extends AbstractController
{
    /**
     * @Route("/mbl", name="mbl")
     */
    public function index()
    {
        return $this->render('mbl/index.html.twig', [
            'controller_name' => 'MblController',
        ]);
    }


    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('mbl/home.html.twig' 
            // 'controller_name' => 'MblController',
        );
    }

    /**
     * @Route("/journee", name="journee")
     */
    public function journee()
    {
        return $this->render('mbl/journee.html.twig');
    }

    /**
     * @Route("/text", name="text")
     */
    public function text()
    {
        return $this->render('mbl/text.html.twig');
    }

    /**
     * @Route("/form", name="form")
     */
    public function form()
    {
        return $this->render('mbl/form.html.twig');
    }

    /**
     * @Route("/test", name="test")
     */
    public function test()
    {
        return $this->render('mbl/test.html.twig');
    }
}
