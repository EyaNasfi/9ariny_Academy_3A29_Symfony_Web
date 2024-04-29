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

/* front/user/profile.html.twig */
class __TwigTemplate_ab1427dc82b6eddd0106c00f7343ce02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "front/user/profile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "My Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"min-height: 400px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11))), "html", null, true);
        yield "\" alt=\"Profile Image\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                    <h6 class=\"section-title bg-white text-start text-primary pe-3\">A propos de votre profil</h6>
                    <h1 class=\"mb-4\">Welcome to eLEARNING</h1>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "                        <div class=\"alert alert-success\">
                            ";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
                    <p class=\"mb-4\">";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                    <p class=\"mb-4\">Email: ";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
                    <p class=\"mb-4\">Address: ";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "address", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
                    <p class=\"mb-4\">Status: ";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
                    <!-- Additional user details can be added here -->
                    <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_profile");
        yield "\">Modifier informations</a>
                    <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password_profil");
        yield "\">Modifier mot de passe</a>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/user/profile.html.twig";
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
        return array (  148 => 29,  144 => 28,  139 => 26,  135 => 25,  131 => 24,  125 => 23,  122 => 22,  113 => 19,  110 => 18,  106 => 17,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}My Profile{% endblock %}

{% block body %}
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"min-height: 400px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"{{ asset('uploads/images/' ~ user.image) }}\" alt=\"Profile Image\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                    <h6 class=\"section-title bg-white text-start text-primary pe-3\">A propos de votre profil</h6>
                    <h1 class=\"mb-4\">Welcome to eLEARNING</h1>
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                    {% endfor %}

                    <p class=\"mb-4\">{{ user.nom }} {{ user.prenom }}</p>
                    <p class=\"mb-4\">Email: {{ user.email }}</p>
                    <p class=\"mb-4\">Address: {{ user.address }}</p>
                    <p class=\"mb-4\">Status: {{ user.status }}</p>
                    <!-- Additional user details can be added here -->
                    <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"{{ path('app_edit_profile') }}\">Modifier informations</a>
                    <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"{{ path('reset_password_profil') }}\">Modifier mot de passe</a>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "front/user/profile.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\front\\user\\profile.html.twig");
    }
}
