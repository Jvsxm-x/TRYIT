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

/* temp/adherant/new.html.twig */
class __TwigTemplate_72e94a20e08b1cd048305b29629422b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/adherant/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/adherant/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Ajouter Adherant</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("add_adherant.css"), "html", null, true);
        yield "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"container\">
    <div class=\"title\">Nouveau Adherant</div>
    <div class=\"content\">
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
        <div class=\"user-details\">
            <div class=\"input-box\">
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'label', ["label" => "Nom"]);
        yield "
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'widget');
        yield "
            </div>
            <div class=\"input-box\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'label', ["label" => "Prenom"]);
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), 'widget');
        yield "
            </div>
            <div class=\"input-box\">
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "cin", [], "any", false, false, false, 24), 'label', ["label" => "CIN"]);
        yield "
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "cin", [], "any", false, false, false, 25), 'widget');
        yield "
            </div>
            <div class=\"input-box\">
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "date_naissance", [], "any", false, false, false, 28), 'label', ["label" => "Date de naissance"]);
        yield "
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "date_naissance", [], "any", false, false, false, 29), 'widget');
        yield "
            </div>
            <div class=\"input-box\">
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'label', ["label" => "Email"]);
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget');
        yield "
            </div>
            <div class=\"input-box\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "password", [], "any", false, false, false, 36), 'label', ["label" => "Password"]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'widget');
        yield "
            </div>

        </div>
        <div class=\"input-box-gender\">
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "gender", [], "any", false, false, false, 42), 'label', ["label" => "Gender"]);
        yield "
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "gender", [], "any", false, false, false, 43), 'widget');
        yield "
        </div>

        <div class=\"button\">
            <input type=\"submit\" value=\"Register\">
        </div>
        ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
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
        return "temp/adherant/new.html.twig";
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
        return array (  146 => 49,  137 => 43,  133 => 42,  125 => 37,  121 => 36,  115 => 33,  111 => 32,  105 => 29,  101 => 28,  95 => 25,  91 => 24,  85 => 21,  81 => 20,  75 => 17,  71 => 16,  65 => 13,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Ajouter Adherant</title>
    <link rel=\"stylesheet\" href=\"{{ asset(\"add_adherant.css\") }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"container\">
    <div class=\"title\">Nouveau Adherant</div>
    <div class=\"content\">
        {{ form_start(form) }}
        <div class=\"user-details\">
            <div class=\"input-box\">
                {{ form_label(form.nom, 'Nom') }}
                {{ form_widget(form.nom) }}
            </div>
            <div class=\"input-box\">
                {{ form_label(form.prenom, 'Prenom') }}
                {{ form_widget(form.prenom) }}
            </div>
            <div class=\"input-box\">
                {{ form_label(form.cin, 'CIN') }}
                {{ form_widget(form.cin) }}
            </div>
            <div class=\"input-box\">
                {{ form_label(form.date_naissance, 'Date de naissance') }}
                {{ form_widget(form.date_naissance) }}
            </div>
            <div class=\"input-box\">
                {{ form_label(form.email, 'Email') }}
                {{ form_widget(form.email) }}
            </div>
            <div class=\"input-box\">
                {{ form_label(form.password, 'Password') }}
                {{ form_widget(form.password) }}
            </div>

        </div>
        <div class=\"input-box-gender\">
            {{ form_label(form.gender, 'Gender') }}
            {{ form_widget(form.gender) }}
        </div>

        <div class=\"button\">
            <input type=\"submit\" value=\"Register\">
        </div>
        {{ form_end(form) }}
    </div>
</div>
</body>
</html>
", "temp/adherant/new.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\temp\\adherant\\new.html.twig");
    }
}
