<?php

namespace App\Form;
use App\Entity\Coachs;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('password')
            ->add('roles', ChoiceType::class, [

                'choices' => [
                    'coach' => 'ROLE_COACH',
                    'adherent' => 'ROLE_ADHERANT',
                    'admin' =>'ROLE_ADMIN'

                ],

                'constraints' => new NotBlank( ['message' => 'Please choose a country. ']),              //  'expanded' => false,
                'attr' => [
                    'class' => 'custom-select',]
            ])
            ->add('updatedAt', null, [
                'widget' => 'single_text',
            ])

        ;
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                function ($tagsAsArray): string {
                    return implode(', ', $tagsAsArray);
                },
                function ($tagsAsString): array {
                    return explode(', ', $tagsAsString);
                }
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => users::class,
        ]);
    }
}
