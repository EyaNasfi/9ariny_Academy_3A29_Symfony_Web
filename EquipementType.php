<?php

namespace App\Form;

use App\Entity\Equipements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Salle;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EquipementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'attr' => ['class' => 'form-control'],
            'label' => 'Name'
        ])
        ->add('brand', TextType::class, [
            'attr' => ['class' => 'form-control'],
            'label' => 'Brand'
        ])
        ->add('category', TextType::class, [
            'attr' => ['class' => 'form-control'],
            'label' => 'Category'
        ])
        ->add('salle', EntityType::class, [
            'class' => Salle::class,
            'choice_label' => 'matiere',
            'attr' => ['class' => 'form-select'],  // Bootstrap 5 select class
            'label' => 'Salle'
        ])
        ->add('submit',SubmitType::class )
        ;
    
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipements::class,
        ]);
    }
}
