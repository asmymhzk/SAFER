<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BatimentsController extends AbstractController
{
    /**
     * @Route("/batiments", name="app_batiments")
     */
    public function index(PropertyRepository $repository): Response
    {   $properties = $repository->findBy(['Categorie' => 3]);
        return $this->render('batiments/index.html.twig', [
           'properties' => $properties,
        ]);
    }
}
