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

/* coachs/add.html.twig */
class __TwigTemplate_445b10cf6605bfabd6efcbb0ad8b1a7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coachs/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coachs/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coachs/add.html.twig", 1);
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

        yield "Add Coach with Training Sessions";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <head>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
        <style>
            .past-session { background-color: gray; }
            .today-session { background-color: yellow; }
            .future-session { background-color: green; }
        </style>
    </head>
    <div class=\"container mt-5\">
        <h1>Add Coach with Training Sessions</h1>

        ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        yield "

        <div class=\"mb-3\">
            <label for=\"coach\" class=\"form-label\">Coach</label>
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "coach", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>

        <div class=\"mb-3\">
            <label class=\"form-label\">Training Sessions</label>
            <div data-prototype=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "trainingDates", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "prototype", [], "any", false, false, false, 25), 'widget'));
        yield "\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "trainingDates", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["trainingDate"]) {
            // line 27
            yield "                    <div class=\"input-group mb-3 training-session-field\">
                        ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["trainingDate"], 'widget', ["attr" => ["class" => "form-control training-date"]]);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trainingDate'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "            </div>
            <button type=\"button\" class=\"btn btn-primary add-training-session\">Add Training Session</button>
        </div>

        <div class=\"mb-3\">
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "save", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "btn btn-success", "id" => "save-button"]]);
        yield "
        </div>

        ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        yield "

        <script>
            // JavaScript to dynamically add new training date fields
            document.querySelector('.add-training-session').addEventListener('click', function() {
                const container = document.querySelector('[data-prototype]');
                const prototype = container.getAttribute('data-prototype');
                const newIndex = container.children.length;

                const newField = prototype.replace(/__name__/g, newIndex);

                const trashButton = `<button type=\"button\" class=\"btn btn-danger remove-training-session\" id=\"remove-training-session-\${newIndex}\">
                            <i class=\"fas fa-trash-alt\"></i> Remove
                        </button>`;

                const newFieldWithTrash = `<div class=\"input-group mb-3 training-session-field\">` + newField + trashButton + `</div>`;

                container.insertAdjacentHTML('beforeend', newFieldWithTrash);

                enableSaveButton();
                attachRemoveButtons();
                applyColorToSessions(); // Apply colors to new field
            });

            // JavaScript to remove training date fields
            document.addEventListener('click', function(event) {
                if (event.target && event.target.classList.contains('remove-training-session')) {
                    const fieldToRemove = event.target.closest('.input-group');
                    if (fieldToRemove) {
                        fieldToRemove.remove();
                        enableSaveButton();
                    }
                }
            });

            // Enable the \"Save\" button if all training date fields have values
            function enableSaveButton() {
                const allDates = document.querySelectorAll('input[type=datetime-local]');
                let allFilled = true;

                allDates.forEach(i => {
                    if (!i.value) {
                        allFilled = false;
                    }
                });

                const saveButton = document.querySelector('#save-button');
                saveButton.disabled = !allFilled;
            }

            // Attach event listeners to remove buttons
            function attachRemoveButtons() {
                document.querySelectorAll('.remove-training-session').forEach(function(button) {
                    button.addEventListener('click', function(event) {
                        const fieldToRemove = event.target.closest('.input-group');
                        if (fieldToRemove) {
                            fieldToRemove.remove();
                            enableSaveButton();
                        }
                    });
                });
            }

            // Function to apply color based on date status
            function applyColorToSessions() {
                const today = new Date();
                today.setHours(0, 0, 0, 0); // Reset to start of day for accurate comparison

                document.querySelectorAll('.training-date').forEach(function(input) {
                    const sessionDate = new Date(input.value);
                    sessionDate.setHours(0, 0, 0, 0); // Compare with only the date part

                    if (input.value) {
                        if (sessionDate < today) {
                            input.classList.add('past-session');
                        } else if (sessionDate.getTime() === today.getTime()) {
                            input.classList.add('today-session');
                        } else {
                            input.classList.add('future-session');
                        }
                    }

                    // Update color on date change
                    input.addEventListener('change', applyColorToSessions);
                });
            }

            // Initial check on page load
            enableSaveButton();
            attachRemoveButtons();
            applyColorToSessions();

            // Optional: If form is submitted, ensure it's valid
            document.querySelector('form').addEventListener('submit', function(event) {
                if (document.getElementById('save-button').disabled) {
                    event.preventDefault();
                    alert('Please fill in all training session dates!');
                }
            });
        </script>
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
        return "coachs/add.html.twig";
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
        return array (  161 => 39,  155 => 36,  148 => 31,  139 => 28,  136 => 27,  132 => 26,  128 => 25,  120 => 20,  113 => 16,  100 => 5,  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add Coach with Training Sessions{% endblock %}
{% block body %}
    <head>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
        <style>
            .past-session { background-color: gray; }
            .today-session { background-color: yellow; }
            .future-session { background-color: green; }
        </style>
    </head>
    <div class=\"container mt-5\">
        <h1>Add Coach with Training Sessions</h1>

        {{ form_start(form) }}

        <div class=\"mb-3\">
            <label for=\"coach\" class=\"form-label\">Coach</label>
            {{ form_row(form.coach, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"mb-3\">
            <label class=\"form-label\">Training Sessions</label>
            <div data-prototype=\"{{ form_widget(form.trainingDates.vars.prototype)|e }}\">
                {% for trainingDate in form.trainingDates %}
                    <div class=\"input-group mb-3 training-session-field\">
                        {{ form_widget(trainingDate, {'attr': {'class': 'form-control training-date'}}) }}
                    </div>
                {% endfor %}
            </div>
            <button type=\"button\" class=\"btn btn-primary add-training-session\">Add Training Session</button>
        </div>

        <div class=\"mb-3\">
            {{ form_row(form.save, {'attr': {'class': 'btn btn-success', 'id': 'save-button'}}) }}
        </div>

        {{ form_end(form) }}

        <script>
            // JavaScript to dynamically add new training date fields
            document.querySelector('.add-training-session').addEventListener('click', function() {
                const container = document.querySelector('[data-prototype]');
                const prototype = container.getAttribute('data-prototype');
                const newIndex = container.children.length;

                const newField = prototype.replace(/__name__/g, newIndex);

                const trashButton = `<button type=\"button\" class=\"btn btn-danger remove-training-session\" id=\"remove-training-session-\${newIndex}\">
                            <i class=\"fas fa-trash-alt\"></i> Remove
                        </button>`;

                const newFieldWithTrash = `<div class=\"input-group mb-3 training-session-field\">` + newField + trashButton + `</div>`;

                container.insertAdjacentHTML('beforeend', newFieldWithTrash);

                enableSaveButton();
                attachRemoveButtons();
                applyColorToSessions(); // Apply colors to new field
            });

            // JavaScript to remove training date fields
            document.addEventListener('click', function(event) {
                if (event.target && event.target.classList.contains('remove-training-session')) {
                    const fieldToRemove = event.target.closest('.input-group');
                    if (fieldToRemove) {
                        fieldToRemove.remove();
                        enableSaveButton();
                    }
                }
            });

            // Enable the \"Save\" button if all training date fields have values
            function enableSaveButton() {
                const allDates = document.querySelectorAll('input[type=datetime-local]');
                let allFilled = true;

                allDates.forEach(i => {
                    if (!i.value) {
                        allFilled = false;
                    }
                });

                const saveButton = document.querySelector('#save-button');
                saveButton.disabled = !allFilled;
            }

            // Attach event listeners to remove buttons
            function attachRemoveButtons() {
                document.querySelectorAll('.remove-training-session').forEach(function(button) {
                    button.addEventListener('click', function(event) {
                        const fieldToRemove = event.target.closest('.input-group');
                        if (fieldToRemove) {
                            fieldToRemove.remove();
                            enableSaveButton();
                        }
                    });
                });
            }

            // Function to apply color based on date status
            function applyColorToSessions() {
                const today = new Date();
                today.setHours(0, 0, 0, 0); // Reset to start of day for accurate comparison

                document.querySelectorAll('.training-date').forEach(function(input) {
                    const sessionDate = new Date(input.value);
                    sessionDate.setHours(0, 0, 0, 0); // Compare with only the date part

                    if (input.value) {
                        if (sessionDate < today) {
                            input.classList.add('past-session');
                        } else if (sessionDate.getTime() === today.getTime()) {
                            input.classList.add('today-session');
                        } else {
                            input.classList.add('future-session');
                        }
                    }

                    // Update color on date change
                    input.addEventListener('change', applyColorToSessions);
                });
            }

            // Initial check on page load
            enableSaveButton();
            attachRemoveButtons();
            applyColorToSessions();

            // Optional: If form is submitted, ensure it's valid
            document.querySelector('form').addEventListener('submit', function(event) {
                if (document.getElementById('save-button').disabled) {
                    event.preventDefault();
                    alert('Please fill in all training session dates!');
                }
            });
        </script>
    </div>
{% endblock %}
", "coachs/add.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\coachs\\add.html.twig");
    }
}
