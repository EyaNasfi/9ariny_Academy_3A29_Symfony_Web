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

/* back/user/verify_reset_code.html.twig */
class __TwigTemplate_289afc44d8186f049c7d6a8984ed976a extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/verify_reset_code.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/verify_reset_code.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back/user/verify_reset_code.html.twig", 1);
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
<div class=\"content-body\">
    <div class=\"container-fluid\">
        <div class=\"row page-titles mx-0\">
            <div class=\"col-sm-6 p-md-0\">
                <div class=\"welcome-text\">
                    <h4>Modifier vos informations</h4>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xl-12 col-xxl-12 col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        yield "
                          <div class=\"sign__group\">
                          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "                            <h1 class=\"footer__tagline\">
                              ";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "
                            </h1>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                          </div>

                          <div class=\"sign__group\">
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Password", [], "any", false, false, false, 28), 'widget', ["attr" => ["placeholder" => "mot de passe"]]);
        yield "
                            <h5 class=\"footer__tagline\">
                              ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "Password", [], "any", false, false, false, 30), 'errors');
        yield "
                            </h5>

                          </div>
                          <div class=\"sign__group\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 35), 'widget', ["attr" => ["placeholder" => "confirmer mot de passe"]]);
        yield "
                              <h5 class=\"footer__tagline\">
                                  ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 37), 'errors');
        yield "
                              </h5>
                          </div>

                            <button class=\"btn btn-lg btn-primary\">";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 41, $this->source); })()), "Réinitialiser le mot de passe")) : ("Réinitialiser le mot de passe")), "html", null, true);
        yield "</button>
                        ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        yield "
                    </div>
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
        return "back/user/verify_reset_code.html.twig";
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
        return array (  141 => 42,  137 => 41,  130 => 37,  125 => 35,  117 => 30,  112 => 28,  107 => 25,  98 => 22,  95 => 21,  91 => 20,  86 => 18,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block body %}

<div class=\"content-body\">
    <div class=\"container-fluid\">
        <div class=\"row page-titles mx-0\">
            <div class=\"col-sm-6 p-md-0\">
                <div class=\"welcome-text\">
                    <h4>Modifier vos informations</h4>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xl-12 col-xxl-12 col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        {{ form_start(form) }}
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
        </div>
    </div>
</div>
{% endblock %}", "back/user/verify_reset_code.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\back\\user\\verify_reset_code.html.twig");
    }
}
