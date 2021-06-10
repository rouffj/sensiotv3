<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Omdb\OmdbClient;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(OmdbClient $omdbClient): Response
    {
        //$res = $omdbClient->requestByTitle('Lord of the rings');
        $res = $omdbClient->requestBySearch('matrix');
        dump($res);
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }
}