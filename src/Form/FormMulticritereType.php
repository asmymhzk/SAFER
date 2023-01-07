<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FormMulticritereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',TextType::class, [
            "label" => "Mots clés: ",
            'attr' => [
            'placeholder' => 'Prairie, 12 Ha...']])
            
            ->add('surface', ChoiceType::class, [
            "label" => "Surface moyenne: ",
            'choices'  => [
            '1 - 10 Ha' => true,
            '10 - 20 Ha' => true,
            '20 Ha - 30 Ha' => true,
            '30 Ha - 40 Ha' => true,
            '40 Ha - 50 Ha' => true,
            '50 Ha - 60 Ha' => true,
            '60 Ha - 70 Ha' => true,
            '70 Ha - 80 Ha' => true,
            '>80 Ha' => true]])
            
            ->add('ville')
            ->add('CodePostal')
            
            ->add('Status', ChoiceType::class, [
            'choices'  => [
            'Location' => true,
            'Vente' => true]])
            
            ->add('Categorie', ChoiceType::class, [
            'choices'  => [
            'Terrain agricole' => true,
            'Prairie' => true,
            'Bois' => true,
            'Bâtiments' => true,
            'Exploitations' => true]])
            
            ->add('Prix', ChoiceType::class, [
            "label" => "Prix moyen: ",
            'choices'  => [
            '<1000 €' => true,
            '1 000-3 000 €' => true,
            '3 000-6 000 €' => true,
            '6 000-10 000 €' => true,
            '10 000-30 000 €' => true,
            '30 000-60 000 €' => true,
            '60 000-100 000 €' => true,
            '100 000-400 000 €' => true,
            '400 000-800 000 €' => true,
            '>800 000 €' => true]])
            
            ->add("submit", SubmitType::class, [
            "label" => "Valider "
            ])
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
