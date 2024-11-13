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

/* users/show.html.twig */
class __TwigTemplate_5a89190720b07f880a26294c914dca02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/show.html.twig", 1);
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

        yield "User Details";
        
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
        yield "    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        .sidebar {
            width: 450px;
            padding: 20px;
            background-color: #f1f1f1;
            border-right: 1px solid #ddd;
            margin-right: 20px;
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            flex-direction: column;

        }

        .sidebar h2 {
            font-size: 20px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .sidebar .imc-record {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            width: 50px;
        }

        .user-card {
            max-width: 400px;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: Arial, sans-serif;
            position: relative;
            overflow: hidden;
        }

        .user-card::before {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background-color: #007bff;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .user-card .profile-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #fff;
            border: 4px solid #007bff;
            position: relative;
            margin-top: -50px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            color: #007bff;
        }

        .user-card h1 {
            margin: 20px 0 10px;
            font-size: 24px;
            color: #333;
        }

        .user-card .user-info {
            text-align: left;
            margin-top: 20px;
        }

        .user-card .actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .user-card .actions a {
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            transition: background-color 0.3s ease;
        }

        .user-card .actions a:hover {
            background-color: #0056b3;
        }

        .user-card .actions a.delete {
            background-color: #dc3545;
        }

        .user-card .actions a.delete:hover {
            background-color: #c82333;
        }
    </style>

    <div class=\"container\">
        <!-- Sidebar for IMC records -->
        <aside class=\"sidebar\">
            <h2>IMC Records</h2>
            <hr>
            <hr>
            <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imc_new");
        yield "\" class=\"btn btn-primary\">add new imc</a>
<hr>
            <hr>
            ";
        // line 131
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["imcRecords"]) || array_key_exists("imcRecords", $context) ? $context["imcRecords"] : (function () { throw new RuntimeError('Variable "imcRecords" does not exist.', 131, $this->source); })())) == 1)) {
            // line 132
            yield "                ";
            // line 133
            yield "                ";
            $context["imc"] = (isset($context["imcRecords"]) || array_key_exists("imcRecords", $context) ? $context["imcRecords"] : (function () { throw new RuntimeError('Variable "imcRecords" does not exist.', 133, $this->source); })());
            // line 134
            yield "                <p><strong>IMC:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 134, $this->source); })()), "imc", [], "any", false, false, false, 134), "html", null, true);
            yield "</p>
                <p><strong>Calories for Weight Gain:</strong> ";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 135, $this->source); })()), "caloriesForWeightGain", [], "any", false, false, false, 135), "html", null, true);
            yield "</p>
                <p><strong>Meal Details:</strong> ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 136, $this->source); })()), "mealDetails", [], "any", false, false, false, 136), "html", null, true);
            yield "</p>
                <a href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imc_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Edit</a>
                <form method=\"post\" action=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imc_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139))), "html", null, true);
            yield "\">
                    <button class=\"btn btn-danger\">Delete</button>
                </form>
                <hr>
            ";
        } else {
            // line 144
            yield "                ";
            // line 145
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["imcRecords"]) || array_key_exists("imcRecords", $context) ? $context["imcRecords"] : (function () { throw new RuntimeError('Variable "imcRecords" does not exist.', 145, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["imc"]) {
                // line 146
                yield "                    <p><strong>IMC:</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "imc", [], "any", false, false, false, 146), "html", null, true);
                yield "</p>
                    <p><strong>Calories for Weight Gain:</strong> ";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "caloriesForWeightGain", [], "any", false, false, false, 147), "html", null, true);
                yield "</p>
                    <p><strong>Meal Details:</strong> ";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "mealDetails", [], "any", false, false, false, 148), "html", null, true);
                yield "</p>
                    <a href=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imc_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Edit</a>
                    <form method=\"post\" action=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imc_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["imc"], "id", [], "any", false, false, false, 151))), "html", null, true);
                yield "\">
                        <button class=\"btn btn-danger\">Delete</button>
                    </form>
                    <hr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['imc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            yield "            ";
        }
        // line 157
        yield "        </aside>

        <!-- User Card -->
        <div class=\"user-card\">
            <div class=\"profile-photo\">
                <i class=\"fas fa-user\"></i>

            </div>
            <hr><hr>
            <h1>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 166, $this->source); })()), "name", [], "any", false, false, false, 166), "html", null, true);
        yield "</h1>
            <hr>
            <div class=\"user-info\">
                <table>
                    <tbody>
                    <tr >
                        <th>Email</th>
                        <td>";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 173, $this->source); })()), "email", [], "any", false, false, false, 173), "html", null, true);
        yield "</td>
                    </tr>

                    <tr>
                        <th>Roles</th>
                        <td>
                            ";
        // line 179
        if (CoreExtension::inFilter("ROLE_ADHERANT", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "roles", [], "any", false, false, false, 179))) {
            // line 180
            yield "                                Adherant
                            ";
        } elseif (CoreExtension::inFilter("ROLE_COACH", CoreExtension::getAttribute($this->env, $this->source,         // line 181
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 181, $this->source); })()), "roles", [], "any", false, false, false, 181))) {
            // line 182
            yield "                                Coach
                            ";
        } elseif (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source,         // line 183
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()), "roles", [], "any", false, false, false, 183))) {
            // line 184
            yield "                                Administrator
                            ";
        } else {
            // line 186
            yield "                                ";
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "roles", [], "any", false, false, false, 186)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "roles", [], "any", false, false, false, 186)), "html", null, true)) : (yield ""));
            yield "
                            ";
        }
        // line 188
        yield "                        </td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>";
        // line 192
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "createdAt", [], "any", false, false, false, 192)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "createdAt", [], "any", false, false, false, 192), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>";
        // line 196
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "updatedAt", [], "any", false, false, false, 196)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "updatedAt", [], "any", false, false, false, 196), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class=\"actions\">
                <a href=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 203, $this->source); })()), "id", [], "any", false, false, false, 203)]), "html", null, true);
        yield "\">Edit</a>
            </div>
        </div>
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
        return "users/show.html.twig";
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
        return array (  383 => 203,  373 => 196,  366 => 192,  360 => 188,  354 => 186,  350 => 184,  348 => 183,  345 => 182,  343 => 181,  340 => 180,  338 => 179,  329 => 173,  319 => 166,  308 => 157,  305 => 156,  294 => 151,  290 => 150,  286 => 149,  282 => 148,  278 => 147,  273 => 146,  268 => 145,  266 => 144,  258 => 139,  254 => 138,  250 => 137,  246 => 136,  242 => 135,  237 => 134,  234 => 133,  232 => 132,  230 => 131,  224 => 128,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Details{% endblock %}

{% block body %}
    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        .sidebar {
            width: 450px;
            padding: 20px;
            background-color: #f1f1f1;
            border-right: 1px solid #ddd;
            margin-right: 20px;
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            flex-direction: column;

        }

        .sidebar h2 {
            font-size: 20px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .sidebar .imc-record {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            width: 50px;
        }

        .user-card {
            max-width: 400px;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: Arial, sans-serif;
            position: relative;
            overflow: hidden;
        }

        .user-card::before {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background-color: #007bff;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .user-card .profile-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #fff;
            border: 4px solid #007bff;
            position: relative;
            margin-top: -50px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            color: #007bff;
        }

        .user-card h1 {
            margin: 20px 0 10px;
            font-size: 24px;
            color: #333;
        }

        .user-card .user-info {
            text-align: left;
            margin-top: 20px;
        }

        .user-card .actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .user-card .actions a {
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            transition: background-color 0.3s ease;
        }

        .user-card .actions a:hover {
            background-color: #0056b3;
        }

        .user-card .actions a.delete {
            background-color: #dc3545;
        }

        .user-card .actions a.delete:hover {
            background-color: #c82333;
        }
    </style>

    <div class=\"container\">
        <!-- Sidebar for IMC records -->
        <aside class=\"sidebar\">
            <h2>IMC Records</h2>
            <hr>
            <hr>
            <a href=\"{{ path('imc_new') }}\" class=\"btn btn-primary\">add new imc</a>
<hr>
            <hr>
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
        </aside>

        <!-- User Card -->
        <div class=\"user-card\">
            <div class=\"profile-photo\">
                <i class=\"fas fa-user\"></i>

            </div>
            <hr><hr>
            <h1>{{ user.name }}</h1>
            <hr>
            <div class=\"user-info\">
                <table>
                    <tbody>
                    <tr >
                        <th>Email</th>
                        <td>{{ user.email }}</td>
                    </tr>

                    <tr>
                        <th>Roles</th>
                        <td>
                            {% if 'ROLE_ADHERANT' in user.roles %}
                                Adherant
                            {% elseif 'ROLE_COACH' in user.roles %}
                                Coach
                            {% elseif 'ROLE_ADMIN' in user.roles %}
                                Administrator
                            {% else %}
                                {{ user.roles ? user.roles|json_encode : '' }}
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ user.createdAt ? user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ user.updatedAt ? user.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class=\"actions\">
                <a href=\"{{ path('app_users_edit', {'id': user.id}) }}\">Edit</a>
            </div>
        </div>
    </div>
{% endblock %}
", "users/show.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\users\\show.html.twig");
    }
}
