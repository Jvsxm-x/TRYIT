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

/* administrators/index.html.twig */
class __TwigTemplate_909d21049f0e16e973902eab4d89c69d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administrators/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administrators/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "administrators/index.html.twig", 1);
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

        yield "Administrators index";
        
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
        max-width: 1200px;
        margin: 0 auto;
        padding: 10px;
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

<h1>Administrators index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Roles</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>SuperAdmin</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["administrators"]) || array_key_exists("administrators", $context) ? $context["administrators"] : (function () { throw new RuntimeError('Variable "administrators" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["administrator"]) {
            // line 94
            yield "            <tr>
                <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "id", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "name", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "email", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "password", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                <td>";
            // line 99
            ((CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "roles", [], "any", false, false, false, 99)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "roles", [], "any", false, false, false, 99)), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 100
            ((CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "createdAt", [], "any", false, false, false, 100)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "createdAt", [], "any", false, false, false, 100), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 101
            ((CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "updatedAt", [], "any", false, false, false, 101)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "updatedAt", [], "any", false, false, false, 101), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 102
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "superAdmin", [], "any", false, false, false, 102)) ? ("Yes") : ("No"));
            yield "</td>
                <td>
                    <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_administrators_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_administrators_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["administrator"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 109
            yield "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['administrator'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_administrators_new");
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
        return "administrators/index.html.twig";
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
        return array (  257 => 116,  252 => 113,  243 => 109,  234 => 105,  230 => 104,  225 => 102,  221 => 101,  217 => 100,  213 => 99,  209 => 98,  205 => 97,  201 => 96,  197 => 95,  194 => 94,  189 => 93,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administrators index{% endblock %}

{% block body %}
<style>
    .user-details-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 10px;
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

<h1>Administrators index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Roles</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>SuperAdmin</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for administrator in administrators %}
            <tr>
                <td>{{ administrator.id }}</td>
                <td>{{ administrator.name }}</td>
                <td>{{ administrator.email }}</td>
                <td>{{ administrator.password }}</td>
                <td>{{ administrator.roles ? administrator.roles|json_encode : '' }}</td>
                <td>{{ administrator.createdAt ? administrator.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ administrator.updatedAt ? administrator.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ administrator.superAdmin ? 'Yes' : 'No' }}</td>
                <td>
                    <a href=\"{{ path('app_administrators_show', {'id': administrator.id}) }}\">show</a>
                    <a href=\"{{ path('app_administrators_edit', {'id': administrator.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_administrators_new') }}\">Create new</a>
</div>
{% endblock %}
", "administrators/index.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\administrators\\index.html.twig");
    }
}
