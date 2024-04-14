<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('adresse')
            ->add('mdp',PasswordType::class,)
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'Admin',
                    'Professeur' => 'Professeur',
                    'Etudiant' => 'Etudiant'
                ],
                'attr' => [
                    'class' => 'form-control',
                ],

                'expanded' => true,
                'label' => 'role',
            ])
            ->add('submit',SubmitType::class, [
                'attr' => [
                    'class' => 'form-control btn btn-primary',
                ],
            ])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
