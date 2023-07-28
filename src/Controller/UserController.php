<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/profile', name: 'app_user_profile')]
    public function index(UserRepository $user): Response
    {
        $current_user = $user->findOneById('1');
        return $this->render('user/index.html.twig', [
            'user' => $current_user,
        ]);
    }
}
