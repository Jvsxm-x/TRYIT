<?php
// src/Controller/RegistrationController.php
namespace App\Controller;

use App\Entity\Adherants;
use App\Entity\Administrators;
use App\Entity\Coachs;
use App\Entity\Users;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

class ResgisterController extends AbstractController
{
    /*    #[Route('/register', name: 'app_register')]
        public function register(Request $request, PasswordAuthenticatedUserInterface $passwordEncoder, EntityManagerInterface $entityManager): Response {
            $user = new Users();
            $form = $this->createForm(RegistrationFormType::class, $user);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // Encode le mot de passe
                $user->setPassword($passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                ));

                $roles = $form->get('roles')->getData();
                $user->setRoles($roles);
                $user->setCreatedAt(new \DateTime());
                $user->setUpdatedAt(new \DateTime());

                $entityManager->persist($user);
                $entityManager->flush();

                return $this->redirectToRoute('app_home');
            }

            return $this->render('security/register.html.twig', [
                'registrationForm' => $form->createView(),
            ]);
        }*/




}
