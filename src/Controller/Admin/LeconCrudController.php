<?php

namespace App\Controller\Admin;

use App\Entity\Lecon;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class LeconCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lecon::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
         ->add(EntityFilter::new('cours'));
        
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
          
            TextField::new('titre' , 'Titre'),
            TextField::new('videoUrl' , 'URL Vidéo'),
            IntegerField::new('position' , 'Position'),
            BooleanField::new('estGratuite' , 'Gratuite'),
            TextField::new('cours' , 'Cours'),
        ];
    }
    
}
