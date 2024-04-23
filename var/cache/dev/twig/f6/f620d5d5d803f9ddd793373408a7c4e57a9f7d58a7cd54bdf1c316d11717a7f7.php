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

/* scss/bootstrap/scss/mixins/_transition.scss */
class __TwigTemplate_0fcef22bc62f14b9aab16943905ec354ac8884bad8494fa8447ab4d4c80de898 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_transition.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_transition.scss"));

        // line 1
        echo "// stylelint-disable property-disallowed-list
@mixin transition(\$transition...) {
  @if length(\$transition) == 0 {
    \$transition: \$transition-base;
  }

  @if length(\$transition) > 1 {
    @each \$value in \$transition {
      @if \$value == null or \$value == none {
        @warn \"The keyword 'none' or 'null' must be used as a single argument.\";
      }
    }
  }

  @if \$enable-transitions {
    @if nth(\$transition, 1) != null {
      transition: \$transition;
    }

    @if \$enable-reduced-motion and nth(\$transition, 1) != null and nth(\$transition, 1) != none {
      @media (prefers-reduced-motion: reduce) {
        transition: none;
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
        return "scss/bootstrap/scss/mixins/_transition.scss";
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
        return new Source("// stylelint-disable property-disallowed-list
@mixin transition(\$transition...) {
  @if length(\$transition) == 0 {
    \$transition: \$transition-base;
  }

  @if length(\$transition) > 1 {
    @each \$value in \$transition {
      @if \$value == null or \$value == none {
        @warn \"The keyword 'none' or 'null' must be used as a single argument.\";
      }
    }
  }

  @if \$enable-transitions {
    @if nth(\$transition, 1) != null {
      transition: \$transition;
    }

    @if \$enable-reduced-motion and nth(\$transition, 1) != null and nth(\$transition, 1) != none {
      @media (prefers-reduced-motion: reduce) {
        transition: none;
      }
    }
  }
}
", "scss/bootstrap/scss/mixins/_transition.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_transition.scss");
    }
}
