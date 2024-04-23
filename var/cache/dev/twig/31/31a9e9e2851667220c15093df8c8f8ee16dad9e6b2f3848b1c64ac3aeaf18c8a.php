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

/* scss/bootstrap/scss/forms/_form-select.scss */
class __TwigTemplate_f0cbedb3df802619120a38bd371b0439c0f1773bb64832e8b14e29a2a5b87b41 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_form-select.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_form-select.scss"));

        // line 1
        echo "// Select
//
// Replaces the browser default select with a custom one, mostly pulled from
// https://primer.github.io/.

.form-select {
  display: block;
  width: 100%;
  padding: \$form-select-padding-y \$form-select-indicator-padding \$form-select-padding-y \$form-select-padding-x;
  font-family: \$form-select-font-family;
  @include font-size(\$form-select-font-size);
  font-weight: \$form-select-font-weight;
  line-height: \$form-select-line-height;
  color: \$form-select-color;
  background-color: \$form-select-bg;
  background-image: escape-svg(\$form-select-indicator);
  background-repeat: no-repeat;
  background-position: \$form-select-bg-position;
  background-size: \$form-select-bg-size;
  border: \$form-select-border-width solid \$form-select-border-color;
  @include border-radius(\$form-select-border-radius, 0);
  @include box-shadow(\$form-select-box-shadow);
  appearance: none;

  &:focus {
    border-color: \$form-select-focus-border-color;
    outline: 0;
    @if \$enable-shadows {
      @include box-shadow(\$form-select-box-shadow, \$form-select-focus-box-shadow);
    } @else {
      // Avoid using mixin so we can pass custom focus shadow properly
      box-shadow: \$form-select-focus-box-shadow;
    }
  }

  &[multiple],
  &[size]:not([size=\"1\"]) {
    padding-right: \$form-select-padding-x;
    background-image: none;
  }

  &:disabled {
    color: \$form-select-disabled-color;
    background-color: \$form-select-disabled-bg;
    border-color: \$form-select-disabled-border-color;
  }

  // Remove outline from select box in FF
  &:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 \$form-select-color;
  }
}

.form-select-sm {
  padding-top: \$form-select-padding-y-sm;
  padding-bottom: \$form-select-padding-y-sm;
  padding-left: \$form-select-padding-x-sm;
  @include font-size(\$form-select-font-size-sm);
}

.form-select-lg {
  padding-top: \$form-select-padding-y-lg;
  padding-bottom: \$form-select-padding-y-lg;
  padding-left: \$form-select-padding-x-lg;
  @include font-size(\$form-select-font-size-lg);
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
        return "scss/bootstrap/scss/forms/_form-select.scss";
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
        return new Source("// Select
//
// Replaces the browser default select with a custom one, mostly pulled from
// https://primer.github.io/.

.form-select {
  display: block;
  width: 100%;
  padding: \$form-select-padding-y \$form-select-indicator-padding \$form-select-padding-y \$form-select-padding-x;
  font-family: \$form-select-font-family;
  @include font-size(\$form-select-font-size);
  font-weight: \$form-select-font-weight;
  line-height: \$form-select-line-height;
  color: \$form-select-color;
  background-color: \$form-select-bg;
  background-image: escape-svg(\$form-select-indicator);
  background-repeat: no-repeat;
  background-position: \$form-select-bg-position;
  background-size: \$form-select-bg-size;
  border: \$form-select-border-width solid \$form-select-border-color;
  @include border-radius(\$form-select-border-radius, 0);
  @include box-shadow(\$form-select-box-shadow);
  appearance: none;

  &:focus {
    border-color: \$form-select-focus-border-color;
    outline: 0;
    @if \$enable-shadows {
      @include box-shadow(\$form-select-box-shadow, \$form-select-focus-box-shadow);
    } @else {
      // Avoid using mixin so we can pass custom focus shadow properly
      box-shadow: \$form-select-focus-box-shadow;
    }
  }

  &[multiple],
  &[size]:not([size=\"1\"]) {
    padding-right: \$form-select-padding-x;
    background-image: none;
  }

  &:disabled {
    color: \$form-select-disabled-color;
    background-color: \$form-select-disabled-bg;
    border-color: \$form-select-disabled-border-color;
  }

  // Remove outline from select box in FF
  &:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 \$form-select-color;
  }
}

.form-select-sm {
  padding-top: \$form-select-padding-y-sm;
  padding-bottom: \$form-select-padding-y-sm;
  padding-left: \$form-select-padding-x-sm;
  @include font-size(\$form-select-font-size-sm);
}

.form-select-lg {
  padding-top: \$form-select-padding-y-lg;
  padding-bottom: \$form-select-padding-y-lg;
  padding-left: \$form-select-padding-x-lg;
  @include font-size(\$form-select-font-size-lg);
}
", "scss/bootstrap/scss/forms/_form-select.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\forms\\_form-select.scss");
    }
}
