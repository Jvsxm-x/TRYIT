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

/* categories/index.html.twig */
class __TwigTemplate_619adfcb4f0d20ab457b4928d13da958 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categories/index.html.twig", 1);
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

        yield "Categories index";
        
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
        yield "<style>
    .user-details-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .user-details-container h1 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 26px;
        color: #333;
    }

    .user-details-container table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .user-details-container th, .user-details-container td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .user-details-container th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .user-details-container td {
        background-color: #fff;
    }

    .user-details-container .actions {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .user-details-container a {
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-size: 16px;
        background-color: #007bff;
        color: white;
        text-align: center;
    }

    .user-details-container a:hover {
        background-color: #0056b3;
    }

    .user-details-container a.delete {
        background-color: #dc3545;
    }

    .user-details-container a.delete:hover {
        background-color: #c82333;
    }
</style>

<div class=\"user-details-container\">

<h1>Categories index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 88, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 89
            yield "            <tr>
                <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 99
            yield "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_new");
        yield "\">Create new</a>
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
        return "categories/index.html.twig";
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
        return array (  232 => 106,  227 => 103,  218 => 99,  209 => 95,  205 => 94,  200 => 92,  196 => 91,  192 => 90,  189 => 89,  184 => 88,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categories index{% endblock %}

{% block body %}
<style>
    .user-details-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .user-details-container h1 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 26px;
        color: #333;
    }

    .user-details-container table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .user-details-container th, .user-details-container td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .user-details-container th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .user-details-container td {
        background-color: #fff;
    }

    .user-details-container .actions {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .user-details-container a {
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-size: 16px;
        background-color: #007bff;
        color: white;
        text-align: center;
    }

    .user-details-container a:hover {
        background-color: #0056b3;
    }

    .user-details-container a.delete {
        background-color: #dc3545;
    }

    .user-details-container a.delete:hover {
        background-color: #c82333;
    }
</style>

<div class=\"user-details-container\">

<h1>Categories index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td>{{ category.id }}</td>
                <td>{{ category.name }}</td>
                <td>{{ category.description }}</td>
                <td>
                    <a href=\"{{ path('app_categories_show', {'id': category.id}) }}\">show</a>
                    <a href=\"{{ path('app_categories_edit', {'id': category.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_categories_new') }}\">Create new</a>
</div>
{% endblock %}
", "categories/index.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\categories\\index.html.twig");
    }
}
