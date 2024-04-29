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

/* back/user/edit_profile.html.twig */
class __TwigTemplate_ca763d2bcdef3a41e04049ba50c34fae extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/edit_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/edit_profile.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back/user/edit_profile.html.twig", 1);
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
        yield "    <div class=\"container-fluid\">
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
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Basic Info</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'row', ["label" => "Email", "attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'row', ["label" => "Nom", "attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'row', ["label" => "Prenom", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 30, $this->source); })()), "address", [], "any", false, false, false, 30), 'row', ["label" => "Adresse", "attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31), 'row', ["label" => "Image", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <br>
                        <button class=\"btn btn-lg btn-primary\">";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Enregistrer les modifications")) : ("Enregistrer les modifications")), "html", null, true);
        yield "</button>
                        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
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
        return "back/user/edit_profile.html.twig";
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
        return array (  143 => 36,  139 => 35,  132 => 31,  128 => 30,  122 => 27,  118 => 26,  114 => 25,  108 => 22,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Modifier le profil{% endblock %}

{% block body %}
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
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Basic Info</h5>
                    </div>
                    <div class=\"card-body\">
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
                        <br>
                        <button class=\"btn btn-lg btn-primary\">{{ button_label|default('Enregistrer les modifications') }}</button>
                        {{ form_end(profileForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "back/user/edit_profile.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\back\\user\\edit_profile.html.twig");
    }
}
