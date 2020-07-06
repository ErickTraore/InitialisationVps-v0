<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestemoiController extends AbstractController
{
    /**
     * @Route("/testemoi", name="testemoi")
     */
    public function index()
    {
        return $this->render('testemoi/index.html.twig', [
            'controller_name' => 'TestemoiController',
        ]);
    }
}
