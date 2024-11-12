<?php

namespace App\Controller;

use App\Entity\Adherants;
use App\Form\AdherantsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/adherants')]
final class AdherantsController extends AbstractController
{
    #[Route(name: 'app_adherants_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $adherants = $entityManager
            ->getRepository(Adherants::class)
            ->findAll();

        return $this->render('adherants/index.html.twig', [
            'adherants' => $adherants,
        ]);
    }

    #[Route('/new', name: 'app_adherants_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $adherant = new Adherants();
        $form = $this->createForm(AdherantsType::class, $adherant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($adherant, $adherant->getPassword());
            $adherant->setPassword($hashedPassword);
            $entityManager->persist($adherant);
            $entityManager->flush();

            return $this->redirectToRoute('app_adherants_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('adherants/new.html.twig', [
            'adherant' => $adherant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_adherants_show', methods: ['GET'])]
    public function show(Adherants $adherant): Response
    {
        return $this->render('adherants/show.html.twig', [
            'adherant' => $adherant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_adherants_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Adherants $adherant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdherantsType::class, $adherant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_adherants_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('adherants/edit.html.twig', [
            'adherant' => $adherant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_adherants_delete', methods: ['POST'])]
    public function delete(Request $request, Adherants $adherant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adherant->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($adherant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_adherants_index', [], Response::HTTP_SEE_OTHER);
    }
}
