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

/* abonnements/index.html.twig */
class __TwigTemplate_2d6b38d579bd5434dab3292900296c54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnements/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnements/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnements/index.html.twig", 1);
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

        yield "Abonnements index";
        
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

<h1>Abonnements index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Price</th>
                <th>StartDate</th>
                <th>EndDate</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 90, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 91
            yield "            <tr>
                <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "price", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                <td>";
            // line 95
            ((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "startDate", [], "any", false, false, false, 95)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "startDate", [], "any", false, false, false, 95), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 96
            ((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "endDate", [], "any", false, false, false, 96)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "endDate", [], "any", false, false, false, 96), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>
                    <a href=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnements_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnements_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            yield "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['abonnement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnements_new");
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
        return "abonnements/index.html.twig";
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
        return array (  242 => 110,  237 => 107,  228 => 103,  219 => 99,  215 => 98,  210 => 96,  206 => 95,  202 => 94,  198 => 93,  194 => 92,  191 => 91,  186 => 90,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Abonnements index{% endblock %}

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

<h1>Abonnements index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Price</th>
                <th>StartDate</th>
                <th>EndDate</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for abonnement in abonnements %}
            <tr>
                <td>{{ abonnement.id }}</td>
                <td>{{ abonnement.type }}</td>
                <td>{{ abonnement.price }}</td>
                <td>{{ abonnement.startDate ? abonnement.startDate|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ abonnement.endDate ? abonnement.endDate|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_abonnements_show', {'id': abonnement.id}) }}\">show</a>
                    <a href=\"{{ path('app_abonnements_edit', {'id': abonnement.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_abonnements_new') }}\">Create new</a>
</div>
{% endblock %}
", "abonnements/index.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\abonnements\\index.html.twig");
    }
}
