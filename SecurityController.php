<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\form;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
  
        #[Route(path: '/login', name: 'app_login')]
        public function login(AuthenticationUtils $authenticationUtils): Response
        {
            if ($this->getUser()) {
                return $this->redirectToRoute('app_home');
            }
        
            $error = $authenticationUtils->getLastAuthenticationError();
            // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();
            $user = new User();
            $user->setEmail($lastUsername);
        
            return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error, 'user' => $user]);
        }         

        
    
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
