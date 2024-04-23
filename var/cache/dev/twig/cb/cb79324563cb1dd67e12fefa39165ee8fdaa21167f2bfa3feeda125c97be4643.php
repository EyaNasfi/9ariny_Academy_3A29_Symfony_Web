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

/* scss/bootstrap/scss/_containers.scss */
class __TwigTemplate_34160c38d3e420be7b061be62515db59ee3697f1afe6f9c42751c9fcf6b67d31 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_containers.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_containers.scss"));

        // line 1
        echo "// Container widths
//
// Set the container width, and override it for fixed navbars in media queries.

@if \$enable-grid-classes {
  // Single container class with breakpoint max-widths
  .container,
  // 100% wide container at all breakpoints
  .container-fluid {
    @include make-container();
  }

  // Responsive containers that are 100% wide until a breakpoint
  @each \$breakpoint, \$container-max-width in \$container-max-widths {
    .container-#{\$breakpoint} {
      @extend .container-fluid;
    }

    @include media-breakpoint-up(\$breakpoint, \$grid-breakpoints) {
      %responsive-container-#{\$breakpoint} {
        max-width: \$container-max-width;
      }

      // Extend each breakpoint which is smaller or equal to the current breakpoint
      \$extend-breakpoint: true;

      @each \$name, \$width in \$grid-breakpoints {
        @if (\$extend-breakpoint) {
          .container#{breakpoint-infix(\$name, \$grid-breakpoints)} {
            @extend %responsive-container-#{\$breakpoint};
          }

          // Once the current breakpoint is reached, stop extending
          @if (\$breakpoint == \$name) {
            \$extend-breakpoint: false;
          }
        }
      }
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
        return "scss/bootstrap/scss/_containers.scss";
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
        return new Source("// Container widths
//
// Set the container width, and override it for fixed navbars in media queries.

@if \$enable-grid-classes {
  // Single container class with breakpoint max-widths
  .container,
  // 100% wide container at all breakpoints
  .container-fluid {
    @include make-container();
  }

  // Responsive containers that are 100% wide until a breakpoint
  @each \$breakpoint, \$container-max-width in \$container-max-widths {
    .container-#{\$breakpoint} {
      @extend .container-fluid;
    }

    @include media-breakpoint-up(\$breakpoint, \$grid-breakpoints) {
      %responsive-container-#{\$breakpoint} {
        max-width: \$container-max-width;
      }

      // Extend each breakpoint which is smaller or equal to the current breakpoint
      \$extend-breakpoint: true;

      @each \$name, \$width in \$grid-breakpoints {
        @if (\$extend-breakpoint) {
          .container#{breakpoint-infix(\$name, \$grid-breakpoints)} {
            @extend %responsive-container-#{\$breakpoint};
          }

          // Once the current breakpoint is reached, stop extending
          @if (\$breakpoint == \$name) {
            \$extend-breakpoint: false;
          }
        }
      }
    }
  }
}
", "scss/bootstrap/scss/_containers.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_containers.scss");
    }
}
