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

/* Front/courses.html.twig */
class __TwigTemplate_cec9b4e898a0880d25c60771858de910 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/courses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/courses.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">



<!-- Inclure jQuery -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<!-- Inclure rateYo -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>

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
</head>

<body>
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
       <h1 class=\"m-0 text-primary\"><img  src=\"/log.png\" >9arinyAcademy</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"index.html\" class=\"nav-item nav-link active\">Accueil</a>
                <a href=\"courses.html\" class=\"nav-item nav-link\">Cours</a>
                 <a href=\"courses.html\" class=\"nav-item nav-link\">Quizs</a>
                  <a href=\"courses.html\" class=\"nav-item nav-link\">Evenements</a>
                  <a href=\"courses.html\" class=\"nav-item nav-link\">Reclamations</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Plus</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"team.html\" class=\"dropdown-item\">Clubs</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Paiements </a>
                        <a href=\"404.html\" class=\"dropdown-item\">Notre Equipe</a>
                        <a href=\"about.html\" class=\"dropdown-item\">A propos</a>
                        <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"dropdown-item\">Contactez-nous</a>
                        <a href=\"contact.html\" class=\"dropdown-item\">Emplacement</a>


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
                    <h1 class=\"display-3 text-white animated slideInDown\">Courses</h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center\">
                            <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                            <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


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
                                    <h5 class=\"m-0\">Web Design</h5>
                                    <small class=\"text-primary\">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.3s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-2.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Graphic Design</h5>
                                    <small class=\"text-primary\">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.5s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-3.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Video Editing</h5>
                                    <small class=\"text-primary\">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6 wow zoomIn\" data-wow-delay=\"0.7s\" style=\"min-height: 350px;\">
                    <a class=\"position-relative d-block h-100 overflow-hidden\" href=\"\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"img/cat-4.jpg\" alt=\"\" style=\"object-fit: cover;\">
                        <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin:  1px;\">
                            <h5 class=\"m-0\">Online Marketing</h5>
                            <small class=\"text-primary\">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
\t\t\t\tdocument.getElementById('searchBtn').addEventListener('click', function () {
var keyword = document.getElementById('searchInput').value.toLowerCase();
var formations = document.querySelectorAll('.formation-item');

formations.forEach(function (formation) {
var titre = formation.querySelector('.formation-title').textContent.toLowerCase();
if (titre.includes(keyword)) {
formation.style.display = 'block';
} else {
formation.style.display = 'none';
}
});
});

function filterFormation(selectedFormation) {
var formations = document.querySelectorAll('.formation-item');

formations.forEach(function (formation) {
var nomDeFormation = formation.querySelector('.formation-nomDeFormation').textContent.toLowerCase();
if (nomDeFormation === selectedFormation.toLowerCase()) {
formation.style.display = 'block';
} else {
formation.style.display = 'none';
}
});
}
\t\t\t</script>

    
";
        // line 189
        $this->displayBlock('title', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('body', $context, $blocks);
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 233, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 234
            echo "<div class=\"col-md-4 mb-4\">
    <div class=\"diamond\">
        <div class=\"card-body\">
            <!-- Autres éléments -->
            <div class=\"rateYo\" data-rateyo-rating=\"3.5\"></div> <!-- Notez que vous pouvez définir une valeur dynamique ici -->
            <!-- Autres éléments -->
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "

    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Courses</h6>
                <h1 class=\"mb-5\">Popular Courses</h1>
            </div>
            <div class=\"row g-4 justify-content-center\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/course-1.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
                            </div>
                        </div>
                    

                    
    <!-- Courses End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"text-center\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Testimonial</h6>
                <h1 class=\"mb-5\">Our Students Say!</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel position-relative\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-1.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-2.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-3.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-4.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
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

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 189
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 191
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 192
        echo "   <div class=\"container card-container\">
    <div class=\"row\">
        ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 194, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 195
            echo "            <div class=\"col-md-4 mb-4\">
                <div class=\"diamond\">
                    <div class=\"card-body\">
                   
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/formation_images/" . twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["formation"], "nomDeFormation", [], "any", false, false, false, 199), [" " => "_", "sécurité" => "securite"])) . ".png")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nomDeFormation", [], "any", false, false, false, 199), "html", null, true);
            echo "\" class=\"formation-image\">
\t\t\t\t\t\t\t\t\t
                        <h5 class=\"card-title\">";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getnomDeFormation", [], "method", false, false, false, 201), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getDescription", [], "method", false, false, false, 202), "html", null, true);
            echo "</p>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item\">Durée: ";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getduree", [], "method", false, false, false, 204), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item\">Niveau: ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getNiveau", [], "method", false, false, false, 205), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item\">Date de début: ";
            // line 206
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getdateDeb", [], "method", false, false, false, 206), "d/m/Y"), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item\">Date de fin: ";
            // line 207
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getdateFin", [], "method", false, false, false, 207), "d/m/Y"), "html", null, true);
            echo "</li>
                            <li class=\"list-group-item\">Coût: ";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getcout", [], "method", false, false, false, 208), "html", null, true);
            echo "</li>
                             <li class=\"list-group-item\">Categorie: ";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getCategorie", [], "method", false, false, false, 209), "html", null, true);
            echo "</li>
                            
                        </ul>
                        <a href=\"";
            // line 212
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheCoursFront");
            echo "\" class=\"btn btn-primary\">Détails</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "    </div>
</div>
<script>
\$(function () {
    \$(\".rateYo\").rateYo({
        rating: 3.5, // Vous pouvez le rendre dynamique en fonction de la base de données
        fullStar: true,
        onSet: function (rating, rateYoInstance) {
            // Vous pouvez ajouter une fonction pour enregistrer la note dans votre base de données ici
            console.log(`La nouvelle note est \${rating}`);
        }
    });
});
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Front/courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 217,  531 => 212,  525 => 209,  521 => 208,  517 => 207,  513 => 206,  509 => 205,  505 => 204,  500 => 202,  496 => 201,  489 => 199,  483 => 195,  479 => 194,  475 => 192,  465 => 191,  446 => 189,  264 => 244,  249 => 234,  245 => 233,  243 => 191,  240 => 190,  238 => 189,  121 => 75,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">



<!-- Inclure jQuery -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<!-- Inclure rateYo -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>

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
</head>

<body>
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
       <h1 class=\"m-0 text-primary\"><img  src=\"/log.png\" >9arinyAcademy</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"index.html\" class=\"nav-item nav-link active\">Accueil</a>
                <a href=\"courses.html\" class=\"nav-item nav-link\">Cours</a>
                 <a href=\"courses.html\" class=\"nav-item nav-link\">Quizs</a>
                  <a href=\"courses.html\" class=\"nav-item nav-link\">Evenements</a>
                  <a href=\"courses.html\" class=\"nav-item nav-link\">Reclamations</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Plus</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"team.html\" class=\"dropdown-item\">Clubs</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Paiements </a>
                        <a href=\"404.html\" class=\"dropdown-item\">Notre Equipe</a>
                        <a href=\"about.html\" class=\"dropdown-item\">A propos</a>
                        <a href=\"{{ path('contact') }}\" class=\"dropdown-item\">Contactez-nous</a>
                        <a href=\"contact.html\" class=\"dropdown-item\">Emplacement</a>


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
                    <h1 class=\"display-3 text-white animated slideInDown\">Courses</h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center\">
                            <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                            <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


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
                                    <h5 class=\"m-0\">Web Design</h5>
                                    <small class=\"text-primary\">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.3s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-2.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Graphic Design</h5>
                                    <small class=\"text-primary\">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.5s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"img/cat-3.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Video Editing</h5>
                                    <small class=\"text-primary\">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6 wow zoomIn\" data-wow-delay=\"0.7s\" style=\"min-height: 350px;\">
                    <a class=\"position-relative d-block h-100 overflow-hidden\" href=\"\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"img/cat-4.jpg\" alt=\"\" style=\"object-fit: cover;\">
                        <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin:  1px;\">
                            <h5 class=\"m-0\">Online Marketing</h5>
                            <small class=\"text-primary\">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
\t\t\t\tdocument.getElementById('searchBtn').addEventListener('click', function () {
var keyword = document.getElementById('searchInput').value.toLowerCase();
var formations = document.querySelectorAll('.formation-item');

formations.forEach(function (formation) {
var titre = formation.querySelector('.formation-title').textContent.toLowerCase();
if (titre.includes(keyword)) {
formation.style.display = 'block';
} else {
formation.style.display = 'none';
}
});
});

function filterFormation(selectedFormation) {
var formations = document.querySelectorAll('.formation-item');

formations.forEach(function (formation) {
var nomDeFormation = formation.querySelector('.formation-nomDeFormation').textContent.toLowerCase();
if (nomDeFormation === selectedFormation.toLowerCase()) {
formation.style.display = 'block';
} else {
formation.style.display = 'none';
}
});
}
\t\t\t</script>

    
{% block title %}  {% endblock %}

{% block body %}
   <div class=\"container card-container\">
    <div class=\"row\">
        {% for formation in formations %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"diamond\">
                    <div class=\"card-body\">
                   
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/formation_images/' ~ formation.nomDeFormation|replace({' ': '_', 'sécurité': 'securite'}) ~ '.png') }}\" alt=\"{{ formation.nomDeFormation }}\" class=\"formation-image\">
\t\t\t\t\t\t\t\t\t
                        <h5 class=\"card-title\">{{ formation.getnomDeFormation() }}</h5>
                        <p class=\"card-text\">{{ formation.getDescription() }}</p>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item\">Durée: {{ formation.getduree() }}</li>
                            <li class=\"list-group-item\">Niveau: {{ formation.getNiveau() }}</li>
                            <li class=\"list-group-item\">Date de début: {{ formation.getdateDeb()|date('d/m/Y') }}</li>
                            <li class=\"list-group-item\">Date de fin: {{ formation.getdateFin()|date('d/m/Y') }}</li>
                            <li class=\"list-group-item\">Coût: {{ formation.getcout() }}</li>
                             <li class=\"list-group-item\">Categorie: {{ formation.getCategorie() }}</li>
                            
                        </ul>
                        <a href=\"{{ path('afficheCoursFront') }}\" class=\"btn btn-primary\">Détails</a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
<script>
\$(function () {
    \$(\".rateYo\").rateYo({
        rating: 3.5, // Vous pouvez le rendre dynamique en fonction de la base de données
        fullStar: true,
        onSet: function (rating, rateYoInstance) {
            // Vous pouvez ajouter une fonction pour enregistrer la note dans votre base de données ici
            console.log(`La nouvelle note est \${rating}`);
        }
    });
});
</script>

{% endblock %}
{% for formation in formations %}
<div class=\"col-md-4 mb-4\">
    <div class=\"diamond\">
        <div class=\"card-body\">
            <!-- Autres éléments -->
            <div class=\"rateYo\" data-rateyo-rating=\"3.5\"></div> <!-- Notez que vous pouvez définir une valeur dynamique ici -->
            <!-- Autres éléments -->
        </div>
    </div>
</div>
{% endfor %}


    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Courses</h6>
                <h1 class=\"mb-5\">Popular Courses</h1>
            </div>
            <div class=\"row g-4 justify-content-center\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/course-1.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
                            </div>
                        </div>
                    

                    
    <!-- Courses End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"text-center\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Testimonial</h6>
                <h1 class=\"mb-5\">Our Students Say!</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel position-relative\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-1.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-2.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-3.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-4.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
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

</html>", "Front/courses.html.twig", "C:\\Users\\HP\\Desktop\\testt Med aziz abidi\\templates\\Front\\courses.html.twig");
    }
}
