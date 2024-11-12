<?php
// src/Form/ImcType.php

namespace App\Form;

use App\Entity\Imc;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImcType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imc', NumberType::class, [
                'label' => 'IMC (Body Mass Index)',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('caloriesForWeightGain', NumberType::class, [
                'label' => 'Calories for Weight Gain',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('mealDetails', TextType::class, [
                'label' => 'Meal Details',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Imc::class,
        ]);
    }
}
