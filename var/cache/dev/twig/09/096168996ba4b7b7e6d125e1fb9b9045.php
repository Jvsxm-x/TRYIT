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

/* temp/security/login.html.twig */
class __TwigTemplate_21023341152a99f97d9eab3e50db88bf extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "../../base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/security/login.html.twig"));

        $this->parent = $this->loadTemplate("../../base.html.twig", "temp/security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/adminLte/css/adminlte.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/app.js"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/adminLte/css/adminlte.css.map"), "html", null, true);
        yield "\">
    <script src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/app.js"), "html", null, true);
        yield "\"></script>
    <link rel=\"stylesheet\"  href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/sb-admin.css"), "html", null, true);
        yield "\">



    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <style>
        button[type=\"submit\"] {
            border: 1px solid var(--main-color);;
            color: #000
        }
        button[type=\"submit\"]:hover,
        a {
            color: var(--main-color);
        }
        .card {
            border-radius: 1.7em;
        }
        .test{
            background-image:url(";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpg"), "html", null, true);
        yield ");
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
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

        // line 35
        yield "    <form method=\"post\" class=\"user\" novalidate>


        <div class=\"container\" style=\"margin-top: 10%\">

            <div class=\"row justify-content-center\">

                <div class=\"col-xl-7\">

                    <div class=\"card o-hidden border-0 shadow-lg my-5\">
                        <div class=\" p-0\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 d-none d-lg-block bg-login-image\" style=\"background-image: url('";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpg"), "html", null, true);
        yield "');\"></div>
                                <div class=\"col-lg-6\">
                                    <div class=\"p-5\">
                                        <div class=\"text-center\">
                                            <h1 class=\"h4 text-gray-900 mb-4\">Se connecter</h1>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "\" id=\"inputEmail\" required autofocus>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\" required>
                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                                        </div>

                                        <button class=\"btn btn-block\" type=\"submit\">
                                            Se connecter
                                        </button>
                                        <hr>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"#\">Mot de passe oublié?</a>
                                        </div>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Créer un Compte </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </form>
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
        return "temp/security/login.html.twig";
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
        return array (  218 => 69,  204 => 58,  197 => 54,  187 => 47,  173 => 35,  160 => 34,  145 => 30,  124 => 12,  120 => 11,  116 => 10,  112 => 9,  108 => 8,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '../../base.html.twig' %}

{% block title %}Connexion
{% endblock %}
{% block stylesheets %}
    {{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/adminLte/css/adminlte.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/app.js\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/adminLte/css/adminlte.css.map\") }}\">
    <script src=\"{{ asset(\"assets/app.js\") }}\"></script>
    <link rel=\"stylesheet\"  href=\"{{ asset(\"assets/styles/sb-admin.css\") }}\">



    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <style>
        button[type=\"submit\"] {
            border: 1px solid var(--main-color);;
            color: #000
        }
        button[type=\"submit\"]:hover,
        a {
            color: var(--main-color);
        }
        .card {
            border-radius: 1.7em;
        }
        .test{
            background-image:url({{asset('img/logo.jpg')}});
        }
    </style>
{% endblock %}
{% block body %}
    <form method=\"post\" class=\"user\" novalidate>


        <div class=\"container\" style=\"margin-top: 10%\">

            <div class=\"row justify-content-center\">

                <div class=\"col-xl-7\">

                    <div class=\"card o-hidden border-0 shadow-lg my-5\">
                        <div class=\" p-0\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 d-none d-lg-block bg-login-image\" style=\"background-image: url('{{ asset('img/logo.jpg') }}');\"></div>
                                <div class=\"col-lg-6\">
                                    <div class=\"p-5\">
                                        <div class=\"text-center\">
                                            <h1 class=\"h4 text-gray-900 mb-4\">Se connecter</h1>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"email\" name=\"email\" class=\"form-control\" value=\"{{ last_username }}\" id=\"inputEmail\" required autofocus>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\" required>
                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                        </div>

                                        <button class=\"btn btn-block\" type=\"submit\">
                                            Se connecter
                                        </button>
                                        <hr>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"#\">Mot de passe oublié?</a>
                                        </div>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"{{path('app_register')}}\">Créer un Compte </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </form>
{% endblock %}
", "temp/security/login.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\temp\\security\\login.html.twig");
    }
}
