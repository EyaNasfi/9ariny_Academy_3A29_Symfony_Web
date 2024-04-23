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

/* scss/bootstrap/scss/mixins/_pagination.scss */
class __TwigTemplate_071fb71015672e26c0d7a8ac01b147f239dad6d6c9b6a6586ab4e3f6a897a6fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_pagination.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_pagination.scss"));

        // line 1
        echo "// Pagination

// scss-docs-start pagination-mixin
@mixin pagination-size(\$padding-y, \$padding-x, \$font-size, \$border-radius) {
  .page-link {
    padding: \$padding-y \$padding-x;
    @include font-size(\$font-size);
  }

  .page-item {
    @if \$pagination-margin-start == (-\$pagination-border-width) {
      &:first-child {
        .page-link {
          @include border-start-radius(\$border-radius);
        }
      }

      &:last-child {
        .page-link {
          @include border-end-radius(\$border-radius);
        }
      }
    } @else {
      //Add border-radius to all pageLinks in case they have left margin
      .page-link {
        @include border-radius(\$border-radius);
      }
    }
  }
}
// scss-docs-end pagination-mixin
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_pagination.scss";
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
        return new Source("// Pagination

// scss-docs-start pagination-mixin
@mixin pagination-size(\$padding-y, \$padding-x, \$font-size, \$border-radius) {
  .page-link {
    padding: \$padding-y \$padding-x;
    @include font-size(\$font-size);
  }

  .page-item {
    @if \$pagination-margin-start == (-\$pagination-border-width) {
      &:first-child {
        .page-link {
          @include border-start-radius(\$border-radius);
        }
      }

      &:last-child {
        .page-link {
          @include border-end-radius(\$border-radius);
        }
      }
    } @else {
      //Add border-radius to all pageLinks in case they have left margin
      .page-link {
        @include border-radius(\$border-radius);
      }
    }
  }
}
// scss-docs-end pagination-mixin
", "scss/bootstrap/scss/mixins/_pagination.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_pagination.scss");
    }
}
