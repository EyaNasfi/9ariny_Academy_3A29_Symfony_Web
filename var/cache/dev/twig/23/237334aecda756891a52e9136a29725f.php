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

/* front/user/reset_password.html.twig */
class __TwigTemplate_847fe9180853bc0840d8979ae8bf1d35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/reset_password.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "front/user/reset_password.html.twig", 1);
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

        yield "Réinitialisation du mot de passe";
        
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
        yield "    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\" class=\"sign__logo\">
                            <img src=\"";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/logo/log.png"), "html", null, true);
        yield "\" alt=\"Logo\">
                        </a>

                        <h5 class=\"card-title\">Réinitialisation du mot de passe</h5>
                        <div class=\"sign__group\">
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "                                <div class=\"alert alert-danger\" role=\"alert\">
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
        yield "                        </div>
                        <form method=\"post\" action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password_submited");
        yield "\" class=\"sign__form\">
                            <div class=\"row\">
                                <div class=\"col-md\">
                                    <input type=\"email\" class=\"form-control mb-3\" name=\"email\" id=\"inputEmail\" autocomplete=\"email\"  autofocus placeholder=\"Adresse email\">
                                </div>
                            </div>

                            <button  class=\"btn btn-lg btn-primary btn-block sign__btn\" type=\"submit\">";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Réinitialiser")) : ("Réinitialiser")), "html", null, true);
        yield "</button>
                        </form>
                    </div>
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
        return "front/user/reset_password.html.twig";
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
        return array (  138 => 30,  128 => 23,  125 => 22,  116 => 19,  113 => 18,  109 => 17,  101 => 12,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Réinitialisation du mot de passe{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <a href=\"{{ path('app_index') }}\" class=\"sign__logo\">
                            <img src=\"{{ asset('front/logo/log.png') }}\" alt=\"Logo\">
                        </a>

                        <h5 class=\"card-title\">Réinitialisation du mot de passe</h5>
                        <div class=\"sign__group\">
                            {% for message in app.flashes('error') %}
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    {{ message }}
                                </div>
                            {% endfor %}
                        </div>
                        <form method=\"post\" action=\"{{ path('app_reset_password_submited') }}\" class=\"sign__form\">
                            <div class=\"row\">
                                <div class=\"col-md\">
                                    <input type=\"email\" class=\"form-control mb-3\" name=\"email\" id=\"inputEmail\" autocomplete=\"email\"  autofocus placeholder=\"Adresse email\">
                                </div>
                            </div>

                            <button  class=\"btn btn-lg btn-primary btn-block sign__btn\" type=\"submit\">{{ button_label|default('Réinitialiser') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "front/user/reset_password.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\front\\user\\reset_password.html.twig");
    }
}
