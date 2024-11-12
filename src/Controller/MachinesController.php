<?php

namespace App\Controller;

use App\Entity\Machines;
use App\Form\Machines1Type;
use App\Form\MachinesType;
use App\Repository\MachinesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/machines')]
final class MachinesController extends AbstractController
{
    #[Route(name: 'app_machines_index', methods: ['GET'])]
    public function index(MachinesRepository $machinesRepository): Response
    {
        return $this->render('machines/index.html.twig', [
            'machines' => $machinesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_machines_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $machine = new Machines();
        $form = $this->createForm(MachinesType::class, $machine);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                $imageFile->move(
                    $this->getParameter('machines_images_directory'),
                    $newFilename
                );

                $machine->setImage('assets/images/' . $newFilename);
            }

            $em->persist($machine);
            $em->flush();

            return $this->redirectToRoute('app_machines_index');
        }

        return $this->render('machines/new.html.twig', [
            'machine' => $machine,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_machines_show', methods: ['GET'])]
    public function show(Machines $machine): Response
    {
        return $this->render('machines/show.html.twig', [
            'machine' => $machine,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_machines_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Machines $machine, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Machines1Type::class, $machine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_machines_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('machines/edit.html.twig', [
            'machine' => $machine,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_machines_delete', methods: ['POST'])]
    public function delete(Request $request, Machines $machine, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$machine->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($machine);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_machines_index', [], Response::HTTP_SEE_OTHER);
    }
}
