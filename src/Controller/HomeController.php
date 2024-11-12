<?php

namespace App\Controller;

use App\Repository\AdministratorsRepository;
use App\Repository\CoachsRepository;
use App\Repository\MachinesRepository;
use App\Repository\SchedulerRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/', name: 'home')]
    public function indexs(SchedulerRepository $schedulerRepository,UsersRepository $userRepository, CoachsRepository $coachRepository, MachinesRepository $machineRepository, AdministratorsRepository $administratorRepository): Response
    { $schedules = $schedulerRepository->findAll();
        $machines = $machineRepository->findAll();

        $totalUsers = $userRepository->count([]);
        $totalCoaches = $coachRepository->count([]);
        $totalMachines = $machineRepository->sumNbrMachines(); // Get the sum of nbrmachines
        $totalManagers = $administratorRepository->count([]);
        $machines=$machineRepository->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'schedules' => $schedules,
            'machines' => $machines,
            'totalUsers' => $totalUsers,
            'totalCoaches' => $totalCoaches,
            'totalMachines' => $totalMachines,
            'totalManagers' => $totalManagers,
        ]);
    }
    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('security/login.html.twig', [
            'controller_name' => 'HomeController',

        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return new Response('<h1>About Page</h1>');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return new Response('<h1>Contact Page</h1>');
    }
    #[Route('/register', name: 'register')]
    public function registerRedirect(): RedirectResponse
    {
        return $this->redirectToRoute('app_users_new');
    }
// src/Controller/HomeController.php

    #[Route('/machine/{id}', name: 'machine_detail')]
    public function machineDetail(int $id, MachinesRepository $machinesRepository): Response
    {
        $machine = $machinesRepository->find($id);

        if (!$machine) {
            throw $this->createNotFoundException('Machine not found');
        }

        return $this->render('machine/detail.html.twig', [
            'machine' => $machine,
        ]);
    }

}
