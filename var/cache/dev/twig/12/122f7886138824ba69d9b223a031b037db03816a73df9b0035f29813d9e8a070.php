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

/* scss/bootstrap/scss/_mixins.scss */
class __TwigTemplate_8331a20a2d8c69f425f667da518d70930f72bcff6bf7d2c8567523e2960419be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_mixins.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_mixins.scss"));

        // line 1
        echo "// Toggles
//
// Used in conjunction with global variables to enable certain theme features.

// Vendor
@import \"vendor/rfs\";

// Deprecate
@import \"mixins/deprecate\";

// Helpers
@import \"mixins/breakpoints\";
@import \"mixins/color-scheme\";
@import \"mixins/image\";
@import \"mixins/resize\";
@import \"mixins/visually-hidden\";
@import \"mixins/reset-text\";
@import \"mixins/text-truncate\";

// Utilities
@import \"mixins/utilities\";

// Components
@import \"mixins/alert\";
@import \"mixins/buttons\";
@import \"mixins/caret\";
@import \"mixins/pagination\";
@import \"mixins/lists\";
@import \"mixins/list-group\";
@import \"mixins/forms\";
@import \"mixins/table-variants\";

// Skins
@import \"mixins/border-radius\";
@import \"mixins/box-shadow\";
@import \"mixins/gradients\";
@import \"mixins/transition\";

// Layout
@import \"mixins/clearfix\";
@import \"mixins/container\";
@import \"mixins/grid\";
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_mixins.scss";
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
        return new Source("// Toggles
//
// Used in conjunction with global variables to enable certain theme features.

// Vendor
@import \"vendor/rfs\";

// Deprecate
@import \"mixins/deprecate\";

// Helpers
@import \"mixins/breakpoints\";
@import \"mixins/color-scheme\";
@import \"mixins/image\";
@import \"mixins/resize\";
@import \"mixins/visually-hidden\";
@import \"mixins/reset-text\";
@import \"mixins/text-truncate\";

// Utilities
@import \"mixins/utilities\";

// Components
@import \"mixins/alert\";
@import \"mixins/buttons\";
@import \"mixins/caret\";
@import \"mixins/pagination\";
@import \"mixins/lists\";
@import \"mixins/list-group\";
@import \"mixins/forms\";
@import \"mixins/table-variants\";

// Skins
@import \"mixins/border-radius\";
@import \"mixins/box-shadow\";
@import \"mixins/gradients\";
@import \"mixins/transition\";

// Layout
@import \"mixins/clearfix\";
@import \"mixins/container\";
@import \"mixins/grid\";
", "scss/bootstrap/scss/_mixins.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_mixins.scss");
    }
}
