<?php

namespace App\Form;

use App\Entity\Messageries;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageriesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('message')
            ->add('sentAt', null, [
                'widget' => 'single_text',
            ])
            ->add('sender', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'name',
            ])
            ->add('receiver', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'name',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Messageries::class,
        ]);
    }
}
