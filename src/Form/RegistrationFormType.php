<?php
// src/Form/RegistrationFormType.php
namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('password')
            ->add('roles', ChoiceType::class, [

                'choices' => [
                    'Coach' => 'ROLE_COACH',
                    'Adherent' => 'ROLE_ADHERANT',
                    'Admin'=>'ROLE_ADMIN'

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
        ]);
    }
}
