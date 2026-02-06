<?php

namespace App\Controller\Admin;

use App\Entity\CommandeItem;
use Dom\Text;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Yaml\Yaml;

class CommandeItemCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CommandeItem::class;
    }


    public function configureFields(string $pageName): iterable
    {
      yield TextField::new('cours', 'Cours');
      yield TextField::new('commande', 'Commande');
      yield TextField::new('unitPrice', 'Prix')
       ->FormatValue (fn ($value) => $value . ' €');
    }

}
