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

/* temp/adherant/index.html.twig */
class __TwigTemplate_032bb11932d8100f5bbe7181c4e07b1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/adherant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/adherant/index.html.twig"));

        $this->parent = $this->loadTemplate("../../base.html.twig", "temp/adherant/index.html.twig", 1);
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

        yield "Adherant Index";
        
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
            <h1 class=\"\">Adherants</h1>

            ";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["adherants"]) || array_key_exists("adherants", $context) ? $context["adherants"] : (function () { throw new RuntimeError('Variable "adherants" does not exist.', 27, $this->source); })())) > 0)) {
            // line 28
            yield "                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["adherants"]) || array_key_exists("adherants", $context) ? $context["adherants"] : (function () { throw new RuntimeError('Variable "adherants" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["adherant"]) {
                // line 41
                yield "                        <tr>
                            <td>";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adherant"], "id", [], "any", false, false, false, 42), "html", null, true);
                yield "</td>
                            <td>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adherant"], "nom", [], "any", false, false, false, 43), "html", null, true);
                yield "</td>
                            <td>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adherant"], "prenom", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                            <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adherant"], "gender", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
                            <td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adherant"], "email", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>
                            <td>
                                <a href=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherant_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adherant"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\" class=\"action-link\">Show</a>
                                <a href=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherant_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adherant"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"action-link\">Edit</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['adherant'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                    </tbody>
                </table>
            ";
        } else {
            // line 56
            yield "                <p>No records found.</p>
            ";
        }
        // line 58
        yield "
            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherant_new");
        yield "\" class=\"create-link\">Create New</a>
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
        return "temp/adherant/index.html.twig";
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
        return array (  232 => 59,  229 => 58,  225 => 56,  220 => 53,  210 => 49,  206 => 48,  201 => 46,  197 => 45,  193 => 44,  189 => 43,  185 => 42,  182 => 41,  178 => 40,  164 => 28,  162 => 27,  150 => 18,  146 => 17,  142 => 16,  136 => 13,  132 => 12,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '../../base.html.twig' %}

{% block title %}Adherant Index{% endblock %}

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
            <h1 class=\"\">Adherants</h1>

            {% if adherants|length > 0 %}
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for adherant in adherants %}
                        <tr>
                            <td>{{ adherant.id }}</td>
                            <td>{{ adherant.nom }}</td>
                            <td>{{ adherant.prenom }}</td>
                            <td>{{ adherant.gender }}</td>
                            <td>{{ adherant.email }}</td>
                            <td>
                                <a href=\"{{ path('app_adherant_show', {'id': adherant.id}) }}\" class=\"action-link\">Show</a>
                                <a href=\"{{ path('app_adherant_edit', {'id': adherant.id}) }}\" class=\"action-link\">Edit</a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% else %}
                <p>No records found.</p>
            {% endif %}

            <a href=\"{{ path('app_adherant_new') }}\" class=\"create-link\">Create New</a>
        </div>
    </div>
</div>
    <footer class=\"footer\">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
{% endblock %}
", "temp/adherant/index.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\temp\\adherant\\index.html.twig");
    }
}
