<?php
// src/Controller/SecurityController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
#[Route('/login', name: 'app_login')]
public function login(AuthenticationUtils $authenticationUtils, RequestStack $requestStack): Response
{
// If the user is already logged in, redirect to the home page or another route
if ($this->getUser()) {
return $this->redirectToRoute('home');
}


// Get the last username entered by the user (if any) and login error
$lastUsername = $authenticationUtils->getLastUsername();
$error = $authenticationUtils->getLastAuthenticationError();

    $session = $requestStack->getSession();
    if ($this->getUser()) {
        $session->set('user', [
            'username' => $lastUsername,
        ]);
    }
return $this->render('security/login.html.twig', [
'last_username' => $lastUsername,
'error' => $error,
]);
}

    #[Route('/some-page', name: 'some_page')]
    public function somePage(RequestStack $requestStack): Response
    {
        // Retrieve the session from the request stack
        $session = $requestStack->getSession();
        $user = $session->get('user');

        if ($user) {
            // Access username and email from the session
            $username = $user['username'];
        }

        return $this->render('/users/test.html.twig', [
            'last_username' => $username ?? null,
        ]);
    }
#[Route('/logout', name: 'app_logout')]
public function logout(): void
{
// Symfony will intercept this route and handle the logout automatically
throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
}
}
