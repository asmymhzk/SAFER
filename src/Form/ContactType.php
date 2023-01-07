<?php

namespace App\Form;

use App\Entity\DemandeContact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mail_DC', TextType::class, [
            "label" => "Adresse mail: ",
            'attr' => [
            'placeholder' => 'Louis26@gmail.com']])
            
            ->add('prix_min', IntegerType::class, [
            "label" => "Prix minimum: ",
            'attr' => [
            'placeholder' => '700']])
            
            ->add('prix_max',  IntegerType::class, [
            "label" => "Prix maximum: ",
            'attr' => [
            'placeholder' => '200000']])
            
            ->add('ville_DC', TextType::class, [
            "label" => "Ville: ",
            'attr' => [
            'placeholder' => 'Rennes']])
            
            ->add('codePostal_DC', IntegerType::class, [
            "label" => "Code Postal: ",
            'attr' => [
            'placeholder' => '35000']])
            
            ->add('Message', TextType::class, [
            "label" => "Message: ",
            'attr' => [
            'placeholder' => 'Bonjour...']])
            
            ->add("submit", SubmitType::class, [
            "label" => "Valider "
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandeContact::class,
        ]);
    }
}
