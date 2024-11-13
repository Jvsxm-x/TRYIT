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

/* calendar/index.html.twig */
class __TwigTemplate_e627b6694ea7d439dd799659deecd7f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calendar/index.html.twig", 1);
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

        yield "Calendar";
        
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
        yield "    <h1>Training Schedule</h1>
    <!-- Calendar Container -->
    <div id=\"calendar\"></div>

    <!-- FullCalendar Assets -->
    <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css\" rel=\"stylesheet\" />
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                events: [
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 20
            yield "                    {
                        title: 'Training Session',
                        start: '";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 22), "Y-m-d H:i:s"), "html", null, true);
            yield "',
                        extendedProps: {
                            coach: '";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "coach", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            yield "',
                            specialty: '";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "coach", [], "any", false, false, false, 25), "specialty", [], "any", false, false, false, 25), "html", null, true);
            yield "',
                            adherent: '";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "adherant", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            yield "',
                            adherentName: '";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "adherant", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            yield "',  // Added this for coach's view
                        },
                    },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "                ],
                eventRender: function(info) {
                    var eventElement = info.el;
                    var coach = info.event.extendedProps.coach;
                    var specialty = info.event.extendedProps.specialty;
                    var adherent = info.event.extendedProps.adherent;
                    var adherentName = info.event.extendedProps.adherentName;

                    // Check user role: Adherent or Coach
                    ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "roles", [], "any", false, false, false, 40), 0, [], "array", false, false, false, 40) == "ROLE_ADHERANT")) {
            // line 41
            yield "                    // For adherent, show coach and specialty information
                    eventElement.innerHTML = `
                            <strong>Coach:</strong> \${coach} (Specialty: \${specialty})<br>
                            <strong>Training Date:</strong> \${info.event.start.toISOString().slice(0, 16)}
                        `;
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "roles", [], "any", false, false, false, 46), 0, [], "array", false, false, false, 46) == "ROLE_COACH")) {
            // line 47
            yield "                    // For coach, show adherent's name who will train
                    eventElement.innerHTML = `
                            <strong>Adherent:</strong> \${adherentName}<br>
                            <strong>Training Date:</strong> \${info.event.start.toISOString().slice(0, 16)}
                        `;
                    ";
        }
        // line 53
        yield "                },
                eventClick: function(info) {
                    alert('Event: ' + info.event.title + \"\\nCoach: \" + info.event.extendedProps.coach + \"\\nAdherent: \" + info.event.extendedProps.adherent);
                },
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                eventColor: '#378006', // Optional: Customize event colors for clarity
                editable: false, // Disable editing of events
            });
            calendar.render();
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
        return "calendar/index.html.twig";
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
        return array (  180 => 53,  172 => 47,  170 => 46,  163 => 41,  161 => 40,  150 => 31,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  123 => 22,  119 => 20,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Calendar{% endblock %}

{% block body %}
    <h1>Training Schedule</h1>
    <!-- Calendar Container -->
    <div id=\"calendar\"></div>

    <!-- FullCalendar Assets -->
    <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css\" rel=\"stylesheet\" />
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                events: [
                    {% for event in events %}
                    {
                        title: 'Training Session',
                        start: '{{ event.date|date(\"Y-m-d H:i:s\") }}',
                        extendedProps: {
                            coach: '{{ event.coach.name }}',
                            specialty: '{{ event.coach.specialty }}',
                            adherent: '{{ event.adherant.name }}',
                            adherentName: '{{ event.adherant.name }}',  // Added this for coach's view
                        },
                    },
                    {% endfor %}
                ],
                eventRender: function(info) {
                    var eventElement = info.el;
                    var coach = info.event.extendedProps.coach;
                    var specialty = info.event.extendedProps.specialty;
                    var adherent = info.event.extendedProps.adherent;
                    var adherentName = info.event.extendedProps.adherentName;

                    // Check user role: Adherent or Coach
                    {% if app.user.roles[0] == \"ROLE_ADHERANT\" %}
                    // For adherent, show coach and specialty information
                    eventElement.innerHTML = `
                            <strong>Coach:</strong> \${coach} (Specialty: \${specialty})<br>
                            <strong>Training Date:</strong> \${info.event.start.toISOString().slice(0, 16)}
                        `;
                    {% elseif app.user.roles[0] == \"ROLE_COACH\" %}
                    // For coach, show adherent's name who will train
                    eventElement.innerHTML = `
                            <strong>Adherent:</strong> \${adherentName}<br>
                            <strong>Training Date:</strong> \${info.event.start.toISOString().slice(0, 16)}
                        `;
                    {% endif %}
                },
                eventClick: function(info) {
                    alert('Event: ' + info.event.title + \"\\nCoach: \" + info.event.extendedProps.coach + \"\\nAdherent: \" + info.event.extendedProps.adherent);
                },
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                eventColor: '#378006', // Optional: Customize event colors for clarity
                editable: false, // Disable editing of events
            });
            calendar.render();
        });
    </script>
{% endblock %}
", "calendar/index.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\calendar\\index.html.twig");
    }
}
