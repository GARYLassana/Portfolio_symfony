<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Portfolio_staticController extends AbstractController
{
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function index()
    {
        return $this->render('pages/portfolio_static.html.twig', [
            'controller_name' => 'Portfolio_staticController',
        ]);
    }
}
