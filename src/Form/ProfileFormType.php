<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'constraints' => [new NotBlank(['message' => 'Name cannot be blank.'])],
            ])
            ->add('email', EmailType::class, [
                'constraints' => [new NotBlank(['message' => 'Email cannot be blank.'])],
            ])
            ->add('password', PasswordType::class, [
                'required' => false, // Make this optional for profile updates
                'constraints' => [new NotBlank(['message' => 'Password cannot be blank.'])],
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Coach' => 'ROLE_COACH',
                    'Adherent' => 'ROLE_ADHERANT',
                    'Admin' => 'ROLE_ADMIN',
                ],
                'multiple' => true, // Allow multiple role selection
                'expanded' => true, // Use checkboxes for role selection
                'constraints' => [new NotBlank(['message' => 'Please choose at least one role.'])],
            ])
            ->add('updatedAt', null, [
                'widget' => 'single_text',
                'attr' => ['readonly' => true], // Prevent user from editing this field
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
