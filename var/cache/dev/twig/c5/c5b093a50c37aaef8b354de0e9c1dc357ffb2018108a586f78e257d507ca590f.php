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

/* scss/bootstrap/scss/forms/_form-control.scss */
class __TwigTemplate_40069d19c2097c391a9150f73fe7539f0af82778d5b49f13af19d0723d0022e6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_form-control.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_form-control.scss"));

        // line 1
        echo "//
// General form controls (plus a few specific high-level interventions)
//

.form-control {
  display: block;
  width: 100%;
  padding: \$input-padding-y \$input-padding-x;
  font-family: \$input-font-family;
  @include font-size(\$input-font-size);
  font-weight: \$input-font-weight;
  line-height: \$input-line-height;
  color: \$input-color;
  background-color: \$input-bg;
  background-clip: padding-box;
  border: \$input-border-width solid \$input-border-color;
  appearance: none; // Fix appearance for date inputs in Safari

  // Note: This has no effect on <select>s in some browsers, due to the limited stylability of `<select>`s in CSS.
  @include border-radius(\$input-border-radius, 0);

  @include box-shadow(\$input-box-shadow);
  @include transition(\$input-transition);

  &[type=\"file\"] {
    overflow: hidden; // prevent pseudo element button overlap

    &:not(:disabled):not(:read-only) {
      cursor: pointer;
    }
  }

  // Customize the `:focus` state to imitate native WebKit styles.
  &:focus {
    color: \$input-focus-color;
    background-color: \$input-focus-bg;
    border-color: \$input-focus-border-color;
    outline: 0;
    @if \$enable-shadows {
      @include box-shadow(\$input-box-shadow, \$input-focus-box-shadow);
    } @else {
      // Avoid using mixin so we can pass custom focus shadow properly
      box-shadow: \$input-focus-box-shadow;
    }
  }

  // Add some height to date inputs on iOS
  // https://github.com/twbs/bootstrap/issues/23307
  // TODO: we can remove this workaround once https://bugs.webkit.org/show_bug.cgi?id=198959 is resolved
  &::-webkit-date-and-time-value {
    // Multiply line-height by 1em if it has no unit
    height: if(unit(\$input-line-height) == \"\", \$input-line-height * 1em, \$input-line-height);
  }

  // Placeholder
  &::placeholder {
    color: \$input-placeholder-color;
    // Override Firefox's unusual default opacity; see https://github.com/twbs/bootstrap/pull/11526.
    opacity: 1;
  }

  // Disabled and read-only inputs
  //
  // HTML5 says that controls under a fieldset > legend:first-child won't be
  // disabled if the fieldset is disabled. Due to implementation difficulty, we
  // don't honor that edge case; we style them as disabled anyway.
  &:disabled,
  &:read-only {
    background-color: \$input-disabled-bg;
    border-color: \$input-disabled-border-color;
    // iOS fix for unreadable disabled content; see https://github.com/twbs/bootstrap/issues/11655.
    opacity: 1;
  }

  // File input buttons theming
  &::file-selector-button {
    padding: \$input-padding-y \$input-padding-x;
    margin: (-\$input-padding-y) (-\$input-padding-x);
    margin-inline-end: \$input-padding-x;
    color: \$form-file-button-color;
    @include gradient-bg(\$form-file-button-bg);
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: \$input-border-width;
    border-radius: 0; // stylelint-disable-line property-disallowed-list
    @include transition(\$btn-transition);
  }

  &:hover:not(:disabled):not(:read-only)::file-selector-button {
    background-color: \$form-file-button-hover-bg;
  }

  &::-webkit-file-upload-button {
    padding: \$input-padding-y \$input-padding-x;
    margin: (-\$input-padding-y) (-\$input-padding-x);
    margin-inline-end: \$input-padding-x;
    color: \$form-file-button-color;
    @include gradient-bg(\$form-file-button-bg);
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: \$input-border-width;
    border-radius: 0; // stylelint-disable-line property-disallowed-list
    @include transition(\$btn-transition);
  }

  &:hover:not(:disabled):not(:read-only)::-webkit-file-upload-button {
    background-color: \$form-file-button-hover-bg;
  }
}

// Readonly controls as plain text
//
// Apply class to a readonly input to make it appear like regular plain
// text (without any border, background color, focus indicator)

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: \$input-padding-y 0;
  margin-bottom: 0; // match inputs if this class comes on inputs with default margins
  line-height: \$input-line-height;
  color: \$input-plaintext-color;
  background-color: transparent;
  border: solid transparent;
  border-width: \$input-border-width 0;

  &.form-control-sm,
  &.form-control-lg {
    padding-right: 0;
    padding-left: 0;
  }
}

// Form control sizing
//
// Build on `.form-control` with modifier classes to decrease or increase the
// height and font-size of form controls.
//
// Repeated in `_input_group.scss` to avoid Sass extend issues.

.form-control-sm {
  min-height: \$input-height-sm;
  padding: \$input-padding-y-sm \$input-padding-x-sm;
  @include font-size(\$input-font-size-sm);
  @include border-radius(\$input-border-radius-sm);

  &::file-selector-button {
    padding: \$input-padding-y-sm \$input-padding-x-sm;
    margin: (-\$input-padding-y-sm) (-\$input-padding-x-sm);
    margin-inline-end: \$input-padding-x-sm;
  }

  &::-webkit-file-upload-button {
    padding: \$input-padding-y-sm \$input-padding-x-sm;
    margin: (-\$input-padding-y-sm) (-\$input-padding-x-sm);
    margin-inline-end: \$input-padding-x-sm;
  }
}

.form-control-lg {
  min-height: \$input-height-lg;
  padding: \$input-padding-y-lg \$input-padding-x-lg;
  @include font-size(\$input-font-size-lg);
  @include border-radius(\$input-border-radius-lg);

  &::file-selector-button {
    padding: \$input-padding-y-lg \$input-padding-x-lg;
    margin: (-\$input-padding-y-lg) (-\$input-padding-x-lg);
    margin-inline-end: \$input-padding-x-lg;
  }

  &::-webkit-file-upload-button {
    padding: \$input-padding-y-lg \$input-padding-x-lg;
    margin: (-\$input-padding-y-lg) (-\$input-padding-x-lg);
    margin-inline-end: \$input-padding-x-lg;
  }
}

// Make sure textareas don't shrink too much when resized
// https://github.com/twbs/bootstrap/pull/29124
// stylelint-disable selector-no-qualifying-type
textarea {
  &.form-control {
    min-height: \$input-height;
  }

  &.form-control-sm {
    min-height: \$input-height-sm;
  }

  &.form-control-lg {
    min-height: \$input-height-lg;
  }
}
// stylelint-enable selector-no-qualifying-type

.form-control-color {
  max-width: 3rem;
  height: auto; // Override fixed browser height
  padding: \$input-padding-y;

  &:not(:disabled):not(:read-only) {
    cursor: pointer;
  }

  &::-moz-color-swatch {
    height: if(unit(\$input-line-height) == \"\", \$input-line-height * 1em, \$input-line-height);
    @include border-radius(\$input-border-radius);
  }

  &::-webkit-color-swatch {
    height: if(unit(\$input-line-height) == \"\", \$input-line-height * 1em, \$input-line-height);
    @include border-radius(\$input-border-radius);
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
        return "scss/bootstrap/scss/forms/_form-control.scss";
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
// General form controls (plus a few specific high-level interventions)
//

.form-control {
  display: block;
  width: 100%;
  padding: \$input-padding-y \$input-padding-x;
  font-family: \$input-font-family;
  @include font-size(\$input-font-size);
  font-weight: \$input-font-weight;
  line-height: \$input-line-height;
  color: \$input-color;
  background-color: \$input-bg;
  background-clip: padding-box;
  border: \$input-border-width solid \$input-border-color;
  appearance: none; // Fix appearance for date inputs in Safari

  // Note: This has no effect on <select>s in some browsers, due to the limited stylability of `<select>`s in CSS.
  @include border-radius(\$input-border-radius, 0);

  @include box-shadow(\$input-box-shadow);
  @include transition(\$input-transition);

  &[type=\"file\"] {
    overflow: hidden; // prevent pseudo element button overlap

    &:not(:disabled):not(:read-only) {
      cursor: pointer;
    }
  }

  // Customize the `:focus` state to imitate native WebKit styles.
  &:focus {
    color: \$input-focus-color;
    background-color: \$input-focus-bg;
    border-color: \$input-focus-border-color;
    outline: 0;
    @if \$enable-shadows {
      @include box-shadow(\$input-box-shadow, \$input-focus-box-shadow);
    } @else {
      // Avoid using mixin so we can pass custom focus shadow properly
      box-shadow: \$input-focus-box-shadow;
    }
  }

  // Add some height to date inputs on iOS
  // https://github.com/twbs/bootstrap/issues/23307
  // TODO: we can remove this workaround once https://bugs.webkit.org/show_bug.cgi?id=198959 is resolved
  &::-webkit-date-and-time-value {
    // Multiply line-height by 1em if it has no unit
    height: if(unit(\$input-line-height) == \"\", \$input-line-height * 1em, \$input-line-height);
  }

  // Placeholder
  &::placeholder {
    color: \$input-placeholder-color;
    // Override Firefox's unusual default opacity; see https://github.com/twbs/bootstrap/pull/11526.
    opacity: 1;
  }

  // Disabled and read-only inputs
  //
  // HTML5 says that controls under a fieldset > legend:first-child won't be
  // disabled if the fieldset is disabled. Due to implementation difficulty, we
  // don't honor that edge case; we style them as disabled anyway.
  &:disabled,
  &:read-only {
    background-color: \$input-disabled-bg;
    border-color: \$input-disabled-border-color;
    // iOS fix for unreadable disabled content; see https://github.com/twbs/bootstrap/issues/11655.
    opacity: 1;
  }

  // File input buttons theming
  &::file-selector-button {
    padding: \$input-padding-y \$input-padding-x;
    margin: (-\$input-padding-y) (-\$input-padding-x);
    margin-inline-end: \$input-padding-x;
    color: \$form-file-button-color;
    @include gradient-bg(\$form-file-button-bg);
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: \$input-border-width;
    border-radius: 0; // stylelint-disable-line property-disallowed-list
    @include transition(\$btn-transition);
  }

  &:hover:not(:disabled):not(:read-only)::file-selector-button {
    background-color: \$form-file-button-hover-bg;
  }

  &::-webkit-file-upload-button {
    padding: \$input-padding-y \$input-padding-x;
    margin: (-\$input-padding-y) (-\$input-padding-x);
    margin-inline-end: \$input-padding-x;
    color: \$form-file-button-color;
    @include gradient-bg(\$form-file-button-bg);
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: \$input-border-width;
    border-radius: 0; // stylelint-disable-line property-disallowed-list
    @include transition(\$btn-transition);
  }

  &:hover:not(:disabled):not(:read-only)::-webkit-file-upload-button {
    background-color: \$form-file-button-hover-bg;
  }
}

// Readonly controls as plain text
//
// Apply class to a readonly input to make it appear like regular plain
// text (without any border, background color, focus indicator)

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: \$input-padding-y 0;
  margin-bottom: 0; // match inputs if this class comes on inputs with default margins
  line-height: \$input-line-height;
  color: \$input-plaintext-color;
  background-color: transparent;
  border: solid transparent;
  border-width: \$input-border-width 0;

  &.form-control-sm,
  &.form-control-lg {
    padding-right: 0;
    padding-left: 0;
  }
}

// Form control sizing
//
// Build on `.form-control` with modifier classes to decrease or increase the
// height and font-size of form controls.
//
// Repeated in `_input_group.scss` to avoid Sass extend issues.

.form-control-sm {
  min-height: \$input-height-sm;
  padding: \$input-padding-y-sm \$input-padding-x-sm;
  @include font-size(\$input-font-size-sm);
  @include border-radius(\$input-border-radius-sm);

  &::file-selector-button {
    padding: \$input-padding-y-sm \$input-padding-x-sm;
    margin: (-\$input-padding-y-sm) (-\$input-padding-x-sm);
    margin-inline-end: \$input-padding-x-sm;
  }

  &::-webkit-file-upload-button {
    padding: \$input-padding-y-sm \$input-padding-x-sm;
    margin: (-\$input-padding-y-sm) (-\$input-padding-x-sm);
    margin-inline-end: \$input-padding-x-sm;
  }
}

.form-control-lg {
  min-height: \$input-height-lg;
  padding: \$input-padding-y-lg \$input-padding-x-lg;
  @include font-size(\$input-font-size-lg);
  @include border-radius(\$input-border-radius-lg);

  &::file-selector-button {
    padding: \$input-padding-y-lg \$input-padding-x-lg;
    margin: (-\$input-padding-y-lg) (-\$input-padding-x-lg);
    margin-inline-end: \$input-padding-x-lg;
  }

  &::-webkit-file-upload-button {
    padding: \$input-padding-y-lg \$input-padding-x-lg;
    margin: (-\$input-padding-y-lg) (-\$input-padding-x-lg);
    margin-inline-end: \$input-padding-x-lg;
  }
}

// Make sure textareas don't shrink too much when resized
// https://github.com/twbs/bootstrap/pull/29124
// stylelint-disable selector-no-qualifying-type
textarea {
  &.form-control {
    min-height: \$input-height;
  }

  &.form-control-sm {
    min-height: \$input-height-sm;
  }

  &.form-control-lg {
    min-height: \$input-height-lg;
  }
}
// stylelint-enable selector-no-qualifying-type

.form-control-color {
  max-width: 3rem;
  height: auto; // Override fixed browser height
  padding: \$input-padding-y;

  &:not(:disabled):not(:read-only) {
    cursor: pointer;
  }

  &::-moz-color-swatch {
    height: if(unit(\$input-line-height) == \"\", \$input-line-height * 1em, \$input-line-height);
    @include border-radius(\$input-border-radius);
  }

  &::-webkit-color-swatch {
    height: if(unit(\$input-line-height) == \"\", \$input-line-height * 1em, \$input-line-height);
    @include border-radius(\$input-border-radius);
  }
}
", "scss/bootstrap/scss/forms/_form-control.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\forms\\_form-control.scss");
    }
}
