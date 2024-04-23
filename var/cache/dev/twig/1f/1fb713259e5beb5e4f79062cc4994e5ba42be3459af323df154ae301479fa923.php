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

/* scss/bootstrap/scss/_accordion.scss */
class __TwigTemplate_bfa4b38d7d4454a124489068eb50dc587e9755003f4348e5268df7596d9fa317 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_accordion.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_accordion.scss"));

        // line 1
        echo "//
// Base styles
//

.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: \$accordion-button-padding-y \$accordion-button-padding-x;
  @include font-size(\$font-size-base);
  color: \$accordion-button-color;
  text-align: left; // Reset button style
  background-color: \$accordion-button-bg;
  border: 0;
  @include border-radius(0);
  overflow-anchor: none;
  @include transition(\$accordion-transition);

  &:not(.collapsed) {
    color: \$accordion-button-active-color;
    background-color: \$accordion-button-active-bg;
    box-shadow: inset 0 (\$accordion-border-width * -1) 0 \$accordion-border-color;

    &::after {
      background-image: escape-svg(\$accordion-button-active-icon);
      transform: \$accordion-icon-transform;
    }
  }

  // Accordion icon
  &::after {
    flex-shrink: 0;
    width: \$accordion-icon-width;
    height: \$accordion-icon-width;
    margin-left: auto;
    content: \"\";
    background-image: escape-svg(\$accordion-button-icon);
    background-repeat: no-repeat;
    background-size: \$accordion-icon-width;
    @include transition(\$accordion-icon-transition);
  }

  &:hover {
    z-index: 2;
  }

  &:focus {
    z-index: 3;
    border-color: \$accordion-button-focus-border-color;
    outline: 0;
    box-shadow: \$accordion-button-focus-box-shadow;
  }
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  background-color: \$accordion-bg;
  border: \$accordion-border-width solid \$accordion-border-color;

  &:first-of-type {
    @include border-top-radius(\$accordion-border-radius);

    .accordion-button {
      @include border-top-radius(\$accordion-inner-border-radius);
    }
  }

  &:not(:first-of-type) {
    border-top: 0;
  }

  // Only set a border-radius on the last item if the accordion is collapsed
  &:last-of-type {
    @include border-bottom-radius(\$accordion-border-radius);

    .accordion-button {
      &.collapsed {
        @include border-bottom-radius(\$accordion-inner-border-radius);
      }
    }

    .accordion-collapse {
      @include border-bottom-radius(\$accordion-border-radius);
    }
  }
}

.accordion-body {
  padding: \$accordion-body-padding-y \$accordion-body-padding-x;
}


// Flush accordion items
//
// Remove borders and border-radius to keep accordion items edge-to-edge.

.accordion-flush {
  .accordion-collapse {
    border-width: 0;
  }

  .accordion-item {
    border-right: 0;
    border-left: 0;
    @include border-radius(0);

    &:first-child { border-top: 0; }
    &:last-child { border-bottom: 0; }

    .accordion-button {
      @include border-radius(0);
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
        return "scss/bootstrap/scss/_accordion.scss";
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

.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: \$accordion-button-padding-y \$accordion-button-padding-x;
  @include font-size(\$font-size-base);
  color: \$accordion-button-color;
  text-align: left; // Reset button style
  background-color: \$accordion-button-bg;
  border: 0;
  @include border-radius(0);
  overflow-anchor: none;
  @include transition(\$accordion-transition);

  &:not(.collapsed) {
    color: \$accordion-button-active-color;
    background-color: \$accordion-button-active-bg;
    box-shadow: inset 0 (\$accordion-border-width * -1) 0 \$accordion-border-color;

    &::after {
      background-image: escape-svg(\$accordion-button-active-icon);
      transform: \$accordion-icon-transform;
    }
  }

  // Accordion icon
  &::after {
    flex-shrink: 0;
    width: \$accordion-icon-width;
    height: \$accordion-icon-width;
    margin-left: auto;
    content: \"\";
    background-image: escape-svg(\$accordion-button-icon);
    background-repeat: no-repeat;
    background-size: \$accordion-icon-width;
    @include transition(\$accordion-icon-transition);
  }

  &:hover {
    z-index: 2;
  }

  &:focus {
    z-index: 3;
    border-color: \$accordion-button-focus-border-color;
    outline: 0;
    box-shadow: \$accordion-button-focus-box-shadow;
  }
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  background-color: \$accordion-bg;
  border: \$accordion-border-width solid \$accordion-border-color;

  &:first-of-type {
    @include border-top-radius(\$accordion-border-radius);

    .accordion-button {
      @include border-top-radius(\$accordion-inner-border-radius);
    }
  }

  &:not(:first-of-type) {
    border-top: 0;
  }

  // Only set a border-radius on the last item if the accordion is collapsed
  &:last-of-type {
    @include border-bottom-radius(\$accordion-border-radius);

    .accordion-button {
      &.collapsed {
        @include border-bottom-radius(\$accordion-inner-border-radius);
      }
    }

    .accordion-collapse {
      @include border-bottom-radius(\$accordion-border-radius);
    }
  }
}

.accordion-body {
  padding: \$accordion-body-padding-y \$accordion-body-padding-x;
}


// Flush accordion items
//
// Remove borders and border-radius to keep accordion items edge-to-edge.

.accordion-flush {
  .accordion-collapse {
    border-width: 0;
  }

  .accordion-item {
    border-right: 0;
    border-left: 0;
    @include border-radius(0);

    &:first-child { border-top: 0; }
    &:last-child { border-bottom: 0; }

    .accordion-button {
      @include border-radius(0);
    }
  }
}
", "scss/bootstrap/scss/_accordion.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_accordion.scss");
    }
}
