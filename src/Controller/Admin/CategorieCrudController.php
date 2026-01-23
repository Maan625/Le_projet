<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class CategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categorie::class;
    }

    

    public function configureFields(string $pageName): iterable
    {
        
        yield TextField::new('nom');

       
         
  

        // عمود يظهر عدد الدورات داخل هذه الفئة
        yield IntegerField::new('coursCount', 'Nb Cours')
            ->onlyOnIndex()
            ->formatValue(function ($value, $entity) {
                return $entity->getCours()->count();
            });
    }
}
