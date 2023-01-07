        
        $property1 = new Property();
        $property1->setTitle('Vallons du Voironnais')
                 ->setDescription('13 Ha de terrain')
                 ->setSurface('13 Ha')
                 ->setVille('Voiron')
                 ->setCodePostal(38500)
                 ->setStatus(0)
                 ->setCategorie(0)
                 ->setPrix(2000);
        $em = $this ->getDoctrine()->getManager();
        $em->persist($property1);
        $em->flush();
        
        $property2 = new Property();
        $property2->setTitle('Prairies orientées nord ouest')
                 ->setDescription("Lot d'un seul tenant")
                 ->setSurface('11 Ha')
                 ->setVille('Locminé')
                 ->setCodePostal(56500)
                 ->setStatus(1)
                 ->setCategorie(1)
                 ->setPrix(113000);
        $em = $this ->getDoctrine()->getManager();
        $em->persist($property2);
        $em->flush();
        
        $property3 = new Property();
        $property3->setTitle('Terrain classé T4')
                 ->setDescription('cloturé et partiellement boisé')
                 ->setSurface('1,2 Ha')
                 ->setVille('Moréac')
                 ->setCodePostal(56500)
                 ->setStatus(0)
                 ->setCategorie(2)
                 ->setPrix(500);
        $em = $this ->getDoctrine()->getManager();
        $em->persist($property3);
        $em->flush();
        
