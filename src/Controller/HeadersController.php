<?php
// src/Controller/HeaderController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HeadersController extends AbstractController
{
   /* #[Route('/app_home', name: 'app_home')]
public function home(): Response
{
    return $this->render('base.html.twig');
}
    #[Route('/app_user_profile', name: 'app_user_profile')]
    public function homes(): Response
    {
        return $this->render('base.html.twig');
    }
    #[Route('/app_coach_add', name: 'app_coach_add')]
    public function addCoachForUser(): Response
    {
        return $this->render('base.html.twig');
    }
    #[Route('/app_contact', name: 'app_contact')]
    public function contact(): Response
    {
        // Logic to render contact page can go here
        return $this->render('contact.html.twig');
    }

    #[Route('/app_about', name: 'app_about')]
    public function about(): Response
    {
        // Logic to render about page can go here
        return $this->render('about.html.twig');
    }

    #[Route('/app_users', name: 'app_users_index')]
    public function usersIndex(): Response
    {
        // Logic to render users index page can go here
        return $this->render('users/index.html.twig');
    }

    #[Route('/app_messageries', name: 'app_messageries_index')]
    public function messageriesIndex(): Response
    {
        // Logic to render messageries index page can go here
        return $this->render('messageries/index.html.twig');
    }

    #[Route('/app_coachs', name: 'app_coachs_index')]
    public function coachsIndex(): Response
    {
        // Logic to render coachs index page can go here
        return $this->render('coachs/index.html.twig');
    }

    #[Route('/app_categories', name: 'app_categories_index')]
    public function categoriesIndex(): Response
    {
        // Logic to render categories index page can go here
        return $this->render('categories/index.html.twig');
    }

    #[Route('/app_administrators', name: 'app_administrators_index')]
    public function administratorsIndex(): Response
    {
        // Logic to render administrators index page can go here
        return $this->render('administrators/index.html.twig');
    }

    #[Route('/app_adherants', name: 'app_adherants_index')]
    public function adherantsIndex(): Response
    {
        // Logic to render adherants index page can go here
        return $this->render('adherants/index.html.twig');
    }

    #[Route('/app_abonnements', name: 'app_abonnements_index')]
    public function abonnementsIndex(): Response
    {
        // Logic to render abonnements index page can go here
        return $this->render('abonnements/index.html.twig');
    }

    #[Route('/app_calendar', name: 'app_calendar_index')]
    public function calendarIndex(): Response
    {
        // Logic to render calendar index page can go here
        return $this->render('calendar/index.html.twig');
    }

    #[Route('/app_logout', name: 'app_logout')]
    public function logout(): Response
    {
        // Logic for logout can go here
        // Symfony automatically handles logout routing
        return $this->redirectToRoute('app_home');
    }

    #[Route('/app_login', name: 'app_login')]
    public function login(): Response
    {
        // Logic to render login page can go here
        return $this->render('login.html.twig');
    }
   */
}
