<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* certif.html.twig */
class __TwigTemplate_a4879c26caa4a48cc67eb146b7f54aa491b119cc2a7f2460b63573c8e77ccacd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certif.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Certificat</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .container {
            border: 20px solid tan;
            width: 800px;
            height: 600px;
            margin: auto;
            padding: 20px;
        }

        .logo {
            color: tan;
            font-size: 24px;
            font-weight: bold;
        }

        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }

        .assignment {
            margin: 20px;
            font-size: 24px;
        }

        .person {
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 600px;
        }

        .reason {
            margin: 20px;
            font-size: 20px;
        }

        img {
            vertical-align: middle;
            margin-right: 10px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            background-color: tan;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class=\"container\">
    <div class=\"logo\">
        <img src=\"/9A.png\" alt=\"logo\">9ariny-Academy</div>
    <div class=\"marquee\">
        ";
        // line 78
        if ( !twig_test_empty((isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 78, $this->source); })()))) {
            // line 79
            echo "            Certificat d'achèvement de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 79, $this->source); })()), 0, [], "array", false, false, false, 79), "nom", [], "any", false, false, false, 79), "html", null, true);
            echo "
        ";
        }
        // line 81
        echo "    </div>
    <div class=\"assignment\">
        La certificat presente pour
    </div>
    <div class=\"person\">
        ";
        // line 86
        if ( !twig_test_empty((isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 86, $this->source); })()))) {
            // line 87
            echo "            <br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 87, $this->source); })()), 0, [], "array", false, false, false, 87), "iduser", [], "any", false, false, false, 87), "nom", [], "any", false, false, false, 87), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 87, $this->source); })()), 0, [], "array", false, false, false, 87), "iduser", [], "any", false, false, false, 87), "prenom", [], "any", false, false, false, 87), "html", null, true);
            echo "<br>
        ";
        }
        // line 89
        echo "    </div>
    <div class=\"reason\">
        <br>Pour avoir habilement défié les lois de la gravité
        et voler haut</div>
    <div class=\"reason\">
        <br>Avec un score final de : ";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "%</div>
    <div class=\"reason\">
        <br> Nasfi Eya<div>
            <div style=\"text-align: right;\">
        <script>
            var today = new Date();
            var formattedDate = today.getDate() + '/' + (today.getMonth() + 1) + '/' + today.getFullYear();
            document.write(formattedDate);
        </script>
    </div>
    <div style=\"text-align: center;\">
        <img src=\"/signatureeya.jpg\" alt=\"signature\">
    </div>

        <a href=\"https://www.linkedin.com/shareArticle?url=https://www.linkedin.com/feed/&title=Certificat%20d'ach%C3%A8vement%20de%20";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 108, $this->source); })()), 0, [], "array", false, false, false, 108), "nom", [], "any", false, false, false, 108), "html", null, true);
        echo "%20pour%20";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 108, $this->source); })()), 0, [], "array", false, false, false, 108), "iduser", [], "any", false, false, false, 108), "nom", [], "any", false, false, false, 108), "html", null, true);
        echo "%20";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 108, $this->source); })()), 0, [], "array", false, false, false, 108), "iduser", [], "any", false, false, false, 108), "prenom", [], "any", false, false, false, 108), "html", null, true);
        echo "%20pour%20Pour%20avoir%20habilement%20d%C3%A9fi%C3%A9%20les%20lois%20de%20la%20gravit%C3%A9%20et%20voler%20haut\" target=\"_blank\">
        <button> <i class=\"fa-brands fa-linkedin\"></i>
        </button>
    </a>
    <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certif_pdf", ["score" => (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 112, $this->source); })())]), "html", null, true);
        echo "\" target=\"_blank\">
        <button><i class=\"fa-solid fa-file-pdf\"></i></button>
    </a>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "certif.html.twig";
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
        return array (  182 => 112,  171 => 108,  154 => 94,  147 => 89,  139 => 87,  137 => 86,  130 => 81,  124 => 79,  122 => 78,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Certificat</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .container {
            border: 20px solid tan;
            width: 800px;
            height: 600px;
            margin: auto;
            padding: 20px;
        }

        .logo {
            color: tan;
            font-size: 24px;
            font-weight: bold;
        }

        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }

        .assignment {
            margin: 20px;
            font-size: 24px;
        }

        .person {
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 600px;
        }

        .reason {
            margin: 20px;
            font-size: 20px;
        }

        img {
            vertical-align: middle;
            margin-right: 10px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            background-color: tan;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class=\"container\">
    <div class=\"logo\">
        <img src=\"/9A.png\" alt=\"logo\">9ariny-Academy</div>
    <div class=\"marquee\">
        {% if quizs is not empty %}
            Certificat d'achèvement de {{ quizs[0].nom }}
        {% endif %}
    </div>
    <div class=\"assignment\">
        La certificat presente pour
    </div>
    <div class=\"person\">
        {% if quizs is not empty %}
            <br>{{ quizs[0].iduser.nom }} {{ quizs[0].iduser.prenom }}<br>
        {% endif %}
    </div>
    <div class=\"reason\">
        <br>Pour avoir habilement défié les lois de la gravité
        et voler haut</div>
    <div class=\"reason\">
        <br>Avec un score final de : {{ score }}%</div>
    <div class=\"reason\">
        <br> Nasfi Eya<div>
            <div style=\"text-align: right;\">
        <script>
            var today = new Date();
            var formattedDate = today.getDate() + '/' + (today.getMonth() + 1) + '/' + today.getFullYear();
            document.write(formattedDate);
        </script>
    </div>
    <div style=\"text-align: center;\">
        <img src=\"/signatureeya.jpg\" alt=\"signature\">
    </div>

        <a href=\"https://www.linkedin.com/shareArticle?url=https://www.linkedin.com/feed/&title=Certificat%20d'ach%C3%A8vement%20de%20{{ quizs[0].nom }}%20pour%20{{ quizs[0].iduser.nom }}%20{{ quizs[0].iduser.prenom }}%20pour%20Pour%20avoir%20habilement%20d%C3%A9fi%C3%A9%20les%20lois%20de%20la%20gravit%C3%A9%20et%20voler%20haut\" target=\"_blank\">
        <button> <i class=\"fa-brands fa-linkedin\"></i>
        </button>
    </a>
    <a href=\"{{ path('app_certif_pdf', { 'score': score }) }}\" target=\"_blank\">
        <button><i class=\"fa-solid fa-file-pdf\"></i></button>
    </a>
</div>
</body>
</html>
", "certif.html.twig", "C:\\Users\\Eya\\projet\\templates\\certif.html.twig");
    }
}
