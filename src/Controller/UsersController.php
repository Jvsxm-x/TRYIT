<?php

namespace App\Controller;

use App\Entity\Imc;
use App\Entity\Users;
use App\Form\UsersType;
use Doctrine\DBAL\Exception\ConstraintViolationException;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/users')]
final class UsersController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route(name: 'app_users_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager
            ->getRepository(Users::class)
            ->findAll();

        return $this->render('users/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/new', name: 'app_users_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager , UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('security/register.html.twig', [
            'user' => $user,
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_users_show', methods: ['GET'])]
    public function show(Users $user,EntityManagerInterface $entityManager): Response
    {if($this->getUser()){
        $userId = $this->getUser();
        $imcRecords = $entityManager->getRepository(Imc::class)->findBy(['user' => $userId]);
    }else{
        $imcRecords= null;
    }
        return $this->render('users/show.html.twig', [
            'user' => $user,
            'imcRecords'=>$imcRecords
        ]);
    }

    #[Route('/{id}/edit', name: 'app_users_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Users $user, UserPasswordHasherInterface $passwordHasher): Response
    {
        // Checkpoint to verify if method is reached
        dump('Edit method reached');

        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        // Handle password change request
        if ($request->isMethod('POST') && $request->request->has('chnagePassword'))  {
            dump('Password change request detected');

            // Retrieve new password from form data
            $newPassword = $request->request->get('repeat_new_password');

            if ($newPassword) {
                $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
                $user->setPassword($hashedPassword);
                $user->setUpdatedAt(new \DateTime());

                $this->entityManager->flush();

                // Redirect after password update
                return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
            }
        }

        // Handle general user details update
        if ($form->isSubmitted() && $form->isValid()) {
            if (empty($user->getPassword())) {
                $this->addFlash('error', 'Password is required.');
                return $this->redirectToRoute('app_users_edit', ['id' => $user->getId()]);
            }
            $user->setUpdatedAt(new \DateTime());

            try {
                $this->entityManager->flush();
                return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);

            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'This email address is already registered. Please use a different one.');

            } catch (ConstraintViolationException $e) {
                $this->addFlash('error', 'There was an issue with the data provided. Please check and try again.');

            } catch (\Exception $e) {
                $this->addFlash('error', 'An unexpected error occurred. Please try again later.');
            }
        }

        // Render the edit form
        return $this->render('users/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }





    #[Route('/{id}/verify-old-password', name: 'app_users_verify_old_password', methods: ['POST'])]
    public function verifyOldPassword(Request $request, Users $user, UserPasswordHasherInterface $passwordHasher): JsonResponse
    {
        // Retrieve the old password entered by the user
        $oldPassword = $request->getContent();
        $data = json_decode($oldPassword, true);

        if ($passwordHasher->isPasswordValid($user, $data['old_password'])) {
            return new JsonResponse(['valid' => true]);
        }

        return new JsonResponse(['valid' => false]);
    }


    #[Route('/{id}', name: 'app_users_delete', methods: ['POST'])]
    public function delete(Request $request, Users $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }
}
