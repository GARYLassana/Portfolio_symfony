<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(){
        
        return $this->render('pages/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    /**
     * @Route("/traitement", name="traitement")
     */
    function creationContactform(Request $request){
        $contact = new Contact();
         $form = $this->createForm(ContactType::class, $contact);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $contactInfos = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($contactInfos);
                $entityManager->flush();
                return new Response("Votre formulaire est bien recu !");
            }
        return $this->render('pages/contact.html.twig', ['userForm' => $form->createView()]);
    }
}
