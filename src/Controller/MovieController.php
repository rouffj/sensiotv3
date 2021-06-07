<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/movie", name="movie_")
 */
class MovieController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('movie/index.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }

    /**
     * @Route("/details", name="details")
     */
    public function details(): Response
    {
        return $this->render('movie/details.html.twig', [
        ]);
    }

    /**
     * @Route("/filter-by/{category}", name="movie_filtering", methods={"GET"}, requirements={"category": "\d+"})
     */
    public function filterByCategory($category): Response
    {
        //throw $this->createNotFoundException('My error message');

        return new Response(sprintf('Hello from filterByCategory %s.', $category));
    }
}
