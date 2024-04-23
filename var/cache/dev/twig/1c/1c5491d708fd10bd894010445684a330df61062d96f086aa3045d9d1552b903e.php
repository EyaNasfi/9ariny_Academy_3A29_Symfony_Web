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

/* scss/bootstrap/scss/_dropdown.scss */
class __TwigTemplate_aa0b8de21e53b20f9de0f1b023eef2d0bc17ca960d3dd169ebee16713866d483 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_dropdown.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_dropdown.scss"));

        // line 1
        echo "// The dropdown wrapper (`<div>`)
.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;

  // Generate the caret automatically
  @include caret();
}

// The dropdown menu
.dropdown-menu {
  position: absolute;
  z-index: \$zindex-dropdown;
  display: none; // none by default, but block on \"open\" of the menu
  min-width: \$dropdown-min-width;
  padding: \$dropdown-padding-y \$dropdown-padding-x;
  margin: 0; // Override default margin of ul
  @include font-size(\$dropdown-font-size);
  color: \$dropdown-color;
  text-align: left; // Ensures proper alignment if parent has it changed (e.g., modal footer)
  list-style: none;
  background-color: \$dropdown-bg;
  background-clip: padding-box;
  border: \$dropdown-border-width solid \$dropdown-border-color;
  @include border-radius(\$dropdown-border-radius);
  @include box-shadow(\$dropdown-box-shadow);

  &[data-bs-popper] {
    top: 100%;
    left: 0;
    margin-top: \$dropdown-spacer;
  }
}

// scss-docs-start responsive-breakpoints
// We deliberately hardcode the `bs-` prefix because we check
// this custom property in JS to determine Popper's positioning

@each \$breakpoint in map-keys(\$grid-breakpoints) {
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    .dropdown-menu#{\$infix}-start {
      --bs-position: start;

      &[data-bs-popper] {
        right: auto #{\"/* rtl:ignore */\"};
        left: 0 #{\"/* rtl:ignore */\"};
      }
    }

    .dropdown-menu#{\$infix}-end {
      --bs-position: end;

      &[data-bs-popper] {
        right: 0 #{\"/* rtl:ignore */\"};
        left: auto #{\"/* rtl:ignore */\"};
      }
    }
  }
}
// scss-docs-end responsive-breakpoints

// Allow for dropdowns to go bottom up (aka, dropup-menu)
// Just add .dropup after the standard .dropdown class and you're set.
.dropup {
  .dropdown-menu[data-bs-popper] {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: \$dropdown-spacer;
  }

  .dropdown-toggle {
    @include caret(up);
  }
}

.dropend {
  .dropdown-menu[data-bs-popper] {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: \$dropdown-spacer;
  }

  .dropdown-toggle {
    @include caret(end);
    &::after {
      vertical-align: 0;
    }
  }
}

.dropstart {
  .dropdown-menu[data-bs-popper] {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: \$dropdown-spacer;
  }

  .dropdown-toggle {
    @include caret(start);
    &::before {
      vertical-align: 0;
    }
  }
}


// Dividers (basically an `<hr>`) within the dropdown
.dropdown-divider {
  height: 0;
  margin: \$dropdown-divider-margin-y 0;
  overflow: hidden;
  border-top: 1px solid \$dropdown-divider-bg;
}

// Links, buttons, and more within the dropdown menu
//
// `<button>`-specific styles are denoted with `// For <button>s`
.dropdown-item {
  display: block;
  width: 100%; // For `<button>`s
  padding: \$dropdown-item-padding-y \$dropdown-item-padding-x;
  clear: both;
  font-weight: \$font-weight-normal;
  color: \$dropdown-link-color;
  text-align: inherit; // For `<button>`s
  text-decoration: if(\$link-decoration == none, null, none);
  white-space: nowrap; // prevent links from randomly breaking onto new lines
  background-color: transparent; // For `<button>`s
  border: 0; // For `<button>`s

  // Prevent dropdown overflow if there's no padding
  // See https://github.com/twbs/bootstrap/pull/27703
  @if \$dropdown-padding-y == 0 {
    &:first-child {
      @include border-top-radius(\$dropdown-inner-border-radius);
    }

    &:last-child {
      @include border-bottom-radius(\$dropdown-inner-border-radius);
    }
  }

  &:hover,
  &:focus {
    color: \$dropdown-link-hover-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
    @include gradient-bg(\$dropdown-link-hover-bg);
  }

  &.active,
  &:active {
    color: \$dropdown-link-active-color;
    text-decoration: none;
    @include gradient-bg(\$dropdown-link-active-bg);
  }

  &.disabled,
  &:disabled {
    color: \$dropdown-link-disabled-color;
    pointer-events: none;
    background-color: transparent;
    // Remove CSS gradients if they're enabled
    background-image: if(\$enable-gradients, none, null);
  }
}

.dropdown-menu.show {
  display: block;
}

// Dropdown section headers
.dropdown-header {
  display: block;
  padding: \$dropdown-header-padding;
  margin-bottom: 0; // for use with heading elements
  @include font-size(\$font-size-sm);
  color: \$dropdown-header-color;
  white-space: nowrap; // as with > li > a
}

// Dropdown text
.dropdown-item-text {
  display: block;
  padding: \$dropdown-item-padding-y \$dropdown-item-padding-x;
  color: \$dropdown-link-color;
}

// Dark dropdowns
.dropdown-menu-dark {
  color: \$dropdown-dark-color;
  background-color: \$dropdown-dark-bg;
  border-color: \$dropdown-dark-border-color;
  @include box-shadow(\$dropdown-dark-box-shadow);

  .dropdown-item {
    color: \$dropdown-dark-link-color;

    &:hover,
    &:focus {
      color: \$dropdown-dark-link-hover-color;
      @include gradient-bg(\$dropdown-dark-link-hover-bg);
    }

    &.active,
    &:active {
      color: \$dropdown-dark-link-active-color;
      @include gradient-bg(\$dropdown-dark-link-active-bg);
    }

    &.disabled,
    &:disabled {
      color: \$dropdown-dark-link-disabled-color;
    }
  }

  .dropdown-divider {
    border-color: \$dropdown-dark-divider-bg;
  }

  .dropdown-item-text {
    color: \$dropdown-dark-link-color;
  }

  .dropdown-header {
    color: \$dropdown-dark-header-color;
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
        return "scss/bootstrap/scss/_dropdown.scss";
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
        return new Source("// The dropdown wrapper (`<div>`)
.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;

  // Generate the caret automatically
  @include caret();
}

// The dropdown menu
.dropdown-menu {
  position: absolute;
  z-index: \$zindex-dropdown;
  display: none; // none by default, but block on \"open\" of the menu
  min-width: \$dropdown-min-width;
  padding: \$dropdown-padding-y \$dropdown-padding-x;
  margin: 0; // Override default margin of ul
  @include font-size(\$dropdown-font-size);
  color: \$dropdown-color;
  text-align: left; // Ensures proper alignment if parent has it changed (e.g., modal footer)
  list-style: none;
  background-color: \$dropdown-bg;
  background-clip: padding-box;
  border: \$dropdown-border-width solid \$dropdown-border-color;
  @include border-radius(\$dropdown-border-radius);
  @include box-shadow(\$dropdown-box-shadow);

  &[data-bs-popper] {
    top: 100%;
    left: 0;
    margin-top: \$dropdown-spacer;
  }
}

// scss-docs-start responsive-breakpoints
// We deliberately hardcode the `bs-` prefix because we check
// this custom property in JS to determine Popper's positioning

@each \$breakpoint in map-keys(\$grid-breakpoints) {
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    .dropdown-menu#{\$infix}-start {
      --bs-position: start;

      &[data-bs-popper] {
        right: auto #{\"/* rtl:ignore */\"};
        left: 0 #{\"/* rtl:ignore */\"};
      }
    }

    .dropdown-menu#{\$infix}-end {
      --bs-position: end;

      &[data-bs-popper] {
        right: 0 #{\"/* rtl:ignore */\"};
        left: auto #{\"/* rtl:ignore */\"};
      }
    }
  }
}
// scss-docs-end responsive-breakpoints

// Allow for dropdowns to go bottom up (aka, dropup-menu)
// Just add .dropup after the standard .dropdown class and you're set.
.dropup {
  .dropdown-menu[data-bs-popper] {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: \$dropdown-spacer;
  }

  .dropdown-toggle {
    @include caret(up);
  }
}

.dropend {
  .dropdown-menu[data-bs-popper] {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: \$dropdown-spacer;
  }

  .dropdown-toggle {
    @include caret(end);
    &::after {
      vertical-align: 0;
    }
  }
}

.dropstart {
  .dropdown-menu[data-bs-popper] {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: \$dropdown-spacer;
  }

  .dropdown-toggle {
    @include caret(start);
    &::before {
      vertical-align: 0;
    }
  }
}


// Dividers (basically an `<hr>`) within the dropdown
.dropdown-divider {
  height: 0;
  margin: \$dropdown-divider-margin-y 0;
  overflow: hidden;
  border-top: 1px solid \$dropdown-divider-bg;
}

// Links, buttons, and more within the dropdown menu
//
// `<button>`-specific styles are denoted with `// For <button>s`
.dropdown-item {
  display: block;
  width: 100%; // For `<button>`s
  padding: \$dropdown-item-padding-y \$dropdown-item-padding-x;
  clear: both;
  font-weight: \$font-weight-normal;
  color: \$dropdown-link-color;
  text-align: inherit; // For `<button>`s
  text-decoration: if(\$link-decoration == none, null, none);
  white-space: nowrap; // prevent links from randomly breaking onto new lines
  background-color: transparent; // For `<button>`s
  border: 0; // For `<button>`s

  // Prevent dropdown overflow if there's no padding
  // See https://github.com/twbs/bootstrap/pull/27703
  @if \$dropdown-padding-y == 0 {
    &:first-child {
      @include border-top-radius(\$dropdown-inner-border-radius);
    }

    &:last-child {
      @include border-bottom-radius(\$dropdown-inner-border-radius);
    }
  }

  &:hover,
  &:focus {
    color: \$dropdown-link-hover-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
    @include gradient-bg(\$dropdown-link-hover-bg);
  }

  &.active,
  &:active {
    color: \$dropdown-link-active-color;
    text-decoration: none;
    @include gradient-bg(\$dropdown-link-active-bg);
  }

  &.disabled,
  &:disabled {
    color: \$dropdown-link-disabled-color;
    pointer-events: none;
    background-color: transparent;
    // Remove CSS gradients if they're enabled
    background-image: if(\$enable-gradients, none, null);
  }
}

.dropdown-menu.show {
  display: block;
}

// Dropdown section headers
.dropdown-header {
  display: block;
  padding: \$dropdown-header-padding;
  margin-bottom: 0; // for use with heading elements
  @include font-size(\$font-size-sm);
  color: \$dropdown-header-color;
  white-space: nowrap; // as with > li > a
}

// Dropdown text
.dropdown-item-text {
  display: block;
  padding: \$dropdown-item-padding-y \$dropdown-item-padding-x;
  color: \$dropdown-link-color;
}

// Dark dropdowns
.dropdown-menu-dark {
  color: \$dropdown-dark-color;
  background-color: \$dropdown-dark-bg;
  border-color: \$dropdown-dark-border-color;
  @include box-shadow(\$dropdown-dark-box-shadow);

  .dropdown-item {
    color: \$dropdown-dark-link-color;

    &:hover,
    &:focus {
      color: \$dropdown-dark-link-hover-color;
      @include gradient-bg(\$dropdown-dark-link-hover-bg);
    }

    &.active,
    &:active {
      color: \$dropdown-dark-link-active-color;
      @include gradient-bg(\$dropdown-dark-link-active-bg);
    }

    &.disabled,
    &:disabled {
      color: \$dropdown-dark-link-disabled-color;
    }
  }

  .dropdown-divider {
    border-color: \$dropdown-dark-divider-bg;
  }

  .dropdown-item-text {
    color: \$dropdown-dark-link-color;
  }

  .dropdown-header {
    color: \$dropdown-dark-header-color;
  }
}
", "scss/bootstrap/scss/_dropdown.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_dropdown.scss");
    }
}
