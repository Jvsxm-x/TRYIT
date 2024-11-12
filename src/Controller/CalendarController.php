<?php
namespace App\Controller;

use App\Repository\TrainingSessionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendarController extends AbstractController
{
    #[Route('/calendar', name: 'calendar_index')]
    public function index(TrainingSessionRepository $trainingSessionRepo): Response
    {
        if(!$this->getUser()){
            return $this->render('home/index.html.twig', [

            ]);
        }
        $user = $this->getUser();  // Get the logged-in user
        $events = [];

        if ($this->isGranted('ROLE_COACH')) {
            // Fetch training sessions for the logged-in coach
            $events = $trainingSessionRepo->findByCoachWithAdherentDetails($user->getId());
        } elseif ($this->isGranted('ROLE_ADHERANT')) {
            // Fetch training sessions for the logged-in adherent
            $events = $trainingSessionRepo->findByAdherentWithCoachDetails([$user->getId()]);
        }

        // Debug: Print the events to check their structure
        dump($events);

        return $this->render('calendar/index.html.twig', [
            'events' => $events,
        ]);
    }
}
