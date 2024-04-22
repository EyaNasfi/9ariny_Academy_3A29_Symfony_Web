<?php

namespace App\Form;

use App\Entity\Formation;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomDeFormation', null, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/\d/',
                        'match' => false,
                        'message' => 'Le nom de la formation ne doit pas contenir de chiffres.',
                    ]),
                ],
            ])
            ->add('description')
            ->add('duree')
            ->add('niveau')
            ->add('dateDeb')
            ->add('dateFin')
            ->add('cout')
            ->add('nomCategorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nomCategorie',
                'placeholder' => 'Select a category', // Optional placeholder
            ]);
           
    }

    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
