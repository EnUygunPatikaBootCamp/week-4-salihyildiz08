<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DersController extends AbstractController
{

    /**
     * @Route("/ders/{name}/{subject}", name="app_ders")
     */
    public function index($name,$subject): Response
    {
        return $this->render('ders/index.html.twig', [
            'name'=> $name,
            'subject'=>$subject,
        ]);
    }
}
