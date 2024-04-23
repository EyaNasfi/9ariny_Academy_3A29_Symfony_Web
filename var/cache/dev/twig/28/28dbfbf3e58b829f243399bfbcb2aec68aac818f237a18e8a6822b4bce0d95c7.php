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

/* scss/bootstrap/scss/mixins/_forms.scss */
class __TwigTemplate_17e587f796e064ccad92925337b49bb880e3e13771e353eec7d384ff950cc23c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_forms.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_forms.scss"));

        // line 1
        echo "// This mixin uses an `if()` technique to be compatible with Dart Sass
// See https://github.com/sass/sass/issues/1873#issuecomment-152293725 for more details

// scss-docs-start form-validation-mixins
@mixin form-validation-state-selector(\$state) {
  @if (\$state == \"valid\" or \$state == \"invalid\") {
    .was-validated #{if(&, \"&\", \"\")}:#{\$state},
    #{if(&, \"&\", \"\")}.is-#{\$state} {
      @content;
    }
  } @else {
    #{if(&, \"&\", \"\")}.is-#{\$state} {
      @content;
    }
  }
}

@mixin form-validation-state(
  \$state,
  \$color,
  \$icon,
  \$tooltip-color: color-contrast(\$color),
  \$tooltip-bg-color: rgba(\$color, \$form-feedback-tooltip-opacity),
  \$focus-box-shadow: 0 0 \$input-btn-focus-blur \$input-focus-width rgba(\$color, \$input-btn-focus-color-opacity)
) {
  .#{\$state}-feedback {
    display: none;
    width: 100%;
    margin-top: \$form-feedback-margin-top;
    @include font-size(\$form-feedback-font-size);
    font-style: \$form-feedback-font-style;
    color: \$color;
  }

  .#{\$state}-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%; // Contain to parent when possible
    padding: \$form-feedback-tooltip-padding-y \$form-feedback-tooltip-padding-x;
    margin-top: .1rem;
    @include font-size(\$form-feedback-tooltip-font-size);
    line-height: \$form-feedback-tooltip-line-height;
    color: \$tooltip-color;
    background-color: \$tooltip-bg-color;
    @include border-radius(\$form-feedback-tooltip-border-radius);
  }

  @include form-validation-state-selector(\$state) {
    ~ .#{\$state}-feedback,
    ~ .#{\$state}-tooltip {
      display: block;
    }
  }

  .form-control {
    @include form-validation-state-selector(\$state) {
      border-color: \$color;

      @if \$enable-validation-icons {
        padding-right: \$input-height-inner;
        background-image: escape-svg(\$icon);
        background-repeat: no-repeat;
        background-position: right \$input-height-inner-quarter center;
        background-size: \$input-height-inner-half \$input-height-inner-half;
      }

      &:focus {
        border-color: \$color;
        box-shadow: \$focus-box-shadow;
      }
    }
  }

  // stylelint-disable-next-line selector-no-qualifying-type
  textarea.form-control {
    @include form-validation-state-selector(\$state) {
      @if \$enable-validation-icons {
        padding-right: \$input-height-inner;
        background-position: top \$input-height-inner-quarter right \$input-height-inner-quarter;
      }
    }
  }

  .form-select {
    @include form-validation-state-selector(\$state) {
      border-color: \$color;

      @if \$enable-validation-icons {
        &:not([multiple]):not([size]),
        &:not([multiple])[size=\"1\"] {
          padding-right: \$form-select-feedback-icon-padding-end;
          background-image: escape-svg(\$form-select-indicator), escape-svg(\$icon);
          background-position: \$form-select-bg-position, \$form-select-feedback-icon-position;
          background-size: \$form-select-bg-size, \$form-select-feedback-icon-size;
        }
      }

      &:focus {
        border-color: \$color;
        box-shadow: \$focus-box-shadow;
      }
    }
  }

  .form-check-input {
    @include form-validation-state-selector(\$state) {
      border-color: \$color;

      &:checked {
        background-color: \$color;
      }

      &:focus {
        box-shadow: \$focus-box-shadow;
      }

      ~ .form-check-label {
        color: \$color;
      }
    }
  }
  .form-check-inline .form-check-input {
    ~ .#{\$state}-feedback {
      margin-left: .5em;
    }
  }

  .input-group .form-control,
  .input-group .form-select {
    @include form-validation-state-selector(\$state) {
      z-index: 3;
    }
  }
}
// scss-docs-end form-validation-mixins
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_forms.scss";
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
        return new Source("// This mixin uses an `if()` technique to be compatible with Dart Sass
// See https://github.com/sass/sass/issues/1873#issuecomment-152293725 for more details

// scss-docs-start form-validation-mixins
@mixin form-validation-state-selector(\$state) {
  @if (\$state == \"valid\" or \$state == \"invalid\") {
    .was-validated #{if(&, \"&\", \"\")}:#{\$state},
    #{if(&, \"&\", \"\")}.is-#{\$state} {
      @content;
    }
  } @else {
    #{if(&, \"&\", \"\")}.is-#{\$state} {
      @content;
    }
  }
}

@mixin form-validation-state(
  \$state,
  \$color,
  \$icon,
  \$tooltip-color: color-contrast(\$color),
  \$tooltip-bg-color: rgba(\$color, \$form-feedback-tooltip-opacity),
  \$focus-box-shadow: 0 0 \$input-btn-focus-blur \$input-focus-width rgba(\$color, \$input-btn-focus-color-opacity)
) {
  .#{\$state}-feedback {
    display: none;
    width: 100%;
    margin-top: \$form-feedback-margin-top;
    @include font-size(\$form-feedback-font-size);
    font-style: \$form-feedback-font-style;
    color: \$color;
  }

  .#{\$state}-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%; // Contain to parent when possible
    padding: \$form-feedback-tooltip-padding-y \$form-feedback-tooltip-padding-x;
    margin-top: .1rem;
    @include font-size(\$form-feedback-tooltip-font-size);
    line-height: \$form-feedback-tooltip-line-height;
    color: \$tooltip-color;
    background-color: \$tooltip-bg-color;
    @include border-radius(\$form-feedback-tooltip-border-radius);
  }

  @include form-validation-state-selector(\$state) {
    ~ .#{\$state}-feedback,
    ~ .#{\$state}-tooltip {
      display: block;
    }
  }

  .form-control {
    @include form-validation-state-selector(\$state) {
      border-color: \$color;

      @if \$enable-validation-icons {
        padding-right: \$input-height-inner;
        background-image: escape-svg(\$icon);
        background-repeat: no-repeat;
        background-position: right \$input-height-inner-quarter center;
        background-size: \$input-height-inner-half \$input-height-inner-half;
      }

      &:focus {
        border-color: \$color;
        box-shadow: \$focus-box-shadow;
      }
    }
  }

  // stylelint-disable-next-line selector-no-qualifying-type
  textarea.form-control {
    @include form-validation-state-selector(\$state) {
      @if \$enable-validation-icons {
        padding-right: \$input-height-inner;
        background-position: top \$input-height-inner-quarter right \$input-height-inner-quarter;
      }
    }
  }

  .form-select {
    @include form-validation-state-selector(\$state) {
      border-color: \$color;

      @if \$enable-validation-icons {
        &:not([multiple]):not([size]),
        &:not([multiple])[size=\"1\"] {
          padding-right: \$form-select-feedback-icon-padding-end;
          background-image: escape-svg(\$form-select-indicator), escape-svg(\$icon);
          background-position: \$form-select-bg-position, \$form-select-feedback-icon-position;
          background-size: \$form-select-bg-size, \$form-select-feedback-icon-size;
        }
      }

      &:focus {
        border-color: \$color;
        box-shadow: \$focus-box-shadow;
      }
    }
  }

  .form-check-input {
    @include form-validation-state-selector(\$state) {
      border-color: \$color;

      &:checked {
        background-color: \$color;
      }

      &:focus {
        box-shadow: \$focus-box-shadow;
      }

      ~ .form-check-label {
        color: \$color;
      }
    }
  }
  .form-check-inline .form-check-input {
    ~ .#{\$state}-feedback {
      margin-left: .5em;
    }
  }

  .input-group .form-control,
  .input-group .form-select {
    @include form-validation-state-selector(\$state) {
      z-index: 3;
    }
  }
}
// scss-docs-end form-validation-mixins
", "scss/bootstrap/scss/mixins/_forms.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_forms.scss");
    }
}
