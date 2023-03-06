<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $username = $authenticationUtils->getLastUsername();
            $user = $userRepository->findOneBy(['email' => $username]);

            if ($user && !$user->isActive()) {
                $this->addFlash('error', 'Tu cuenta ha sido desactivada. Por favor, contacta con el administrador.');
                return $this->redirectToRoute('app_login');
            }
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
