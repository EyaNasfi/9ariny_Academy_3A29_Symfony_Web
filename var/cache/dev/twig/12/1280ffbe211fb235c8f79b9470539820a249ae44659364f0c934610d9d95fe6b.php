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

/* scss/bootstrap/scss/_alert.scss */
class __TwigTemplate_a9bab2b923301f8c2a386ec930b37c47c56b67c162fd178385bf131b31a87356 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_alert.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_alert.scss"));

        // line 1
        echo "//
// Base styles
//

.alert {
  position: relative;
  padding: \$alert-padding-y \$alert-padding-x;
  margin-bottom: \$alert-margin-bottom;
  border: \$alert-border-width solid transparent;
  @include border-radius(\$alert-border-radius);
}

// Headings for larger alerts
.alert-heading {
  // Specified to prevent conflicts of changing \$headings-color
  color: inherit;
}

// Provide class for links that match alerts
.alert-link {
  font-weight: \$alert-link-font-weight;
}


// Dismissible alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissible {
  padding-right: \$alert-dismissible-padding-r;

  // Adjust close link position
  .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: \$stretched-link-z-index + 1;
    padding: \$alert-padding-y * 1.25 \$alert-padding-x;
  }
}


// scss-docs-start alert-modifiers
// Generate contextual modifier classes for colorizing the alert.

@each \$state, \$value in \$theme-colors {
  \$alert-background: shift-color(\$value, \$alert-bg-scale);
  \$alert-border: shift-color(\$value, \$alert-border-scale);
  \$alert-color: shift-color(\$value, \$alert-color-scale);
  @if (contrast-ratio(\$alert-background, \$alert-color) < \$min-contrast-ratio) {
    \$alert-color: mix(\$value, color-contrast(\$alert-background), abs(\$alert-color-scale));
  }
  .alert-#{\$state} {
    @include alert-variant(\$alert-background, \$alert-border, \$alert-color);
  }
}
// scss-docs-end alert-modifiers
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_alert.scss";
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
// Base styles
//

.alert {
  position: relative;
  padding: \$alert-padding-y \$alert-padding-x;
  margin-bottom: \$alert-margin-bottom;
  border: \$alert-border-width solid transparent;
  @include border-radius(\$alert-border-radius);
}

// Headings for larger alerts
.alert-heading {
  // Specified to prevent conflicts of changing \$headings-color
  color: inherit;
}

// Provide class for links that match alerts
.alert-link {
  font-weight: \$alert-link-font-weight;
}


// Dismissible alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissible {
  padding-right: \$alert-dismissible-padding-r;

  // Adjust close link position
  .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: \$stretched-link-z-index + 1;
    padding: \$alert-padding-y * 1.25 \$alert-padding-x;
  }
}


// scss-docs-start alert-modifiers
// Generate contextual modifier classes for colorizing the alert.

@each \$state, \$value in \$theme-colors {
  \$alert-background: shift-color(\$value, \$alert-bg-scale);
  \$alert-border: shift-color(\$value, \$alert-border-scale);
  \$alert-color: shift-color(\$value, \$alert-color-scale);
  @if (contrast-ratio(\$alert-background, \$alert-color) < \$min-contrast-ratio) {
    \$alert-color: mix(\$value, color-contrast(\$alert-background), abs(\$alert-color-scale));
  }
  .alert-#{\$state} {
    @include alert-variant(\$alert-background, \$alert-border, \$alert-color);
  }
}
// scss-docs-end alert-modifiers
", "scss/bootstrap/scss/_alert.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_alert.scss");
    }
}
