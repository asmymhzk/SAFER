<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrairieController extends AbstractController
{
    /**
     * @Route("/prairie", name="app_prairie")
     */
    public function index(PropertyRepository $repository): Response
    
    {   $properties = $repository->findBy(['Categorie' => 1]);
        return $this->render('prairie/index.html.twig', [
            'properties' => $properties,
        ]);
    }
}
