<?php

namespace App\Controller\Admin;

use App\Entity\Manifestations;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ManifestationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Manifestations::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('manif_titre'),
            TextField::new('manif_description'),
            TextField::new('manif_casting'),
            TextField::new('manif_genre'),
            IntegerField::new('manif_prix'),
            TextField::new('manif_affiche'),
            TextField::new('manif_date'),
            TextField::new('manif_horaire'),
            AssociationField::new('manif_lieu', 'Salles')
        ];
    }

}
