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

/* front/navbar.html.twig */
class __TwigTemplate_955843759323ab4f97d41236e7ef7bad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/navbar.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
             <img  src=\"";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/logo/log.png"), "html", null, true);
        yield "\" width=\"65\" height=\"65\"> <h2 style=\"color: #06BBCC;\">9arinyAcademy</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "roles", [], "any", false, false, false, 12), 1, [], "array", false, false, false, 12) == "ROLE_USER")) {
                // line 13
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_myprofile");
                yield "\" class=\"nav-item nav-link\">Mon compte</a>
                    ";
            }
            // line 15
            yield "                ";
        }
        // line 16
        yield "            </div>
            ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">
                    Logout
                    <i class=\"fa fa-arrow-right ms-3\"></i>
                </a>

            ";
        } else {
            // line 24
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">
                    Sign Up/Login
                    <i class=\"fa fa-arrow-right ms-3\"></i>
                </a>
            ";
        }
        // line 29
        yield "        </div>
    </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  103 => 29,  94 => 24,  84 => 18,  82 => 17,  79 => 16,  76 => 15,  70 => 13,  67 => 12,  65 => 11,  61 => 10,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"{{ path('app_index') }}\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
             <img  src=\"{{ asset('front/logo/log.png') }}\" width=\"65\" height=\"65\"> <h2 style=\"color: #06BBCC;\">9arinyAcademy</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"{{ path('app_index') }}\" class=\"nav-item nav-link active\">Home</a>
                {% if app.user %}
                    {% if app.user.roles[1]==\"ROLE_USER\" %}
                        <a href=\"{{ path('app_myprofile') }}\" class=\"nav-item nav-link\">Mon compte</a>
                    {% endif %}
                {% endif %}
            </div>
            {% if app.user %}
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">
                    Logout
                    <i class=\"fa fa-arrow-right ms-3\"></i>
                </a>

            {% else  %}
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">
                    Sign Up/Login
                    <i class=\"fa fa-arrow-right ms-3\"></i>
                </a>
            {% endif %}
        </div>
    </nav>", "front/navbar.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\front\\navbar.html.twig");
    }
}
