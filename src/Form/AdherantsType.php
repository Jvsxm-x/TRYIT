<?php

namespace App\Form;

use App\Entity\Adherants;
use App\Entity\Coachs;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class AdherantsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Email is required']),
                    new Email(['message' => 'Please enter a valid email address']),
                ],
                'attr' => ['class' => 'form-control'],
            ])
            ->add('password', PasswordType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Password is required']),
                ],
                'attr' => ['class' => 'form-control'],
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'adherent' => 'ROLE_ADHERANT',
                ],
                'data' => ['ROLE_ADHERANT'], // Default and only value is Admin
                'attr' => [
                    'class' => 'd-none', // Hide the field
                ],
                'label' => false, // Hide the label
            ])
            ->add('createdAt', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('updatedAt', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('joinedAt', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('coach', EntityType::class, [
                'class' => Coachs::class,
                'choice_label' => 'name',
                'placeholder' => 'Select a coach',
                'attr' => ['class' => 'form-control'],
            ]);
        $builder->get('roles')
        ->addModelTransformer(new CallbackTransformer(
        function ($rolesAsArray): string {
            return implode(', ', $rolesAsArray);
        },
        function ($rolesAsString): array {
            return explode(', ', $rolesAsString);
        }
    ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adherants::class,
        ]);
    }
}
