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

/* front/user/edit_profile.html.twig */
class __TwigTemplate_df7bf9276ca8247da33c3e3b8aaaff00 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/edit_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/edit_profile.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "front/user/edit_profile.html.twig", 1);
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

        yield "Modifier le profil";
        
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
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Modifier le profil</h6>
                <h1 class=\"mb-5\">Modifier vos informations</h1>
            </div>
            <div class=\"row g-4\">
                ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'row', ["label" => "Email", "attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'row', ["label" => "Nom", "attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'row', ["label" => "Prenom", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 21, $this->source); })()), "address", [], "any", false, false, false, 21), 'row', ["label" => "Adresse", "attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22), 'row', ["label" => "Image", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>
                <button class=\"btn btn-lg btn-primary\">";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 25, $this->source); })()), "Enregistrer les modifications")) : ("Enregistrer les modifications")), "html", null, true);
        yield "</button>
                ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 26, $this->source); })()), 'form_end');
        yield "

                <br>
                <label for=\"inputPassword\">Retour au profil</label>
                <br>
                <br>
                <button class=\"btn btn-lg btn-primary\" onclick=\"window.location.href='";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_myprofile");
        yield "'\">
                    Profil
                </button>
                <br>
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
        return "front/user/edit_profile.html.twig";
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
        return array (  142 => 32,  133 => 26,  129 => 25,  123 => 22,  119 => 21,  113 => 18,  109 => 17,  105 => 16,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Modifier le profil{% endblock %}

{% block body %}
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Modifier le profil</h6>
                <h1 class=\"mb-5\">Modifier vos informations</h1>
            </div>
            <div class=\"row g-4\">
                {{ form_start(profileForm, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        {{ form_row(profileForm.email, {'label': 'Email', 'attr': {'class': 'form-control'}}) }}
                        {{ form_row(profileForm.nom, {'label': 'Nom', 'attr': {'class': 'form-control'}}) }}
                        {{ form_row(profileForm.prenom, {'label': 'Prenom', 'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(profileForm.address, {'label': 'Adresse', 'attr': {'class': 'form-control'}}) }}
                        {{ form_row(profileForm.image, {'label': 'Image', 'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <button class=\"btn btn-lg btn-primary\">{{ button_label|default('Enregistrer les modifications') }}</button>
                {{ form_end(profileForm) }}

                <br>
                <label for=\"inputPassword\">Retour au profil</label>
                <br>
                <br>
                <button class=\"btn btn-lg btn-primary\" onclick=\"window.location.href='{{ path('app_myprofile') }}'\">
                    Profil
                </button>
                <br>
            </div>
        </div>
    </div>
{% endblock %}
", "front/user/edit_profile.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\front\\user\\edit_profile.html.twig");
    }
}
