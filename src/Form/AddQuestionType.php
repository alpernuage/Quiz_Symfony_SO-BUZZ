<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddQuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('addQuestion', TextType::class)
            ->add('choice1', TextType::class)
            ->add('choice2', TextType::class)
            ->add('choice3', TextType::class)
            ->add('choice4', TextType::class)
            ->add('answer', TextType::class)
            ->add('submit', SubmitType::class)
            ->add('clickedButton', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
