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

/* scss/bootstrap/scss/forms/_validation.scss */
class __TwigTemplate_d94d55ebe1c7461c3b1b9010a0a0ccab4dc3fdb280d9f71823889e5a0a04b960 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_validation.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_validation.scss"));

        // line 1
        echo "// Form validation
//
// Provide feedback to users when form field values are valid or invalid. Works
// primarily for client-side validation via scoped `:invalid` and `:valid`
// pseudo-classes but also includes `.is-invalid` and `.is-valid` classes for
// server-side validation.

// scss-docs-start form-validation-states-loop
@each \$state, \$data in \$form-validation-states {
  @include form-validation-state(\$state, \$data...);
}
// scss-docs-end form-validation-states-loop
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/forms/_validation.scss";
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
        return new Source("// Form validation
//
// Provide feedback to users when form field values are valid or invalid. Works
// primarily for client-side validation via scoped `:invalid` and `:valid`
// pseudo-classes but also includes `.is-invalid` and `.is-valid` classes for
// server-side validation.

// scss-docs-start form-validation-states-loop
@each \$state, \$data in \$form-validation-states {
  @include form-validation-state(\$state, \$data...);
}
// scss-docs-end form-validation-states-loop
", "scss/bootstrap/scss/forms/_validation.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\forms\\_validation.scss");
    }
}
