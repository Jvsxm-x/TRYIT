<?php

namespace Container5lu7T45;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), ['Symfony\\Component\\Form\\Extension\\Core\\Type', 'App\\Form', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type', 'Symfony\\Bridge\\Doctrine\\Form\\Type'], ['App\\Form\\AbonnementsType', 'App\\Form\\AdherantsType', 'App\\Form\\AdministratorsType', 'App\\Form\\CalendarFormType', 'App\\Form\\CategoriesType', 'App\\Form\\CoachFormType', 'App\\Form\\CoachsType', 'App\\Form\\ContactFormType', 'App\\Form\\ImcType', 'App\\Form\\LoginFormType', 'App\\Form\\Machines1Type', 'App\\Form\\MachinesType', 'App\\Form\\MessageriesType', 'App\\Form\\ProfileFormType', 'App\\Form\\RegistrationFormType', 'App\\Form\\SchedulerType', 'App\\Form\\UserDetailChange', 'App\\Form\\UserPasswordChange', 'App\\Form\\UsersType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], ['Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\FormTypePasswordHasherExtension', 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\PasswordTypePasswordHasherExtension', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'], ['Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? self::getDebug_FileLinkFormatterService($container)));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
