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

/* users/edit.html.twig */
class __TwigTemplate_84da50dc8ba1d4e1773768b1cad3c084 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/edit.html.twig", 1);
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

        yield "Edit Users";
        
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
        .edit-user-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }

        .edit-user-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 26px;
            color: #333;
        }

        .form-container {
            width: 48%;
        }

        .form-container label {
            font-weight: bold;
            color: #333;
        }

        .form-container input {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        .form-container button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .actions a {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            text-align: center;
        }

        .actions a:hover {
            background-color: #0056b3;
        }

        .actions a.delete {
            background-color: #dc3545;
        }

        .actions a.delete:hover {
            background-color: #c82333;
        }
        #password_warning {
            color: orange;
            display: none;
        }

        #old_password_error {
            color: red;
            display: none;
        }
    </style>
    <div class=\"edit-user-container\">
        <!-- Flash messages for errors -->
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "session", [], "any", false, false, false, 96), "flashbag", [], "any", false, false, false, 96), "get", ["error"], "method", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 97
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "
        <!-- Left side: Change Password Form -->
        <div class=\"form-container\">
            <h1>Change Password</h1>

            <form method=\"POST\" action=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
        yield "\">
                <label for=\"old_password\">Old Password</label>
                <input type=\"password\" id=\"old_password\" name=\"old_password\" required>

                <div id=\"old_password_error\" style=\"color: red; display: none;\">The old password is incorrect.</div>

                <label for=\"new_password\">New Password</label>
                <input type=\"password\" id=\"new_password\" name=\"password\" required>

                <label for=\"repeat_new_password\">Repeat New Password</label>
                <input type=\"password\" id=\"repeat_new_password\" name=\"repeat_new_password\" required>

                <div id=\"password_warning\" style=\"color: orange; display: none;\">
                    Passwords do not match or are weak!
                </div>

                <button type=\"submit\" name=\"chnagePassword\" id=\"chnagePassword\">Update Password</button>
            </form>
        </div>

        <!-- Right side: User Info Form -->
        <div class=\"form-container\">
            <h1>Edit User</h1>

            ";
        // line 130
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), 'form_start');
        yield "
            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "email", [], "any", false, false, false, 131), 'row');
        yield "
            ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "name", [], "any", false, false, false, 132), 'row');
        yield "
            <div hidden=\"hidden\">
            ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "password", [], "any", false, false, false, 134), 'row');
        yield "
            ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "roles", [], "any", false, false, false, 135), 'row');
        yield "
            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "updatedAt", [], "any", false, false, false, 136), 'row');
        yield "
            </div>
            <button type=\"submit\" name=\"update_details\" id=\"update_details\">Update</button>
            ";
        // line 139
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'form_end');
        yield "

            <div class=\"date-info\">
                <p>Created At: ";
        // line 142
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 142, $this->source); })()), "createdAt", [], "any", false, false, false, 142)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 142, $this->source); })()), "createdAt", [], "any", false, false, false, 142), "Y-m-d H:i:s"), "html", null, true)) : (yield "N/A"));
        yield "</p>
                <p>Last Updated: ";
        // line 143
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "updatedAt", [], "any", false, false, false, 143)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "updatedAt", [], "any", false, false, false, 143), "Y-m-d H:i:s"), "html", null, true)) : (yield "N/A"));
        yield "</p>
            </div>
        </div>

    </div>

    <div class=\"actions\">
        <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        yield "\">Back to list</a>
        <a href=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)]), "html", null, true);
        yield "\" class=\"delete\">Delete</a>
    </div>

    <script>
        document.getElementById('new_password').addEventListener('input', validatePassword);
        document.getElementById('repeat_new_password').addEventListener('input', validatePassword);
        document.getElementById('old_password').addEventListener('input', validateOldPassword);

        function validatePassword() {
            const newPassword = document.getElementById('new_password').value;
            const repeatPassword = document.getElementById('repeat_new_password').value;

            const passwordWarning = document.getElementById('password_warning');
            if (newPassword !== repeatPassword || newPassword.length < 6) {
                passwordWarning.style.display = 'block';
            } else {
                passwordWarning.style.display = 'none';
            }
        }

        function validateOldPassword() {
            const oldPassword = document.getElementById('old_password').value;
            const oldPasswordError = document.getElementById('old_password_error');

            if (oldPassword) {
                oldPasswordError.style.display = 'none'; // Hide error initially

                // Ajax call to verify the old password
                fetch('";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_verify_old_password", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179)]), "html", null, true);
        yield "', {
                    method: 'POST',
                    body: JSON.stringify({ old_password: oldPassword }),
                    headers: { 'Content-Type': 'application/json' }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (!data.valid) {
                            oldPasswordError.style.display = 'block';
                        }
                    });
            }
        }
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
        return "users/edit.html.twig";
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
        return array (  324 => 179,  293 => 151,  289 => 150,  279 => 143,  275 => 142,  269 => 139,  263 => 136,  259 => 135,  255 => 134,  250 => 132,  246 => 131,  242 => 130,  215 => 106,  208 => 101,  199 => 98,  196 => 97,  192 => 96,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Users{% endblock %}

{% block body %}
    <style>
        .edit-user-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }

        .edit-user-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 26px;
            color: #333;
        }

        .form-container {
            width: 48%;
        }

        .form-container label {
            font-weight: bold;
            color: #333;
        }

        .form-container input {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        .form-container button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .actions a {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            text-align: center;
        }

        .actions a:hover {
            background-color: #0056b3;
        }

        .actions a.delete {
            background-color: #dc3545;
        }

        .actions a.delete:hover {
            background-color: #c82333;
        }
        #password_warning {
            color: orange;
            display: none;
        }

        #old_password_error {
            color: red;
            display: none;
        }
    </style>
    <div class=\"edit-user-container\">
        <!-- Flash messages for errors -->
        {% for message in app.session.flashbag.get('error') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}

        <!-- Left side: Change Password Form -->
        <div class=\"form-container\">
            <h1>Change Password</h1>

            <form method=\"POST\" action=\"{{ path('app_users_edit', {'id': user.id}) }}\">
                <label for=\"old_password\">Old Password</label>
                <input type=\"password\" id=\"old_password\" name=\"old_password\" required>

                <div id=\"old_password_error\" style=\"color: red; display: none;\">The old password is incorrect.</div>

                <label for=\"new_password\">New Password</label>
                <input type=\"password\" id=\"new_password\" name=\"password\" required>

                <label for=\"repeat_new_password\">Repeat New Password</label>
                <input type=\"password\" id=\"repeat_new_password\" name=\"repeat_new_password\" required>

                <div id=\"password_warning\" style=\"color: orange; display: none;\">
                    Passwords do not match or are weak!
                </div>

                <button type=\"submit\" name=\"chnagePassword\" id=\"chnagePassword\">Update Password</button>
            </form>
        </div>

        <!-- Right side: User Info Form -->
        <div class=\"form-container\">
            <h1>Edit User</h1>

            {{ form_start(form) }}
            {{ form_row(form.email) }}
            {{ form_row(form.name) }}
            <div hidden=\"hidden\">
            {{ form_row(form.password) }}
            {{ form_row(form.roles) }}
            {{ form_row(form.updatedAt) }}
            </div>
            <button type=\"submit\" name=\"update_details\" id=\"update_details\">Update</button>
            {{ form_end(form) }}

            <div class=\"date-info\">
                <p>Created At: {{ user.createdAt ? user.createdAt|date(\"Y-m-d H:i:s\") : 'N/A' }}</p>
                <p>Last Updated: {{ user.updatedAt ? user.updatedAt|date(\"Y-m-d H:i:s\") : 'N/A' }}</p>
            </div>
        </div>

    </div>

    <div class=\"actions\">
        <a href=\"{{ path('app_users_index') }}\">Back to list</a>
        <a href=\"{{ path('app_users_delete', {'id': user.id}) }}\" class=\"delete\">Delete</a>
    </div>

    <script>
        document.getElementById('new_password').addEventListener('input', validatePassword);
        document.getElementById('repeat_new_password').addEventListener('input', validatePassword);
        document.getElementById('old_password').addEventListener('input', validateOldPassword);

        function validatePassword() {
            const newPassword = document.getElementById('new_password').value;
            const repeatPassword = document.getElementById('repeat_new_password').value;

            const passwordWarning = document.getElementById('password_warning');
            if (newPassword !== repeatPassword || newPassword.length < 6) {
                passwordWarning.style.display = 'block';
            } else {
                passwordWarning.style.display = 'none';
            }
        }

        function validateOldPassword() {
            const oldPassword = document.getElementById('old_password').value;
            const oldPasswordError = document.getElementById('old_password_error');

            if (oldPassword) {
                oldPasswordError.style.display = 'none'; // Hide error initially

                // Ajax call to verify the old password
                fetch('{{ path('app_users_verify_old_password', {'id': user.id}) }}', {
                    method: 'POST',
                    body: JSON.stringify({ old_password: oldPassword }),
                    headers: { 'Content-Type': 'application/json' }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (!data.valid) {
                            oldPasswordError.style.display = 'block';
                        }
                    });
            }
        }
    </script>
{% endblock %}
", "users/edit.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\users\\edit.html.twig");
    }
}
