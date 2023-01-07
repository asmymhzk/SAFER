<?php

namespace App\Controller;
use App\Entity\DemandeContact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
   
    /**
     * @Route("/contact", name="contact")
     */
    public function sendContact(): Response
    {
        $contact = new DemandeContact();
        
        $contactForm = $this-> createForm(ContactType::class, $contact);
        
        return $this->render('contact/index.html.twig', [
            'contactForm' => $contactForm->createView(),
        ]);
    }
}
