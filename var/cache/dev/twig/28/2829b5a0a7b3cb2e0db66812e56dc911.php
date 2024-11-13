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

/* temp/abonnement/index.html.twig */
class __TwigTemplate_80c339bbff7b84eca1be1e8217d39702 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/abonnement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/abonnement/index.html.twig"));

        $this->parent = $this->loadTemplate("../../base.html.twig", "temp/abonnement/index.html.twig", 1);
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

        yield "Abonnement";
        
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
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index_adherant.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "<div class=\"wrapper\">
    <header class=\"navbar\">
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherant_new");
        yield "\" class=\"logo\">
            <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Your Logo\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherant_new");
        yield "\">Home</a>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherant_new");
        yield "\">About</a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherant_new");
        yield "\">Contact</a>
        </nav>
    </header>

    <div class=\"card-container\">
        <div class=\"card\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Date_expiration</th>
                <th>Date_debut</th>
                <th>Prix</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 37
            yield "            <tr>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            ((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateExpiration", [], "any", false, false, false, 40)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateExpiration", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 41
            ((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateDebut", [], "any", false, false, false, 41)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateDebut", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            yield "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['abonnement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "        </tbody>
    </table>
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_new");
        yield "\" class=\"create-link\">Create New </a>
        </div>
    </div>
</div>
    <footer class=\"footer\">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
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
        return "temp/abonnement/index.html.twig";
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
        return array (  226 => 55,  222 => 53,  213 => 49,  204 => 45,  200 => 44,  195 => 42,  191 => 41,  187 => 40,  183 => 39,  179 => 38,  176 => 37,  171 => 36,  150 => 18,  146 => 17,  142 => 16,  136 => 13,  132 => 12,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '../../base.html.twig' %}

{% block title %}Abonnement{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset(\"index_adherant.css\") }}\">
{% endblock %}

{% block body %}
<div class=\"wrapper\">
    <header class=\"navbar\">
        <a href=\"{{ path('app_adherant_new') }}\" class=\"logo\">
            <img src=\"{{ asset(\"images/logo.png\") }}\" alt=\"Your Logo\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"{{ path('app_adherant_new') }}\">Home</a>
            <a href=\"{{ path('app_adherant_new') }}\">About</a>
            <a href=\"{{ path('app_adherant_new') }}\">Contact</a>
        </nav>
    </header>

    <div class=\"card-container\">
        <div class=\"card\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Date_expiration</th>
                <th>Date_debut</th>
                <th>Prix</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for abonnement in abonnements %}
            <tr>
                <td>{{ abonnement.id }}</td>
                <td>{{ abonnement.type }}</td>
                <td>{{ abonnement.dateExpiration ? abonnement.dateExpiration|date('Y-m-d') : '' }}</td>
                <td>{{ abonnement.dateDebut ? abonnement.dateDebut|date('Y-m-d') : '' }}</td>
                <td>{{ abonnement.prix }}</td>
                <td>
                    <a href=\"{{ path('app_abonnement_show', {'id': abonnement.id}) }}\">show</a>
                    <a href=\"{{ path('app_abonnement_edit', {'id': abonnement.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
            <a href=\"{{ path('app_abonnement_new') }}\" class=\"create-link\">Create New </a>
        </div>
    </div>
</div>
    <footer class=\"footer\">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
{% endblock %}
", "temp/abonnement/index.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\temp\\abonnement\\index.html.twig");
    }
}
