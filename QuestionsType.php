<?php

namespace App\Form;

use App\Entity\Questions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class QuestionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idquiz', null, [
                'label' => 'nomquiz',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nomquiz',
                ],
            ])
            ->add('question', null, [
                'label' => 'question',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'question',
                ],
            ])
            ->add('op1',null , [
                'label' => 'option1',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'option1',
                ],
            ])
            ->add('op2',null , [
                'label' => 'option2',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'option2',
                ],
            ])
            ->add('op3',null, [
                'label' => 'option3',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'option3',
                ],
            ])
            ->add('answer', ChoiceType::class, [
                'choices' => [
                    'Option 1' => 'op1',
                    'Option 2' => 'op2',
                    'Option 3' => 'op3'
                ],
                'attr' => [
                    'class' => 'form-control',
                ],

                'expanded' => true,
                'label' => 'Answer',
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
            'data_class' => Questions::class,
        ]);
    }
}
