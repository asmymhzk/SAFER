<?php

namespace App\Controller;
use App\Entity\Property;
use App\Form\FormMulticritereType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormMultiController extends AbstractController
{
    /**
     * @Route("/formMulti", name="FormMulti")
     */
    public function FormMulticritere(): Response
    {
        $propriete = new Property();
        
        $FormMulti = $this-> createForm(FormMulticritereType::class, $propriete);
        
        return $this->render('form_multi/index.html.twig', [
            'FormMulti' => $FormMulti->createView(),
        ]);
    }
}
