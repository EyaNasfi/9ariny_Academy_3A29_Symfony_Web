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

/* scss/bootstrap/scss/_toasts.scss */
class __TwigTemplate_5e5b189a3e476fb3d2a830bb65809fdfa03486bddd808600d60c7671b1b63b4f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_toasts.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_toasts.scss"));

        // line 1
        echo ".toast {
  width: \$toast-max-width;
  max-width: 100%;
  @include font-size(\$toast-font-size);
  color: \$toast-color;
  pointer-events: auto;
  background-color: \$toast-background-color;
  background-clip: padding-box;
  border: \$toast-border-width solid \$toast-border-color;
  box-shadow: \$toast-box-shadow;
  @include border-radius(\$toast-border-radius);

  &:not(.showing):not(.show) {
    opacity: 0;
  }

  &.hide {
    display: none;
  }
}

.toast-container {
  width: max-content;
  max-width: 100%;
  pointer-events: none;

  > :not(:last-child) {
    margin-bottom: \$toast-spacing;
  }
}

.toast-header {
  display: flex;
  align-items: center;
  padding: \$toast-padding-y \$toast-padding-x;
  color: \$toast-header-color;
  background-color: \$toast-header-background-color;
  background-clip: padding-box;
  border-bottom: \$toast-border-width solid \$toast-header-border-color;
  @include border-top-radius(subtract(\$toast-border-radius, \$toast-border-width));

  .btn-close {
    margin-right: \$toast-padding-x / -2;
    margin-left: \$toast-padding-x;
  }
}

.toast-body {
  padding: \$toast-padding-x; // apply to both vertical and horizontal
  word-wrap: break-word;
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
        return "scss/bootstrap/scss/_toasts.scss";
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
        return new Source(".toast {
  width: \$toast-max-width;
  max-width: 100%;
  @include font-size(\$toast-font-size);
  color: \$toast-color;
  pointer-events: auto;
  background-color: \$toast-background-color;
  background-clip: padding-box;
  border: \$toast-border-width solid \$toast-border-color;
  box-shadow: \$toast-box-shadow;
  @include border-radius(\$toast-border-radius);

  &:not(.showing):not(.show) {
    opacity: 0;
  }

  &.hide {
    display: none;
  }
}

.toast-container {
  width: max-content;
  max-width: 100%;
  pointer-events: none;

  > :not(:last-child) {
    margin-bottom: \$toast-spacing;
  }
}

.toast-header {
  display: flex;
  align-items: center;
  padding: \$toast-padding-y \$toast-padding-x;
  color: \$toast-header-color;
  background-color: \$toast-header-background-color;
  background-clip: padding-box;
  border-bottom: \$toast-border-width solid \$toast-header-border-color;
  @include border-top-radius(subtract(\$toast-border-radius, \$toast-border-width));

  .btn-close {
    margin-right: \$toast-padding-x / -2;
    margin-left: \$toast-padding-x;
  }
}

.toast-body {
  padding: \$toast-padding-x; // apply to both vertical and horizontal
  word-wrap: break-word;
}
", "scss/bootstrap/scss/_toasts.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_toasts.scss");
    }
}
