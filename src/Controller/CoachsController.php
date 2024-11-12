<?php

namespace App\Controller;

use App\Entity\Coachs;
use App\Form\CoachsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/coachs')]
final class CoachsController extends AbstractController
{
    #[Route(name: 'app_coachs_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $coachs = $entityManager
            ->getRepository(Coachs::class)
            ->findAll();

        return $this->render('coachs/index.html.twig', [
            'coachs' => $coachs,
        ]);
    }

    #[Route('/new', name: 'app_coachs_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $coach = new Coachs();
        $form = $this->createForm(CoachsType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($coach, $coach->getPassword());
            $coach->setPassword($hashedPassword);
            $entityManager->persist($coach);
            $entityManager->flush();

            return $this->redirectToRoute('app_coachs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('coachs/new.html.twig', [
            'coach' => $coach,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coachs_show', methods: ['GET'])]
    public function show(Coachs $coach): Response
    {
        return $this->render('coachs/show.html.twig', [
            'coach' => $coach,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_coachs_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Coachs $coach, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CoachsType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_coachs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('coachs/edit.html.twig', [
            'coach' => $coach,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coachs_delete', methods: ['POST'])]
    public function delete(Request $request, Coachs $coach, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coach->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($coach);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_coachs_index', [], Response::HTTP_SEE_OTHER);
    }
}
