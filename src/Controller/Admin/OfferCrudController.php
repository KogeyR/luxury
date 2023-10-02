<?php

namespace App\Controller\Admin;

use App\Entity\Type;
use App\Entity\Offer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OfferCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Offer::class;
        return Type::class;
    }
  

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('jobTitle'),
            TextField::new('jobLocation'),
            Textfield::new('salary'),
            TextareaField::new('description'),
            TextField::new('reference'),
            BooleanField::new('isActive'),
            DateTimeField::new('createdAt'),
            DateTimeField::new('closingAt'),
            AssociationField::new('typeId'),
            AssociationField::new('categoryId'),


        ];
    }
  
}
