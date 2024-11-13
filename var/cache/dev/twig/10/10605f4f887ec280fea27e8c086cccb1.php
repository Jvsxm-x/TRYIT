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

/* _header.html.twig */
class __TwigTemplate_454b4457d20b1a821ce07b909c74943a extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "_header.html.twig", 1);
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

        yield "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <style>
        /* Style for the navigation bar */
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar ul li {
            display: inline;
        }

        .navbar ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar ul li a:hover {
            background-color: #575757;
        }

        /* Add some space at the top to avoid the fixed navbar overlapping content */
        .content {
            padding-top: 60px;
        }

        /* Style for the page content */
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <!-- Navbar -->
    <div class=\"navbar\">
        <ul>
            <li><a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        yield "\"><code>Users</code></a></li>
            <li><a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messageries_index");
        yield "\"><code>Messageries</code></a></li>
            <li><a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coachs_index");
        yield "\"><code>Coachs</code></a></li>
            <li><a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index");
        yield "\"><code>Categories</code></a></li>
            <li><a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_administrators_index");
        yield "\"><code>Administrators</code></a></li>
            <li><a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherants_index");
        yield "\"><code>Adherants</code></a></li>
            <li><a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnements_index");
        yield "\"><code>Abonnements</code></a></li>
            <li><a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\"><code>Home</code></a></li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home</a>
            </li>

            ";
        // line 76
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) {
            // line 77
            yield "                ";
            // line 78
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 79
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                </li>
            ";
        } else {
            // line 82
            yield "                ";
            // line 83
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 84
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_redirect");
            yield "\">S'inscrire</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 87
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
                </li>
            ";
        }
        // line 90
        yield "        </ul>
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
        return "_header.html.twig";
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
        return array (  229 => 90,  223 => 87,  217 => 84,  214 => 83,  212 => 82,  206 => 79,  203 => 78,  201 => 77,  199 => 76,  193 => 73,  187 => 70,  183 => 69,  179 => 68,  175 => 67,  171 => 66,  167 => 65,  163 => 64,  159 => 63,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
    <style>
        /* Style for the navigation bar */
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar ul li {
            display: inline;
        }

        .navbar ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar ul li a:hover {
            background-color: #575757;
        }

        /* Add some space at the top to avoid the fixed navbar overlapping content */
        .content {
            padding-top: 60px;
        }

        /* Style for the page content */
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <!-- Navbar -->
    <div class=\"navbar\">
        <ul>
            <li><a href=\"{{ path('app_users_index') }}\"><code>Users</code></a></li>
            <li><a href=\"{{ path('app_messageries_index') }}\"><code>Messageries</code></a></li>
            <li><a href=\"{{ path('app_coachs_index') }}\"><code>Coachs</code></a></li>
            <li><a href=\"{{ path('app_categories_index') }}\"><code>Categories</code></a></li>
            <li><a href=\"{{ path('app_administrators_index') }}\"><code>Administrators</code></a></li>
            <li><a href=\"{{ path('app_adherants_index') }}\"><code>Adherants</code></a></li>
            <li><a href=\"{{ path('app_abonnements_index') }}\"><code>Abonnements</code></a></li>
            <li><a href=\"{{ path('home') }}\"><code>Home</code></a></li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('home') }}\">Home</a>
            </li>

            {% if app.user %}
                {# L'utilisateur est connecté #}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                </li>
            {% else %}
                {# L'utilisateur n'est pas connecté #}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('register_redirect') }}\">S'inscrire</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                </li>
            {% endif %}
        </ul>
    </div>


{% endblock %}
", "_header.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\_header.html.twig");
    }
}
