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

/* adherants/show.html.twig */
class __TwigTemplate_3bcbdb246ba8823a50a1c3b74bf85b64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherants/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherants/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adherants/show.html.twig", 1);
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

        yield "Adherants";
        
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
        yield "    <h1>Adherants</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 28
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 28, $this->source); })()), "roles", [], "any", false, false, false, 28)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 28, $this->source); })()), "roles", [], "any", false, false, false, 28)), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>";
        // line 32
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 32, $this->source); })()), "createdAt", [], "any", false, false, false, 32)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 32, $this->source); })()), "createdAt", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>";
        // line 36
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 36, $this->source); })()), "updatedAt", [], "any", false, false, false, 36)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 36, $this->source); })()), "updatedAt", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>JoinedAt</th>
                <td>";
        // line 40
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 40, $this->source); })()), "joinedAt", [], "any", false, false, false, 40)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 40, $this->source); })()), "joinedAt", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherants_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherants_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 49
        yield Twig\Extension\CoreExtension::include($this->env, $context, "adherants/_delete_form.html.twig");
        yield "
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
        return "adherants/show.html.twig";
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
        return array (  175 => 49,  170 => 47,  165 => 45,  157 => 40,  150 => 36,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Adherants{% endblock %}

{% block body %}
    <h1>Adherants</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ adherant.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ adherant.name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ adherant.email }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ adherant.password }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ adherant.roles ? adherant.roles|json_encode : '' }}</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>{{ adherant.createdAt ? adherant.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>{{ adherant.updatedAt ? adherant.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>JoinedAt</th>
                <td>{{ adherant.joinedAt ? adherant.joinedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_adherants_index') }}\">back to list</a>

    <a href=\"{{ path('app_adherants_edit', {'id': adherant.id}) }}\">edit</a>

    {{ include('adherants/_delete_form.html.twig') }}
{% endblock %}
", "adherants/show.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\adherants\\show.html.twig");
    }
}
