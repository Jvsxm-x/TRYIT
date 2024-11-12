<?php

namespace App\Controller;

use App\Entity\Abonnements;
use App\Form\AbonnementsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/abonnements')]
final class AbonnementsController extends AbstractController
{
    #[Route(name: 'app_abonnements_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $abonnements = $entityManager
            ->getRepository(Abonnements::class)
            ->findAll();

        return $this->render('abonnements/index.html.twig', [
            'abonnements' => $abonnements,
        ]);
    }

    #[Route('/new', name: 'app_abonnements_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $abonnement = new Abonnements();
        $form = $this->createForm(AbonnementsType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($abonnement);
            $entityManager->flush();

            return $this->redirectToRoute('app_abonnements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('abonnements/new.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_abonnements_show', methods: ['GET'])]
    public function show(Abonnements $abonnement): Response
    {
        return $this->render('abonnements/show.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_abonnements_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Abonnements $abonnement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AbonnementsType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_abonnements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('abonnements/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_abonnements_delete', methods: ['POST'])]
    public function delete(Request $request, Abonnements $abonnement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnement->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($abonnement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_abonnements_index', [], Response::HTTP_SEE_OTHER);
    }
}
