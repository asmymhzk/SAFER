<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/favoris", name="favoris_")
     */
class FavorisController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(SessionInterface $session, PropertyRepository $PropertyRepository)
    {
        $panier = $session->get("panier", []);
        
        //On "fabrique" les données
        $dataPanier = [];
        
        foreach($panier as $id){
            $property = $PropertyRepository->find($id);
            $dataPanier[] = [
            "produit" => $property
            ];
        }
        return $this->render('favoris/index.html.twig', compact('dataPanier'));
    }
    
     /**
     * @Route("/add/{id}", name="add")
     */
     public function add(Property $property, SessionInterface $session){
         
         // On récupère le panier actuel
         
         $panier = $session->get("panier", []);
         $id = $property->getId();
         
         if(!empty($panier[$id])){
             $panier[$id]++;
         } else{
             $panier[$id] = 1;
        }
        
        
        // On sauvegarde dans la session
        
         $session->set("panier", $panier);
        
         return $this->redirectToRoute("favoris_index");
}
  /**
     * @Route("/delete/{id}", name="delete")
     */
     public function remove(Property $property, SessionInterface $session){
         
         // On récupère le panier actuel
         
         $panier = $session->get("panier", []);
         $id = $property->getId();
         
         if(!empty($panier[$id])){
             unset($panier[$id]);
        }
    
        
        // On sauvegarde dans la session
        
         $session->set("panier", $panier);
        
         return $this->redirectToRoute("favoris_index");
}
/**
     * @Route("/delete", name="delete_all")
     */
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("panier");

        return $this->redirectToRoute("favoris_index");
    }
}


