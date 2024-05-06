<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', null, ['label' => false])
        ->add('prenom', null, ['label' => false])
        ->add('email', null, ['label' => false])
        ->add('adresse', null, ['label' => false])
        ->add('mdp', PasswordType::class,['label' => false])
        ->add('role', HiddenType::class, [
            'label' => false,
            'data' => 'Etudiant', // La valeur du champ caché
        ])
                ->add('submit', SubmitType::class, [
            'attr' => [
                'class' => 'form-control btn btn-primary',
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
