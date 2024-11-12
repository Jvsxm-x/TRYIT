<?php
// src/Controller/ImcController.php

namespace App\Controller;

use App\Entity\Imc;
use App\Entity\Users;
use App\Form\ImcType;
use App\Repository\ImcRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ImcController extends AbstractController
{   #[Route("/imc", name:"app_imc_index")]
public function index(EntityManagerInterface $entityManager): Response
{
    $user = $this->getUser();
    $imcRecords = $entityManager->getRepository(Imc::class)->findBy(['user' => $user]);

    return $this->render('imc/show.html.twig', [
        'imcRecords' => $imcRecords,
    ]);
}

      #[Route("/imc/new", name:"imc_new")]

      // Controller method to handle form submission and calculation
      public function new(Request $request, EntityManagerInterface $entityManager, UserInterface $user): Response
      {
          // Create a new IMC entity
          $imc = new Imc();
          $imc->setUser($user);

          // Create a form for IMC data
          $form = $this->createForm(ImcType::class, $imc);
          $form->handleRequest($request);
dump(floatval($form->get('imc')->getData()));
          if ($form->isSubmitted() && $form->isValid()) {
              // Calculate IMC and other values
              $imcValue =floatval($form->get('imc')->getData()); // Getting the IMC from the form submission
              $calories = floatval($form->get('caloriesForWeightGain')->getData()); // Calories for weight gain from the form

              $imc->setImc($imcValue);
              $imc->setCaloriesForWeightGain($calories);

              // Optionally, process the meal details as well
              $mealDetails = $request->get('mealDetails');
              $imc->setMealDetails($mealDetails);

              // Save the IMC record in the database
              $entityManager->persist($imc);
              $entityManager->flush();

              // Redirect or show confirmation message
              $this->addFlash('success', 'IMC and calories calculation saved!');
              return $this->redirectToRoute('imc_new');
          }

          return $this->render('imc/new.html.twig', [
              'form' => $form->createView(),
          ]);
      }




    #[Route("/imc/{id}", name:"imc_shows")]

    public function show(Request $request,EntityManagerInterface $entityManager): Response
    {
        $imc = $entityManager->getRepository(Imc::class)->find($request->get('id'));
        $imc->setUser($this->getUser());
        dump($imc);

        return $this->render('imc/show.html.twig', [
            'imcRecords' => $imc,
        ]);
    }
    #[Route("/imc", name:"imc_show")]
    public function showAllByUserId(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $imcRecords = $entityManager->getRepository(Imc::class)->findBy(['user' => $user]);

        return $this->render('imc/show.html.twig', [
            'imcRecords' => $imcRecords,
        ]);
    }


    #[Route("/imc/{id}/edit", name:"imc_edit")]

    public function edit(Imc $imc, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ImcType::class, $imc);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Update IMC values if needed
            $entityManager->flush();

            $this->addFlash('success', 'IMC updated successfully!');
            return $this->redirectToRoute('imc_show', ['id' => $imc->getId()]);
        }

        return $this->render('imc/edit.html.twig', [
            'form' => $form->createView(),
            'imc' => $imc,
        ]);
    }
    #[Route("/imc/delete/{id}", name:"app_imc_delete", methods: ["POST","GET"])]
    public function delete(int $id, EntityManagerInterface $entityManager, Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        // Check CSRF token for security
        if ($this->isCsrfTokenValid('delete' . $id, $request->request->get('_token'))) {
            // Find the IMC record by ID
            $imc = $entityManager->getRepository(Imc::class)->find($id);

            if ($imc) {
                // Remove the IMC record
                $entityManager->remove($imc);
                $entityManager->flush();

                $this->addFlash('success', 'IMC record deleted successfully.');
            } else {
                $this->addFlash('error', 'IMC record not found.');
            }
        } else {
            $this->addFlash('error', 'Invalid CSRF token.');
        }

        // Redirect to a relevant page, like the user's IMC list or profile page
        return $this->redirectToRoute('home', ['id' => $this->getUser()->getId()]);
    }
    private function calculateCaloriesForWeightGain(Users $user): float
    {
        // Placeholder logic for calculating calories based on weight gain
        $baseCalories = 2500; // Adjust this based on your logic
        return $baseCalories + 500; // Adding 500 for weight gain (example)
    }
}
