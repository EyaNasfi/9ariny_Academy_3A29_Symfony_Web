<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre',null ,[ 'label' => 'titre',
        'attr' => [
            'placeholder' => 'Titre de la reclamation', 'class' => 'form-control',]
            ] )
            
        
        ->add('description', TextareaType::class, [
            'label' => 'Description',
            'attr' => [
                'placeholder' => 'Description de la reclamation',
                'class' => 'form-control',

            ],
        ])
       
       
        ->add('envoyer', SubmitType::class,[
        'attr' => [  'class' => 'form-control',]
        ])

        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
