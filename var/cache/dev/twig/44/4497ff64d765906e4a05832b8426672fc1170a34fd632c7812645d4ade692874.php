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

/* contact.html.twig */
class __TwigTemplate_d9f239a8afc31acf9f01de6e574587af73a9eb80a7b3e3f7e92b31b382bb8d4f extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

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
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 33
        echo "</head>

<body>
";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 285
        echo "
</html>";
        
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

    // line 10
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 11
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

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
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
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                       <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-item nav-link active\">Accueil</a>
                <a href=\"\" class=\"nav-item nav-link \">Cours</a>
                 <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherfront");
        echo "\" class=\"nav-item nav-link \">Quizs</a>
                  <a href=\"evenement.html.twig\" class=\"nav-item nav-link\">Evenements</a>
                  <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation");
        echo "\" class=\"nav-item nav-link\">Reclamations</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Plus</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"team.html\" class=\"dropdown-item\">Clubs</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Paiements </a>
                        <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        echo "\" class=\"dropdown-item\">Notre Equipe</a>
                        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" class=\"dropdown-item\">A propos</a>
                        <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"dropdown-item\">Contactez-nous</a>
                        <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\" class=\"dropdown-item\">Emplacement</a>


                    </div>
                </div>
            </div>
            <a href=\"\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Rejoindrez-Nous<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Footer End -->


    <!-- Header Start -->
    <div class=\"container-fluid bg-primary py-5 mb-5 page-header\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-3 text-white animated slideInDown\">Contact</h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center\">
                            <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                            <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Contact Us</h6>
                <h1 class=\"mb-5\">Contact For Any Query</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <h5>Get In Touch</h5>
                    <p class=\"mb-4\">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href=\"https://htmlcodex.com/contact-form\">Download Now</a>.</p>
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                            <i class=\"fa fa-map-marker-alt text-white\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <h5 class=\"text-primary\">Office</h5>
                            <p class=\"mb-0\">123 Street, New York, USA</p>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                            <i class=\"fa fa-phone-alt text-white\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <h5 class=\"text-primary\">Mobile</h5>
                            <p class=\"mb-0\">+012 345 67890</p>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                            <i class=\"fa fa-envelope-open text-white\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <h5 class=\"text-primary\">Email</h5>
                            <p class=\"mb-0\">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <iframe class=\"position-relative rounded w-100 h-100\"
                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                        frameborder=\"0\" style=\"min-height: 300px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                        tabindex=\"0\"></iframe>
                </div>
                <div class=\"col-lg-4 col-md-12 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <form>
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                    <label for=\"name\">Your Name</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
                                    <label for=\"email\">Your Email</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject\">
                                    <label for=\"subject\">Subject</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    <textarea class=\"form-control\" placeholder=\"Leave a message here\" id=\"message\" style=\"height: 150px\"></textarea>
                                    <label for=\"message\">Message</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Quick Link</h4>
                    <a class=\"btn btn-link\" href=\"\">About Us</a>
                    <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                    <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn btn-link\" href=\"\">FAQs & Help</a>
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
                    <h4 class=\"text-white mb-3\">Gallery</h4>
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
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
                        Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"footer-menu\">
                            <a href=\"\">Home</a>
                            <a href=\"\">Cookies</a>
                            <a href=\"\">Help</a>
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


    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
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
        return "contact.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  202 => 69,  198 => 68,  194 => 67,  190 => 66,  181 => 60,  176 => 58,  171 => 56,  150 => 37,  140 => 36,  109 => 11,  99 => 10,  80 => 6,  69 => 285,  67 => 36,  62 => 33,  60 => 10,  55 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title> {% block title %} eLEARNING - eLearning HTML Template</title>{% endblock %}
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
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
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                       <a href=\"{{path('home')}}\" class=\"nav-item nav-link active\">Accueil</a>
                <a href=\"\" class=\"nav-item nav-link \">Cours</a>
                 <a href=\"{{path('app_afficherfront')}}\" class=\"nav-item nav-link \">Quizs</a>
                  <a href=\"evenement.html.twig\" class=\"nav-item nav-link\">Evenements</a>
                  <a href=\"{{path('app_reclamation')}}\" class=\"nav-item nav-link\">Reclamations</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Plus</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"team.html\" class=\"dropdown-item\">Clubs</a>
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

    <!-- Footer End -->


    <!-- Header Start -->
    <div class=\"container-fluid bg-primary py-5 mb-5 page-header\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 text-center\">
                    <h1 class=\"display-3 text-white animated slideInDown\">Contact</h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center\">
                            <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                            <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Contact Us</h6>
                <h1 class=\"mb-5\">Contact For Any Query</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <h5>Get In Touch</h5>
                    <p class=\"mb-4\">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href=\"https://htmlcodex.com/contact-form\">Download Now</a>.</p>
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                            <i class=\"fa fa-map-marker-alt text-white\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <h5 class=\"text-primary\">Office</h5>
                            <p class=\"mb-0\">123 Street, New York, USA</p>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                            <i class=\"fa fa-phone-alt text-white\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <h5 class=\"text-primary\">Mobile</h5>
                            <p class=\"mb-0\">+012 345 67890</p>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                            <i class=\"fa fa-envelope-open text-white\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <h5 class=\"text-primary\">Email</h5>
                            <p class=\"mb-0\">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <iframe class=\"position-relative rounded w-100 h-100\"
                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                        frameborder=\"0\" style=\"min-height: 300px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                        tabindex=\"0\"></iframe>
                </div>
                <div class=\"col-lg-4 col-md-12 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <form>
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                    <label for=\"name\">Your Name</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
                                    <label for=\"email\">Your Email</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject\">
                                    <label for=\"subject\">Subject</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    <textarea class=\"form-control\" placeholder=\"Leave a message here\" id=\"message\" style=\"height: 150px\"></textarea>
                                    <label for=\"message\">Message</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Quick Link</h4>
                    <a class=\"btn btn-link\" href=\"\">About Us</a>
                    <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                    <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn btn-link\" href=\"\">FAQs & Help</a>
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
                    <h4 class=\"text-white mb-3\">Gallery</h4>
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
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
                        Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"footer-menu\">
                            <a href=\"\">Home</a>
                            <a href=\"\">Cookies</a>
                            <a href=\"\">Help</a>
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


    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
</body>
    {% endblock %}

</html>", "contact.html.twig", "C:\\Users\\Eya\\projet\\templates\\contact.html.twig");
    }
}
