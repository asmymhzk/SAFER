<?php

namespace App\Controller\Admin;

use App\Entity\DemandeContact;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DemandeContactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DemandeContact::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id') ->hideOnIndex(),
            TextField::new('mail_dc'),
            IntegerField::new('prix_min'),
            IntegerField::new('prix_max'),
            IntegerField::new('code_postal_dc'),
            TextField::new('ville_dc'),
            TextField::new('message') ->hideOnIndex(),
        ];
    }
}
