<?php

namespace App\Controller;

use App\Entity\Administrators;
use App\Form\AdministratorsType;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\DocBlock\Tags\Factory\AbstractPHPStanFactory;
use PhpParser\Node\Expr\Instanceof_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use function PHPUnit\Framework\isInstanceOf;

#[Route('/administrators')]
final class AdministratorsController extends AbstractController
{
    #[Route(name: 'app_administrators_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $administrators = $entityManager
            ->getRepository(Administrators::class)
            ->findAll();

        return $this->render('administrators/index.html.twig', [
            'administrators' => $administrators,
        ]);
    }

    #[Route('/new', name: 'app_administrators_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $administrator = new Administrators();

        $form = $this->createForm(AdministratorsType::class, $administrator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($administrator, $administrator->getPassword());
            $administrator->setPassword($hashedPassword);
            $entityManager->persist($administrator);
            $entityManager->flush();

            return $this->redirectToRoute('app_administrators_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administrators/new.html.twig', [
            'administrator' => $administrator,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administrators_show', methods: ['GET'])]
    public function show(Administrators $administrator): Response
    {
        return $this->render('administrators/show.html.twig', [
            'administrator' => $administrator,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administrators_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Administrators $administrator, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdministratorsType::class, $administrator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administrators_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administrators/edit.html.twig', [
            'administrator' => $administrator,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administrators_delete', methods: ['POST'])]
    public function delete(Request $request, Administrators $administrator, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$administrator->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($administrator);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administrators_index', [], Response::HTTP_SEE_OTHER);
    }


}
