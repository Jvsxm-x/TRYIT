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

/* users/coachlist.html.twig */
class __TwigTemplate_d6bda54ab24785f53a7ceb5cb5abb764 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/coachlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/coachlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/coachlist.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "User Coach List";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <h1>User Coach List</h1>

    ";
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["userCoaches"]) || array_key_exists("userCoaches", $context) ? $context["userCoaches"] : (function () { throw new RuntimeError('Variable "userCoaches" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "        <p>No users associated with this coach.</p>
    ";
        } else {
            // line 13
            yield "        <table>
            <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userCoaches"]) || array_key_exists("userCoaches", $context) ? $context["userCoaches"] : (function () { throw new RuntimeError('Variable "userCoaches" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["userCoach"]) {
                // line 23
                yield "                <tr>
                    <td>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["userCoach"], "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
                yield "</td>
                    <td>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["userCoach"], "user", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
                yield "</td> ";
                // line 26
                yield "                    <td>
                        <a href=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_usercoach_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["userCoach"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                yield "\">Edit</a>
                        <a href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_usercoach_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["userCoach"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\">Delete</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['userCoach'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "            </tbody>
        </table>
    ";
        }
        // line 35
        yield "
    <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_usercoach_add");
        yield "\">Add User Coach</a>
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
        return "users/coachlist.html.twig";
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
        return array (  160 => 36,  157 => 35,  152 => 32,  142 => 28,  138 => 27,  135 => 26,  132 => 25,  128 => 24,  125 => 23,  121 => 22,  110 => 13,  106 => 11,  104 => 10,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/users/coachlist.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}User Coach List{% endblock %}

{% block body %}
    <h1>User Coach List</h1>

    {% if userCoaches is empty %}
        <p>No users associated with this coach.</p>
    {% else %}
        <table>
            <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for userCoach in userCoaches %}
                <tr>
                    <td>{{ userCoach.user.id }}</td>
                    <td>{{ userCoach.user.name }}</td> {# Adjust based on your User entity's fields #}
                    <td>
                        <a href=\"{{ path('app_usercoach_update', { id: userCoach.id }) }}\">Edit</a>
                        <a href=\"{{ path('app_usercoach_delete', { id: userCoach.id }) }}\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    <a href=\"{{ path('app_usercoach_add') }}\">Add User Coach</a>
{% endblock %}
", "users/coachlist.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\users\\coachlist.html.twig");
    }
}
