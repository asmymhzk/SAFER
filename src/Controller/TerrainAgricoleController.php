<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TerrainAgricoleController extends AbstractController
{
    /**
     * @Route("/terrain/agricole", name="app_terrain_agricole")
     */
    public function index(PropertyRepository $repository): Response
    {   
        $properties = $repository->findBy(['Categorie' => 0]);
        return $this->render('terrain_agricole/index.html.twig', [
        'properties' => $properties,
        
        ]);
    }    
    
   

}
