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

/* temp/Dashboard/userdashboard.html.twig */
class __TwigTemplate_54731e4f933273bfdf6208e50ca76e2a extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/Dashboard/userdashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/Dashboard/userdashboard.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link
            href=\"https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css\"
            rel=\"stylesheet\"
    />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.css"), "html", null, true);
        yield "\">
    <title>Profile ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "prenom", [], "any", false, false, false, 12), "html", null, true);
        yield "</title>
</head>
<body>
<nav>
    <div class=\"nav__logo\">
        <a href=\"#\"><img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"logo\" /></a>
    </div>
    <ul class=\"nav__links\">
        <li class=\"link\"><a href=\"#\">Home</a></li>
        <li class=\"link\"><a href=\"#\">Program</a></li>
        <li class=\"link\"><a href=\"#\">Service</a></li>
        <li class=\"link\"><a href=\"#\">About</a></li>
        <li class=\"link\"><a href=\"#\">Community</a></li>
    </ul>

    ";
        // line 27
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
            <button class=\"btn\">Customer Area</button>
        </a>
    ";
        } else {
            // line 32
            yield "        ";
            // line 33
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
            <button class=\"btn\">Logout</button>
        </a>
    ";
        }
        // line 37
        yield "</nav>
<div class=\"container\">
    <div class=\"user-card\">
        <h1>Profil coach</h1>

        ";
        // line 43
        yield "        <div class=\"user-info\">
            <div class=\"info-item\">
                <span class=\"info-label\">Nom:</span>
                <span class=\"info-value\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
        yield "</span>
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Prénom:</span>
                <span class=\"info-value\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Date de naissance:</span>
                <span class=\"info-value\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "dateNaissance", [], "any", false, false, false, 54), "Y-m-d"), "html", null, true);
        yield "</span>
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Email:</span>
                <span class=\"info-value\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "email", [], "any", false, false, false, 58), "html", null, true);
        yield "</span>
            </div>
            ";
        // line 61
        yield "        </div>
    </div>
</div>


";
        // line 67
        yield "<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "temp/Dashboard/userdashboard.html.twig";
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
        return array (  150 => 67,  143 => 61,  138 => 58,  131 => 54,  124 => 50,  117 => 46,  112 => 43,  105 => 37,  97 => 33,  95 => 32,  87 => 28,  85 => 27,  72 => 17,  64 => 12,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link
            href=\"https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css\"
            rel=\"stylesheet\"
    />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"index.css\") }}\">
    <title>Profile {{ app.user.prenom }}</title>
</head>
<body>
<nav>
    <div class=\"nav__logo\">
        <a href=\"#\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"logo\" /></a>
    </div>
    <ul class=\"nav__links\">
        <li class=\"link\"><a href=\"#\">Home</a></li>
        <li class=\"link\"><a href=\"#\">Program</a></li>
        <li class=\"link\"><a href=\"#\">Service</a></li>
        <li class=\"link\"><a href=\"#\">About</a></li>
        <li class=\"link\"><a href=\"#\">Community</a></li>
    </ul>

    {% if not app.user %}
        <a href=\"{{ path('app_login') }}\">
            <button class=\"btn\">Customer Area</button>
        </a>
    {% else %}
        {# Display the logout button if the user is logged in #}
        <a href=\"{{ path('app_logout') }}\">
            <button class=\"btn\">Logout</button>
        </a>
    {% endif %}
</nav>
<div class=\"container\">
    <div class=\"user-card\">
        <h1>Profil coach</h1>

        {# Affichage des informations de l'utilisateur #}
        <div class=\"user-info\">
            <div class=\"info-item\">
                <span class=\"info-label\">Nom:</span>
                <span class=\"info-value\">{{ app.user.nom }}</span>
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Prénom:</span>
                <span class=\"info-value\">{{ app.user.prenom }}</span>
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Date de naissance:</span>
                <span class=\"info-value\">{{ app.user.dateNaissance|date('Y-m-d') }}</span>
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Email:</span>
                <span class=\"info-value\">{{ app.user.email }}</span>
            </div>
            {# Add more information items as needed #}
        </div>
    </div>
</div>


{# Include Bootstrap JS and Popper.js (if needed) #}
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</body>
</html>
", "temp/Dashboard/userdashboard.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\temp\\Dashboard\\userdashboard.html.twig");
    }
}
