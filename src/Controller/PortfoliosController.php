<?php

namespace App\Controller;

use App\Entity\Portfolio;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PortfoliosController extends AbstractController
{
    /**
     * @Route("/portfolios", name="portfolios")
     */

     public function AllPortfolio(){
         $image = $this->getDoctrine()
         ->getRepository(Portfolio::class)
         ->findAll();

         if(!$image){
             throw $this->createNotFoundException(
                 'image non existante'
             );
         }
         
             return $this->render('pages/portfolios.html.twig', [ 'portfolios' => $image]);
         

     }
}
