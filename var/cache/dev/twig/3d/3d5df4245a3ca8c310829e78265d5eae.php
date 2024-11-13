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

/* Home.html.twig */
class __TwigTemplate_93c99f5bdd97e7beb725003990be04d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html.twig"));

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
    <title>TEK-UP | GYM</title>
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

<header class=\"section__container header__container\">
    <div class=\"header__content\">
        <span class=\"bg__blur\"></span>
        <span class=\"bg__blur header__blur\"></span>
        <h4>BEST FITNESS IN THE TOWN</h4>
        <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
        <p>
            Unleash your potential and embark on a journey towards a stronger,
            fitter, and more confident you. Sign up for 'Make Your Body Shape' now
            and witness the incredible transformation your body is capable of!
        </p>
        <button class=\"btn\">Get Started</button>
    </div>
    <div class=\"header__image\">
        <img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/header.png"), "html", null, true);
        yield "\" alt=\"header\" />
    </div>
</header>

<section class=\"section__container explore__container\">
    <div class=\"explore__header\">
        <h2 class=\"section__header\">EXPLORE OUR PROGRAM</h2>
        <div class=\"explore__nav\">
            <span><i class=\"ri-arrow-left-line\"></i></span>
            <span><i class=\"ri-arrow-right-line\"></i></span>
        </div>
    </div>
    <div class=\"explore__grid\">
        <div class=\"explore__card\">
            <span><i class=\"ri-boxing-fill\"></i></span>
            <h4>Strength</h4>
            <p>
                Embrace the essence of strength as we delve into its various
                dimensions physical, mental, and emotional.
            </p>
            <a href=\"#\">Join Now <i class=\"ri-arrow-right-line\"></i></a>
        </div>
        <div class=\"explore__card\">
            <span><i class=\"ri-heart-pulse-fill\"></i></span>
            <h4>Physical Fitness</h4>
            <p>
                It encompasses a range of activities that improve health, strength,
                flexibility, and overall well-being.
            </p>
            <a href=\"#\">Join Now <i class=\"ri-arrow-right-line\"></i></a>
        </div>
        <div class=\"explore__card\">
            <span><i class=\"ri-run-line\"></i></span>
            <h4>Fat Lose</h4>
            <p>
                Through a combination of workout routines and expert guidance, we'll
                empower you to reach your goals.
            </p>
            <a href=\"#\">Join Now <i class=\"ri-arrow-right-line\"></i></a>
        </div>
        <div class=\"explore__card\">
            <span><i class=\"ri-shopping-basket-fill\"></i></span>
            <h4>Weight Gain</h4>
            <p>
                Designed for individuals, our program offers an effective approach
                to gaining weight in a sustainable manner.
            </p>
            <a href=\"#\">Join Now <i class=\"ri-arrow-right-line\"></i></a>
        </div>
    </div>
</section>

<section class=\"section__container class__container\">
    <div class=\"class__image\">
        <span class=\"bg__blur\"></span>
        <img src=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/class-1.jpg"), "html", null, true);
        yield "\" alt=\"class\" class=\"class__img-1\" />
        <img src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/class-2.jpg"), "html", null, true);
        yield "\" alt=\"class\" class=\"class__img-2\" />
    </div>
    <div class=\"class__content\">
        <h2 class=\"section__header\">THE CLASS YOU WILL GET HERE</h2>
        <p>
            Led by our team of expert and motivational instructors, \"The Class You
            Will Get Here\" is a high-energy, results-driven session that combines
            a perfect blend of cardio, strength training, and functional
            exercises. Each class is carefully curated to keep you engaged and
            challenged, ensuring you never hit a plateau in your fitness
            endeavors.
        </p>
        <button class=\"btn\">Book A Class</button>
    </div>
</section>

<section class=\"section__container join__container\">
    <h2 class=\"section__header\">WHY JOIN US ?</h2>
    <p class=\"section__subheader\">
        Our diverse membership base creates a friendly and supportive
        atmosphere, where you can make friends and stay motivated.
    </p>
    <div class=\"join__image\">
        <img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/join.jpg"), "html", null, true);
        yield "\" alt=\"Join\" />
        <div class=\"join__grid\">
            <div class=\"join__card\">
                <span><i class=\"ri-user-star-fill\"></i></span>
                <div class=\"join__card__content\">
                    <h4>Personal Trainer</h4>
                    <p>Unlock your potential with our expert Personal Trainers.</p>
                </div>
            </div>
            <div class=\"join__card\">
                <span><i class=\"ri-vidicon-fill\"></i></span>
                <div class=\"join__card__content\">
                    <h4>Practice Sessions</h4>
                    <p>Elevate your fitness with practice sessions.</p>
                </div>
            </div>
            <div class=\"join__card\">
                <span><i class=\"ri-building-line\"></i></span>
                <div class=\"join__card__content\">
                    <h4>Good Management</h4>
                    <p>Supportive management, for your fitness success.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"section__container price__container\">
    <h2 class=\"section__header\">OUR PRICING PLAN</h2>
    <p class=\"section__subheader\">
        Our pricing plan comes with various membership tiers, each tailored to
        cater to different preferences and fitness aspirations.
    </p>
    <div class=\"price__grid\">
        <div class=\"price__card\">
            <div class=\"price__card__content\">
                <h4>Basic Plan</h4>
                <h3>16DT</h3>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    Smart workout plan
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    At home workouts
                </p>
            </div>
            <button class=\"btn price__btn\">Join Now</button>
        </div>
        <div class=\"price__card\">
            <div class=\"price__card__content\">
                <h4>Weekly Plan</h4>
                <h3>25DT</h3>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    PRO Gyms
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    Smart workout plan
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    At home workouts
                </p>
            </div>
            <button class=\"btn price__btn\">Join Now</button>
        </div>
        <div class=\"price__card\">
            <div class=\"price__card__content\">
                <h4>Monthly Plan</h4>
                <h3>45DT</h3>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    ELITE Gyms & Classes
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    PRO Gyms
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    Smart workout plan
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    At home workouts
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    Personal Training
                </p>
            </div>
            <button class=\"btn price__btn\">Join Now</button>
        </div>
    </div>
</section>

<section class=\"review\">
    <div class=\"section__container review__container\">
        <span><i class=\"ri-double-quotes-r\"></i></span>
        <div class=\"review__content\">
            <h4>MEMBER REVIEW</h4>
            <p>
                What truly sets this gym apart is their expert team of trainers. The
                trainers are knowledgeable, approachable, and genuinely invested in
                helping members achieve their fitness goals. They take the time to
                understand individual needs and create personalized workout plans,
                ensuring maximum results and safety.
            </p>
            <div class=\"review__rating\">
                <span><i class=\"ri-star-fill\"></i></span>
                <span><i class=\"ri-star-fill\"></i></span>
                <span><i class=\"ri-star-fill\"></i></span>
                <span><i class=\"ri-star-fill\"></i></span>
                <span><i class=\"ri-star-half-fill\"></i></span>
            </div>
            <div class=\"review__footer\">
                <div class=\"review__member\">
                    <img src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/member.jpg"), "html", null, true);
        yield "\" alt=\"member\" />
                    <div class=\"review__member__details\">
                        <h4>Jane Cooper</h4>
                        <p>Software Developer</p>
                    </div>
                </div>
                <div class=\"review__nav\">
                    <span><i class=\"ri-arrow-left-line\"></i></span>
                    <span><i class=\"ri-arrow-right-line\"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class=\"section__container footer__container\">
    <span class=\"bg__blur\"></span>
    <span class=\"bg__blur footer__blur\"></span>
    <div class=\"footer__col\">
        <div class=\"footer__logo\"><img src=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"logo\" /></div>
        <p>
            Take the first step towards a healthier, stronger you with our
            unbeatable pricing plans. Let's sweat, achieve, and conquer together!
        </p>
        <div class=\"footer__socials\">
            <a href=\"#\"><i class=\"ri-facebook-fill\"></i></a>
            <a href=\"#\"><i class=\"ri-instagram-line\"></i></a>
            <a href=\"#\"><i class=\"ri-twitter-fill\"></i></a>
        </div>
    </div>
    <div class=\"footer__col\">
        <h4>Company</h4>
        <a href=\"#\">Business</a>
        <a href=\"#\">Franchise</a>
        <a href=\"#\">Partnership</a>
        <a href=\"#\">Network</a>
    </div>
    <div class=\"footer__col\">
        <h4>About Us</h4>
        <a href=\"#\">Blogs</a>
        <a href=\"#\">Security</a>
        <a href=\"#\">Careers</a>
    </div>
    <div class=\"footer__col\">
        <h4>Contact</h4>
        <a href=\"#\">Contact Us</a>
        <a href=\"#\">Privacy Policy</a>
        <a href=\"#\">Terms & Conditions</a>
        <a href=\"#\">BMI Calculator</a>
    </div>
</footer>
<div class=\"footer__bar\">
    Copyright © 2023 Web Design Mastery. All rights reserved.
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
        return "Home.html.twig";
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
        return array (  352 => 270,  330 => 251,  208 => 132,  182 => 109,  178 => 108,  120 => 53,  102 => 37,  94 => 33,  92 => 32,  84 => 28,  82 => 27,  69 => 17,  60 => 11,  48 => 1,);
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
    <title>TEK-UP | GYM</title>
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

<header class=\"section__container header__container\">
    <div class=\"header__content\">
        <span class=\"bg__blur\"></span>
        <span class=\"bg__blur header__blur\"></span>
        <h4>BEST FITNESS IN THE TOWN</h4>
        <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
        <p>
            Unleash your potential and embark on a journey towards a stronger,
            fitter, and more confident you. Sign up for 'Make Your Body Shape' now
            and witness the incredible transformation your body is capable of!
        </p>
        <button class=\"btn\">Get Started</button>
    </div>
    <div class=\"header__image\">
        <img src=\"{{ asset('images/header.png') }}\" alt=\"header\" />
    </div>
</header>

<section class=\"section__container explore__container\">
    <div class=\"explore__header\">
        <h2 class=\"section__header\">EXPLORE OUR PROGRAM</h2>
        <div class=\"explore__nav\">
            <span><i class=\"ri-arrow-left-line\"></i></span>
            <span><i class=\"ri-arrow-right-line\"></i></span>
        </div>
    </div>
    <div class=\"explore__grid\">
        <div class=\"explore__card\">
            <span><i class=\"ri-boxing-fill\"></i></span>
            <h4>Strength</h4>
            <p>
                Embrace the essence of strength as we delve into its various
                dimensions physical, mental, and emotional.
            </p>
            <a href=\"#\">Join Now <i class=\"ri-arrow-right-line\"></i></a>
        </div>
        <div class=\"explore__card\">
            <span><i class=\"ri-heart-pulse-fill\"></i></span>
            <h4>Physical Fitness</h4>
            <p>
                It encompasses a range of activities that improve health, strength,
                flexibility, and overall well-being.
            </p>
            <a href=\"#\">Join Now <i class=\"ri-arrow-right-line\"></i></a>
        </div>
        <div class=\"explore__card\">
            <span><i class=\"ri-run-line\"></i></span>
            <h4>Fat Lose</h4>
            <p>
                Through a combination of workout routines and expert guidance, we'll
                empower you to reach your goals.
            </p>
            <a href=\"#\">Join Now <i class=\"ri-arrow-right-line\"></i></a>
        </div>
        <div class=\"explore__card\">
            <span><i class=\"ri-shopping-basket-fill\"></i></span>
            <h4>Weight Gain</h4>
            <p>
                Designed for individuals, our program offers an effective approach
                to gaining weight in a sustainable manner.
            </p>
            <a href=\"#\">Join Now <i class=\"ri-arrow-right-line\"></i></a>
        </div>
    </div>
</section>

<section class=\"section__container class__container\">
    <div class=\"class__image\">
        <span class=\"bg__blur\"></span>
        <img src=\"{{ asset('images/class-1.jpg') }}\" alt=\"class\" class=\"class__img-1\" />
        <img src=\"{{ asset('images/class-2.jpg') }}\" alt=\"class\" class=\"class__img-2\" />
    </div>
    <div class=\"class__content\">
        <h2 class=\"section__header\">THE CLASS YOU WILL GET HERE</h2>
        <p>
            Led by our team of expert and motivational instructors, \"The Class You
            Will Get Here\" is a high-energy, results-driven session that combines
            a perfect blend of cardio, strength training, and functional
            exercises. Each class is carefully curated to keep you engaged and
            challenged, ensuring you never hit a plateau in your fitness
            endeavors.
        </p>
        <button class=\"btn\">Book A Class</button>
    </div>
</section>

<section class=\"section__container join__container\">
    <h2 class=\"section__header\">WHY JOIN US ?</h2>
    <p class=\"section__subheader\">
        Our diverse membership base creates a friendly and supportive
        atmosphere, where you can make friends and stay motivated.
    </p>
    <div class=\"join__image\">
        <img src=\"{{ asset('images/join.jpg') }}\" alt=\"Join\" />
        <div class=\"join__grid\">
            <div class=\"join__card\">
                <span><i class=\"ri-user-star-fill\"></i></span>
                <div class=\"join__card__content\">
                    <h4>Personal Trainer</h4>
                    <p>Unlock your potential with our expert Personal Trainers.</p>
                </div>
            </div>
            <div class=\"join__card\">
                <span><i class=\"ri-vidicon-fill\"></i></span>
                <div class=\"join__card__content\">
                    <h4>Practice Sessions</h4>
                    <p>Elevate your fitness with practice sessions.</p>
                </div>
            </div>
            <div class=\"join__card\">
                <span><i class=\"ri-building-line\"></i></span>
                <div class=\"join__card__content\">
                    <h4>Good Management</h4>
                    <p>Supportive management, for your fitness success.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"section__container price__container\">
    <h2 class=\"section__header\">OUR PRICING PLAN</h2>
    <p class=\"section__subheader\">
        Our pricing plan comes with various membership tiers, each tailored to
        cater to different preferences and fitness aspirations.
    </p>
    <div class=\"price__grid\">
        <div class=\"price__card\">
            <div class=\"price__card__content\">
                <h4>Basic Plan</h4>
                <h3>16DT</h3>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    Smart workout plan
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    At home workouts
                </p>
            </div>
            <button class=\"btn price__btn\">Join Now</button>
        </div>
        <div class=\"price__card\">
            <div class=\"price__card__content\">
                <h4>Weekly Plan</h4>
                <h3>25DT</h3>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    PRO Gyms
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    Smart workout plan
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    At home workouts
                </p>
            </div>
            <button class=\"btn price__btn\">Join Now</button>
        </div>
        <div class=\"price__card\">
            <div class=\"price__card__content\">
                <h4>Monthly Plan</h4>
                <h3>45DT</h3>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    ELITE Gyms & Classes
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    PRO Gyms
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    Smart workout plan
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    At home workouts
                </p>
                <p>
                    <i class=\"ri-checkbox-circle-line\"></i>
                    Personal Training
                </p>
            </div>
            <button class=\"btn price__btn\">Join Now</button>
        </div>
    </div>
</section>

<section class=\"review\">
    <div class=\"section__container review__container\">
        <span><i class=\"ri-double-quotes-r\"></i></span>
        <div class=\"review__content\">
            <h4>MEMBER REVIEW</h4>
            <p>
                What truly sets this gym apart is their expert team of trainers. The
                trainers are knowledgeable, approachable, and genuinely invested in
                helping members achieve their fitness goals. They take the time to
                understand individual needs and create personalized workout plans,
                ensuring maximum results and safety.
            </p>
            <div class=\"review__rating\">
                <span><i class=\"ri-star-fill\"></i></span>
                <span><i class=\"ri-star-fill\"></i></span>
                <span><i class=\"ri-star-fill\"></i></span>
                <span><i class=\"ri-star-fill\"></i></span>
                <span><i class=\"ri-star-half-fill\"></i></span>
            </div>
            <div class=\"review__footer\">
                <div class=\"review__member\">
                    <img src=\"{{ asset('images/member.jpg') }}\" alt=\"member\" />
                    <div class=\"review__member__details\">
                        <h4>Jane Cooper</h4>
                        <p>Software Developer</p>
                    </div>
                </div>
                <div class=\"review__nav\">
                    <span><i class=\"ri-arrow-left-line\"></i></span>
                    <span><i class=\"ri-arrow-right-line\"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class=\"section__container footer__container\">
    <span class=\"bg__blur\"></span>
    <span class=\"bg__blur footer__blur\"></span>
    <div class=\"footer__col\">
        <div class=\"footer__logo\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"logo\" /></div>
        <p>
            Take the first step towards a healthier, stronger you with our
            unbeatable pricing plans. Let's sweat, achieve, and conquer together!
        </p>
        <div class=\"footer__socials\">
            <a href=\"#\"><i class=\"ri-facebook-fill\"></i></a>
            <a href=\"#\"><i class=\"ri-instagram-line\"></i></a>
            <a href=\"#\"><i class=\"ri-twitter-fill\"></i></a>
        </div>
    </div>
    <div class=\"footer__col\">
        <h4>Company</h4>
        <a href=\"#\">Business</a>
        <a href=\"#\">Franchise</a>
        <a href=\"#\">Partnership</a>
        <a href=\"#\">Network</a>
    </div>
    <div class=\"footer__col\">
        <h4>About Us</h4>
        <a href=\"#\">Blogs</a>
        <a href=\"#\">Security</a>
        <a href=\"#\">Careers</a>
    </div>
    <div class=\"footer__col\">
        <h4>Contact</h4>
        <a href=\"#\">Contact Us</a>
        <a href=\"#\">Privacy Policy</a>
        <a href=\"#\">Terms & Conditions</a>
        <a href=\"#\">BMI Calculator</a>
    </div>
</footer>
<div class=\"footer__bar\">
    Copyright © 2023 Web Design Mastery. All rights reserved.
</div>
</body>
</html>
", "Home.html.twig", "C:\\xampp\\htdocs\\TRYIT\\templates\\Home.html.twig");
    }
}
