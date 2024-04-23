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

/* scss/bootstrap/scss/mixins/_buttons.scss */
class __TwigTemplate_4c63840ba9f74e90844565167f1b6bf3ee473b36a6f744670a33c8b67c692c71 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_buttons.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_buttons.scss"));

        // line 1
        echo "// Button variants
//
// Easily pump out default styles, as well as :hover, :focus, :active,
// and disabled options for all buttons

// scss-docs-start btn-variant-mixin
@mixin button-variant(
  \$background,
  \$border,
  \$color: color-contrast(\$background),
  \$hover-background: if(\$color == \$color-contrast-light, shade-color(\$background, \$btn-hover-bg-shade-amount), tint-color(\$background, \$btn-hover-bg-tint-amount)),
  \$hover-border: if(\$color == \$color-contrast-light, shade-color(\$border, \$btn-hover-border-shade-amount), tint-color(\$border, \$btn-hover-border-tint-amount)),
  \$hover-color: color-contrast(\$hover-background),
  \$active-background: if(\$color == \$color-contrast-light, shade-color(\$background,\$btn-active-bg-shade-amount), tint-color(\$background, \$btn-active-bg-tint-amount)),
  \$active-border: if(\$color == \$color-contrast-light, shade-color(\$border, \$btn-active-border-shade-amount), tint-color(\$border, \$btn-active-border-tint-amount)),
  \$active-color: color-contrast(\$active-background),
  \$disabled-background: \$background,
  \$disabled-border: \$border,
  \$disabled-color: color-contrast(\$disabled-background)
) {
  color: \$color;
  @include gradient-bg(\$background);
  border-color: \$border;
  @include box-shadow(\$btn-box-shadow);

  &:hover {
    color: \$hover-color;
    @include gradient-bg(\$hover-background);
    border-color: \$hover-border;
  }

  .btn-check:focus + &,
  &:focus {
    color: \$hover-color;
    @include gradient-bg(\$hover-background);
    border-color: \$hover-border;
    @if \$enable-shadows {
      @include box-shadow(\$btn-box-shadow, 0 0 0 \$btn-focus-width rgba(mix(\$color, \$border, 15%), .5));
    } @else {
      // Avoid using mixin so we can pass custom focus shadow properly
      box-shadow: 0 0 0 \$btn-focus-width rgba(mix(\$color, \$border, 15%), .5);
    }
  }

  .btn-check:checked + &,
  .btn-check:active + &,
  &:active,
  &.active,
  .show > &.dropdown-toggle {
    color: \$active-color;
    background-color: \$active-background;
    // Remove CSS gradients if they're enabled
    background-image: if(\$enable-gradients, none, null);
    border-color: \$active-border;

    &:focus {
      @if \$enable-shadows {
        @include box-shadow(\$btn-active-box-shadow, 0 0 0 \$btn-focus-width rgba(mix(\$color, \$border, 15%), .5));
      } @else {
        // Avoid using mixin so we can pass custom focus shadow properly
        box-shadow: 0 0 0 \$btn-focus-width rgba(mix(\$color, \$border, 15%), .5);
      }
    }
  }

  &:disabled,
  &.disabled {
    color: \$disabled-color;
    background-color: \$disabled-background;
    // Remove CSS gradients if they're enabled
    background-image: if(\$enable-gradients, none, null);
    border-color: \$disabled-border;
  }
}
// scss-docs-end btn-variant-mixin

// scss-docs-start btn-outline-variant-mixin
@mixin button-outline-variant(
  \$color,
  \$color-hover: color-contrast(\$color),
  \$active-background: \$color,
  \$active-border: \$color,
  \$active-color: color-contrast(\$active-background)
) {
  color: \$color;
  border-color: \$color;

  &:hover {
    color: \$color-hover;
    background-color: \$active-background;
    border-color: \$active-border;
  }

  .btn-check:focus + &,
  &:focus {
    box-shadow: 0 0 0 \$btn-focus-width rgba(\$color, .5);
  }

  .btn-check:checked + &,
  .btn-check:active + &,
  &:active,
  &.active,
  &.dropdown-toggle.show {
    color: \$active-color;
    background-color: \$active-background;
    border-color: \$active-border;

    &:focus {
      @if \$enable-shadows {
        @include box-shadow(\$btn-active-box-shadow, 0 0 0 \$btn-focus-width rgba(\$color, .5));
      } @else {
        // Avoid using mixin so we can pass custom focus shadow properly
        box-shadow: 0 0 0 \$btn-focus-width rgba(\$color, .5);
      }
    }
  }

  &:disabled,
  &.disabled {
    color: \$color;
    background-color: transparent;
  }
}
// scss-docs-end btn-outline-variant-mixin

// scss-docs-start btn-size-mixin
@mixin button-size(\$padding-y, \$padding-x, \$font-size, \$border-radius) {
  padding: \$padding-y \$padding-x;
  @include font-size(\$font-size);
  // Manually declare to provide an override to the browser default
  @include border-radius(\$border-radius, 0);
}
// scss-docs-end btn-size-mixin
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_buttons.scss";
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
        return new Source("// Button variants
//
// Easily pump out default styles, as well as :hover, :focus, :active,
// and disabled options for all buttons

// scss-docs-start btn-variant-mixin
@mixin button-variant(
  \$background,
  \$border,
  \$color: color-contrast(\$background),
  \$hover-background: if(\$color == \$color-contrast-light, shade-color(\$background, \$btn-hover-bg-shade-amount), tint-color(\$background, \$btn-hover-bg-tint-amount)),
  \$hover-border: if(\$color == \$color-contrast-light, shade-color(\$border, \$btn-hover-border-shade-amount), tint-color(\$border, \$btn-hover-border-tint-amount)),
  \$hover-color: color-contrast(\$hover-background),
  \$active-background: if(\$color == \$color-contrast-light, shade-color(\$background,\$btn-active-bg-shade-amount), tint-color(\$background, \$btn-active-bg-tint-amount)),
  \$active-border: if(\$color == \$color-contrast-light, shade-color(\$border, \$btn-active-border-shade-amount), tint-color(\$border, \$btn-active-border-tint-amount)),
  \$active-color: color-contrast(\$active-background),
  \$disabled-background: \$background,
  \$disabled-border: \$border,
  \$disabled-color: color-contrast(\$disabled-background)
) {
  color: \$color;
  @include gradient-bg(\$background);
  border-color: \$border;
  @include box-shadow(\$btn-box-shadow);

  &:hover {
    color: \$hover-color;
    @include gradient-bg(\$hover-background);
    border-color: \$hover-border;
  }

  .btn-check:focus + &,
  &:focus {
    color: \$hover-color;
    @include gradient-bg(\$hover-background);
    border-color: \$hover-border;
    @if \$enable-shadows {
      @include box-shadow(\$btn-box-shadow, 0 0 0 \$btn-focus-width rgba(mix(\$color, \$border, 15%), .5));
    } @else {
      // Avoid using mixin so we can pass custom focus shadow properly
      box-shadow: 0 0 0 \$btn-focus-width rgba(mix(\$color, \$border, 15%), .5);
    }
  }

  .btn-check:checked + &,
  .btn-check:active + &,
  &:active,
  &.active,
  .show > &.dropdown-toggle {
    color: \$active-color;
    background-color: \$active-background;
    // Remove CSS gradients if they're enabled
    background-image: if(\$enable-gradients, none, null);
    border-color: \$active-border;

    &:focus {
      @if \$enable-shadows {
        @include box-shadow(\$btn-active-box-shadow, 0 0 0 \$btn-focus-width rgba(mix(\$color, \$border, 15%), .5));
      } @else {
        // Avoid using mixin so we can pass custom focus shadow properly
        box-shadow: 0 0 0 \$btn-focus-width rgba(mix(\$color, \$border, 15%), .5);
      }
    }
  }

  &:disabled,
  &.disabled {
    color: \$disabled-color;
    background-color: \$disabled-background;
    // Remove CSS gradients if they're enabled
    background-image: if(\$enable-gradients, none, null);
    border-color: \$disabled-border;
  }
}
// scss-docs-end btn-variant-mixin

// scss-docs-start btn-outline-variant-mixin
@mixin button-outline-variant(
  \$color,
  \$color-hover: color-contrast(\$color),
  \$active-background: \$color,
  \$active-border: \$color,
  \$active-color: color-contrast(\$active-background)
) {
  color: \$color;
  border-color: \$color;

  &:hover {
    color: \$color-hover;
    background-color: \$active-background;
    border-color: \$active-border;
  }

  .btn-check:focus + &,
  &:focus {
    box-shadow: 0 0 0 \$btn-focus-width rgba(\$color, .5);
  }

  .btn-check:checked + &,
  .btn-check:active + &,
  &:active,
  &.active,
  &.dropdown-toggle.show {
    color: \$active-color;
    background-color: \$active-background;
    border-color: \$active-border;

    &:focus {
      @if \$enable-shadows {
        @include box-shadow(\$btn-active-box-shadow, 0 0 0 \$btn-focus-width rgba(\$color, .5));
      } @else {
        // Avoid using mixin so we can pass custom focus shadow properly
        box-shadow: 0 0 0 \$btn-focus-width rgba(\$color, .5);
      }
    }
  }

  &:disabled,
  &.disabled {
    color: \$color;
    background-color: transparent;
  }
}
// scss-docs-end btn-outline-variant-mixin

// scss-docs-start btn-size-mixin
@mixin button-size(\$padding-y, \$padding-x, \$font-size, \$border-radius) {
  padding: \$padding-y \$padding-x;
  @include font-size(\$font-size);
  // Manually declare to provide an override to the browser default
  @include border-radius(\$border-radius, 0);
}
// scss-docs-end btn-size-mixin
", "scss/bootstrap/scss/mixins/_buttons.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_buttons.scss");
    }
}
