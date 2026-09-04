<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\RegisterType;
use App\Model\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[Route('/auth', name: 'auth_')]
final class AuthController extends AbstractController
{
    #[Route('/login', name: 'login', methods: ['GET', 'POST'])]
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        if ($request->isMethod('POST')) {

            $error = $authenticationUtils->getLastAuthenticationError();

            if ($error) {
                return new JsonResponse(['error' => 'Invalid credentials'], 422);
            }

            return $this->redirect('/');
        }

        return $this->render('views/auth/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/register', name: 'register', methods: ['GET', 'POST'])]
    public function register(Request $request, EntityManagerInterface $em): Response
    {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user)->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            return new JsonResponse(['error' => 'Invalid data'], 422);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            return $this->redirect('/auth/login');
        }

        return $this->render('views/auth/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/logout', name: 'logout')]
    public function logout(): void
    {
        // Symfony gère tout
    }
}
