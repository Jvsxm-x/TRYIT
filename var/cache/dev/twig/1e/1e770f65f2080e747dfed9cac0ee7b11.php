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

/* base.html.twig */
class __TwigTemplate_acd86b40d65c855d6cf613ab6088bca9 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 54
        yield "</head>

<body>

<div class=\"container-fluid\">
    <!-- Navbar -->
    <header class=\"site-navbar navbar navbar-expand-lg\" role=\"banner\">
        <div class=\"container-fluid\">
            <!-- Logo -->
            <div class=\"site-logo\">
                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"navbar-brand\">TEK+<span>.</span></a>
            </div>
            <!-- Toggler for mobile view -->
            <button class=\"navbar-toggler collapsible\" style=\"border: solid white 1px;\" type=\"button\" onclick=\"toggleNavbar()\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon bg-white \" ></span>
            </button>
            <!-- Navigation Menu -->
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73)) {
            // line 74
            yield "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 75
                yield "                            <li class=\"nav-item\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
                yield "\" class=\"nav-link\">Users</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 76
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messageries_index");
                yield "\" class=\"nav-link\">Messageries</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 77
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coachs_index");
                yield "\" class=\"nav-link\">Coaches</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 78
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index");
                yield "\" class=\"nav-link\">Categories</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 79
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_administrators_index");
                yield "\" class=\"nav-link\">Administrators</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 80
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adherants_index");
                yield "\" class=\"nav-link\">Adherants</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 81
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnements_index");
                yield "\" class=\"nav-link\">Abonnements</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 82
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                yield "\" class=\"nav-link\">Home</a></li>
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) {
                // line 84
                yield "                            <li class=\"nav-item\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_usercoachlist_index");
                yield "\" class=\"nav-link\">User List</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 85
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
                yield "\" class=\"nav-link\">Account</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 86
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_index");
                yield "\" class=\"nav-link\">Calendar</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 87
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                yield "\" class=\"nav-link\">Home</a></li>
                        ";
            } else {
                // line 89
                yield "                            <li class=\"nav-item\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_add");
                yield "\" class=\"nav-link\">Add Coach</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 90
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
                yield "\" class=\"nav-link\">Account</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 91
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_index");
                yield "\" class=\"nav-link\">Calendar</a></li>
                            <li class=\"nav-item\"><a href=\"";
                // line 92
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                yield "\" class=\"nav-link\">Home</a></li>
                        ";
            }
            // line 94
            yield "                        <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-link\">Déconnexion</a></li>
                    ";
        } else {
            // line 96
            yield "                        <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            yield "\" class=\"nav-link\">Home</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 97
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-link\">Connexion</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 98
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            yield "\" class=\"nav-link\">S'inscrire</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
            yield "\" class=\"nav-link\">Contact</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 100
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
            yield "\" class=\"nav-link\">À propos</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 101
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            yield "#contact-section\" class=\"nav-link\">Contact</a></li>

                    ";
        }
        // line 104
        yield "                </ul>
            </div>
        </div>
    </header>

    <div class=\"content\">
        ";
        // line 110
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 111
        yield "    </div>

    <footer class=\"bg-dark text-white text-center fixed-bottom py-3 wh-100\">
        <div>Jassem Yamina Mhemmed - Teu-Up University 2024-2025</div>
    </footer>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\"></script>

<script>
    document.querySelector(\".collapsible\").addEventListener(\"click\", function() {
        const content = this.nextElementSibling;
        content.style.display = content.style.display === \"block\" ? \"none\" : \"block\";
    });
</script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "        <style>
            html, body {
                height: 100%;
                margin: 0;
                display: flex;
                flex-direction: column;
            }
            .container-fluid {
                flex: 1;
                display: flex;
                flex-direction: column;
            }
            .navbar {
                background-color: #2c3e50 !important;
            }
            .navbar-nav {
                flex-direction: row;
            }
            .nav-link {
                color: white !important;
                padding: 0.5rem 1rem;
            }
            .content {
                flex: 1;
            }
            footer {
                background-color: #2c3e50;
                color: white;
                padding: 10px;
                text-align: center;
                margin-bottom: 20px;
            }


            .navbar-toggler {
                 /* Remove border */
            }
            .nav-link {
                padding: 0.5rem 1rem;
            }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  327 => 110,  275 => 12,  262 => 11,  239 => 6,  210 => 111,  208 => 110,  200 => 104,  194 => 101,  190 => 100,  186 => 99,  182 => 98,  178 => 97,  173 => 96,  167 => 94,  162 => 92,  158 => 91,  154 => 90,  149 => 89,  144 => 87,  140 => 86,  136 => 85,  131 => 84,  126 => 82,  122 => 81,  118 => 80,  114 => 79,  110 => 78,  106 => 77,  102 => 76,  97 => 75,  94 => 74,  92 => 73,  80 => 64,  68 => 54,  66 => 11,  58 => 6,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

    {% block stylesheets %}
        <style>
            html, body {
                height: 100%;
                margin: 0;
                display: flex;
                flex-direction: column;
            }
            .container-fluid {
                flex: 1;
                display: flex;
                flex-direction: column;
            }
            .navbar {
                background-color: #2c3e50 !important;
            }
            .navbar-nav {
                flex-direction: row;
            }
            .nav-link {
                color: white !important;
                padding: 0.5rem 1rem;
            }
            .content {
                flex: 1;
            }
            footer {
                background-color: #2c3e50;
                color: white;
                padding: 10px;
                text-align: center;
                margin-bottom: 20px;
            }


            .navbar-toggler {
                 /* Remove border */
            }
            .nav-link {
                padding: 0.5rem 1rem;
            }
        </style>
    {% endblock %}
</head>

<body>

<div class=\"container-fluid\">
    <!-- Navbar -->
    <header class=\"site-navbar navbar navbar-expand-lg\" role=\"banner\">
        <div class=\"container-fluid\">
            <!-- Logo -->
            <div class=\"site-logo\">
                <a href=\"{{ path('home') }}\" class=\"navbar-brand\">TEK+<span>.</span></a>
            </div>
            <!-- Toggler for mobile view -->
            <button class=\"navbar-toggler collapsible\" style=\"border: solid white 1px;\" type=\"button\" onclick=\"toggleNavbar()\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon bg-white \" ></span>
            </button>
            <!-- Navigation Menu -->
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    {% if app.user %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"nav-item\"><a href=\"{{ path('app_users_index') }}\" class=\"nav-link\">Users</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_messageries_index') }}\" class=\"nav-link\">Messageries</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_coachs_index') }}\" class=\"nav-link\">Coaches</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_categories_index') }}\" class=\"nav-link\">Categories</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_administrators_index') }}\" class=\"nav-link\">Administrators</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_adherants_index') }}\" class=\"nav-link\">Adherants</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_abonnements_index') }}\" class=\"nav-link\">Abonnements</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('home') }}\" class=\"nav-link\">Home</a></li>
                        {% elseif is_granted('ROLE_COACH') %}
                            <li class=\"nav-item\"><a href=\"{{ path('app_usercoachlist_index') }}\" class=\"nav-link\">User List</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_user_profile') }}\" class=\"nav-link\">Account</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_calendar_index') }}\" class=\"nav-link\">Calendar</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('home') }}\" class=\"nav-link\">Home</a></li>
                        {% else %}
                            <li class=\"nav-item\"><a href=\"{{ path('app_coach_add') }}\" class=\"nav-link\">Add Coach</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_user_profile') }}\" class=\"nav-link\">Account</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_calendar_index') }}\" class=\"nav-link\">Calendar</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('home') }}\" class=\"nav-link\">Home</a></li>
                        {% endif %}
                        <li class=\"nav-item\"><a href=\"{{ path('app_logout') }}\" class=\"nav-link\">Déconnexion</a></li>
                    {% else %}
                        <li class=\"nav-item\"><a href=\"{{ path('home') }}\" class=\"nav-link\">Home</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_login') }}\" class=\"nav-link\">Connexion</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('register') }}\" class=\"nav-link\">S'inscrire</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_contact') }}\" class=\"nav-link\">Contact</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_about') }}\" class=\"nav-link\">À propos</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('home') }}#contact-section\" class=\"nav-link\">Contact</a></li>

                    {% endif %}
                </ul>
            </div>
        </div>
    </header>

    <div class=\"content\">
        {% block body %}{% endblock %}
    </div>

    <footer class=\"bg-dark text-white text-center fixed-bottom py-3 wh-100\">
        <div>Jassem Yamina Mhemmed - Teu-Up University 2024-2025</div>
    </footer>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\"></script>

<script>
    document.querySelector(\".collapsible\").addEventListener(\"click\", function() {
        const content = this.nextElementSibling;
        content.style.display = content.style.display === \"block\" ? \"none\" : \"block\";
    });
</script>

</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\base.html.twig");
    }
}
