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

/* temp/categorie/new.html.twig */
class __TwigTemplate_e6c693f4c5b2a82cc3f0d8312060919d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/categorie/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/categorie/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Ajouter Abonnement</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("addcategorie.css"), "html", null, true);
        yield "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"container\">
    <div class=\"title\">Nouvelle Catégorie</div>
    <div class=\"content\">
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
        <div class=\"user-details\">
            <div class=\"input-box\">
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom_categorie", [], "any", false, false, false, 16), 'label', ["label" => "Nom de la catégorie"]);
        yield "
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom_categorie", [], "any", false, false, false, 17), 'widget');
        yield "
            </div>
            <div class=\"input-box\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "abonnement", [], "any", false, false, false, 20), 'label', ["label" => "Abonnement"]);
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "abonnement", [], "any", false, false, false, 21), 'widget');
        yield "
            </div>
        </div>
        <div class=\"button\">
            <input type=\"submit\" value=\"Enregistrer\">
        </div>
        <div class=\"button\">
            <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\">
                <input type=\"button\" value=\"Retour à la liste\">
            </a>
        </div>
        ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
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
        return "temp/categorie/new.html.twig";
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
        return array (  102 => 32,  95 => 28,  85 => 21,  81 => 20,  75 => 17,  71 => 16,  65 => 13,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Ajouter Abonnement</title>
    <link rel=\"stylesheet\" href=\"{{ asset(\"addcategorie.css\") }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"container\">
    <div class=\"title\">Nouvelle Catégorie</div>
    <div class=\"content\">
        {{ form_start(form) }}
        <div class=\"user-details\">
            <div class=\"input-box\">
                {{ form_label(form.nom_categorie, 'Nom de la catégorie') }}
                {{ form_widget(form.nom_categorie) }}
            </div>
            <div class=\"input-box\">
                {{ form_label(form.abonnement, 'Abonnement') }}
                {{ form_widget(form.abonnement) }}
            </div>
        </div>
        <div class=\"button\">
            <input type=\"submit\" value=\"Enregistrer\">
        </div>
        <div class=\"button\">
            <a href=\"{{ path('app_categorie_index') }}\">
                <input type=\"button\" value=\"Retour à la liste\">
            </a>
        </div>
        {{ form_end(form) }}
    </div>
</div>
</body>
</html>
", "temp/categorie/new.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\temp\\categorie\\new.html.twig");
    }
}
