<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NieuwsController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function thuis()
    {
        return new Response('Icarus nieuws');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('het nieuws van vandaag is "%s"!',
        ucfirst(str_replace('-', ' ', $slug))
        ));
    }

}
