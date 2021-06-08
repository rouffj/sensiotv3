<?php

namespace App\Controller;

use App\Form\SignupType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type as Type;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @Route("/user", name="user_")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('user/login.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $signupForm = $this->createForm(SignupType::class);
        $signupForm->add('signup', Type\SubmitType::class);

        if ($signupForm->handleRequest($request)->isSubmitted() && $signupForm->isValid()) {
            $user = $signupForm->getData();
            $entityManager->persist($user);
            $entityManager->flush();
            dump($user);
        }

        return $this->render('user/register.html.twig', [
            'signup_form' => $signupForm->createView()
        ]);
    }
}