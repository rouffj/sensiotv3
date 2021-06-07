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
     * @Route("/{movieId}", name="details", requirements={"movieId": "\d+"})
     */
    public function details($movieId): Response
    {
        return $this->render('movie/details.html.twig');
    }

    /**
     * @Route("/genres", name="genres")
     */
    public function genres(): Response
    {
        return $this->render('movie/genres.html.twig');
    }

    /**
     * @Route("/latest", name="latest")
     */
    public function latest(): Response
    {
        return $this->render('movie/latest.html.twig');
    }

    /**
     * @Route("/{movieId}/player", name="player", requirements={"movieId": "\d+"})
     */
    public function player($movieId): Response
    {
        return $this->render('movie/player.html.twig');
    }

    /**
     * @Route("/top-rated", name="top_rated")
     */
    public function topRated(): Response
    {
        return $this->render('movie/top-rated.html.twig');
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
