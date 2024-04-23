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

/* home.html.twig */
class __TwigTemplate_719473996bb63857e5d32d2903abf0cfed9035a7e3131c218ccafc3b50bb2c90 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"style.css\" />
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
";
        // line 16
        $this->displayBlock('css', $context, $blocks);
        // line 39
        echo "</head>

<body>
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 656
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
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
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"css/style.css\" rel=\"stylesheet\">
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
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-10 px-lg-25\">
       <h1 class=\"m-0 text-primary\"><img  src=\"/9A.png\" >9arinyAcademy</h1>
        </a>
      <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"dropdown\">
       <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"label label-pill label-danger count\" style=\"border-radius:10px;\"></span> <span class=\"glyphicon glyphicon-bell\" style=\"font-size:18px;\"></span></a>
       <ul class=\"dropdown-menu\">
        ";
        // line 61
        $context["reclamationsTraitees"] = [];
        // line 62
        echo "
";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reponses"]) || array_key_exists("Reponses", $context) ? $context["Reponses"] : (function () { throw new RuntimeError('Variable "Reponses" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 64
            echo "    ";
            $context["reclamation"] = twig_get_attribute($this->env, $this->source, $context["reponse"], "idrec", [], "any", false, false, false, 64);
            // line 65
            echo "
    ";
            // line 67
            echo "    ";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 67, $this->source); })()), "idrec", [], "any", false, false, false, 67), (isset($context["reclamationsTraitees"]) || array_key_exists("reclamationsTraitees", $context) ? $context["reclamationsTraitees"] : (function () { throw new RuntimeError('Variable "reclamationsTraitees" does not exist.', 67, $this->source); })()))) {
                // line 68
                echo "        ";
                $context["reclamationsTraitees"] = twig_array_merge((isset($context["reclamationsTraitees"]) || array_key_exists("reclamationsTraitees", $context) ? $context["reclamationsTraitees"] : (function () { throw new RuntimeError('Variable "reclamationsTraitees" does not exist.', 68, $this->source); })()), [twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 68, $this->source); })()), "idrec", [], "any", false, false, false, 68)]);
                // line 69
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 69, $this->source); })()), "iduser", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69) == 4)) {
                    // line 70
                    echo "        ";
                    // line 71
                    echo "        <li><a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherreclamationfront");
                    echo "\" class=\"dropdown-item\">
            L'administrateur a répondu à votre réclamation ";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "contenu", [], "any", false, false, false, 72), "html", null, true);
                    echo " qui a comme titre ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 72, $this->source); })()), "titre", [], "any", false, false, false, 72), "html", null, true);
                    echo "
        </a></li>
    ";
                }
                // line 75
                echo "        ";
            }
            // line 76
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
     </ul>
           </li>
           </ul>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-item nav-link active\">Accueil</a>
                <a href=\"\" class=\"nav-item nav-link \">Cours</a>
                 <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherfront");
        echo "\" class=\"nav-item nav-link \">Quizs</a>
                                  <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affichereventfront");
        echo "\" class=\"nav-item nav-link \" >Evenements</a>
                  <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation");
        echo "\" class=\"nav-item nav-link \">Reclamations</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Plus</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherclubfront");
        echo "\" class=\"dropdown-item\">Clubs</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Paiements </a>
                        <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        echo "\" class=\"dropdown-item\">Notre Equipe</a>
                        <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" class=\"dropdown-item\">A propos</a>
                        <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"dropdown-item\">Contactez-nous</a>
                        <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\" class=\"dropdown-item\">Emplacement</a>


                    </div>
                </div>
            </div>
            <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription");
        echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Rejoindrez-Nous<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"img/carousel-1.jpg\" alt=\"\">
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-sm-10 col-lg-8\">
                                <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Les meilleurs cours</h5>
                                <h1 class=\"display-3 text-white animated slideInDown\">Les meilleurs cours sont disponibles dans notre centre</h1>
                                <p class=\"fs-5 text-white mb-4 pb-2\">Les meilleurs cours sont disponibles dans notre centre rejoinnrez-nous pour plus d'informations</p>
                                <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Lire plus</a>
                                <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription");
        echo "\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Rejoindrez-Nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"img/carousel-2.jpg\" alt=\"\">
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-sm-10 col-lg-8\">
                                <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Les meilleurs cours</h5>
                                <h1 class=\"display-3 text-white animated slideInDown\">Les meilleurs cours sont disponibles dans notre centre</h1>
                                <p class=\"fs-5 text-white mb-4 pb-2\">Les meilleurs cours sont disponibles dans notre centre rejoinnrez-nous pour plus d'informations</p>
                                <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Lire plus</a>
                                <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription");
        echo "\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Rejoindrez-Nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-graduation-cap text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Instructeurs qualifiés</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-globe text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-home text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Accueil</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-book-open text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Les formations qualifiés</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"img/about.jpg\" alt=\"\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <h6 class=\"section-title bg-white text-start text-primary pe-3\">About Us</h6>
                    <h1 class=\"mb-4\">Bienvenue à 9arinyAcademy</h1>
                    <p class=\"mb-4\">Chers étudiants, vous êtes au cœur de votre parcours de formation, et nous sommes là pour vous accompagner à chaque étape. Vos efforts et votre détermination sont les clés de votre succès. Que vous rencontriez des défis ou des moments de doute, rappelez-vous que chaque pas que vous faites vous rapproche de vos objectifs. Votre passion et votre engagement sont admirables, et nous sommes fiers de vous voir grandir et évoluer. Continuez à travailler avec passion et persévérance, car chaque nouvelle compétence acquise vous ouvre de nouvelles portes vers un avenir brillant. Vous êtes capables de grandes choses, et nous croyons en vous. Ensemble, poursuivons ce voyage d'apprentissage et de croissance, car votre réussite est notre plus grande fierté</p>
                    <div class=\"row gy-2 gx-4 mb-4\">
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Instructeurs qualifiés</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Certificats International</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Instructeurs qualifiés</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Certificats International</p>
                        </div>
                    </div>
                    <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"\">Lire plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class=\"container-xxl py-5 category\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Categories</h6>
                <h1 class=\"mb-5\">Courses Categories</h1>
            </div>
            <div class=\"row g-3\">
                <div class=\"col-lg-7 col-md-6\">
                    <div class=\"row g-3\">
                        <div class=\"col-lg-12 col-md-12 wow zoomIn\" data-wow-delay=\"0.1s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-1.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">web</h5>
                                    <small class=\"text-primary\">49 Cours</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.3s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-2.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Graphiques design</h5>
                                    <small class=\"text-primary\">49 Cours</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.5s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-3.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Video Editing</h5>
                                    <small class=\"text-primary\">49 Cours</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6 wow zoomIn\" data-wow-delay=\"0.7s\" style=\"min-height: 350px;\">
                    <a class=\"position-relative d-block h-100 overflow-hidden\" href=\"\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"img/cat-4.jpg\" alt=\"\" style=\"object-fit: cover;\">
                        <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin:  1px;\">
                            <h5 class=\"m-0\">Marketing Enligne</h5>
                            <small class=\"text-primary\">49 Cours</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Cours</h6>
                <h1 class=\"mb-5\">Cours populart</h1>
            </div>
            <div class=\"row g-4 justify-content-center\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/course-1.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Lire plus</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Rejoindrez</a>
                            </div>
                        </div>
                        <div class=\"text-center p-4 pb-0\">
                            <h3 class=\"mb-0\">\$149.00</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class=\"d-flex border-top\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>30 Etudiants</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/course-2.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Lire plus</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Rejoindrez</a>
                            </div>
                        </div>
                        <div class=\"text-center p-4 pb-0\">
                            <h3 class=\"mb-0\">\$149.00</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class=\"d-flex border-top\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>30 Etudiants</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/course-3.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Lire plus</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Rejoindrez</a>
                            </div>
                        </div>
                        <div class=\"text-center p-4 pb-0\">
                            <h3 class=\"mb-0\">\$149.00</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class=\"d-flex border-top\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>30 Etudiants</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Instructeurs</h6>
                <h1 class=\"mb-5\">Expert Instructeurs</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"eyaa.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/eyaanasfi/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/eyaa_nasfi?igsh=MXh2c2pkNmN6c3plNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Nasfi Eya</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"arbi.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/hama.larbi.92\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Med Arbi Nciri</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"fonsi.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/amine.bhm\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/amineebelhaj?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Amine belhadj massoued</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"aziz.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/profile.php?id=100083993926016\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/melki_aziz13?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Melki Aziz</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                 <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"khouloud.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/khouloud.abid.5011\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/khouloud_abid_09?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Abid Khouloud</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                 <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"batikha.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/aziz.abidi\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/abidi_med_aziz?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Abidi Aziz</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"text-center\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Témoignage</h6>
                <h1 class=\"mb-5\">Les Etudiants disent !</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel position-relative\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-1.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">sarra</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Qualité de formation est trés qualifiés</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-2.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">ahmed</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">J'aime bien le centre et les professeurs</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-3.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">hedi</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Les professeurs sont tres qualifiés</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-4.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\"> houda</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Je recommande </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

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
        // line 641
        $this->displayBlock('js', $context, $blocks);
        // line 653
        echo "
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 641
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 642
        echo "    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  850 => 642,  840 => 641,  828 => 653,  826 => 641,  320 => 138,  301 => 122,  279 => 103,  270 => 97,  266 => 96,  262 => 95,  258 => 94,  253 => 92,  246 => 88,  242 => 87,  238 => 86,  233 => 84,  225 => 78,  218 => 76,  215 => 75,  207 => 72,  202 => 71,  200 => 70,  197 => 69,  194 => 68,  191 => 67,  188 => 65,  185 => 64,  181 => 63,  178 => 62,  176 => 61,  156 => 43,  146 => 42,  115 => 17,  105 => 16,  86 => 6,  76 => 656,  74 => 42,  69 => 39,  67 => 16,  56 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title> {% block title %} eLEARNING - eLearning HTML Template</title>{% endblock %}
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"style.css\" />
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
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
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"css/style.css\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body>
{% block body %}
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-10 px-lg-25\">
       <h1 class=\"m-0 text-primary\"><img  src=\"/9A.png\" >9arinyAcademy</h1>
        </a>
      <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"dropdown\">
       <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"label label-pill label-danger count\" style=\"border-radius:10px;\"></span> <span class=\"glyphicon glyphicon-bell\" style=\"font-size:18px;\"></span></a>
       <ul class=\"dropdown-menu\">
        {% set reclamationsTraitees = [] %}

{% for reponse in Reponses %}
    {% set reclamation = reponse.idrec %}

    {# Vérifier si la réclamation a déjà été traitée #}
    {% if reclamation.idrec not in reclamationsTraitees %}
        {% set reclamationsTraitees = reclamationsTraitees|merge([reclamation.idrec]) %}
            {% if reclamation.iduser.id == 4 %}
        {# Afficher la réclamation et la réponse associée #}
        <li><a href=\"{{ path('app_afficherreclamationfront')}}\" class=\"dropdown-item\">
            L'administrateur a répondu à votre réclamation {{ reponse.contenu }} qui a comme titre {{ reclamation.titre }}
        </a></li>
    {% endif %}
        {% endif %}

{% endfor %}

     </ul>
           </li>
           </ul>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"{{path('home')}}\" class=\"nav-item nav-link active\">Accueil</a>
                <a href=\"\" class=\"nav-item nav-link \">Cours</a>
                 <a href=\"{{path('app_afficherfront')}}\" class=\"nav-item nav-link \">Quizs</a>
                                  <a href=\"{{path('app_affichereventfront')}}\" class=\"nav-item nav-link \" >Evenements</a>
                  <a href=\"{{path('app_reclamation')}}\" class=\"nav-item nav-link \">Reclamations</a>
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
            <a href=\"{{path('app_inscription')}}\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Rejoindrez-Nous<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"img/carousel-1.jpg\" alt=\"\">
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-sm-10 col-lg-8\">
                                <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Les meilleurs cours</h5>
                                <h1 class=\"display-3 text-white animated slideInDown\">Les meilleurs cours sont disponibles dans notre centre</h1>
                                <p class=\"fs-5 text-white mb-4 pb-2\">Les meilleurs cours sont disponibles dans notre centre rejoinnrez-nous pour plus d'informations</p>
                                <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Lire plus</a>
                                <a href=\"{{path('app_inscription')}}\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Rejoindrez-Nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"img/carousel-2.jpg\" alt=\"\">
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-sm-10 col-lg-8\">
                                <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Les meilleurs cours</h5>
                                <h1 class=\"display-3 text-white animated slideInDown\">Les meilleurs cours sont disponibles dans notre centre</h1>
                                <p class=\"fs-5 text-white mb-4 pb-2\">Les meilleurs cours sont disponibles dans notre centre rejoinnrez-nous pour plus d'informations</p>
                                <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Lire plus</a>
                                <a href=\"{{path('app_inscription')}}\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Rejoindrez-Nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-graduation-cap text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Instructeurs qualifiés</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-globe text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-home text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Accueil</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-book-open text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Les formations qualifiés</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"img/about.jpg\" alt=\"\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <h6 class=\"section-title bg-white text-start text-primary pe-3\">About Us</h6>
                    <h1 class=\"mb-4\">Bienvenue à 9arinyAcademy</h1>
                    <p class=\"mb-4\">Chers étudiants, vous êtes au cœur de votre parcours de formation, et nous sommes là pour vous accompagner à chaque étape. Vos efforts et votre détermination sont les clés de votre succès. Que vous rencontriez des défis ou des moments de doute, rappelez-vous que chaque pas que vous faites vous rapproche de vos objectifs. Votre passion et votre engagement sont admirables, et nous sommes fiers de vous voir grandir et évoluer. Continuez à travailler avec passion et persévérance, car chaque nouvelle compétence acquise vous ouvre de nouvelles portes vers un avenir brillant. Vous êtes capables de grandes choses, et nous croyons en vous. Ensemble, poursuivons ce voyage d'apprentissage et de croissance, car votre réussite est notre plus grande fierté</p>
                    <div class=\"row gy-2 gx-4 mb-4\">
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Instructeurs qualifiés</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Certificats International</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Instructeurs qualifiés</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Certificats International</p>
                        </div>
                    </div>
                    <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"\">Lire plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class=\"container-xxl py-5 category\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Categories</h6>
                <h1 class=\"mb-5\">Courses Categories</h1>
            </div>
            <div class=\"row g-3\">
                <div class=\"col-lg-7 col-md-6\">
                    <div class=\"row g-3\">
                        <div class=\"col-lg-12 col-md-12 wow zoomIn\" data-wow-delay=\"0.1s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-1.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">web</h5>
                                    <small class=\"text-primary\">49 Cours</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.3s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-2.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Graphiques design</h5>
                                    <small class=\"text-primary\">49 Cours</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.5s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-3.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Video Editing</h5>
                                    <small class=\"text-primary\">49 Cours</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6 wow zoomIn\" data-wow-delay=\"0.7s\" style=\"min-height: 350px;\">
                    <a class=\"position-relative d-block h-100 overflow-hidden\" href=\"\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"img/cat-4.jpg\" alt=\"\" style=\"object-fit: cover;\">
                        <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin:  1px;\">
                            <h5 class=\"m-0\">Marketing Enligne</h5>
                            <small class=\"text-primary\">49 Cours</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Cours</h6>
                <h1 class=\"mb-5\">Cours populart</h1>
            </div>
            <div class=\"row g-4 justify-content-center\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/course-1.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Lire plus</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Rejoindrez</a>
                            </div>
                        </div>
                        <div class=\"text-center p-4 pb-0\">
                            <h3 class=\"mb-0\">\$149.00</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class=\"d-flex border-top\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>30 Etudiants</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/course-2.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Lire plus</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Rejoindrez</a>
                            </div>
                        </div>
                        <div class=\"text-center p-4 pb-0\">
                            <h3 class=\"mb-0\">\$149.00</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class=\"d-flex border-top\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>30 Etudiants</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/course-3.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Lire plus</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Rejoindrez</a>
                            </div>
                        </div>
                        <div class=\"text-center p-4 pb-0\">
                            <h3 class=\"mb-0\">\$149.00</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class=\"d-flex border-top\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>30 Etudiants</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Instructeurs</h6>
                <h1 class=\"mb-5\">Expert Instructeurs</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"eyaa.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/eyaanasfi/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/eyaa_nasfi?igsh=MXh2c2pkNmN6c3plNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Nasfi Eya</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"arbi.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/hama.larbi.92\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Med Arbi Nciri</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"fonsi.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/amine.bhm\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/amineebelhaj?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Amine belhadj massoued</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"aziz.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/profile.php?id=100083993926016\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/melki_aziz13?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Melki Aziz</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                 <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"khouloud.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/khouloud.abid.5011\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/khouloud_abid_09?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Abid Khouloud</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                 <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"batikha.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.facebook.com/aziz.abidi\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"https://www.instagram.com/abidi_med_aziz?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Abidi Aziz</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"text-center\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Témoignage</h6>
                <h1 class=\"mb-5\">Les Etudiants disent !</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel position-relative\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-1.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">sarra</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Qualité de formation est trés qualifiés</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-2.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">ahmed</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">J'aime bien le centre et les professeurs</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-3.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">hedi</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Les professeurs sont tres qualifiés</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-4.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\"> houda</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Je recommande </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

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
    {% endblock %}

</body>
{% endblock %}
</html>", "home.html.twig", "C:\\Users\\Eya\\projet\\templates\\home.html.twig");
    }
}
