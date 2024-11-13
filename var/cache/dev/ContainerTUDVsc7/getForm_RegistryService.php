<?php

namespace ContainerTUDVsc7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Form\\AbonnementsType' => ['privates', 'App\\Form\\AbonnementsType', 'getAbonnementsTypeService', true],
            'App\\Form\\AdherantsType' => ['privates', 'App\\Form\\AdherantsType', 'getAdherantsTypeService', true],
            'App\\Form\\AdministratorsType' => ['privates', 'App\\Form\\AdministratorsType', 'getAdministratorsTypeService', true],
            'App\\Form\\CalendarFormType' => ['privates', 'App\\Form\\CalendarFormType', 'getCalendarFormTypeService', true],
            'App\\Form\\CategoriesType' => ['privates', 'App\\Form\\CategoriesType', 'getCategoriesTypeService', true],
            'App\\Form\\CoachFormType' => ['privates', 'App\\Form\\CoachFormType', 'getCoachFormTypeService', true],
            'App\\Form\\CoachsType' => ['privates', 'App\\Form\\CoachsType', 'getCoachsTypeService', true],
            'App\\Form\\ContactFormType' => ['privates', 'App\\Form\\ContactFormType', 'getContactFormTypeService', true],
            'App\\Form\\ImcType' => ['privates', 'App\\Form\\ImcType', 'getImcTypeService', true],
            'App\\Form\\LoginFormType' => ['privates', 'App\\Form\\LoginFormType', 'getLoginFormTypeService', true],
            'App\\Form\\Machines1Type' => ['privates', 'App\\Form\\Machines1Type', 'getMachines1TypeService', true],
            'App\\Form\\MachinesType' => ['privates', 'App\\Form\\MachinesType', 'getMachinesTypeService', true],
            'App\\Form\\MessageriesType' => ['privates', 'App\\Form\\MessageriesType', 'getMessageriesTypeService', true],
            'App\\Form\\ProfileFormType' => ['privates', 'App\\Form\\ProfileFormType', 'getProfileFormTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\SchedulerType' => ['privates', 'App\\Form\\SchedulerType', 'getSchedulerTypeService', true],
            'App\\Form\\UserDetailChange' => ['privates', 'App\\Form\\UserDetailChange', 'getUserDetailChangeService', true],
            'App\\Form\\UserPasswordChange' => ['privates', 'App\\Form\\UserPasswordChange', 'getUserPasswordChangeService', true],
            'App\\Form\\UsersType' => ['privates', 'App\\Form\\UsersType', 'getUsersTypeService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType', 'getCrudFormTypeService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 'getFileUploadTypeService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 'getFiltersFormTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\AbonnementsType' => '?',
            'App\\Form\\AdherantsType' => '?',
            'App\\Form\\AdministratorsType' => '?',
            'App\\Form\\CalendarFormType' => '?',
            'App\\Form\\CategoriesType' => '?',
            'App\\Form\\CoachFormType' => '?',
            'App\\Form\\CoachsType' => '?',
            'App\\Form\\ContactFormType' => '?',
            'App\\Form\\ImcType' => '?',
            'App\\Form\\LoginFormType' => '?',
            'App\\Form\\Machines1Type' => '?',
            'App\\Form\\MachinesType' => '?',
            'App\\Form\\MessageriesType' => '?',
            'App\\Form\\ProfileFormType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\SchedulerType' => '?',
            'App\\Form\\UserDetailChange' => '?',
            'App\\Form\\UserPasswordChange' => '?',
            'App\\Form\\UsersType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
            yield 6 => ($container->privates['form.type_extension.form.password_hasher'] ?? $container->load('getForm_TypeExtension_Form_PasswordHasherService'));
            yield 7 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension'] ?? $container->load('getEaCrudFormTypeExtensionService'));
        }, 8), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.password.password_hasher'] ?? $container->load('getForm_TypeExtension_Password_PasswordHasherService'));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'] ??= new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\CollectionTypeExtension());
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? self::getDataCollector_FormService($container))));
    }
}