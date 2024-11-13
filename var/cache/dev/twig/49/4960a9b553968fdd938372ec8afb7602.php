<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* temp/abonnement/new.html.twig */
class __TwigTemplate_b40c573e8d1d8ac6b3cd49330438e8c9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/abonnement/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/abonnement/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Ajouter Abonnement</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("addabonnement.css"), "html", null, true);
        yield "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"container\">
    <div class=\"title\">Nouvel Abonnement</div>
    <div class=\"content\">
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
        <div class=\"user-details\">
            <div class=\"input-box\">
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16), 'label', ["label" => "Type"]);
        yield "
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17), 'widget');
        yield "
            </div>
            <div class=\"input-box adherant-input\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "adherant", [], "any", false, false, false, 20), 'label', ["label" => "Adherent"]);
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "adherant", [], "any", false, false, false, 21), 'widget');
        yield "
            </div>
            <div class=\"input-box date-input\">
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "date_expiration", [], "any", false, false, false, 24), 'label', ["label" => "Date d'expiration"]);
        yield "
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "date_expiration", [], "any", false, false, false, 25), 'widget');
        yield "
            </div>
            <div class=\"input-box date-input\">
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "date_debut", [], "any", false, false, false, 28), 'label', ["label" => "Date de début"]);
        yield "
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "date_debut", [], "any", false, false, false, 29), 'widget');
        yield "
            </div>
            <div class=\"input-box categories-input\">
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "categories", [], "any", false, false, false, 32), 'label', ["label" => "Categories"]);
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "categories", [], "any", false, false, false, 33), 'widget');
        yield "
            </div>
            <div class=\"input-box\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), 'label', ["label" => "Prix"]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 'widget');
        yield "
            </div>
        </div>
        <div class=\"button\">
            <input type=\"submit\" value=\"Enregistrer\">
        </div>
        ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "temp/abonnement/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  134 => 43,  125 => 37,  121 => 36,  115 => 33,  111 => 32,  105 => 29,  101 => 28,  95 => 25,  91 => 24,  85 => 21,  81 => 20,  75 => 17,  71 => 16,  65 => 13,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Ajouter Abonnement</title>
    <link rel=\"stylesheet\" href=\"{{ asset(\"addabonnement.css\") }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"container\">
    <div class=\"title\">Nouvel Abonnement</div>
    <div class=\"content\">
        {{ form_start(form) }}
        <div class=\"user-details\">
            <div class=\"input-box\">
                {{ form_label(form.type, 'Type') }}
                {{ form_widget(form.type) }}
            </div>
            <div class=\"input-box adherant-input\">
                {{ form_label(form.adherant, 'Adherent') }}
                {{ form_widget(form.adherant) }}
            </div>
            <div class=\"input-box date-input\">
                {{ form_label(form.date_expiration, 'Date d\\'expiration') }}
                {{ form_widget(form.date_expiration) }}
            </div>
            <div class=\"input-box date-input\">
                {{ form_label(form.date_debut, 'Date de début') }}
                {{ form_widget(form.date_debut) }}
            </div>
            <div class=\"input-box categories-input\">
                {{ form_label(form.categories, 'Categories') }}
                {{ form_widget(form.categories) }}
            </div>
            <div class=\"input-box\">
                {{ form_label(form.prix, 'Prix') }}
                {{ form_widget(form.prix) }}
            </div>
        </div>
        <div class=\"button\">
            <input type=\"submit\" value=\"Enregistrer\">
        </div>
        {{ form_end(form) }}
    </div>
</div>
</body>
</html>
", "temp/abonnement/new.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\temp\\abonnement\\new.html.twig");
    }
}
