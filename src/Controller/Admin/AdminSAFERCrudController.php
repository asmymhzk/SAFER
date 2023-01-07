<?php

namespace App\Controller\Admin;

use App\Entity\AdminSAFER;

use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AdminSAFERCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AdminSAFER::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id_admin')->hideOnForm(),
            TextField::new('nom_admin'),
            TextField::new('prenom_admin'),
            TextField::new('mail_admin')
            ->setFormTypeOption('disabled', 'disabled'),
            
        ];
    }
    
}
