<?php

namespace App\Controller;

use App\Form\SignupType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type as Type;

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
    public function register(): Response
    {
        $signupForm = $this->createForm(SignupType::class);
        $signupForm->add('signup', Type\SubmitType::class);

        return $this->render('user/register.html.twig', [
            'signup_form' => $signupForm->createView()
        ]);
    }
}