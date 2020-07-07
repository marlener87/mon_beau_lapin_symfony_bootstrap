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
}
