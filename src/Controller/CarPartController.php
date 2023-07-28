<?php

namespace App\Controller;

use App\Entity\CarPart;
use App\Form\CarPartType;
use App\Repository\CarPartRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/car_part')]
class CarPartController extends AbstractController
{
    #[Route('/', name: 'app_car_part_index', methods: ['GET'])]
    public function index(CarPartRepository $carPartRepository): Response
    {
        return $this->render('car_part/index.html.twig', [
            'car_parts' => $carPartRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_car_part_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $carPart = new CarPart();
        $form = $this->createForm(CarPartType::class, $carPart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($carPart);
            $entityManager->flush();

            return $this->redirectToRoute('app_car_part_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('car_part/new.html.twig', [
            'car_part' => $carPart,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_car_part_show', methods: ['GET'])]
    public function show(CarPart $carPart): Response
    {
        return $this->render('car_part/show.html.twig', [
            'car_part' => $carPart,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_car_part_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CarPart $carPart, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CarPartType::class, $carPart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_car_part_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('car_part/edit.html.twig', [
            'car_part' => $carPart,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_car_part_delete', methods: ['POST'])]
    public function delete(Request $request, CarPart $carPart, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carPart->getId(), $request->request->get('_token'))) {
            $entityManager->remove($carPart);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_car_part_index', [], Response::HTTP_SEE_OTHER);
    }
}
