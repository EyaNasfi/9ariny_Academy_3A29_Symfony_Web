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

/* scss/bootstrap/scss/forms/_form-range.scss */
class __TwigTemplate_301156bb9fabfd9a4814a8406965cb4e0762d712d90755808adac624c5d6545b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_form-range.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_form-range.scss"));

        // line 1
        echo "// Range
//
// Style range inputs the same across browsers. Vendor-specific rules for pseudo
// elements cannot be mixed. As such, there are no shared styles for focus or
// active states on prefixed selectors.

.form-range {
  width: 100%;
  height: add(\$form-range-thumb-height, \$form-range-thumb-focus-box-shadow-width * 2);
  padding: 0; // Need to reset padding
  background-color: transparent;
  appearance: none;

  &:focus {
    outline: 0;

    // Pseudo-elements must be split across multiple rulesets to have an effect.
    // No box-shadow() mixin for focus accessibility.
    &::-webkit-slider-thumb { box-shadow: \$form-range-thumb-focus-box-shadow; }
    &::-moz-range-thumb     { box-shadow: \$form-range-thumb-focus-box-shadow; }
  }

  &::-moz-focus-outer {
    border: 0;
  }

  &::-webkit-slider-thumb {
    width: \$form-range-thumb-width;
    height: \$form-range-thumb-height;
    margin-top: (\$form-range-track-height - \$form-range-thumb-height) / 2; // Webkit specific
    @include gradient-bg(\$form-range-thumb-bg);
    border: \$form-range-thumb-border;
    @include border-radius(\$form-range-thumb-border-radius);
    @include box-shadow(\$form-range-thumb-box-shadow);
    @include transition(\$form-range-thumb-transition);
    appearance: none;

    &:active {
      @include gradient-bg(\$form-range-thumb-active-bg);
    }
  }

  &::-webkit-slider-runnable-track {
    width: \$form-range-track-width;
    height: \$form-range-track-height;
    color: transparent; // Why?
    cursor: \$form-range-track-cursor;
    background-color: \$form-range-track-bg;
    border-color: transparent;
    @include border-radius(\$form-range-track-border-radius);
    @include box-shadow(\$form-range-track-box-shadow);
  }

  &::-moz-range-thumb {
    width: \$form-range-thumb-width;
    height: \$form-range-thumb-height;
    @include gradient-bg(\$form-range-thumb-bg);
    border: \$form-range-thumb-border;
    @include border-radius(\$form-range-thumb-border-radius);
    @include box-shadow(\$form-range-thumb-box-shadow);
    @include transition(\$form-range-thumb-transition);
    appearance: none;

    &:active {
      @include gradient-bg(\$form-range-thumb-active-bg);
    }
  }

  &::-moz-range-track {
    width: \$form-range-track-width;
    height: \$form-range-track-height;
    color: transparent;
    cursor: \$form-range-track-cursor;
    background-color: \$form-range-track-bg;
    border-color: transparent; // Firefox specific?
    @include border-radius(\$form-range-track-border-radius);
    @include box-shadow(\$form-range-track-box-shadow);
  }

  &:disabled {
    pointer-events: none;

    &::-webkit-slider-thumb {
      background-color: \$form-range-thumb-disabled-bg;
    }

    &::-moz-range-thumb {
      background-color: \$form-range-thumb-disabled-bg;
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
        return "scss/bootstrap/scss/forms/_form-range.scss";
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
        return new Source("// Range
//
// Style range inputs the same across browsers. Vendor-specific rules for pseudo
// elements cannot be mixed. As such, there are no shared styles for focus or
// active states on prefixed selectors.

.form-range {
  width: 100%;
  height: add(\$form-range-thumb-height, \$form-range-thumb-focus-box-shadow-width * 2);
  padding: 0; // Need to reset padding
  background-color: transparent;
  appearance: none;

  &:focus {
    outline: 0;

    // Pseudo-elements must be split across multiple rulesets to have an effect.
    // No box-shadow() mixin for focus accessibility.
    &::-webkit-slider-thumb { box-shadow: \$form-range-thumb-focus-box-shadow; }
    &::-moz-range-thumb     { box-shadow: \$form-range-thumb-focus-box-shadow; }
  }

  &::-moz-focus-outer {
    border: 0;
  }

  &::-webkit-slider-thumb {
    width: \$form-range-thumb-width;
    height: \$form-range-thumb-height;
    margin-top: (\$form-range-track-height - \$form-range-thumb-height) / 2; // Webkit specific
    @include gradient-bg(\$form-range-thumb-bg);
    border: \$form-range-thumb-border;
    @include border-radius(\$form-range-thumb-border-radius);
    @include box-shadow(\$form-range-thumb-box-shadow);
    @include transition(\$form-range-thumb-transition);
    appearance: none;

    &:active {
      @include gradient-bg(\$form-range-thumb-active-bg);
    }
  }

  &::-webkit-slider-runnable-track {
    width: \$form-range-track-width;
    height: \$form-range-track-height;
    color: transparent; // Why?
    cursor: \$form-range-track-cursor;
    background-color: \$form-range-track-bg;
    border-color: transparent;
    @include border-radius(\$form-range-track-border-radius);
    @include box-shadow(\$form-range-track-box-shadow);
  }

  &::-moz-range-thumb {
    width: \$form-range-thumb-width;
    height: \$form-range-thumb-height;
    @include gradient-bg(\$form-range-thumb-bg);
    border: \$form-range-thumb-border;
    @include border-radius(\$form-range-thumb-border-radius);
    @include box-shadow(\$form-range-thumb-box-shadow);
    @include transition(\$form-range-thumb-transition);
    appearance: none;

    &:active {
      @include gradient-bg(\$form-range-thumb-active-bg);
    }
  }

  &::-moz-range-track {
    width: \$form-range-track-width;
    height: \$form-range-track-height;
    color: transparent;
    cursor: \$form-range-track-cursor;
    background-color: \$form-range-track-bg;
    border-color: transparent; // Firefox specific?
    @include border-radius(\$form-range-track-border-radius);
    @include box-shadow(\$form-range-track-box-shadow);
  }

  &:disabled {
    pointer-events: none;

    &::-webkit-slider-thumb {
      background-color: \$form-range-thumb-disabled-bg;
    }

    &::-moz-range-thumb {
      background-color: \$form-range-thumb-disabled-bg;
    }
  }
}
", "scss/bootstrap/scss/forms/_form-range.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\forms\\_form-range.scss");
    }
}
