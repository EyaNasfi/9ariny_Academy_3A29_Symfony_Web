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

/* front/user/verify_reset_code.html.twig */
class __TwigTemplate_ac48b72588a52595d364a8e46e1f867d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/verify_reset_code.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/verify_reset_code.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "front/user/verify_reset_code.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "
<div class=\"container py-5\">
    <div class=\"text-center mb-5\">
        <h6 class=\"section-title bg-white text-primary px-3\">Changer</h6>
        <h1 class=\"mb-4\">mot de passe</h1>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">

            ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
              <div class=\"sign__group\">
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "                <h1 class=\"footer__tagline\">
                  ";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "
                </h1>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "              </div>

              <div class=\"sign__group\">
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "Password", [], "any", false, false, false, 22), 'widget', ["attr" => ["placeholder" => "mot de passe"]]);
        yield "
                <h5 class=\"footer__tagline\">
                  ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Password", [], "any", false, false, false, 24), 'errors');
        yield "
                </h5>

              </div>
              <div class=\"sign__group\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 29), 'widget', ["attr" => ["placeholder" => "confirmer mot de passe"]]);
        yield "
                  <h5 class=\"footer__tagline\">
                      ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 31), 'errors');
        yield "
                  </h5>
              </div>

            <button class=\"btn btn-lg btn-primary\">";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Réinitialiser le mot de passe")) : ("Réinitialiser le mot de passe")), "html", null, true);
        yield "</button>
        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
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
        return "front/user/verify_reset_code.html.twig";
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
        return array (  135 => 36,  131 => 35,  124 => 31,  119 => 29,  111 => 24,  106 => 22,  101 => 19,  92 => 16,  89 => 15,  85 => 14,  80 => 12,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block body %}

<div class=\"container py-5\">
    <div class=\"text-center mb-5\">
        <h6 class=\"section-title bg-white text-primary px-3\">Changer</h6>
        <h1 class=\"mb-4\">mot de passe</h1>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">

            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
              <div class=\"sign__group\">
              {% for message in app.flashes('error') %}
                <h1 class=\"footer__tagline\">
                  {{ message }}
                </h1>
              {% endfor %}
              </div>

              <div class=\"sign__group\">
                {{ form_widget(form.Password,  {'attr': { placeholder:'mot de passe' }}) }}
                <h5 class=\"footer__tagline\">
                  {{ form_errors(form.Password) }}
                </h5>

              </div>
              <div class=\"sign__group\">
                {{ form_widget(form.ConfirmPassword,  {'attr': { placeholder:'confirmer mot de passe' }}) }}
                  <h5 class=\"footer__tagline\">
                      {{ form_errors(form.ConfirmPassword) }}
                  </h5>
              </div>

            <button class=\"btn btn-lg btn-primary\">{{ button_label|default('Réinitialiser le mot de passe') }}</button>
        {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}
", "front/user/verify_reset_code.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\front\\user\\verify_reset_code.html.twig");
    }
}
