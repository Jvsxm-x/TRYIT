<?php
namespace App\Controller;

use App\Entity\Scheduler;
use App\Form\SchedulerType;
use App\Repository\SchedulerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/scheduler')]
class SchedulerController extends AbstractController
{
    #[Route('/', name: 'scheduler_index', methods: ['GET'])]
    public function index(SchedulerRepository $schedulerRepository): Response
    {
        return $this->render('scheduler/index.html.twig', [
            'schedules' => $schedulerRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'scheduler_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $scheduler = new Scheduler();
        $form = $this->createForm(SchedulerType::class, $scheduler);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($scheduler);
            $entityManager->flush();

            return $this->redirectToRoute('scheduler_index');
        }

        return $this->render('scheduler/new.html.twig', [
            'scheduler' => $scheduler,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'scheduler_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Scheduler $scheduler, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SchedulerType::class, $scheduler);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('scheduler_index');
        }

        return $this->render('scheduler/edit.html.twig', [
            'scheduler' => $scheduler,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'scheduler_delete', methods: ['POST'])]
    public function delete(Request $request, Scheduler $scheduler, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$scheduler->getId(), $request->request->get('_token'))) {
            $entityManager->remove($scheduler);
            $entityManager->flush();
        }

        return $this->redirectToRoute('scheduler_index');
    }
    public function coachSchedules(SchedulerRepository $schedulerRepository, int $coachId): Response
    {
        $schedules = $schedulerRepository->findByCoach($coachId);
        return $this->render('scheduler/coach_schedules.html.twig', [
            'schedules' => $schedules,
        ]);
    }

}
