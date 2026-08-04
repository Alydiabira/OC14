<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\RegisterType;
use App\Model\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[Route('/auth', name: 'auth_')]
final class AuthController extends AbstractController
{
    #[Route('/login', name: 'login', methods: [Request::METHOD_GET, Request::METHOD_POST])]
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        // Échec de login → 422
        if ($error) {
            return $this->render('views/auth/login.html.twig', [
                'controller_name' => 'LoginController',
                'last_username'   => $authenticationUtils->getLastUsername(),
                'error'           => $error,
            ], new Response('', 422));
        }

        // Succès de login (POST sans erreur) → redirection vers /
        if ($request->isMethod(Request::METHOD_POST)) {
            return $this->redirect('/');
        }

        // GET simple → page de login 200
        return $this->render('views/auth/login.html.twig', [
            'controller_name' => 'LoginController',
            'last_username'   => $authenticationUtils->getLastUsername(),
            'error'           => null,
        ]);
    }

    #[Route('/register', name: 'register', methods: [Request::METHOD_GET, Request::METHOD_POST])]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();

        $form = $this->createForm(RegisterType::class, $user)->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'Inscription réussie. Vous pouvez vous connecter !');

            // Les tests attendent une redirection vers /
            return $this->redirect('/');
        }

        return $this->render('views/auth/register.html.twig', ['form' => $form]);
    }
}
