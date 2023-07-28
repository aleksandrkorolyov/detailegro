<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    private array $messages = [
        "Message1", "Message2", "Message3"
    ];

    private string $about_text = 'This text is about my pet project with symfony 6.';

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // return $this->render('home/index.html.twig', [
        //     'controller_name' => 'HomeController',
        //     // 'messages' => $messages
        // ]);
        return new Response((implode(',', $this->messages)));
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return new Response($this->about_text);
    }
}
