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

/* base.html.twig */
class __TwigTemplate_6883b38751e56b5607d347d64fa39d988a73278408ff956acbe8adad8781ef68 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        $this->displayBlock('css', $context, $blocks);
        // line 102
        echo "
</head>

<body>
";
        // line 106
        $this->displayBlock('body', $context, $blocks);
        // line 130
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "
 <link href=\"/style.css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap\" rel=\"stylesheet\">

<style>
 body{
\tmargin: 0;
\tpadding: 0;
\tdisplay: flex;
\tjustify-content: center;
\talign-items: center;
\tmin-height: 100vh;
\tfont-family: 'Jost', sans-serif;
\tbackground: linear-gradient(to bottom, #181d38, #06BBCC, #181d38);
}
.main{
\twidth: 400px;
\theight: 600px;
\tbackground: red;
\toverflow: hidden;
\tbackground: url(\"https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38\") no-repeat center/ cover;
\tborder-radius: 10px;
\tbox-shadow: 5px 20px 50px #000;
}
#chk{
\tdisplay: none;
}
.signup{
\tposition: relative;
\twidth:100%;
\theight: 100%;
}
label{
\tcolor: #fff;
\tfont-size: 2.3em;
\tjustify-content: center;
\tdisplay: flex;
\tmargin: 50px;
\tfont-weight: bold;
\tcursor: pointer;
\ttransition: .5s ease-in-out;
}
input{
\twidth: 60%;
\theight: 20px;
\tbackground: #e0dede;
\tjustify-content: center;
\tdisplay: flex;
\tmargin: 20px auto;
\tpadding: 10px;
\tborder: none;
\toutline: none;
\tborder-radius: 5px;
}
button{
\twidth: 60%;
\theight: 40px;
\tmargin: 10px auto;
\tjustify-content: center;
\tdisplay: block;
\tcolor: #fff;
\tbackground:#06BBCC;
\tfont-size: 1em;
\tfont-weight: bold;
\tmargin-top: 20px;
\toutline: none;
\tborder: none;
\tborder-radius: 5px;
\ttransition: .2s ease-in;
\tcursor: pointer;
}
button:hover{
\tbackground:#181d38;
}
.login{
\theight: 500px;
\tbackground: #eee;
\tborder-radius: 80% / 10%;
\ttransform: translateY(-180px);
\ttransition: .8s ease-in-out;
}
.login label{
\tcolor: #06BBCC;
\ttransform: scale(.6);
}

#chk:checked ~ .login{
\ttransform: translateY(-570px);
}
#chk:checked ~ .login label{
\ttransform: scale(1);\t
}
#chk:checked ~ .signup label{
\ttransform: scale(.6);
}
</style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 107
        echo "
\t<div class=\"main\">  \t
\t\t<input type=\"checkbox\" id=\"chk\" aria-hidden=\"true\">
\t\t\t<div class=\"signup\">
\t\t\t\t<form>
\t\t\t\t\t<label for=\"chk\" aria-hidden=\"true\">Inscription</label>
    ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form');
        echo "
                </form>
                 

\t\t\t</div>

\t\t\t<div class=\"login\">
\t\t\t\t<form>
\t\t\t\t\t<label for=\"chk\" aria-hidden=\"true\">Connexion</label>
\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email\" required=\"\">
\t\t\t\t\t<input type=\"password\" name=\"pswd\" placeholder=\"Password\" required=\"\">
\t\t\t\t\t<button>Se connecter</button>
\t\t\t\t</form>
\t\t\t</div>
\t</div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  204 => 113,  196 => 107,  186 => 106,  80 => 5,  70 => 4,  60 => 130,  58 => 106,  52 => 102,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
{% block css %}

 <link href=\"/style.css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap\" rel=\"stylesheet\">

<style>
 body{
\tmargin: 0;
\tpadding: 0;
\tdisplay: flex;
\tjustify-content: center;
\talign-items: center;
\tmin-height: 100vh;
\tfont-family: 'Jost', sans-serif;
\tbackground: linear-gradient(to bottom, #181d38, #06BBCC, #181d38);
}
.main{
\twidth: 400px;
\theight: 600px;
\tbackground: red;
\toverflow: hidden;
\tbackground: url(\"https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38\") no-repeat center/ cover;
\tborder-radius: 10px;
\tbox-shadow: 5px 20px 50px #000;
}
#chk{
\tdisplay: none;
}
.signup{
\tposition: relative;
\twidth:100%;
\theight: 100%;
}
label{
\tcolor: #fff;
\tfont-size: 2.3em;
\tjustify-content: center;
\tdisplay: flex;
\tmargin: 50px;
\tfont-weight: bold;
\tcursor: pointer;
\ttransition: .5s ease-in-out;
}
input{
\twidth: 60%;
\theight: 20px;
\tbackground: #e0dede;
\tjustify-content: center;
\tdisplay: flex;
\tmargin: 20px auto;
\tpadding: 10px;
\tborder: none;
\toutline: none;
\tborder-radius: 5px;
}
button{
\twidth: 60%;
\theight: 40px;
\tmargin: 10px auto;
\tjustify-content: center;
\tdisplay: block;
\tcolor: #fff;
\tbackground:#06BBCC;
\tfont-size: 1em;
\tfont-weight: bold;
\tmargin-top: 20px;
\toutline: none;
\tborder: none;
\tborder-radius: 5px;
\ttransition: .2s ease-in;
\tcursor: pointer;
}
button:hover{
\tbackground:#181d38;
}
.login{
\theight: 500px;
\tbackground: #eee;
\tborder-radius: 80% / 10%;
\ttransform: translateY(-180px);
\ttransition: .8s ease-in-out;
}
.login label{
\tcolor: #06BBCC;
\ttransform: scale(.6);
}

#chk:checked ~ .login{
\ttransform: translateY(-570px);
}
#chk:checked ~ .login label{
\ttransform: scale(1);\t
}
#chk:checked ~ .signup label{
\ttransform: scale(.6);
}
</style>
    {% endblock %}

</head>

<body>
{% block body %}

\t<div class=\"main\">  \t
\t\t<input type=\"checkbox\" id=\"chk\" aria-hidden=\"true\">
\t\t\t<div class=\"signup\">
\t\t\t\t<form>
\t\t\t\t\t<label for=\"chk\" aria-hidden=\"true\">Inscription</label>
    {{ form(form) }}
                </form>
                 

\t\t\t</div>

\t\t\t<div class=\"login\">
\t\t\t\t<form>
\t\t\t\t\t<label for=\"chk\" aria-hidden=\"true\">Connexion</label>
\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email\" required=\"\">
\t\t\t\t\t<input type=\"password\" name=\"pswd\" placeholder=\"Password\" required=\"\">
\t\t\t\t\t<button>Se connecter</button>
\t\t\t\t</form>
\t\t\t</div>
\t</div>
</body>
{% endblock %}
</html>", "base.html.twig", "C:\\Users\\Eya\\projet\\templates\\base.html.twig");
    }
}
