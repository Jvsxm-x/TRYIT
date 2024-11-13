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

/* imc/add.html.twig */
class __TwigTemplate_f64e996e2c84bf1c94f157401fa941d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "imc/add.html.twig", 1);
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

        yield "Add IMC and Meal Plan";
        
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
        yield "    <div class=\"container mt-5\">
        <h1>Add IMC and Meal Plan for ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

        <form method=\"POST\" action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_imc", ["userId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\">
            <div class=\"mb-3\">
                <label for=\"weight\" class=\"form-label\">Weight (kg)</label>
                <input type=\"number\" name=\"weight\" id=\"weight\" class=\"form-control\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"height\" class=\"form-label\">Height (cm)</label>
                <input type=\"number\" name=\"height\" id=\"height\" class=\"form-control\" required>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Calculate IMC</button>
        </form>

        ";
        // line 23
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23))) {
            // line 24
            yield "            <h3 class=\"mt-5\">IMC Calculation Result:</h3>
            <p><strong>IMC:</strong> ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 25, $this->source); })()), "imc", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>
            <p><strong>Calories for Weight Gain:</strong> ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 26, $this->source); })()), "caloriesForWeightGain", [], "any", false, false, false, 26), "html", null, true);
            yield " kcal/day</p>

            <form method=\"POST\" action=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_meal", ["imcId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">
                <div class=\"mb-3\">
                    <label for=\"mealDetails\" class=\"form-label\">Meal Plan Details</label>
                    <textarea name=\"mealDetails\" id=\"mealDetails\" class=\"form-control\" required></textarea>
                </div>

                <button type=\"submit\" class=\"btn btn-success\">Save Meal Plan</button>
            </form>
        ";
        }
        // line 37
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
        return "imc/add.html.twig";
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
        return array (  151 => 37,  139 => 28,  134 => 26,  130 => 25,  127 => 24,  125 => 23,  108 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add IMC and Meal Plan{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1>Add IMC and Meal Plan for {{ user.name }}</h1>

        <form method=\"POST\" action=\"{{ path('add_imc', {userId: user.id}) }}\">
            <div class=\"mb-3\">
                <label for=\"weight\" class=\"form-label\">Weight (kg)</label>
                <input type=\"number\" name=\"weight\" id=\"weight\" class=\"form-control\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"height\" class=\"form-label\">Height (cm)</label>
                <input type=\"number\" name=\"height\" id=\"height\" class=\"form-control\" required>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Calculate IMC</button>
        </form>

        {% if imc.id is not empty %}
            <h3 class=\"mt-5\">IMC Calculation Result:</h3>
            <p><strong>IMC:</strong> {{ imc.imc }}</p>
            <p><strong>Calories for Weight Gain:</strong> {{ imc.caloriesForWeightGain }} kcal/day</p>

            <form method=\"POST\" action=\"{{ path('add_meal', {imcId: imc.id}) }}\">
                <div class=\"mb-3\">
                    <label for=\"mealDetails\" class=\"form-label\">Meal Plan Details</label>
                    <textarea name=\"mealDetails\" id=\"mealDetails\" class=\"form-control\" required></textarea>
                </div>

                <button type=\"submit\" class=\"btn btn-success\">Save Meal Plan</button>
            </form>
        {% endif %}
    </div>
{% endblock %}
", "imc/add.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\imc\\add.html.twig");
    }
}
