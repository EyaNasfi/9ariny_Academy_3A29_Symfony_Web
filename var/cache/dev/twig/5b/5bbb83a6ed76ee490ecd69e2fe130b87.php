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

/* back/user/showProfile.html.twig */
class __TwigTemplate_111cc0b27c754e5cbecd200ed28238d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/showProfile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/showProfile.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back/user/showProfile.html.twig", 1);
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

        yield "Profile";
        
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
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"card-title\">User Profile</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <img width=\"100\" height=\"100\" src=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodePathFunction(((("Name : " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16)) . "
Email : ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "email", [], "any", false, false, false, 16))), "html", null, true);
        yield "\" alt=\"QR Code\" />
                            </div>
                            <div class=\"col-md-6\">
                                <h5>";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), "html", null, true);
        yield "</h5>
                                <p>Email: ";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                                <p>Address: ";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "address", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                                <p>Status: ";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <img src=\"";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "image", [], "any", false, false, false, 27))), "html", null, true);
        yield "\" alt=\"Profile Image\" class=\"img-fluid rounded-circle\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"text-primary\">Personal Details</h5>
                                <hr>
                                <p><strong>Name:</strong> ";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
                                <p><strong>Email:</strong> ";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>
                                <p><strong>Address:</strong> ";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "address", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                                <p><strong>Status:</strong> ";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index_admin");
        yield "\" class=\"btn btn-secondary\">Back</a>
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
        return "back/user/showProfile.html.twig";
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
        return array (  161 => 40,  153 => 35,  149 => 34,  145 => 33,  139 => 32,  131 => 27,  123 => 22,  119 => 21,  115 => 20,  109 => 19,  102 => 16,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"card-title\">User Profile</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <img width=\"100\" height=\"100\" src=\"{{ qr_code_path(\"Name : #{app.user.nom}\\nEmail : #{app.user.email}\" ) }}\" alt=\"QR Code\" />
                            </div>
                            <div class=\"col-md-6\">
                                <h5>{{ user.nom }} {{ user.prenom }}</h5>
                                <p>Email: {{ user.email }}</p>
                                <p>Address: {{ user.address }}</p>
                                <p>Status: {{ user.status }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <img src=\"{{ asset('uploads/images/' ~ user.image) }}\" alt=\"Profile Image\" class=\"img-fluid rounded-circle\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"text-primary\">Personal Details</h5>
                                <hr>
                                <p><strong>Name:</strong> {{ user.nom }} {{ user.prenom }}</p>
                                <p><strong>Email:</strong> {{ user.email }}</p>
                                <p><strong>Address:</strong> {{ user.address }}</p>
                                <p><strong>Status:</strong> {{ user.status }}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"{{ path('app_users_index_admin') }}\" class=\"btn btn-secondary\">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "back/user/showProfile.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\back\\user\\showProfile.html.twig");
    }
}
