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
  
        return $this->render('base.html.twig', [

        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return new Response($this->about_text);
    }
}
