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
    #[Route('/login', name: 'login', methods: [Request::METHOD_GET, Request::METHOD_POST])]
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        // Si POST → on doit renvoyer 422 si erreur
        if ($request->isMethod('POST')) {
            $error = $authenticationUtils->getLastAuthenticationError();

            if ($error !== null) {
                return new JsonResponse([
                    'error' => $error->getMessage(),
                ], 422);
            }

            return new JsonResponse(['status' => 'ok'], 200);
        }

        // GET → afficher la page
        return $this->render('views/auth/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/register', name: 'register', methods: [Request::METHOD_GET, Request::METHOD_POST])]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();

        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);

        // Si POST et formulaire invalide → 422 JSON
        if ($form->isSubmitted() && !$form->isValid()) {
            return new JsonResponse([
                'errors' => (string) $form->getErrors(true),
            ], 422);
        }

        // Si POST et valide → créer user
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                password_hash($form->get('plainPassword')->getData(), PASSWORD_BCRYPT)
            );

            $entityManager->persist($user);
            $entityManager->flush();

            return new JsonResponse(['status' => 'created'], 201);
        }

        // GET → afficher la page
        return $this->render('views/auth/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
