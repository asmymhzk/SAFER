<?php

namespace App\Controller;

use App\Entity\Statistique;
use App\Repository\StatistiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatistiqueController extends AbstractController
{
    
    /**
     * @Route("/statistique", name="statistique")
     */
    public function index(StatistiqueRepository $stat): Response
    {  
        return $this->render('statistique/statistiques.html.twig',
         ['statistique' => 'statistiques']);
    }
}
