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

/* imc/new.html.twig */
class __TwigTemplate_814b6e5c61c273c2e254cea83684c41a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "imc/new.html.twig", 1);
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

        yield "Calculate IMC and Calories";
        
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
        <h1>Calculate IMC and Calories for Weight Gain</h1>

        ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "

        <!-- Height input -->
        <div class=\"mb-3\">
            <label for=\"height\" class=\"form-label\">Height (m)</label>
            <input type=\"number\" id=\"height\" name=\"height\" class=\"form-control\" step=\"0.01\" placeholder=\"Enter your height in meters\" required>
        </div>

        <!-- Weight input -->
        <div class=\"mb-3\">
            <label for=\"weight\" class=\"form-label\">Weight (kg)</label>
            <input type=\"number\" id=\"weight\" name=\"weight\" class=\"form-control\" step=\"0.1\" placeholder=\"Enter your weight in kilograms\" required>
        </div>

        <!-- IMC value (calculated) -->
        <div class=\"mb-3\">
            <label for=\"imc\" class=\"form-label\">IMC (Body Mass Index)</label>
            <input type=\"number\" id=\"imc\" name=\"imc\" class=\"form-control\" readonly placeholder=\"IMC will be calculated here\">
        </div>

        <!-- Calories input -->
        <div class=\"mb-3\">
            <label for=\"calories\" class=\"form-label\">Calories for Weight Gain</label>
            <input type=\"number\" id=\"calories\" name=\"calories\" class=\"form-control\" readonly placeholder=\"Calories will be calculated here\">
        </div>

        <!-- Meal details input -->
        <div class=\"mb-3\">
            <label for=\"mealDetails\" class=\"form-label\">Meal Details (per day)</label>
            <textarea id=\"mealDetails\" name=\"mealDetails\" class=\"form-control\" rows=\"3\" placeholder=\"Enter meal details here (e.g., 3 meals + 2 snacks)\" required></textarea>
        </div>

        <!-- Hidden form fields to send the calculated values to the controller -->
        <div hidden=\"hidden\">
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "imc", [], "any", false, false, false, 43), 'row', ["attr" => ["name" => "imc"]]);
        yield "
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "caloriesForWeightGain", [], "any", false, false, false, 44), 'row', ["attr" => ["name" => "caloriesForWeightGain"]]);
        yield "
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "mealDetails", [], "any", false, false, false, 45), 'row', ["attr" => ["name" => "mealDetails"]]);
        yield "
        </div>

        <!-- Submit button -->
        <button class=\"btn btn-success\" type=\"submit\">Submit</button>

        ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        yield "
    </div>

    <script>
        // Function to calculate IMC (Body Mass Index)
        function calculateIMC() {
            var height = parseFloat(document.getElementById('height').value);
            var weight = parseFloat(document.getElementById('weight').value);

            if (height && weight) {
                var imc = weight / (height * height);
                document.getElementById('imc').value = imc.toFixed(2);
                document.querySelector('#imc_imc').value = document.getElementById('imc').value;
            // Show the IMC with 2 decimal places
                calculateCalories(imc);
                document.querySelector('#imc_mealDetails').value = document.getElementById('mealDetails').value;// Call to calculate calories after IMC is calculated
            } else {
                document.getElementById('imc').value = '';
                document.getElementById('calories').value = '';
            }
        }

        // Function to calculate calories for weight gain
        function calculateCalories(imc) {
            var calories = 0;
            if (imc) {
                // Example calculation based on IMC; you can adjust the logic as per your needs
                var bmr = 2000; // Example BMR value; you can calculate it dynamically
                calories = bmr + 500; // Calories for weight gain
                document.getElementById('calories').value = calories;
                document.querySelector('#imc_caloriesForWeightGain').value = document.getElementById('calories').value;
                // Display the calculated calories
            }
        }

        // Add event listeners to the height and weight inputs
        document.getElementById('height').addEventListener('input', calculateIMC);
        document.getElementById('weight').addEventListener('input', calculateIMC);

        // Before submitting the form, set the values of the hidden form fields
        document.querySelector('form').addEventListener('submit', function(event) {
            // Set the hidden inputs with calculated values
            document.querySelector('#imc_imc').value = document.getElementById('imc').value;
            document.querySelector('#imc_caloriesForWeightGain').value = document.getElementById('calories').value;
            document.querySelector('#imc_mealDetails').value = document.getElementById('mealDetails').value;
        });
    </script>
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
        return "imc/new.html.twig";
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
        return array (  159 => 51,  150 => 45,  146 => 44,  142 => 43,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Calculate IMC and Calories{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Calculate IMC and Calories for Weight Gain</h1>

        {{ form_start(form) }}

        <!-- Height input -->
        <div class=\"mb-3\">
            <label for=\"height\" class=\"form-label\">Height (m)</label>
            <input type=\"number\" id=\"height\" name=\"height\" class=\"form-control\" step=\"0.01\" placeholder=\"Enter your height in meters\" required>
        </div>

        <!-- Weight input -->
        <div class=\"mb-3\">
            <label for=\"weight\" class=\"form-label\">Weight (kg)</label>
            <input type=\"number\" id=\"weight\" name=\"weight\" class=\"form-control\" step=\"0.1\" placeholder=\"Enter your weight in kilograms\" required>
        </div>

        <!-- IMC value (calculated) -->
        <div class=\"mb-3\">
            <label for=\"imc\" class=\"form-label\">IMC (Body Mass Index)</label>
            <input type=\"number\" id=\"imc\" name=\"imc\" class=\"form-control\" readonly placeholder=\"IMC will be calculated here\">
        </div>

        <!-- Calories input -->
        <div class=\"mb-3\">
            <label for=\"calories\" class=\"form-label\">Calories for Weight Gain</label>
            <input type=\"number\" id=\"calories\" name=\"calories\" class=\"form-control\" readonly placeholder=\"Calories will be calculated here\">
        </div>

        <!-- Meal details input -->
        <div class=\"mb-3\">
            <label for=\"mealDetails\" class=\"form-label\">Meal Details (per day)</label>
            <textarea id=\"mealDetails\" name=\"mealDetails\" class=\"form-control\" rows=\"3\" placeholder=\"Enter meal details here (e.g., 3 meals + 2 snacks)\" required></textarea>
        </div>

        <!-- Hidden form fields to send the calculated values to the controller -->
        <div hidden=\"hidden\">
            {{ form_row(form.imc, {'attr': {'name': 'imc'}}) }}
            {{ form_row(form.caloriesForWeightGain, {'attr': {'name': 'caloriesForWeightGain'}}) }}
            {{ form_row(form.mealDetails, {'attr': {'name': 'mealDetails'}}) }}
        </div>

        <!-- Submit button -->
        <button class=\"btn btn-success\" type=\"submit\">Submit</button>

        {{ form_end(form) }}
    </div>

    <script>
        // Function to calculate IMC (Body Mass Index)
        function calculateIMC() {
            var height = parseFloat(document.getElementById('height').value);
            var weight = parseFloat(document.getElementById('weight').value);

            if (height && weight) {
                var imc = weight / (height * height);
                document.getElementById('imc').value = imc.toFixed(2);
                document.querySelector('#imc_imc').value = document.getElementById('imc').value;
            // Show the IMC with 2 decimal places
                calculateCalories(imc);
                document.querySelector('#imc_mealDetails').value = document.getElementById('mealDetails').value;// Call to calculate calories after IMC is calculated
            } else {
                document.getElementById('imc').value = '';
                document.getElementById('calories').value = '';
            }
        }

        // Function to calculate calories for weight gain
        function calculateCalories(imc) {
            var calories = 0;
            if (imc) {
                // Example calculation based on IMC; you can adjust the logic as per your needs
                var bmr = 2000; // Example BMR value; you can calculate it dynamically
                calories = bmr + 500; // Calories for weight gain
                document.getElementById('calories').value = calories;
                document.querySelector('#imc_caloriesForWeightGain').value = document.getElementById('calories').value;
                // Display the calculated calories
            }
        }

        // Add event listeners to the height and weight inputs
        document.getElementById('height').addEventListener('input', calculateIMC);
        document.getElementById('weight').addEventListener('input', calculateIMC);

        // Before submitting the form, set the values of the hidden form fields
        document.querySelector('form').addEventListener('submit', function(event) {
            // Set the hidden inputs with calculated values
            document.querySelector('#imc_imc').value = document.getElementById('imc').value;
            document.querySelector('#imc_caloriesForWeightGain').value = document.getElementById('calories').value;
            document.querySelector('#imc_mealDetails').value = document.getElementById('mealDetails').value;
        });
    </script>
{% endblock %}
", "imc/new.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\imc\\new.html.twig");
    }
}
