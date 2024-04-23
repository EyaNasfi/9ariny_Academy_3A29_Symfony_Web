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

/* scss/bootstrap/scss/forms/_labels.scss */
class __TwigTemplate_e808d04fc662908a4cd191a30f3d03a56dbb42e0a35d50889d1fe6a89ad8608d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_labels.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_labels.scss"));

        // line 1
        echo "//
// Labels
//

.form-label {
  margin-bottom: \$form-label-margin-bottom;
  @include font-size(\$form-label-font-size);
  font-style: \$form-label-font-style;
  font-weight: \$form-label-font-weight;
  color: \$form-label-color;
}

// For use with horizontal and inline forms, when you need the label (or legend)
// text to align with the form controls.
.col-form-label {
  padding-top: add(\$input-padding-y, \$input-border-width);
  padding-bottom: add(\$input-padding-y, \$input-border-width);
  margin-bottom: 0; // Override the `<legend>` default
  @include font-size(inherit); // Override the `<legend>` default
  font-style: \$form-label-font-style;
  font-weight: \$form-label-font-weight;
  line-height: \$input-line-height;
  color: \$form-label-color;
}

.col-form-label-lg {
  padding-top: add(\$input-padding-y-lg, \$input-border-width);
  padding-bottom: add(\$input-padding-y-lg, \$input-border-width);
  @include font-size(\$input-font-size-lg);
}

.col-form-label-sm {
  padding-top: add(\$input-padding-y-sm, \$input-border-width);
  padding-bottom: add(\$input-padding-y-sm, \$input-border-width);
  @include font-size(\$input-font-size-sm);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/forms/_labels.scss";
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
        return new Source("//
// Labels
//

.form-label {
  margin-bottom: \$form-label-margin-bottom;
  @include font-size(\$form-label-font-size);
  font-style: \$form-label-font-style;
  font-weight: \$form-label-font-weight;
  color: \$form-label-color;
}

// For use with horizontal and inline forms, when you need the label (or legend)
// text to align with the form controls.
.col-form-label {
  padding-top: add(\$input-padding-y, \$input-border-width);
  padding-bottom: add(\$input-padding-y, \$input-border-width);
  margin-bottom: 0; // Override the `<legend>` default
  @include font-size(inherit); // Override the `<legend>` default
  font-style: \$form-label-font-style;
  font-weight: \$form-label-font-weight;
  line-height: \$input-line-height;
  color: \$form-label-color;
}

.col-form-label-lg {
  padding-top: add(\$input-padding-y-lg, \$input-border-width);
  padding-bottom: add(\$input-padding-y-lg, \$input-border-width);
  @include font-size(\$input-font-size-lg);
}

.col-form-label-sm {
  padding-top: add(\$input-padding-y-sm, \$input-border-width);
  padding-bottom: add(\$input-padding-y-sm, \$input-border-width);
  @include font-size(\$input-font-size-sm);
}
", "scss/bootstrap/scss/forms/_labels.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\forms\\_labels.scss");
    }
}
