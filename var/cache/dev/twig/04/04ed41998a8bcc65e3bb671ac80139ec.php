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

/* home/index.html.twig */
class __TwigTemplate_08c0c235064c863ff1a4e435bb97ad0f extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Stamina &mdash; Free Website Template by Free-Template.co";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/ftco-32x32.png"), "html", null, true);
        yield "\">

    ";
        // line 9
        yield "    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,700,900\" rel=\"stylesheet\">

    ";
        // line 12
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/icomoon/style.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery-ui.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.theme.default.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery.fancybox.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-datepicker.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/flaticon/font/flaticon.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/aos.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery.mb.YTPlayer.min.css"), "html", null, true);
        yield "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

    <style>
        /* Style for the navigation bar */
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar ul li {
            display: inline;
        }

        .navbar ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar ul li a:hover {
            background-color: #575757;
        }

        /* Add some space at the top to avoid the fixed navbar overlapping content */
        .content {
            padding-top: 60px;
        }

        /* Style for the page content */
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
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

        // line 79
        yield "

    <!-- Content section -->
    <div  data-spy=\"scroll\" data-target=\".site-navbar-target\" data-offset=\"300\">

        <div class=\"site-wrap\">

            <div class=\"site-mobile-menu site-navbar-target\">
                <div class=\"site-mobile-menu-header\">
                    <div class=\"site-mobile-menu-close mt-3\">
                        <span class=\"icon-close2 js-menu-toggle\"></span>
                    </div>
                </div>
                <div class=\"site-mobile-menu-body\"></div>
            </div>


            <header class=\"site-navbar py-4 js-sticky-header site-navbar-target\" role=\"banner\">


            </header>

            <a id=\"bgndVideo\" class=\"player\"
               data-property=\"{videoURL:'https://www.youtube.com/watch?v=w-cRWOjlk8c',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:255, stopAt: 271, opacity:1}\">
            </a>

            <div class=\"intro-section\" id=\"home-section\" style=\"background-color: #ccc;\">
                <div class=\"container\">

                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-12 mx-auto text-center\" data-aos=\"fade-up\">
                            <h1 class=\"mb-3\">We Believe Little Things Matter</h1>
                            <p class=\"lead mx-auto desc mb-5\">For tek-up students <a href=\"https://tek-up.de\" target=\"_blank\">tek-up link</a></p>
                            <p class=\"text-center\">
                                <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        yield "\" class=\"btn btn-outline-white py-3 px-5\">Get Started</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"schedule-wrap\">



                <div class=\"d-md-flex align-items-center\">
                    <div class=\"hours mr-md-4 mb-4 mb-lg-0\">
                        <strong class=\"d-block\">Hours</strong>
                        Opening: 7:30am &mdash;
                        Closing: 9:00pm
                    </div>
                    <div class=\"cta ml-auto\">
                        <a href=\"#contact-section\" class=\"smoothscroll d-flex d-md-flex align-items-center btn\">
                            <span class=\"mx-auto\">  <span>Contact us</span> <span class=\"arrow icon-keyboard_arrow_right\"></span></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"site-section\">
                <div class=\"container\">

                    <div class=\"row justify-content-center text-center mb-5\">
                        <div class=\"col-md-8 section-heading\">
                            <span class=\"subheading\">Achieve Your Best Self</span>
                            <h2 class=\"heading mb-3\">Transform Your Body</h2>
                            <p>At TRYIT Gym, we provide a state-of-the-art 2500 m² facility with both indoor and outdoor spaces designed for optimal fitness. Our gym is equipped with the latest Reebok machines and cutting-edge technology to enhance your workout experience.

                                Whether you're looking to build strength, lose weight, or improve your overall health, our expert trainers and world-class equipment will guide you toward your fitness goals.</p>
                        </div>
                    </div>


                    <!-- Slider -->
                    <div class=\"owl-carousel nonloop-block-14 block-14\" data-aos=\"fade\">
                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-fit\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Get Strong</h2>
                                    <p>Achieve your strength goals with targeted workouts and expert guidance. Our gym is equipped to help you build muscle and increase endurance.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-gym-1\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Join Our Gym</h2>
                                    <p>Experience a space designed for fitness enthusiasts of all levels. Become part of a community committed to achieving fitness goals together.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-gym\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Bodybuilding</h2>
                                    <p>Transform your body with customized bodybuilding programs. Our gym offers advanced equipment to support your muscle growth and fitness journey.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-vegetables\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Fuel Your Body</h2>
                                    <p>Nutrition is key to success in fitness. We offer advice on healthy eating to support your workouts and help you reach your fitness goals faster.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-fruit-juice\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Post-Workout Recovery</h2>
                                    <p>Our selection of fruit juices and recovery drinks will help restore energy and boost your body after an intense workout session.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-stationary-bike\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Warm Up & Stretch</h2>
                                    <p>Proper warm-up and stretching routines are essential for preventing injury and improving performance. We offer guided sessions to get you ready for any workout.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class=\"bgimg\" style=\"background-image: url('";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_2.jpg"), "html", null, true);
        yield "');\"  data-stellar-background-ratio=\"0.5\">

                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center text-center\">
                        <div class=\"col-md-7\">
                            <h2 class=\"\">Get The Result You Want</h2>
                            <p class=\"lead mx-auto desc mb-5\">
                                Achieve your fitness goals with dedication, the right guidance, and our state-of-the-art equipment.
                                Join us today and start your transformation.
                                <a href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" target=\"_self\">Visit our homepage</a>
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <div class=\"site-section\" id=\"classes-section\">
                <div class=\"container\">
                    <div class=\"row justify-content-center text-center mb-5\">
                        <div class=\"col-md-8 section-heading\">
                            <span class=\"subheading\">Fitness Machines </span>
                            <h2 class=\"heading mb-3\">Machines</h2>
                            <p>
                                Our fitness center is equipped with state-of-the-art machines designed to meet a wide range of training needs. From cardiovascular equipment to strength training, each machine offers a unique way to help you reach your fitness goals. Our collection includes everything from treadmills and rowing machines to specialized weightlifting equipment. Explore our machines to find the perfect match for your workout and enjoy a safe, effective, and enjoyable fitness experience tailored to all fitness levels.
                            </p>

                        </div>
                    </div>
                    <div class=\"row\">
                        ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["machines"]) || array_key_exists("machines", $context) ? $context["machines"] : (function () { throw new RuntimeError('Variable "machines" does not exist.', 251, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 252
            yield "                            <div class=\"col-lg-6\">
                                <div class=\"class-item d-flex align-items-center\">
                                    <a href=\"";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("machine_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 254)]), "html", null, true);
            yield "\" class=\"class-item-thumbnail\">
                                        <img src=\"";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["machine"], "image", [], "any", false, false, false, 255)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["machine"], "name", [], "any", false, false, false, 255), "html", null, true);
            yield "\">
                                    </a>
                                    <div class=\"class-item-text\">
                                        <h2><a href=\"";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("machine_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 258)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["machine"], "name", [], "any", false, false, false, 258), "html", null, true);
            yield "</a></h2>
                                        <p>";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["machine"], "description", [], "any", false, false, false, 259), "html", null, true);
            yield "</p>
                                        <span>Number of Machines: ";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["machine"], "nbrMachines", [], "any", false, false, false, 260), "html", null, true);
            yield "</span>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['machine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        yield "                    </div>
                </div>
            </div>

            <div class=\"bgimg\" style=\"background-image: url('";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_3.jpg"), "html", null, true);
        yield "');\" data-stellar-background-ratio=\"0.5\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center text-center\">
                        <div class=\"col-md-7\">
                            <h2 class=\"\">Every Step Counts</h2>
                            <p class=\"lead mx-auto desc mb-5\">
                                At TRYIT Gym, every step you take brings you closer to your fitness goals. Our community is growing, and we are proud to
                                have:
                            </p>
                            <ul>
                                <li><strong>";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 279, $this->source); })()), "html", null, true);
        yield "</strong> Users dedicated to their health.</li>
                                <li><strong>";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCoaches"]) || array_key_exists("totalCoaches", $context) ? $context["totalCoaches"] : (function () { throw new RuntimeError('Variable "totalCoaches" does not exist.', 280, $this->source); })()), "html", null, true);
        yield "</strong> Coaches guiding you every step of the way.</li>
                                <li><strong>";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMachines"]) || array_key_exists("totalMachines", $context) ? $context["totalMachines"] : (function () { throw new RuntimeError('Variable "totalMachines" does not exist.', 281, $this->source); })()), "html", null, true);
        yield "</strong> Machines ready to help you achieve your best shape.</li>
                                <li><strong>";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalManagers"]) || array_key_exists("totalManagers", $context) ? $context["totalManagers"] : (function () { throw new RuntimeError('Variable "totalManagers" does not exist.', 282, $this->source); })()), "html", null, true);
        yield "</strong> Administrators managing everything to ensure smooth operations.</li>
                            </ul>
                            <p class=\"mb-5\">
                                Join us and be part of a growing fitness family committed to success and health!
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"site-section\" id=\"schedule-section\">
                <div class=\"container\">
                    <div class=\"row justify-content-center text-center mb-5\">
                        <div class=\"col-md-8 section-heading\">
                            <span class=\"subheading\">Planning Team Training</span>
                            <h2 class=\"heading mb-3\">Weekly Schedule</h2>
                            <p>Your weekly schedule for various fitness classes, training sessions, and specialized workouts.</p>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <ul class=\"nav days d-flex\" role=\"tablist\">
                                ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]);
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 307
            yield "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link ";
            // line 308
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 308)) ? ("active") : (""));
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["day"]), "html", null, true);
            yield "-tab\" data-toggle=\"tab\" href=\"#nav-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["day"]), "html", null, true);
            yield "\" role=\"tab\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "</a>
                                    </li>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        yield "                            </ul>
                        </div>
                    </div>

                    <div class=\"tab-content\">
                        ";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]);
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 317
            yield "                            <div class=\"tab-pane fade ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 317)) ? ("show active") : (""));
            yield "\" id=\"nav-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["day"]), "html", null, true);
            yield "\" role=\"tabpanel\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        ";
            // line 320
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 320, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 321
                yield "                                            ";
                if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "date", [], "any", false, false, false, 321), "l") == $context["day"])) {
                    // line 322
                    yield "                                                <div class=\"class-item d-flex align-items-center\">
                                                    <span>";
                    // line 323
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 323), "H:i"), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "salle", [], "any", false, false, false, 323), "html", null, true);
                    yield "</span>
                                                    <h2>";
                    // line 324
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "coach", [], "any", false, false, false, 324), "specialty", [], "any", false, false, false, 324), "html", null, true);
                    yield "</h2>
                                                    <span>Coach: ";
                    // line 325
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "coach", [], "any", false, false, false, 325), "name", [], "any", false, false, false, 325), "html", null, true);
                    yield "</span>
                                                </div>
                                            ";
                }
                // line 328
                yield "                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 329
                yield "                                            <p>No classes scheduled for ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
                yield ".</p>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['schedule'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 335
        yield "                    </div>
                </div>
            </div>



            <div class=\"bgimg\" style=\"background-image: url('";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_1.jpg"), "html", null, true);
        yield "');\" data-stellar-background-ratio=\"0.5\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center text-center\">
                        <div class=\"col-md-7\">
                            <h2 class=\"\">Achieve Your Fitness Goals Anytime, Anywhere</h2>
                            <p class=\"lead mx-auto desc mb-5\">Empowering your fitness journey with personalized training and support, no matter where you are. Discover a new approach to health and wellness at <a href=\"";
        // line 346
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" target=\"_blank\">Our Fitness Hub</a>.</p>
                        </div>
                    </div>
                </div>
            </div>





            <div class=\"site-section\" id=\"trainer-section\">
                <div class=\"container\">
                    <div class=\"row justify-content-center text-center mb-5\" data-aos=\"fade-up\">
                        <div class=\"col-md-8  section-heading\">
                            <span class=\"subheading\">Trainer</span>
                            <h2 class=\"heading mb-3\">Our Trainers</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                texts.
                                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 mb-4 mb-lg-0 col-md-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"\">
                            <div class=\"person\">
                                <img src=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/person_3.jpg"), "html", null, true);
        yield "\" alt=\"Free website template by Free-Template.co\" class=\"img-fluid\">
                                <h3>Justin Daniel</h3>
                                <p class=\"position\">Trainer</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 mb-4 mb-lg-0 col-md-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"person\">
                                <img src=\"";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/person_1.jpg"), "html", null, true);
        yield "\" alt=\"Free website template by Free-Template.co\" class=\"img-fluid\">
                                <h3>Matthew Davidson</h3>
                                <p class=\"position\">Trainer</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 mb-4 mb-lg-0 col-md-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"person\">
                                <img src=\"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/person_2.jpg"), "html", null, true);
        yield "\" alt=\"Free website template by Free-Template.co\" class=\"img-fluid\">
                                <h3>Matthew Davidson</h3>
                                <p class=\"position\">Trainer</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 mb-4 mb-lg-0 col-md-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                            <div class=\"person\">
                                <img src=\"";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/person_4.jpg"), "html", null, true);
        yield "\" alt=\"Free website template by Free-Template.co\" class=\"img-fluid\">
                                <h3>Matthew Davidson</h3>
                                <p class=\"position\">Trainer</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"site-section\" id=\"services-section\">
                <div class=\"container\">
                    <div class=\"row justify-content-center text-center mb-5\" data-aos=\"fade-up\">
                        <div class=\"col-md-8 section-heading\">
                            <span class=\"subheading\">Premium Fitness Services</span>
                            <h2 class=\"heading mb-3\">Our Services</h2>
                            <p>Transform your fitness journey with our specialized programs, expert trainers, and cutting-edge facilities. From personalized training plans to nutrition guidance, we provide everything you need to reach your peak.</p>
                        </div>

                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-fit\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Stay Fit</h2>
                                    <p>Achieve peak fitness through structured training and a balanced lifestyle. We provide the tools and guidance to help you become your best self.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-gym-1\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Join Our Club</h2>
                                    <p>Be part of a community dedicated to strength and wellness. Train, grow, and reach your goals alongside like-minded fitness enthusiasts.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-gym\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Gym Fitness</h2>
                                    <p>Our gym is equipped with everything you need, from cardio machines to free weights, for a complete workout experience.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-vegetables\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Fuel Your Body</h2>
                                    <p>Nutrition is key to achieving your fitness goals. Discover the benefits of a balanced diet to support your training and recovery.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-fruit-juice\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Powerful Juices</h2>
                                    <p>Our freshly made juices are packed with essential nutrients, providing the energy you need to fuel intense workouts and recovery.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-stationary-bike\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Warm Up & Recovery</h2>
                                    <p>Prepare your body for intense training with proper warmups and cooldowns, ensuring muscle flexibility and reducing injury risk.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"site-section bg-light contact-wrap\" id=\"contact-section\">
                <div class=\"container\">

                    <div class=\"row justify-content-center text-center mb-5\">
                        <div class=\"col-md-8  section-heading\">
                            <span class=\"subheading\">Get In Touch</span>
                            <h2 class=\"heading mb-3\">Contact Us</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                texts.
                            </p>
                        </div>
                    </div>

                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-7\">
                            <form method=\"post\" data-aos=\"fade\">
                                <div class=\"form-group row\">
                                    <div class=\"col-md-6 mb-3 mb-lg-0\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"First name\">
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Last name\">
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Subject\">
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label for=\"\"></label><textarea class=\"form-control\" id=\"\" cols=\"30\" rows=\"10\"
                                                                        placeholder=\"Write your message here.\"></textarea>
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <div class=\"col-md-6\">

                                        <input type=\"submit\" class=\"btn btn-primary py-3 px-5 btn-block\" value=\"Send Message\">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"schedule-wrap2 clearfix\">
                <div class=\"d-md-flex align-items-center\">
                    <div class=\"hours mr-md-4 mb-4 mb-lg-0\">
                        <strong class=\"d-block\">Hours</strong>
                        Opening: 7:30am &mdash;
                        Closing: 9:00pm
                    </div>
                    <div class=\"cta ml-auto\">
                        <a href=\"#\" class=\"d-flex d-md-flex align-items-center btn\">
                            <span class=\"mx-auto\"> <span>Contact us</span> <span class=\"arrow icon-keyboard_arrow_right\"></span></span>
                        </a>
                    </div>
                </div>
            </div>





        </div>
    </div>

    <script src=\"https://www.youtube.com/iframe_api\"></script>
    <!-- Lien vers l'API YouTube -->
    <script src=\"https://www.youtube.com/iframe_api\"></script>

    <script src=\"";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.3.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-ui.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.stellar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.countdown.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-datepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/aos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.fancybox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.sticky.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.mb.YTPlayer.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <script>
        // Initialisation du lecteur YouTube après le chargement des scripts
        \$(document).ready(function(){
            \$(\"#bgndVideo\").YTPlayer();
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
        return "home/index.html.twig";
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
        return array (  957 => 582,  953 => 581,  949 => 580,  945 => 579,  941 => 578,  937 => 577,  933 => 576,  929 => 575,  925 => 574,  921 => 573,  917 => 572,  913 => 571,  909 => 570,  905 => 569,  901 => 568,  728 => 398,  716 => 389,  704 => 380,  692 => 371,  664 => 346,  656 => 341,  648 => 335,  631 => 331,  622 => 329,  617 => 328,  611 => 325,  607 => 324,  601 => 323,  598 => 322,  595 => 321,  590 => 320,  581 => 317,  564 => 316,  557 => 311,  534 => 308,  531 => 307,  514 => 306,  487 => 282,  483 => 281,  479 => 280,  475 => 279,  462 => 269,  456 => 265,  445 => 260,  441 => 259,  435 => 258,  427 => 255,  423 => 254,  419 => 252,  415 => 251,  390 => 229,  378 => 220,  268 => 113,  232 => 79,  219 => 78,  152 => 22,  148 => 21,  144 => 20,  140 => 19,  136 => 18,  132 => 17,  128 => 16,  124 => 15,  120 => 14,  116 => 13,  111 => 12,  107 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Stamina &mdash; Free Website Template by Free-Template.co{% endblock %}

{% block stylesheets %}
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/ftco-32x32.png') }}\">

    {# Import Google Fonts #}
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,700,900\" rel=\"stylesheet\">

    {# Import CSS files #}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/icomoon/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/jquery-ui.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/jquery.fancybox.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap-datepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/flaticon/font/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/aos.css') }}\">
    <link href=\"{{ asset('assets/css/jquery.mb.YTPlayer.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">

    <style>
        /* Style for the navigation bar */
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar ul li {
            display: inline;
        }

        .navbar ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar ul li a:hover {
            background-color: #575757;
        }

        /* Add some space at the top to avoid the fixed navbar overlapping content */
        .content {
            padding-top: 60px;
        }

        /* Style for the page content */
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>
{% endblock %}
{% block body %}


    <!-- Content section -->
    <div  data-spy=\"scroll\" data-target=\".site-navbar-target\" data-offset=\"300\">

        <div class=\"site-wrap\">

            <div class=\"site-mobile-menu site-navbar-target\">
                <div class=\"site-mobile-menu-header\">
                    <div class=\"site-mobile-menu-close mt-3\">
                        <span class=\"icon-close2 js-menu-toggle\"></span>
                    </div>
                </div>
                <div class=\"site-mobile-menu-body\"></div>
            </div>


            <header class=\"site-navbar py-4 js-sticky-header site-navbar-target\" role=\"banner\">


            </header>

            <a id=\"bgndVideo\" class=\"player\"
               data-property=\"{videoURL:'https://www.youtube.com/watch?v=w-cRWOjlk8c',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:255, stopAt: 271, opacity:1}\">
            </a>

            <div class=\"intro-section\" id=\"home-section\" style=\"background-color: #ccc;\">
                <div class=\"container\">

                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-12 mx-auto text-center\" data-aos=\"fade-up\">
                            <h1 class=\"mb-3\">We Believe Little Things Matter</h1>
                            <p class=\"lead mx-auto desc mb-5\">For tek-up students <a href=\"https://tek-up.de\" target=\"_blank\">tek-up link</a></p>
                            <p class=\"text-center\">
                                <a href=\"{{ path('register') }}\" class=\"btn btn-outline-white py-3 px-5\">Get Started</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"schedule-wrap\">



                <div class=\"d-md-flex align-items-center\">
                    <div class=\"hours mr-md-4 mb-4 mb-lg-0\">
                        <strong class=\"d-block\">Hours</strong>
                        Opening: 7:30am &mdash;
                        Closing: 9:00pm
                    </div>
                    <div class=\"cta ml-auto\">
                        <a href=\"#contact-section\" class=\"smoothscroll d-flex d-md-flex align-items-center btn\">
                            <span class=\"mx-auto\">  <span>Contact us</span> <span class=\"arrow icon-keyboard_arrow_right\"></span></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"site-section\">
                <div class=\"container\">

                    <div class=\"row justify-content-center text-center mb-5\">
                        <div class=\"col-md-8 section-heading\">
                            <span class=\"subheading\">Achieve Your Best Self</span>
                            <h2 class=\"heading mb-3\">Transform Your Body</h2>
                            <p>At TRYIT Gym, we provide a state-of-the-art 2500 m² facility with both indoor and outdoor spaces designed for optimal fitness. Our gym is equipped with the latest Reebok machines and cutting-edge technology to enhance your workout experience.

                                Whether you're looking to build strength, lose weight, or improve your overall health, our expert trainers and world-class equipment will guide you toward your fitness goals.</p>
                        </div>
                    </div>


                    <!-- Slider -->
                    <div class=\"owl-carousel nonloop-block-14 block-14\" data-aos=\"fade\">
                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-fit\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Get Strong</h2>
                                    <p>Achieve your strength goals with targeted workouts and expert guidance. Our gym is equipped to help you build muscle and increase endurance.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-gym-1\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Join Our Gym</h2>
                                    <p>Experience a space designed for fitness enthusiasts of all levels. Become part of a community committed to achieving fitness goals together.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-gym\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Bodybuilding</h2>
                                    <p>Transform your body with customized bodybuilding programs. Our gym offers advanced equipment to support your muscle growth and fitness journey.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-vegetables\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Fuel Your Body</h2>
                                    <p>Nutrition is key to success in fitness. We offer advice on healthy eating to support your workouts and help you reach your fitness goals faster.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-fruit-juice\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Post-Workout Recovery</h2>
                                    <p>Our selection of fruit juices and recovery drinks will help restore energy and boost your body after an intense workout session.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"slide\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-stationary-bike\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Warm Up & Stretch</h2>
                                    <p>Proper warm-up and stretching routines are essential for preventing injury and improving performance. We offer guided sessions to get you ready for any workout.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class=\"bgimg\" style=\"background-image: url('{{ asset('assets/images/bg_2.jpg') }}');\"  data-stellar-background-ratio=\"0.5\">

                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center text-center\">
                        <div class=\"col-md-7\">
                            <h2 class=\"\">Get The Result You Want</h2>
                            <p class=\"lead mx-auto desc mb-5\">
                                Achieve your fitness goals with dedication, the right guidance, and our state-of-the-art equipment.
                                Join us today and start your transformation.
                                <a href=\"{{ path('home') }}\" target=\"_self\">Visit our homepage</a>
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <div class=\"site-section\" id=\"classes-section\">
                <div class=\"container\">
                    <div class=\"row justify-content-center text-center mb-5\">
                        <div class=\"col-md-8 section-heading\">
                            <span class=\"subheading\">Fitness Machines </span>
                            <h2 class=\"heading mb-3\">Machines</h2>
                            <p>
                                Our fitness center is equipped with state-of-the-art machines designed to meet a wide range of training needs. From cardiovascular equipment to strength training, each machine offers a unique way to help you reach your fitness goals. Our collection includes everything from treadmills and rowing machines to specialized weightlifting equipment. Explore our machines to find the perfect match for your workout and enjoy a safe, effective, and enjoyable fitness experience tailored to all fitness levels.
                            </p>

                        </div>
                    </div>
                    <div class=\"row\">
                        {% for machine in machines %}
                            <div class=\"col-lg-6\">
                                <div class=\"class-item d-flex align-items-center\">
                                    <a href=\"{{ path('machine_detail', {'id': machine.id}) }}\" class=\"class-item-thumbnail\">
                                        <img src=\"{{ asset(machine.image) }}\" alt=\"{{ machine.name }}\">
                                    </a>
                                    <div class=\"class-item-text\">
                                        <h2><a href=\"{{ path('machine_detail', {'id': machine.id}) }}\">{{ machine.name }}</a></h2>
                                        <p>{{ machine.description }}</p>
                                        <span>Number of Machines: {{ machine.nbrMachines }}</span>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>

            <div class=\"bgimg\" style=\"background-image: url('{{ asset('assets/images/bg_3.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center text-center\">
                        <div class=\"col-md-7\">
                            <h2 class=\"\">Every Step Counts</h2>
                            <p class=\"lead mx-auto desc mb-5\">
                                At TRYIT Gym, every step you take brings you closer to your fitness goals. Our community is growing, and we are proud to
                                have:
                            </p>
                            <ul>
                                <li><strong>{{ totalUsers }}</strong> Users dedicated to their health.</li>
                                <li><strong>{{ totalCoaches }}</strong> Coaches guiding you every step of the way.</li>
                                <li><strong>{{ totalMachines }}</strong> Machines ready to help you achieve your best shape.</li>
                                <li><strong>{{ totalManagers }}</strong> Administrators managing everything to ensure smooth operations.</li>
                            </ul>
                            <p class=\"mb-5\">
                                Join us and be part of a growing fitness family committed to success and health!
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"site-section\" id=\"schedule-section\">
                <div class=\"container\">
                    <div class=\"row justify-content-center text-center mb-5\">
                        <div class=\"col-md-8 section-heading\">
                            <span class=\"subheading\">Planning Team Training</span>
                            <h2 class=\"heading mb-3\">Weekly Schedule</h2>
                            <p>Your weekly schedule for various fitness classes, training sessions, and specialized workouts.</p>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <ul class=\"nav days d-flex\" role=\"tablist\">
                                {% for day in ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link {{ loop.first ? 'active' }}\" id=\"{{ day|lower }}-tab\" data-toggle=\"tab\" href=\"#nav-{{ day|lower }}\" role=\"tab\">{{ day }}</a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>

                    <div class=\"tab-content\">
                        {% for day in ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] %}
                            <div class=\"tab-pane fade {{ loop.first ? 'show active' }}\" id=\"nav-{{ day|lower }}\" role=\"tabpanel\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        {% for schedule in schedules %}
                                            {% if schedule.date|date('l') == day %}
                                                <div class=\"class-item d-flex align-items-center\">
                                                    <span>{{ schedule.startTime|date('H:i') }} - {{ schedule.salle }}</span>
                                                    <h2>{{ schedule.coach.specialty }}</h2>
                                                    <span>Coach: {{ schedule.coach.name }}</span>
                                                </div>
                                            {% endif %}
                                        {% else %}
                                            <p>No classes scheduled for {{ day }}.</p>
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>



            <div class=\"bgimg\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center text-center\">
                        <div class=\"col-md-7\">
                            <h2 class=\"\">Achieve Your Fitness Goals Anytime, Anywhere</h2>
                            <p class=\"lead mx-auto desc mb-5\">Empowering your fitness journey with personalized training and support, no matter where you are. Discover a new approach to health and wellness at <a href=\"{{ path('home') }}\" target=\"_blank\">Our Fitness Hub</a>.</p>
                        </div>
                    </div>
                </div>
            </div>





            <div class=\"site-section\" id=\"trainer-section\">
                <div class=\"container\">
                    <div class=\"row justify-content-center text-center mb-5\" data-aos=\"fade-up\">
                        <div class=\"col-md-8  section-heading\">
                            <span class=\"subheading\">Trainer</span>
                            <h2 class=\"heading mb-3\">Our Trainers</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                texts.
                                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 mb-4 mb-lg-0 col-md-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"\">
                            <div class=\"person\">
                                <img src=\"{{ asset('assets/images/person_3.jpg') }}\" alt=\"Free website template by Free-Template.co\" class=\"img-fluid\">
                                <h3>Justin Daniel</h3>
                                <p class=\"position\">Trainer</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 mb-4 mb-lg-0 col-md-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"person\">
                                <img src=\"{{ asset('assets/images/person_1.jpg') }}\" alt=\"Free website template by Free-Template.co\" class=\"img-fluid\">
                                <h3>Matthew Davidson</h3>
                                <p class=\"position\">Trainer</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 mb-4 mb-lg-0 col-md-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"person\">
                                <img src=\"{{ asset('assets/images/person_2.jpg') }}\" alt=\"Free website template by Free-Template.co\" class=\"img-fluid\">
                                <h3>Matthew Davidson</h3>
                                <p class=\"position\">Trainer</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 mb-4 mb-lg-0 col-md-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                            <div class=\"person\">
                                <img src=\"{{ asset('assets/images/person_4.jpg') }}\" alt=\"Free website template by Free-Template.co\" class=\"img-fluid\">
                                <h3>Matthew Davidson</h3>
                                <p class=\"position\">Trainer</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"site-section\" id=\"services-section\">
                <div class=\"container\">
                    <div class=\"row justify-content-center text-center mb-5\" data-aos=\"fade-up\">
                        <div class=\"col-md-8 section-heading\">
                            <span class=\"subheading\">Premium Fitness Services</span>
                            <h2 class=\"heading mb-3\">Our Services</h2>
                            <p>Transform your fitness journey with our specialized programs, expert trainers, and cutting-edge facilities. From personalized training plans to nutrition guidance, we provide everything you need to reach your peak.</p>
                        </div>

                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-fit\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Stay Fit</h2>
                                    <p>Achieve peak fitness through structured training and a balanced lifestyle. We provide the tools and guidance to help you become your best self.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-gym-1\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Join Our Club</h2>
                                    <p>Be part of a community dedicated to strength and wellness. Train, grow, and reach your goals alongside like-minded fitness enthusiasts.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-gym\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Gym Fitness</h2>
                                    <p>Our gym is equipped with everything you need, from cardio machines to free weights, for a complete workout experience.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-vegetables\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Fuel Your Body</h2>
                                    <p>Nutrition is key to achieving your fitness goals. Discover the benefits of a balanced diet to support your training and recovery.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-fruit-juice\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Powerful Juices</h2>
                                    <p>Our freshly made juices are packed with essential nutrients, providing the energy you need to fuel intense workouts and recovery.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4 mb-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"ftco-feature-1\">
                                <span class=\"icon flaticon-stationary-bike\"></span>
                                <div class=\"ftco-feature-1-text\">
                                    <h2>Warm Up & Recovery</h2>
                                    <p>Prepare your body for intense training with proper warmups and cooldowns, ensuring muscle flexibility and reducing injury risk.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"site-section bg-light contact-wrap\" id=\"contact-section\">
                <div class=\"container\">

                    <div class=\"row justify-content-center text-center mb-5\">
                        <div class=\"col-md-8  section-heading\">
                            <span class=\"subheading\">Get In Touch</span>
                            <h2 class=\"heading mb-3\">Contact Us</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                texts.
                            </p>
                        </div>
                    </div>

                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-7\">
                            <form method=\"post\" data-aos=\"fade\">
                                <div class=\"form-group row\">
                                    <div class=\"col-md-6 mb-3 mb-lg-0\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"First name\">
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Last name\">
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Subject\">
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label for=\"\"></label><textarea class=\"form-control\" id=\"\" cols=\"30\" rows=\"10\"
                                                                        placeholder=\"Write your message here.\"></textarea>
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <div class=\"col-md-6\">

                                        <input type=\"submit\" class=\"btn btn-primary py-3 px-5 btn-block\" value=\"Send Message\">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"schedule-wrap2 clearfix\">
                <div class=\"d-md-flex align-items-center\">
                    <div class=\"hours mr-md-4 mb-4 mb-lg-0\">
                        <strong class=\"d-block\">Hours</strong>
                        Opening: 7:30am &mdash;
                        Closing: 9:00pm
                    </div>
                    <div class=\"cta ml-auto\">
                        <a href=\"#\" class=\"d-flex d-md-flex align-items-center btn\">
                            <span class=\"mx-auto\"> <span>Contact us</span> <span class=\"arrow icon-keyboard_arrow_right\"></span></span>
                        </a>
                    </div>
                </div>
            </div>





        </div>
    </div>

    <script src=\"https://www.youtube.com/iframe_api\"></script>
    <!-- Lien vers l'API YouTube -->
    <script src=\"https://www.youtube.com/iframe_api\"></script>

    <script src=\"{{ asset('assets/js/jquery-3.3.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery-ui.js') }}\"></script>
    <script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.stellar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.countdown.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.easing.1.3.js') }}\"></script>
    <script src=\"{{ asset('assets/js/aos.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.fancybox.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.sticky.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>

    <script>
        // Initialisation du lecteur YouTube après le chargement des scripts
        \$(document).ready(function(){
            \$(\"#bgndVideo\").YTPlayer();
        });
    </script>


{% endblock body %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\home\\index.html.twig");
    }
}
