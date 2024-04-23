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

/* scss/bootstrap/scss/utilities/_api.scss */
class __TwigTemplate_2a243131102bb54958bc2405d3bc5f1bd42c5c65606cd68fe10761a6224eb152 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/utilities/_api.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/utilities/_api.scss"));

        // line 1
        echo "// Loop over each breakpoint
@each \$breakpoint in map-keys(\$grid-breakpoints) {

  // Generate media query if needed
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    // Loop over each utility property
    @each \$key, \$utility in \$utilities {
      // The utility can be disabled with `false`, thus check if the utility is a map first
      // Only proceed if responsive media queries are enabled or if it's the base media query
      @if type-of(\$utility) == \"map\" and (map-get(\$utility, responsive) or \$infix == \"\") {
        @include generate-utility(\$utility, \$infix);
      }
    }
  }
}

// RFS rescaling
@media (min-width: \$rfs-mq-value) {
  @each \$breakpoint in map-keys(\$grid-breakpoints) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    @if (map-get(\$grid-breakpoints, \$breakpoint) < \$rfs-breakpoint) {
      // Loop over each utility property
      @each \$key, \$utility in \$utilities {
        // The utility can be disabled with `false`, thus check if the utility is a map first
        // Only proceed if responsive media queries are enabled or if it's the base media query
        @if type-of(\$utility) == \"map\" and map-get(\$utility, rfs) and (map-get(\$utility, responsive) or \$infix == \"\") {
          @include generate-utility(\$utility, \$infix, true);
        }
      }
    }
  }
}


// Print utilities
@media print {
  @each \$key, \$utility in \$utilities {
    // The utility can be disabled with `false`, thus check if the utility is a map first
    // Then check if the utility needs print styles
    @if type-of(\$utility) == \"map\" and map-get(\$utility, print) == true {
      @include generate-utility(\$utility, \"-print\");
    }
  }
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
        return "scss/bootstrap/scss/utilities/_api.scss";
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
        return new Source("// Loop over each breakpoint
@each \$breakpoint in map-keys(\$grid-breakpoints) {

  // Generate media query if needed
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    // Loop over each utility property
    @each \$key, \$utility in \$utilities {
      // The utility can be disabled with `false`, thus check if the utility is a map first
      // Only proceed if responsive media queries are enabled or if it's the base media query
      @if type-of(\$utility) == \"map\" and (map-get(\$utility, responsive) or \$infix == \"\") {
        @include generate-utility(\$utility, \$infix);
      }
    }
  }
}

// RFS rescaling
@media (min-width: \$rfs-mq-value) {
  @each \$breakpoint in map-keys(\$grid-breakpoints) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    @if (map-get(\$grid-breakpoints, \$breakpoint) < \$rfs-breakpoint) {
      // Loop over each utility property
      @each \$key, \$utility in \$utilities {
        // The utility can be disabled with `false`, thus check if the utility is a map first
        // Only proceed if responsive media queries are enabled or if it's the base media query
        @if type-of(\$utility) == \"map\" and map-get(\$utility, rfs) and (map-get(\$utility, responsive) or \$infix == \"\") {
          @include generate-utility(\$utility, \$infix, true);
        }
      }
    }
  }
}


// Print utilities
@media print {
  @each \$key, \$utility in \$utilities {
    // The utility can be disabled with `false`, thus check if the utility is a map first
    // Then check if the utility needs print styles
    @if type-of(\$utility) == \"map\" and map-get(\$utility, print) == true {
      @include generate-utility(\$utility, \"-print\");
    }
  }
}
", "scss/bootstrap/scss/utilities/_api.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\utilities\\_api.scss");
    }
}
