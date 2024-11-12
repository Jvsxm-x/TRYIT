<?php


namespace App\Controller;

use App\Entity\Coachs;
use App\Entity\Imc;
use App\Entity\TrainingSession;
use App\Entity\UserCoach;
use App\Entity\Users;
use App\Form\CoachFormType;
use App\Repository\UserCoachRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class Headers1Controller extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route("/calendar", name:"app_calendar_index")]

    public function calendarIndex(): Response
    {
        return $this->render('calendar/index.html.twig', [
            'controller_name' => 'Headers1Controller',
        ]);
    }
    #[Route('/show_profile', name: 'app_user_profile', methods: ['GET'])]
    public function show(Users $user,RequestStack $requestStack,EntityManagerInterface $entityManager): Response
    {   $userId = $this->getUser();
        $session = $requestStack->getSession();
        $userData = $this->getUser()->getUserIdentifier();
        $user = $entityManager->getRepository(Users::class)->findOneBy(['email' => $userData]);

        $imcRecords = $entityManager->getRepository(Imc::class)->findBy(['user' => $userId]);





        return $this->render('users/show.html.twig', [
            'user' => $user,
            'userData' => $userData,
            'imcRecords' => $imcRecords,
        ]);
    }
    #[Route("/coach/add", name:"app_coach_add")]
    public function addCoach(Request $request, EntityManagerInterface $entityManager): Response
    {
        $userCoach = new UserCoach();
        $form = $this->createForm(CoachFormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coach = $form->get('coach')->getData();
            $trainingDates = $form->get('trainingDates')->getData();

            // Set the coach and current user for the UserCoach entity
            $userCoach->setCoach($coach);
            $userCoach->setUser($this->getUser());

            $entityManager->persist($userCoach);
dump($userCoach);
dump($trainingDates);
dump($this->getUser());
            // Create TrainingSession for each date
            foreach ($trainingDates as $date) {
                $trainingSession = new TrainingSession();
                $trainingSession->setDate($date);
                $trainingSession->setAdherant($this->getUser());
                $trainingSession->setCoach($coach);

                $entityManager->persist($trainingSession);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_coach_add');
        }

        return $this->render('coachs/add.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'HomeController',
        ]);
    }



    #[Route("/user/coachlist", name:"app_usercoachlist_index")]
    public function listAdherents(UserCoachRepository $userCoachRepo): Response
    {
        $user = $this->getUser();  // Get the logged-in user (coach)
dump($user->getId());
        // Check if the user is a coach
        if (!$this->isGranted('ROLE_COACH')) {
            throw $this->createAccessDeniedException('You must be a coach to view this page');
        }

        // Fetch adherents for the logged-in coach
        $adherents = $userCoachRepo->findAdherentsByCoach($user->getId());
dump($adherents);
        return $this->render('coachs/adherents.html.twig', [
            'adherents' => $adherents,
        ]);
    }







    #[Route("/about", name:"app_about")]

    public function about(): Response
    {
        return $this->render('about/index.html.twig', [
            'controller_name' => 'Headers1Controller',
        ]);
    }

#[Route("/contact", name:"app_contact")]

    public function contact(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'Headers1Controller',
        ]);
    }
}
