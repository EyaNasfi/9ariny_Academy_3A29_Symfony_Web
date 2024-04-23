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

/* scss/bootstrap/scss/_pagination.scss */
class __TwigTemplate_7e720c1962bb17a548b17e21600c372f2b27390ef85f895f7195e373a079a437 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_pagination.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_pagination.scss"));

        // line 1
        echo ".pagination {
  display: flex;
  @include list-unstyled();
}

.page-link {
  position: relative;
  display: block;
  color: \$pagination-color;
  text-decoration: if(\$link-decoration == none, null, none);
  background-color: \$pagination-bg;
  border: \$pagination-border-width solid \$pagination-border-color;
  @include transition(\$pagination-transition);

  &:hover {
    z-index: 2;
    color: \$pagination-hover-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
    background-color: \$pagination-hover-bg;
    border-color: \$pagination-hover-border-color;
  }

  &:focus {
    z-index: 3;
    color: \$pagination-focus-color;
    background-color: \$pagination-focus-bg;
    outline: \$pagination-focus-outline;
    box-shadow: \$pagination-focus-box-shadow;
  }
}

.page-item {
  &:not(:first-child) .page-link {
    margin-left: \$pagination-margin-start;
  }

  &.active .page-link {
    z-index: 3;
    color: \$pagination-active-color;
    @include gradient-bg(\$pagination-active-bg);
    border-color: \$pagination-active-border-color;
  }

  &.disabled .page-link {
    color: \$pagination-disabled-color;
    pointer-events: none;
    background-color: \$pagination-disabled-bg;
    border-color: \$pagination-disabled-border-color;
  }
}


//
// Sizing
//
@include pagination-size(\$pagination-padding-y, \$pagination-padding-x, null, \$pagination-border-radius);

.pagination-lg {
  @include pagination-size(\$pagination-padding-y-lg, \$pagination-padding-x-lg, \$font-size-lg, \$pagination-border-radius-lg);
}

.pagination-sm {
  @include pagination-size(\$pagination-padding-y-sm, \$pagination-padding-x-sm, \$font-size-sm, \$pagination-border-radius-sm);
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
        return "scss/bootstrap/scss/_pagination.scss";
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
        return new Source(".pagination {
  display: flex;
  @include list-unstyled();
}

.page-link {
  position: relative;
  display: block;
  color: \$pagination-color;
  text-decoration: if(\$link-decoration == none, null, none);
  background-color: \$pagination-bg;
  border: \$pagination-border-width solid \$pagination-border-color;
  @include transition(\$pagination-transition);

  &:hover {
    z-index: 2;
    color: \$pagination-hover-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
    background-color: \$pagination-hover-bg;
    border-color: \$pagination-hover-border-color;
  }

  &:focus {
    z-index: 3;
    color: \$pagination-focus-color;
    background-color: \$pagination-focus-bg;
    outline: \$pagination-focus-outline;
    box-shadow: \$pagination-focus-box-shadow;
  }
}

.page-item {
  &:not(:first-child) .page-link {
    margin-left: \$pagination-margin-start;
  }

  &.active .page-link {
    z-index: 3;
    color: \$pagination-active-color;
    @include gradient-bg(\$pagination-active-bg);
    border-color: \$pagination-active-border-color;
  }

  &.disabled .page-link {
    color: \$pagination-disabled-color;
    pointer-events: none;
    background-color: \$pagination-disabled-bg;
    border-color: \$pagination-disabled-border-color;
  }
}


//
// Sizing
//
@include pagination-size(\$pagination-padding-y, \$pagination-padding-x, null, \$pagination-border-radius);

.pagination-lg {
  @include pagination-size(\$pagination-padding-y-lg, \$pagination-padding-x-lg, \$font-size-lg, \$pagination-border-radius-lg);
}

.pagination-sm {
  @include pagination-size(\$pagination-padding-y-sm, \$pagination-padding-x-sm, \$font-size-sm, \$pagination-border-radius-sm);
}
", "scss/bootstrap/scss/_pagination.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_pagination.scss");
    }
}
