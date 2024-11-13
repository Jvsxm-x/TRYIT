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

/* temp/imcvue/result.html.twig */
class __TwigTemplate_4e0c2a676487a1a5f1382e5b899929e9 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/imcvue/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/imcvue/result.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link
            href=\"https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css\"
            rel=\"stylesheet\"
    />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.css"), "html", null, true);
        yield "\">
    <title>IMC ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "prenom", [], "any", false, false, false, 12), "html", null, true);
        yield "</title>
</head>
";
        // line 14
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        yield "    <nav>
        <div class=\"nav__logo\">
            <a href=\"#\"><img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"logo\" /></a>
        </div>
        <ul class=\"nav__links\">
            <li class=\"link\"><a href=\"#\">Home</a></li>
            <li class=\"link\"><a href=\"#\">Program</a></li>
            <li class=\"link\"><a href=\"#\">Service</a></li>
            <li class=\"link\"><a href=\"#\">About</a></li>
            <li class=\"link\"><a href=\"#\">Community</a></li>
        </ul>

        ";
        // line 27
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                <button class=\"btn\">Customer Area</button>
            </a>
        ";
        } else {
            // line 32
            yield "            ";
            // line 33
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                <button class=\"btn\">Logout</button>
            </a>
        ";
        }
        // line 37
        yield "    </nav>

<div class=\"container\">
    <div class=\"user-card\">
        <h1>Résultat de l'IMC</h1>
    ";
        // line 43
        yield "        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start', ["attr" => ["class" => "custom-result"]]);
        yield "
        <div class=\"mb-3\">
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "weight", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Poids (en kg)"]);
        yield "
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "weight", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre poids en kilogrammes"]]);
        yield "
        </div>

        <div class=\"mb-3\">
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "height", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taille (en cm)"]);
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "height", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre taille en centimètres"]]);
        yield "
        </div>
        <br>
    <button class=\"btn\" type=\"submit\">Calculer l'IMC</button>
    ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        yield "

        ";
        // line 57
        if ( !(null === (isset($context["imcvue"]) || array_key_exists("imcvue", $context) ? $context["imcvue"] : (function () { throw new RuntimeError('Variable "imcvue" does not exist.', 57, $this->source); })()))) {
            // line 58
            yield "            <h2 class=\"custom-result\">Votre IMC est : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imcvue"]) || array_key_exists("imcvue", $context) ? $context["imcvue"] : (function () { throw new RuntimeError('Variable "imcvue" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "</h2>
        ";
        }
        // line 60
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "temp/imcvue/result.html.twig";
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
        return array (  178 => 60,  172 => 58,  170 => 57,  165 => 55,  158 => 51,  154 => 50,  147 => 46,  143 => 45,  137 => 43,  130 => 37,  122 => 33,  120 => 32,  112 => 28,  110 => 27,  97 => 17,  93 => 15,  70 => 14,  65 => 12,  61 => 11,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link
            href=\"https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css\"
            rel=\"stylesheet\"
    />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"index.css\") }}\">
    <title>IMC {{ app.user.prenom }}</title>
</head>
{% block body %}
    <nav>
        <div class=\"nav__logo\">
            <a href=\"#\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"logo\" /></a>
        </div>
        <ul class=\"nav__links\">
            <li class=\"link\"><a href=\"#\">Home</a></li>
            <li class=\"link\"><a href=\"#\">Program</a></li>
            <li class=\"link\"><a href=\"#\">Service</a></li>
            <li class=\"link\"><a href=\"#\">About</a></li>
            <li class=\"link\"><a href=\"#\">Community</a></li>
        </ul>

        {% if not app.user %}
            <a href=\"{{ path('app_login') }}\">
                <button class=\"btn\">Customer Area</button>
            </a>
        {% else %}
            {# Display the logout button if the user is logged in #}
            <a href=\"{{ path('app_logout') }}\">
                <button class=\"btn\">Logout</button>
            </a>
        {% endif %}
    </nav>

<div class=\"container\">
    <div class=\"user-card\">
        <h1>Résultat de l'IMC</h1>
    {# Affichage du formulaire #}
        {{ form_start(form, {'attr': {'class': 'custom-result'}}) }}
        <div class=\"mb-3\">
            {{ form_label(form.weight, 'Poids (en kg)', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.weight, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre poids en kilogrammes'}}) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.height, 'Taille (en cm)', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.height, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre taille en centimètres'}}) }}
        </div>
        <br>
    <button class=\"btn\" type=\"submit\">Calculer l'IMC</button>
    {{ form_end(form) }}

        {% if imcvue is not null %}
            <h2 class=\"custom-result\">Votre IMC est : {{ imcvue }}</h2>
        {% endif %}
    </div>
</div>
{% endblock %}
", "temp/imcvue/result.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\temp\\imcvue\\result.html.twig");
    }
}
