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

/* coachs/new.html.twig */
class __TwigTemplate_41aac569e4a749c76398a5404933fcf9 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coachs/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coachs/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coachs/new.html.twig", 1);
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

        yield "New Coachs";
        
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
        yield "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <style>
        body, html {
            height: 100%;

            margin: 0;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100% - 60px); /* Adjust for footer height */
            background-color: #e0e0e0; /* Background color */
        }
        .card {
            width: 100%;
            max-width: 700px;
            margin-bottom: 71px;

            padding: 30px;
            background-color: #333;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            color: #f9f9f9;
        }

        .card-title {
            font-size: 1.8em;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #28a745;
        }

        .btn-submit {
            background-color: #28a745;
            color: #ffffff;
            font-weight: bold;
            border: none;
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            font-size: 1.1em;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #218838;
        }

        .btn-back {
            display: inline-block;
            margin-top: 10px;
            color: #17a2b8;
            font-weight: bold;
            text-align: center;
        }

        .btn-back:hover {
            color: #117a8b;
            text-decoration: underline;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "    <div class=\"wrapper\">
    <div class=\"card\">
        <h1 class=\"card-title\">Create New Coach</h1>

        ";
        // line 78
        yield Twig\Extension\CoreExtension::include($this->env, $context, "coachs/_form.html.twig", ["button_label" => "Register"]);
        yield "


        </div>
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
        return "coachs/new.html.twig";
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
        return array (  195 => 78,  189 => 74,  176 => 73,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Coachs{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <style>
        body, html {
            height: 100%;

            margin: 0;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100% - 60px); /* Adjust for footer height */
            background-color: #e0e0e0; /* Background color */
        }
        .card {
            width: 100%;
            max-width: 700px;
            margin-bottom: 71px;

            padding: 30px;
            background-color: #333;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            color: #f9f9f9;
        }

        .card-title {
            font-size: 1.8em;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #28a745;
        }

        .btn-submit {
            background-color: #28a745;
            color: #ffffff;
            font-weight: bold;
            border: none;
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            font-size: 1.1em;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #218838;
        }

        .btn-back {
            display: inline-block;
            margin-top: 10px;
            color: #17a2b8;
            font-weight: bold;
            text-align: center;
        }

        .btn-back:hover {
            color: #117a8b;
            text-decoration: underline;
        }
    </style>
{% endblock %}


{% block body %}
    <div class=\"wrapper\">
    <div class=\"card\">
        <h1 class=\"card-title\">Create New Coach</h1>

        {{ include('coachs/_form.html.twig', { 'button_label': 'Register' }) }}


        </div>
    </div>
{% endblock %}
", "coachs/new.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\coachs\\new.html.twig");
    }
}
