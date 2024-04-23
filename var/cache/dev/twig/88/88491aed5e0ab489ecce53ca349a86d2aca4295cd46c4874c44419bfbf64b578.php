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

/* /questions/affiche.html.twig */
class __TwigTemplate_e62b22814f3ab8369da9eb8018c8f286203528fb67483aefc0442b1f6694a220 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/questions/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/questions/affiche.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title> ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
     <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"style.css\" />
";
        // line 16
        $this->displayBlock('css', $context, $blocks);
        // line 39
        echo "</head>

<body>
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 457
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " eLEARNING - eLearning HTML Template</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 17
        echo "    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "    <!-- Spinner Start -->
   
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-10 px-lg-25\">
       <h1 class=\"m-0 text-primary\"><img  src=\"/9A.png\" >9arinyAcademy</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                               <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-item nav-link \">Accueil</a>
                <a href=\"\" class=\"nav-item nav-link \">Cours</a>
                 <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherfront");
        echo "\" class=\"nav-item nav-link active\">Quizs</a>
                  <a href=\"evenement.html.twig\" class=\"nav-item nav-link\">Evenements</a>
                  <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation");
        echo "\" class=\"nav-item nav-link\">Reclamations</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Plus</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherclubfront");
        echo "\" class=\"dropdown-item\">Clubs</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Paiements </a>
                        <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        echo "\" class=\"dropdown-item\">Notre Equipe</a>
                        <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" class=\"dropdown-item\">A propos</a>
                        <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"dropdown-item\">Contactez-nous</a>
                        <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\" class=\"dropdown-item\">Emplacement</a>


                    </div>
                </div>
            </div>
            <a href=\"\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Rejoindrez-Nous<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Header Start -->
    <div class=\"container-fluid bg-primary py-5 mb-5 page-header\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-3 text-white animated slideInDown\">Liste des quiz</h1>
                </div>
            </div>
        </div>
    </div>
  <div class=\"question-container\">
    <div class=\"row\">
<script>function changeValue() {
    if (value == 0 ) {
            window.location.href = \"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherfront");
        echo "\";

        clearInterval(timerInterval);
        alert('Temps écoulé ! ');
        return;
    }
  document.getElementById(\"demo\").innerHTML = --value;
}
var timerInterval = null;
function start() {
    clearInterval(timerInterval);
  value = 60;
  timerInterval = setInterval(changeValue, 1000);  
  document.getElementById(\"demo\").innerHTML = value;
}

function stop() {
    clearInterval(timerInterval); // Arrêter l'intervalle de temps
    value = 60; // Réinitialiser la valeur à 5
    document.getElementById(\"demo\").innerHTML = value; // Mettre à jour l'affichage
  
}</script>
          ";
        // line 117
        $context["idquiz"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "request", [], "any", false, false, false, 117), "get", ["idquiz"], "method", false, false, false, 117);
        // line 118
        echo "          <p align=\"right\" id=\"demo\">60</p>
          

<h1>Questions de la quiz ";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["idquiz"]) || array_key_exists("idquiz", $context) ? $context["idquiz"] : (function () { throw new RuntimeError('Variable "idquiz" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "</h1>

        <fieldset>
        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 125
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["q"], "idquiz", [], "any", false, false, false, 125), "idquiz", [], "any", false, false, false, 125) == (isset($context["idquiz"]) || array_key_exists("idquiz", $context) ? $context["idquiz"] : (function () { throw new RuntimeError('Variable "idquiz" does not exist.', 125, $this->source); })()))) {
                // line 126
                echo "            <legend>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 126), "html", null, true);
                echo "</legend>
            <div>
                       <input type=\"radio\" id=\"op1_";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 128), "html", null, true);
                echo "\" name=\"option_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 128), "html", null, true);
                echo "\" value=\"op1\" onclick=\"check(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 128), "html", null, true);
                echo ")\"/>
                <label for=\"op1_";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 129), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "op1", [], "any", false, false, false, 129), "html", null, true);
                echo "</label>
            </div>
            <div>
                <input type=\"radio\" id=\"op2_";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 132), "html", null, true);
                echo "\" value=\"op2\" name=\"option_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 132), "html", null, true);
                echo "\" onclick=\"check(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 132), "html", null, true);
                echo ")\" />
                <label for=\"op2_";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 133), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "op2", [], "any", false, false, false, 133), "html", null, true);
                echo "</label>
            </div>
            <div>
                <input type=\"radio\" id=\"op3_";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 136), "html", null, true);
                echo "\" value=\"op3\" name=\"option_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 136), "html", null, true);
                echo "\" onclick=\"check(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 136), "html", null, true);
                echo ")\"/>
                <label for=\"op3_";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 137), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "op3", [], "any", false, false, false, 137), "html", null, true);
                echo "</label>
                            </div>
            <div>
                <input  hidden id=\"answer_";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 140), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "answer", [], "any", false, false, false, 140), "html", null, true);
                echo "\" name=\"answer_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 140), "html", null, true);
                echo "\"/>
                <label hidden for=\"answer_";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 141), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "answer", [], "any", false, false, false, 141), "html", null, true);
                echo "</label>
            </div>

 <div>
                <input  hidden id=\"question_";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 145), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 145), "html", null, true);
                echo "\" name=\"question";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 145), "html", null, true);
                echo "\"/>
                <label hidden for=\"question_";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquest", [], "any", false, false, false, 146), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 146), "html", null, true);
                echo "</label>
            </div>
        ";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 148, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["qu"]) {
                    // line 149
                    echo "
<script>

function check(idquest) {
var notefinal=0;
  if (document.getElementById(\"op3_\" + idquest).checked) {
    var answer = document.getElementById(\"answer_\" + idquest).value;
        var sc1=0;
    if (answer === \"op3\") {
     notefinal=notefinal+1;  
alert(+notefinal);
return true
        }
        else
        {
            return sc1;

        }}

  if (document.getElementById(\"op1_\" + idquest).checked) {
    var answer = document.getElementById(\"answer_\" + idquest).value;

    if (answer === \"op1\") {
     notefinal=notefinal+1;  

alert (+notefinal);


        }
        else
        {
            return sc2;

        }
        return notefinal;
  }
 if (document.getElementById(\"op2_\" + idquest).checked) {
    var answer = document.getElementById(\"answer_\" + idquest).value;
    if (answer === \"op2\") {
     notefinal=notefinal+1;  

alert (+notefinal);

        }
        else
        {
            
            return sc3;

        }

  }
  alert(+notefinal);
 
return notefinal
}
function notefinal() {
            var pourcentageScore = (+notefinal / 10) * 100;
            alert(\"Votre score final est de : \" + pourcentageScore + \"%\");
        }
</script>
<script>var sc1 = 0;
var sc2 = 0;
var sc3 = 0;
    var totalQuestions = ";
                    // line 213
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idquiz", [], "any", false, false, false, 213)), "html", null, true);
                    echo ";

function check(idquest) {
    if (document.getElementById(\"op3_\" + idquest).checked) {
        var answer = document.getElementById(\"answer_\" + idquest).value;
        if (answer === \"op3\") {
            sc1++;
            return true;
        }
    }

    if (document.getElementById(\"op1_\" + idquest).checked) {
        var answer = document.getElementById(\"answer_\" + idquest).value;
        if (answer === \"op1\") {
            sc2++;
            return true;
        }
    }

    if (document.getElementById(\"op2_\" + idquest).checked) {
        var answer = document.getElementById(\"answer_\" + idquest).value;
        if (answer === \"op2\") {
            sc3++;
            return true;
        }
    }

    return false;
}
 function afficherScoreFinal() {
        var scoreFinal = sc1 + sc2 + sc3;
         var pourcentageScore = (scoreFinal / totalQuestions) * 100;
    alert(\"Votre score final est de : \" + pourcentageScore.toFixed(2) + \"%\" );
     if (pourcentageScore > 50) {
    window.location.href = \"";
                    // line 247
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certif");
                    echo "?score=\" + pourcentageScore.toFixed(2);
              ";
                    // line 248
                    $context["scoree"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 248, $this->source); })()), "request", [], "any", false, false, false, 248), "get", ["pourcentageScore"], "method", false, false, false, 248);
                    // line 249
                    echo "
     }
    }
</script>

<script>
window.onload = () => {
    // On va chercher toutes les étoiles
    const stars = document.querySelectorAll(\".la-star\");
    
    // On va chercher l'input
    const note = document.querySelector(\"#note\");

    // On boucle sur les étoiles pour le ajouter des écouteurs d'évènements
    for(star of stars){
        // On écoute le survol
        star.addEventListener(\"mouseover\", function(){
            resetStars();
            this.style.color = \"red\";
            this.classList.add(\"las\");
            this.classList.remove(\"lar\");
            // L'élément précédent dans le DOM (de même niveau, balise soeur)
            let previousStar = this.previousElementSibling;

            while(previousStar){
                // On passe l'étoile qui précède en rouge
                previousStar.style.color = \"red\";
                previousStar.classList.add(\"las\");
                previousStar.classList.remove(\"lar\");
                // On récupère l'étoile qui la précède
                previousStar = previousStar.previousElementSibling;
            }
        });

        // On écoute le clic
        star.addEventListener(\"click\", function(){
            note.value = this.dataset.value;
        });

        star.addEventListener(\"mouseout\", function(){
            resetStars(note.value);
        });
    }

    /**
     * Reset des étoiles en vérifiant la note dans l'input caché
     * @param {number} note 
     */
    function resetStars(note = 0){
        for(star of stars){
            if(star.dataset.value > note){
                star.style.color = \"black\";
                star.classList.add(\"lar\");
                star.classList.remove(\"las\");
            }else{
                star.style.color = \"red\";
                star.classList.add(\"las\");
                star.classList.remove(\"lar\");
            }
        }
    }
}</script>
              

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 314
                echo "
        ";
            }
            // line 316
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "    </div>
";
        // line 318
        $context["note"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 318, $this->source); })()), "session", [], "any", false, false, false, 318), "get", ["note", 0], "method", false, false, false, 318);
        // line 319
        echo "          ";
        $context["idquiz"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "request", [], "any", false, false, false, 319), "get", ["idquiz"], "method", false, false, false, 319);
        // line 320
        echo "
<form action=\"";
        // line 321
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherfront");
        echo "\" method=\"POST\">
";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 322, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["qu"]) {
            // line 323
            $context["idquiz"] = twig_get_attribute($this->env, $this->source, $context["qu"], "idquiz", [], "any", false, false, false, 323);
            // line 324
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["qu"], "idquiz", [], "any", false, false, false, 324) == (isset($context["idquiz"]) || array_key_exists("idquiz", $context) ? $context["idquiz"] : (function () { throw new RuntimeError('Variable "idquiz" does not exist.', 324, $this->source); })()))) {
                // line 325
                echo "    <div class=\"stars\" data-rating=\"";
                echo twig_escape_filter($this->env, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 325, $this->source); })()), "html", null, true);
                echo "\" data-idquiz=\"";
                echo twig_escape_filter($this->env, (isset($context["idquiz"]) || array_key_exists("idquiz", $context) ? $context["idquiz"] : (function () { throw new RuntimeError('Variable "idquiz" does not exist.', 325, $this->source); })()), "html", null, true);
                echo "\">
        ";
            }
            // line 327
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "
            <i class=\"lar la-star\" data-value=\"1\"></i><i class=\"lar la-star\" data-value=\"2\"></i><i class=\"lar la-star\" data-value=\"3\"></i><i class=\"lar la-star\" data-value=\"4\"></i><i class=\"lar la-star\" data-value=\"5\"></i>
        </div>
        <input type=\"hidden\" name=\"note\" id=\"note\" value=\"";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 331, $this->source); })()), "html", null, true);
        echo "\">
                  ";
        // line 332
        $context["score"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 332, $this->source); })()), "request", [], "any", false, false, false, 332), "get", ["afficherScoreFinal()"], "method", false, false, false, 332);
        // line 333
        echo "            <button type=\"submit\">Envoyer</button>

            <a  type=\"button\" id=\"next-btn\" class=\"btn btn-primary\" onclick=\"afficherScoreFinal()\">Terminer</a>

</form>


      
             
    </div>
        </div>
            </div>
    <!-- 404 End -->
      <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Quick Link</h4>
                    <a class=\"btn btn-link\" href=\"\">A propos</a>
                    <a class=\"btn btn-link\" href=\"\">Contactez-nous</a>
                    <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                    <a class=\"btn btn-link\" href=\"\">Conditions</a>
                    <a class=\"btn btn-link\" href=\"\">Aide</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Contact</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Gallerie</h4>
                    <div class=\"row g-2 pt-2\">
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Ton Site Nom</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
                        Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"footer-menu\">
                            <a href=\"\">Accueil</a>
                            <a href=\"\">Cookies</a>
                            <a href=\"\">Aide</a>
                            <a href=\"\">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

";
        // line 431
        $this->displayBlock('js', $context, $blocks);
        // line 454
        echo "
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 431
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 432
        echo "    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
    <script>
    

document.addEventListener('DOMContentLoaded', function () {
    start();
});

window.addEventListener('load', function () {
    start();
});
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/questions/affiche.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  731 => 432,  721 => 431,  709 => 454,  707 => 431,  607 => 333,  605 => 332,  601 => 331,  596 => 328,  590 => 327,  582 => 325,  579 => 324,  577 => 323,  573 => 322,  569 => 321,  566 => 320,  563 => 319,  561 => 318,  558 => 317,  552 => 316,  548 => 314,  478 => 249,  476 => 248,  472 => 247,  435 => 213,  369 => 149,  365 => 148,  358 => 146,  350 => 145,  341 => 141,  333 => 140,  325 => 137,  317 => 136,  309 => 133,  301 => 132,  293 => 129,  285 => 128,  279 => 126,  276 => 125,  272 => 124,  266 => 121,  261 => 118,  259 => 117,  234 => 95,  207 => 71,  203 => 70,  199 => 69,  195 => 68,  190 => 66,  183 => 62,  178 => 60,  173 => 58,  156 => 43,  146 => 42,  115 => 17,  105 => 16,  86 => 7,  76 => 457,  74 => 42,  69 => 39,  67 => 16,  57 => 8,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title> {% block title %} eLEARNING - eLearning HTML Template</title>{% endblock %}
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
     <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"style.css\" />
{% block css %}
    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body>
{% block body %}
    <!-- Spinner Start -->
   
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-10 px-lg-25\">
       <h1 class=\"m-0 text-primary\"><img  src=\"/9A.png\" >9arinyAcademy</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                               <a href=\"{{path('home')}}\" class=\"nav-item nav-link \">Accueil</a>
                <a href=\"\" class=\"nav-item nav-link \">Cours</a>
                 <a href=\"{{path('app_afficherfront')}}\" class=\"nav-item nav-link active\">Quizs</a>
                  <a href=\"evenement.html.twig\" class=\"nav-item nav-link\">Evenements</a>
                  <a href=\"{{path('app_reclamation')}}\" class=\"nav-item nav-link\">Reclamations</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Plus</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"{{path('app_afficherclubfront')}}\" class=\"dropdown-item\">Clubs</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Paiements </a>
                        <a href=\"{{path('app_team')}}\" class=\"dropdown-item\">Notre Equipe</a>
                        <a href=\"{{path('app_about')}}\" class=\"dropdown-item\">A propos</a>
                        <a href=\"{{path('app_contact')}}\" class=\"dropdown-item\">Contactez-nous</a>
                        <a href=\"{{path('app_map')}}\" class=\"dropdown-item\">Emplacement</a>


                    </div>
                </div>
            </div>
            <a href=\"\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Rejoindrez-Nous<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Header Start -->
    <div class=\"container-fluid bg-primary py-5 mb-5 page-header\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-3 text-white animated slideInDown\">Liste des quiz</h1>
                </div>
            </div>
        </div>
    </div>
  <div class=\"question-container\">
    <div class=\"row\">
<script>function changeValue() {
    if (value == 0 ) {
            window.location.href = \"{{path('app_afficherfront')}}\";

        clearInterval(timerInterval);
        alert('Temps écoulé ! ');
        return;
    }
  document.getElementById(\"demo\").innerHTML = --value;
}
var timerInterval = null;
function start() {
    clearInterval(timerInterval);
  value = 60;
  timerInterval = setInterval(changeValue, 1000);  
  document.getElementById(\"demo\").innerHTML = value;
}

function stop() {
    clearInterval(timerInterval); // Arrêter l'intervalle de temps
    value = 60; // Réinitialiser la valeur à 5
    document.getElementById(\"demo\").innerHTML = value; // Mettre à jour l'affichage
  
}</script>
          {% set idquiz = app.request.get('idquiz') %}
          <p align=\"right\" id=\"demo\">60</p>
          

<h1>Questions de la quiz {{ idquiz }}</h1>

        <fieldset>
        {% for q in questions %}
          {% if q.idquiz.idquiz== idquiz  %}
            <legend>{{ q.question }}</legend>
            <div>
                       <input type=\"radio\" id=\"op1_{{ q.idquest }}\" name=\"option_{{ q.idquest }}\" value=\"op1\" onclick=\"check({{ q.idquest }})\"/>
                <label for=\"op1_{{ q.idquest }}\">{{ q.op1 }}</label>
            </div>
            <div>
                <input type=\"radio\" id=\"op2_{{ q.idquest }}\" value=\"op2\" name=\"option_{{ q.idquest }}\" onclick=\"check({{ q.idquest }})\" />
                <label for=\"op2_{{ q.idquest }}\">{{ q.op2 }}</label>
            </div>
            <div>
                <input type=\"radio\" id=\"op3_{{ q.idquest }}\" value=\"op3\" name=\"option_{{ q.idquest }}\" onclick=\"check({{ q.idquest }})\"/>
                <label for=\"op3_{{ q.idquest }}\">{{ q.op3 }}</label>
                            </div>
            <div>
                <input  hidden id=\"answer_{{ q.idquest }}\" value=\"{{ q.answer }}\" name=\"answer_{{ q.idquest }}\"/>
                <label hidden for=\"answer_{{ q.idquest }}\">{{ q.answer }}</label>
            </div>

 <div>
                <input  hidden id=\"question_{{ q.idquest }}\" value=\"{{ q.question }}\" name=\"question{{ q.idquest }}\"/>
                <label hidden for=\"question_{{ q.idquest }}\">{{ q.question }}</label>
            </div>
        {% for qu in quizs %}

<script>

function check(idquest) {
var notefinal=0;
  if (document.getElementById(\"op3_\" + idquest).checked) {
    var answer = document.getElementById(\"answer_\" + idquest).value;
        var sc1=0;
    if (answer === \"op3\") {
     notefinal=notefinal+1;  
alert(+notefinal);
return true
        }
        else
        {
            return sc1;

        }}

  if (document.getElementById(\"op1_\" + idquest).checked) {
    var answer = document.getElementById(\"answer_\" + idquest).value;

    if (answer === \"op1\") {
     notefinal=notefinal+1;  

alert (+notefinal);


        }
        else
        {
            return sc2;

        }
        return notefinal;
  }
 if (document.getElementById(\"op2_\" + idquest).checked) {
    var answer = document.getElementById(\"answer_\" + idquest).value;
    if (answer === \"op2\") {
     notefinal=notefinal+1;  

alert (+notefinal);

        }
        else
        {
            
            return sc3;

        }

  }
  alert(+notefinal);
 
return notefinal
}
function notefinal() {
            var pourcentageScore = (+notefinal / 10) * 100;
            alert(\"Votre score final est de : \" + pourcentageScore + \"%\");
        }
</script>
<script>var sc1 = 0;
var sc2 = 0;
var sc3 = 0;
    var totalQuestions = {{ q.idquiz |length }};

function check(idquest) {
    if (document.getElementById(\"op3_\" + idquest).checked) {
        var answer = document.getElementById(\"answer_\" + idquest).value;
        if (answer === \"op3\") {
            sc1++;
            return true;
        }
    }

    if (document.getElementById(\"op1_\" + idquest).checked) {
        var answer = document.getElementById(\"answer_\" + idquest).value;
        if (answer === \"op1\") {
            sc2++;
            return true;
        }
    }

    if (document.getElementById(\"op2_\" + idquest).checked) {
        var answer = document.getElementById(\"answer_\" + idquest).value;
        if (answer === \"op2\") {
            sc3++;
            return true;
        }
    }

    return false;
}
 function afficherScoreFinal() {
        var scoreFinal = sc1 + sc2 + sc3;
         var pourcentageScore = (scoreFinal / totalQuestions) * 100;
    alert(\"Votre score final est de : \" + pourcentageScore.toFixed(2) + \"%\" );
     if (pourcentageScore > 50) {
    window.location.href = \"{{ path('app_certif') }}?score=\" + pourcentageScore.toFixed(2);
              {% set scoree = app.request.get('pourcentageScore') %}

     }
    }
</script>

<script>
window.onload = () => {
    // On va chercher toutes les étoiles
    const stars = document.querySelectorAll(\".la-star\");
    
    // On va chercher l'input
    const note = document.querySelector(\"#note\");

    // On boucle sur les étoiles pour le ajouter des écouteurs d'évènements
    for(star of stars){
        // On écoute le survol
        star.addEventListener(\"mouseover\", function(){
            resetStars();
            this.style.color = \"red\";
            this.classList.add(\"las\");
            this.classList.remove(\"lar\");
            // L'élément précédent dans le DOM (de même niveau, balise soeur)
            let previousStar = this.previousElementSibling;

            while(previousStar){
                // On passe l'étoile qui précède en rouge
                previousStar.style.color = \"red\";
                previousStar.classList.add(\"las\");
                previousStar.classList.remove(\"lar\");
                // On récupère l'étoile qui la précède
                previousStar = previousStar.previousElementSibling;
            }
        });

        // On écoute le clic
        star.addEventListener(\"click\", function(){
            note.value = this.dataset.value;
        });

        star.addEventListener(\"mouseout\", function(){
            resetStars(note.value);
        });
    }

    /**
     * Reset des étoiles en vérifiant la note dans l'input caché
     * @param {number} note 
     */
    function resetStars(note = 0){
        for(star of stars){
            if(star.dataset.value > note){
                star.style.color = \"black\";
                star.classList.add(\"lar\");
                star.classList.remove(\"las\");
            }else{
                star.style.color = \"red\";
                star.classList.add(\"las\");
                star.classList.remove(\"lar\");
            }
        }
    }
}</script>
              

    {% endfor %}

        {% endif %}
    {% endfor %}
    </div>
{% set note = app.session.get('note', 0) %}
          {% set idquiz = app.request.get('idquiz') %}

<form action=\"{{path('app_afficherfront')}}\" method=\"POST\">
{% for qu in quizs %}
{% set idquiz = qu.idquiz %}
  {% if qu.idquiz == idquiz  %}
    <div class=\"stars\" data-rating=\"{{ note }}\" data-idquiz=\"{{ idquiz }}\">
        {% endif %}
        {% endfor %}

            <i class=\"lar la-star\" data-value=\"1\"></i><i class=\"lar la-star\" data-value=\"2\"></i><i class=\"lar la-star\" data-value=\"3\"></i><i class=\"lar la-star\" data-value=\"4\"></i><i class=\"lar la-star\" data-value=\"5\"></i>
        </div>
        <input type=\"hidden\" name=\"note\" id=\"note\" value=\"{{ note }}\">
                  {% set score = app.request.get('afficherScoreFinal()') %}
            <button type=\"submit\">Envoyer</button>

            <a  type=\"button\" id=\"next-btn\" class=\"btn btn-primary\" onclick=\"afficherScoreFinal()\">Terminer</a>

</form>


      
             
    </div>
        </div>
            </div>
    <!-- 404 End -->
      <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Quick Link</h4>
                    <a class=\"btn btn-link\" href=\"\">A propos</a>
                    <a class=\"btn btn-link\" href=\"\">Contactez-nous</a>
                    <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                    <a class=\"btn btn-link\" href=\"\">Conditions</a>
                    <a class=\"btn btn-link\" href=\"\">Aide</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Contact</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Gallerie</h4>
                    <div class=\"row g-2 pt-2\">
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Ton Site Nom</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
                        Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"footer-menu\">
                            <a href=\"\">Accueil</a>
                            <a href=\"\">Cookies</a>
                            <a href=\"\">Aide</a>
                            <a href=\"\">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

{% block js %}
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
    <script>
    

document.addEventListener('DOMContentLoaded', function () {
    start();
});

window.addEventListener('load', function () {
    start();
});
    </script>
    {% endblock %}

</body>
{% endblock %}
</html>", "/questions/affiche.html.twig", "C:\\Users\\Eya\\projet\\templates\\questions\\affiche.html.twig");
    }
}
