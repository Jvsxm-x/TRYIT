<?php
// src/Controller/Admin/UsersCrudController.php
namespace App\Controller\Admin;

use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Users::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // Define the fields you want to show in the admin panel
            TextField::new('name'),
            TextField::new('email'),
            TextField::new('password')->hideOnForm(),  // hide password on form view
            AssociationField::new('roles'),  // if you have roles set up
            // other fields as needed
        ];
    }
}
