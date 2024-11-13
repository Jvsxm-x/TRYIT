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

/* imc/show.html.twig */
class __TwigTemplate_d36c71a67d42f1aa639fb401fa7484f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "imc/show.html.twig", 1);
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

        yield "IMC Details";
        
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
        yield "    <div class=\"container\">
        <h1>IMC Details</h1>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imc_new");
        yield "\" class=\"btn btn-primary\">add new imc</a>

        ";
        // line 10
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["imcRecords"]) || array_key_exists("imcRecords", $context) ? $context["imcRecords"] : (function () { throw new RuntimeError('Variable "imcRecords" does not exist.', 10, $this->source); })())) == 1)) {
            // line 11
            yield "            ";
            // line 12
            yield "            ";
            $context["imc"] = (isset($context["imcRecords"]) || array_key_exists("imcRecords", $context) ? $context["imcRecords"] : (function () { throw new RuntimeError('Variable "imcRecords" does not exist.', 12, $this->source); })());
            // line 13
            yield "            <p><strong>IMC:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 13, $this->source); })()), "imc", [], "any", false, false, false, 13), "html", null, true);
            yield "</p>
            <p><strong>Calories for Weight Gain:</strong> ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 14, $this->source); })()), "caloriesForWeightGain", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
            <p><strong>Meal Details:</strong> ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 15, $this->source); })()), "mealDetails", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
            <a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imc_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Edit</a>
            <form method=\"post\" action=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imc_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18))), "html", null, true);
            yield "\">
                <button class=\"btn btn-danger\">Delete</button>
            </form>
            <hr>
        ";
        } else {
            // line 23
            yield "            ";
            // line 24
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["imcRecords"]) || array_key_exists("imcRecords", $context) ? $context["imcRecords"] : (function () { throw new RuntimeError('Variable "imcRecords" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["imc"]) {
                // line 25
                yield "                <p><strong>IMC:</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "imc", [], "any", false, false, false, 25), "html", null, true);
                yield "</p>
                <p><strong>Calories for Weight Gain:</strong> ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "caloriesForWeightGain", [], "any", false, false, false, 26), "html", null, true);
                yield "</p>
                <p><strong>Meal Details:</strong> ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "mealDetails", [], "any", false, false, false, 27), "html", null, true);
                yield "</p>
                <a href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imc_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Edit</a>
                <form method=\"post\" action=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imc_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "id", [], "any", false, false, false, 30))), "html", null, true);
                yield "\">
                    <button class=\"btn btn-danger\">Delete</button>
                </form>
                <hr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['imc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "        ";
        }
        // line 36
        yield "    </div>
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
        return "imc/show.html.twig";
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
        return array (  187 => 36,  184 => 35,  173 => 30,  169 => 29,  165 => 28,  161 => 27,  157 => 26,  152 => 25,  147 => 24,  145 => 23,  137 => 18,  133 => 17,  129 => 16,  125 => 15,  121 => 14,  116 => 13,  113 => 12,  111 => 11,  109 => 10,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}IMC Details{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>IMC Details</h1>
        <a href=\"{{ path('imc_new') }}\" class=\"btn btn-primary\">add new imc</a>

        {% if imcRecords|length == 1 %}
            {# When there is only one IMC record #}
            {% set imc = imcRecords %}
            <p><strong>IMC:</strong> {{ imc.imc }}</p>
            <p><strong>Calories for Weight Gain:</strong> {{ imc.caloriesForWeightGain }}</p>
            <p><strong>Meal Details:</strong> {{ imc.mealDetails }}</p>
            <a href=\"{{ path('imc_edit', {'id': imc.id}) }}\" class=\"btn btn-primary\">Edit</a>
            <form method=\"post\" action=\"{{ path('app_imc_delete', {'id': imc.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ imc.id) }}\">
                <button class=\"btn btn-danger\">Delete</button>
            </form>
            <hr>
        {% else %}
            {# When there are multiple IMC records #}
            {% for imc in imcRecords %}
                <p><strong>IMC:</strong> {{ imc.imc }}</p>
                <p><strong>Calories for Weight Gain:</strong> {{ imc.caloriesForWeightGain }}</p>
                <p><strong>Meal Details:</strong> {{ imc.mealDetails }}</p>
                <a href=\"{{ path('imc_edit', {'id': imc.id}) }}\" class=\"btn btn-primary\">Edit</a>
                <form method=\"post\" action=\"{{ path('app_imc_delete', {'id': imc.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ imc.id) }}\">
                    <button class=\"btn btn-danger\">Delete</button>
                </form>
                <hr>
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}
", "imc/show.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\imc\\show.html.twig");
    }
}
