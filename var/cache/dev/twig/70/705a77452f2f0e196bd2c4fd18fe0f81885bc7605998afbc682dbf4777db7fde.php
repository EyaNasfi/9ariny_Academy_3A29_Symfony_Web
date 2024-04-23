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

/* scss/bootstrap.scss */
class __TwigTemplate_66c82a30aeb0a0c1569be73abaec73cbfca74334da96f64d4f4feab38a626c08 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap.scss"));

        // line 1
        echo "/******* Customized Bootstrap ********/

\$primary: #06BBCC;
\$light: #F0FBFC;
\$dark: #181d38;

\$font-family-base: 'Heebo', sans-serif;

\$headings-font-family: 'Nunito', sans-serif;

\$body-color: #52565b;

\$headings-color: \$dark;

\$headings-font-weight: 700;

\$display-font-weight: 800;

\$enable-responsive-font-sizes: true;

\$border-radius: 0px;

\$link-decoration: none;

\$enable-negative-margins: true;

@import \"bootstrap/scss/bootstrap\";";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap.scss";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/******* Customized Bootstrap ********/

\$primary: #06BBCC;
\$light: #F0FBFC;
\$dark: #181d38;

\$font-family-base: 'Heebo', sans-serif;

\$headings-font-family: 'Nunito', sans-serif;

\$body-color: #52565b;

\$headings-color: \$dark;

\$headings-font-weight: 700;

\$display-font-weight: 800;

\$enable-responsive-font-sizes: true;

\$border-radius: 0px;

\$link-decoration: none;

\$enable-negative-margins: true;

@import \"bootstrap/scss/bootstrap\";", "scss/bootstrap.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap.scss");
    }
}
