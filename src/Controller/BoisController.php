<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoisController extends AbstractController
{
    /**
     * @Route("/bois", name="app_bois")
     */
    public function index(PropertyRepository $repository): Response
    {   $properties = $repository->findBy(['Categorie' => 2]);
        return $this->render('bois/index.html.twig', [
          'properties' => $properties,
        ]);
    }
}
