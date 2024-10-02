<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        $test = [
            "Jordan",
            "Pippen",
            "Rodman"
        ];

        $players = [
            "Jordan" => 23,
            "Pippen" => 33,
            "Rodman" => 91
        ];


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            "name" => "Giordano",
            "number" => 23,
            "joueurs" => $players,
            "test" => $test
        ]);
    }

    #[Route("/testpage", name: "testpage")]
    public function test(): Response
    {

        return $this->render("home/test.html.twig");
    }

    #[Route("/blog/new", name: "new_blog")]
    public function new(): Response
    {
        return $this->render("home/new.html.twig");
    }

    #[Route("/blog/{id}/{page}", name: "blog")]
    public function blogShow(int|string $id, $page): Response
    {
        // appel model
    

        // réponse du modèle

        // décision de ce que tu affiches

        return $this->render("home/blog.html.twig",[
            'id' => $id,
            'page' => $page
        ]);
    }

   
}


