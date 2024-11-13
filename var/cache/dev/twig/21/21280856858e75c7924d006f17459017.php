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

/* scheduler/edit.html.twig */
class __TwigTemplate_05cb3547d5a90ffd188c9e65f418233e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scheduler/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scheduler/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "scheduler/edit.html.twig", 1);
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

        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3)) ? ("Edit") : ("New"));
        yield " Schedule";
        
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
        yield "    <style>
        /* Apply uniform width and height to form inputs */
        .custom-form input, .custom-form select, .custom-form textarea {
            width: 100%; /* Full width of the parent container */
            height: 40px; /* Uniform height for all form fields */
            margin-bottom: 15px; /* Add space between form fields */
            padding: 10px; /* Padding for inner content */
            border-radius: 5px; /* Rounded corners */
        }

        /* Apply custom button styling */
        .btn {
            padding: 10px 20px; /* Adjust padding */
            font-size: 16px; /* Larger text */
            border-radius: 5px; /* Rounded corners */
        }

        /* Optional: Style for buttons (hover effects) */
        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Optional: Style for the back link */
        .btn-back {
            font-size: 16px;
            padding: 10px 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
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

        // line 41
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">";
        // line 42
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)) ? ("Edit") : ("New"));
        yield " Schedule</h1>

        <!-- Form start with Bootstrap form class -->
        ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["class" => "custom-form"]]);
        yield "

        <!-- Add form widget and apply Bootstrap classes -->
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'widget', ["attr" => ["class" => "form-control custom-form-widget"]]);
        yield "

        <!-- Submit Button with Bootstrap button class -->
        <button type=\"submit\" class=\"btn btn-primary mt-3\">";
        // line 51
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)) ? ("Update") : ("Create"));
        yield "</button>

        ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        yield "

        <!-- Back to list link with Bootstrap button styling -->
        <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("scheduler_index");
        yield "\" class=\"btn btn-secondary mt-3\">Back to list</a>
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
        return "scheduler/edit.html.twig";
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
        return array (  190 => 56,  184 => 53,  179 => 51,  173 => 48,  167 => 45,  161 => 42,  158 => 41,  145 => 40,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ form.vars.value.id ? 'Edit' : 'New' }} Schedule{% endblock %}

{% block stylesheets %}
    <style>
        /* Apply uniform width and height to form inputs */
        .custom-form input, .custom-form select, .custom-form textarea {
            width: 100%; /* Full width of the parent container */
            height: 40px; /* Uniform height for all form fields */
            margin-bottom: 15px; /* Add space between form fields */
            padding: 10px; /* Padding for inner content */
            border-radius: 5px; /* Rounded corners */
        }

        /* Apply custom button styling */
        .btn {
            padding: 10px 20px; /* Adjust padding */
            font-size: 16px; /* Larger text */
            border-radius: 5px; /* Rounded corners */
        }

        /* Optional: Style for buttons (hover effects) */
        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Optional: Style for the back link */
        .btn-back {
            font-size: 16px;
            padding: 10px 20px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">{{ form.vars.value.id ? 'Edit' : 'New' }} Schedule</h1>

        <!-- Form start with Bootstrap form class -->
        {{ form_start(form, {'attr': {'class': 'custom-form'}}) }}

        <!-- Add form widget and apply Bootstrap classes -->
        {{ form_widget(form, {'attr': {'class': 'form-control custom-form-widget'}}) }}

        <!-- Submit Button with Bootstrap button class -->
        <button type=\"submit\" class=\"btn btn-primary mt-3\">{{ form.vars.value.id ? 'Update' : 'Create' }}</button>

        {{ form_end(form) }}

        <!-- Back to list link with Bootstrap button styling -->
        <a href=\"{{ path('scheduler_index') }}\" class=\"btn btn-secondary mt-3\">Back to list</a>
    </div>
{% endblock %}
", "scheduler/edit.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\scheduler\\edit.html.twig");
    }
}
