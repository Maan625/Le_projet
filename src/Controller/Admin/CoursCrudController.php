<?php

namespace App\Controller\Admin;

use App\Entity\Cours as CoursEntity;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class CoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CoursEntity::class;
    }
    public function configureFilters(Filters $filters): Filters
    {
         return $filters
         ->add(EntityFilter::new('categorie'));
         
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
             

            TextField::new('titre', 'Titre'),
            TextField::new('description', 'Description'),
                
            IntegerField::new('prix', 'Prix')
            ->FormatValue (fn ($value) => $value . ' €'),
        

            IntegerField::new('nombreLecons', 'Nombre leçons'),

            TextField::new('formateur', 'Formateur'),

            AssociationField::new('categorie', 'Catégorie'),

            AssociationField::new('lecons', 'Leçons')->onlyOnDetail(),

            ImageField::new('image', 'Image')
                ->setBasePath('images/cours') 
                ->setUploadDir('public/images/cours') 
                ->setRequired(false),

            TextField::new ('tag', 'Tag'),

        ];
    }
    
}
