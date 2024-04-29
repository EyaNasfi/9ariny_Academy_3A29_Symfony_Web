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

/* front/footer.html.twig */
class __TwigTemplate_206bddc7a0c284c064e06b69214985f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/footer.html.twig"));

        // line 1
        yield "<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Quick Link</h4>
                <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                <a class=\"btn btn-link\" href=\"\">FAQs & Help</a>
            </div>

            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Gallery</h4>
                <div class=\"row g-2 pt-2\">
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=\"container\">
        <div class=\"copyright\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    &copy; <a class=\"border-bottom\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\">Tanit Online</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">DevDarlings </a><br><br>
                    Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">DevDarlings</a>
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <div class=\"footer-menu\">
                        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\">Home</a>
                        <a href=\"\">Cookies</a>
                        <a href=\"\">Help</a>
                        <a href=\"\">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/footer.html.twig";
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
        return array (  115 => 49,  104 => 41,  90 => 30,  84 => 27,  78 => 24,  72 => 21,  66 => 18,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Quick Link</h4>
                <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                <a class=\"btn btn-link\" href=\"\">FAQs & Help</a>
            </div>

            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Gallery</h4>
                <div class=\"row g-2 pt-2\">
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('front/img/course-1.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('front/img/course-1.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('front/img/course-1.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('front/img/course-1.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('front/img/course-1.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('front/img/course-1.jpg') }}\" alt=\"\">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=\"container\">
        <div class=\"copyright\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    &copy; <a class=\"border-bottom\" href=\"{{ path('index') }}\">Tanit Online</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">DevDarlings </a><br><br>
                    Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">DevDarlings</a>
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <div class=\"footer-menu\">
                        <a href=\"{{ path('index') }}\">Home</a>
                        <a href=\"\">Cookies</a>
                        <a href=\"\">Help</a>
                        <a href=\"\">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "front/footer.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\front\\footer.html.twig");
    }
}
