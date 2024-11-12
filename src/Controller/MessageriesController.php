<?php

namespace App\Controller;

use App\Entity\Messageries;
use App\Form\MessageriesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/messageries')]
final class MessageriesController extends AbstractController
{
    #[Route(name: 'app_messageries_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $messageries = $entityManager
            ->getRepository(Messageries::class)
            ->findAll();

        return $this->render('messageries/index.html.twig', [
            'messageries' => $messageries,
        ]);
    }

    #[Route('/new', name: 'app_messageries_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $messagery = new Messageries();
        $form = $this->createForm(MessageriesType::class, $messagery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($messagery);
            $entityManager->flush();

            return $this->redirectToRoute('app_messageries_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messageries/new.html.twig', [
            'messagery' => $messagery,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_messageries_show', methods: ['GET'])]
    public function show(Messageries $messagery): Response
    {
        return $this->render('messageries/show.html.twig', [
            'messagery' => $messagery,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_messageries_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Messageries $messagery, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MessageriesType::class, $messagery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_messageries_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messageries/edit.html.twig', [
            'messagery' => $messagery,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_messageries_delete', methods: ['POST'])]
    public function delete(Request $request, Messageries $messagery, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$messagery->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($messagery);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_messageries_index', [], Response::HTTP_SEE_OTHER);
    }
}
