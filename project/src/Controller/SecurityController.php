<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\Restaurant;
use Doctrine\ORM\EntityManagerInterface;

class SecurityController extends AbstractController
{


    /**
     * @Route("/home/restaurants", name="restaurant_list")
     */
    public function home(AuthenticationUtils $authenticationUtils, EntityManagerInterface $em): Response
    {
       $repo = $em->getRepository(Restaurant::class);
       $restaurants = $repo->findAll();

        return $this->render('users/index.html.twig', [
            'restaurants' => $restaurants
        ]);
    }

    /**
     * @Route("/users", name="users")
     */
    public function index()
    {
        return $this->render('users/index.html.twig');
    }
    
    /**
     * @Route("/", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
