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

/* scss/bootstrap/scss/_modal.scss */
class __TwigTemplate_724fafc06df2f13647f62faae737d24d2e9d5ca7c752bc414ec3c2205bafa168 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_modal.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_modal.scss"));

        // line 1
        echo "// .modal-open      - body class for killing the scroll
// .modal           - container to scroll within
// .modal-dialog    - positioning shell for the actual modal
// .modal-content   - actual modal w/ bg and corners and stuff


.modal-open {
  // Kill the scroll on the body
  overflow: hidden;

  .modal {
    overflow-x: hidden;
    overflow-y: auto;
  }
}

// Container that the modal scrolls within
.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: \$zindex-modal;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  // Prevent Chrome on Windows from adding a focus outline. For details, see
  // https://github.com/twbs/bootstrap/pull/10951.
  outline: 0;
  // We deliberately don't use `-webkit-overflow-scrolling: touch;` due to a
  // gnarly iOS Safari bug: https://bugs.webkit.org/show_bug.cgi?id=158342
  // See also https://github.com/twbs/bootstrap/issues/17695
}

// Shell div to position the modal with bottom padding
.modal-dialog {
  position: relative;
  width: auto;
  margin: \$modal-dialog-margin;
  // allow clicks to pass through for custom click handling to close modal
  pointer-events: none;

  // When fading in the modal, animate it to slide down
  .modal.fade & {
    @include transition(\$modal-transition);
    transform: \$modal-fade-transform;
  }
  .modal.show & {
    transform: \$modal-show-transform;
  }

  // When trying to close, animate focus to scale
  .modal.modal-static & {
    transform: \$modal-scale-transform;
  }
}

.modal-dialog-scrollable {
  height: subtract(100%, \$modal-dialog-margin * 2);

  .modal-content {
    max-height: 100%;
    overflow: hidden;
  }

  .modal-body {
    overflow-y: auto;
  }
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: subtract(100%, \$modal-dialog-margin * 2);
}

// Actual modal
.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%; // Ensure `.modal-content` extends the full width of the parent `.modal-dialog`
  // counteract the pointer-events: none; in the .modal-dialog
  color: \$modal-content-color;
  pointer-events: auto;
  background-color: \$modal-content-bg;
  background-clip: padding-box;
  border: \$modal-content-border-width solid \$modal-content-border-color;
  @include border-radius(\$modal-content-border-radius);
  @include box-shadow(\$modal-content-box-shadow-xs);
  // Remove focus outline from opened modal
  outline: 0;
}

// Modal background
.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: \$zindex-modal-backdrop;
  width: 100vw;
  height: 100vh;
  background-color: \$modal-backdrop-bg;

  // Fade for backdrop
  &.fade { opacity: 0; }
  &.show { opacity: \$modal-backdrop-opacity; }
}

// Modal header
// Top section of the modal w/ title and dismiss
.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between; // Put modal header elements (title and dismiss) on opposite ends
  padding: \$modal-header-padding;
  border-bottom: \$modal-header-border-width solid \$modal-header-border-color;
  @include border-top-radius(\$modal-content-inner-border-radius);

  .btn-close {
    padding: (\$modal-header-padding-y / 2) (\$modal-header-padding-x / 2);
    margin: (\$modal-header-padding-y / -2) (\$modal-header-padding-x / -2) (\$modal-header-padding-y / -2) auto;
  }
}

// Title text within header
.modal-title {
  margin-bottom: 0;
  line-height: \$modal-title-line-height;
}

// Modal body
// Where all modal content resides (sibling of .modal-header and .modal-footer)
.modal-body {
  position: relative;
  // Enable `flex-grow: 1` so that the body take up as much space as possible
  // when there should be a fixed height on `.modal-dialog`.
  flex: 1 1 auto;
  padding: \$modal-inner-padding;
}

// Footer (for actions)
.modal-footer {
  display: flex;
  flex-wrap: wrap;
  flex-shrink: 0;
  align-items: center; // vertically center
  justify-content: flex-end; // Right align buttons with flex property because text-align doesn't work on flex items
  padding: \$modal-inner-padding - \$modal-footer-margin-between / 2;
  border-top: \$modal-footer-border-width solid \$modal-footer-border-color;
  @include border-bottom-radius(\$modal-content-inner-border-radius);

  // Place margin between footer elements
  // This solution is far from ideal because of the universal selector usage,
  // but is needed to fix https://github.com/twbs/bootstrap/issues/24800
  > * {
    margin: \$modal-footer-margin-between / 2;
  }
}

// Scale up the modal
@include media-breakpoint-up(sm) {
  // Automatically set modal's width for larger viewports
  .modal-dialog {
    max-width: \$modal-md;
    margin: \$modal-dialog-margin-y-sm-up auto;
  }

  .modal-dialog-scrollable {
    height: subtract(100%, \$modal-dialog-margin-y-sm-up * 2);
  }

  .modal-dialog-centered {
    min-height: subtract(100%, \$modal-dialog-margin-y-sm-up * 2);
  }

  .modal-content {
    @include box-shadow(\$modal-content-box-shadow-sm-up);
  }

  .modal-sm { max-width: \$modal-sm; }
}

@include media-breakpoint-up(lg) {
  .modal-lg,
  .modal-xl {
    max-width: \$modal-lg;
  }
}

@include media-breakpoint-up(xl) {
  .modal-xl { max-width: \$modal-xl; }
}

// scss-docs-start modal-fullscreen-loop
@each \$breakpoint in map-keys(\$grid-breakpoints) {
  \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);
  \$postfix: if(\$infix != \"\", \$infix + \"-down\", \"\");

  @include media-breakpoint-down(\$breakpoint) {
    .modal-fullscreen#{\$postfix} {
      width: 100vw;
      max-width: none;
      height: 100%;
      margin: 0;

      .modal-content {
        height: 100%;
        border: 0;
        @include border-radius(0);
      }

      .modal-header {
        @include border-radius(0);
      }

      .modal-body {
        overflow-y: auto;
      }

      .modal-footer {
        @include border-radius(0);
      }
    }
  }
}
// scss-docs-end modal-fullscreen-loop
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_modal.scss";
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
        return new Source("// .modal-open      - body class for killing the scroll
// .modal           - container to scroll within
// .modal-dialog    - positioning shell for the actual modal
// .modal-content   - actual modal w/ bg and corners and stuff


.modal-open {
  // Kill the scroll on the body
  overflow: hidden;

  .modal {
    overflow-x: hidden;
    overflow-y: auto;
  }
}

// Container that the modal scrolls within
.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: \$zindex-modal;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  // Prevent Chrome on Windows from adding a focus outline. For details, see
  // https://github.com/twbs/bootstrap/pull/10951.
  outline: 0;
  // We deliberately don't use `-webkit-overflow-scrolling: touch;` due to a
  // gnarly iOS Safari bug: https://bugs.webkit.org/show_bug.cgi?id=158342
  // See also https://github.com/twbs/bootstrap/issues/17695
}

// Shell div to position the modal with bottom padding
.modal-dialog {
  position: relative;
  width: auto;
  margin: \$modal-dialog-margin;
  // allow clicks to pass through for custom click handling to close modal
  pointer-events: none;

  // When fading in the modal, animate it to slide down
  .modal.fade & {
    @include transition(\$modal-transition);
    transform: \$modal-fade-transform;
  }
  .modal.show & {
    transform: \$modal-show-transform;
  }

  // When trying to close, animate focus to scale
  .modal.modal-static & {
    transform: \$modal-scale-transform;
  }
}

.modal-dialog-scrollable {
  height: subtract(100%, \$modal-dialog-margin * 2);

  .modal-content {
    max-height: 100%;
    overflow: hidden;
  }

  .modal-body {
    overflow-y: auto;
  }
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: subtract(100%, \$modal-dialog-margin * 2);
}

// Actual modal
.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%; // Ensure `.modal-content` extends the full width of the parent `.modal-dialog`
  // counteract the pointer-events: none; in the .modal-dialog
  color: \$modal-content-color;
  pointer-events: auto;
  background-color: \$modal-content-bg;
  background-clip: padding-box;
  border: \$modal-content-border-width solid \$modal-content-border-color;
  @include border-radius(\$modal-content-border-radius);
  @include box-shadow(\$modal-content-box-shadow-xs);
  // Remove focus outline from opened modal
  outline: 0;
}

// Modal background
.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: \$zindex-modal-backdrop;
  width: 100vw;
  height: 100vh;
  background-color: \$modal-backdrop-bg;

  // Fade for backdrop
  &.fade { opacity: 0; }
  &.show { opacity: \$modal-backdrop-opacity; }
}

// Modal header
// Top section of the modal w/ title and dismiss
.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between; // Put modal header elements (title and dismiss) on opposite ends
  padding: \$modal-header-padding;
  border-bottom: \$modal-header-border-width solid \$modal-header-border-color;
  @include border-top-radius(\$modal-content-inner-border-radius);

  .btn-close {
    padding: (\$modal-header-padding-y / 2) (\$modal-header-padding-x / 2);
    margin: (\$modal-header-padding-y / -2) (\$modal-header-padding-x / -2) (\$modal-header-padding-y / -2) auto;
  }
}

// Title text within header
.modal-title {
  margin-bottom: 0;
  line-height: \$modal-title-line-height;
}

// Modal body
// Where all modal content resides (sibling of .modal-header and .modal-footer)
.modal-body {
  position: relative;
  // Enable `flex-grow: 1` so that the body take up as much space as possible
  // when there should be a fixed height on `.modal-dialog`.
  flex: 1 1 auto;
  padding: \$modal-inner-padding;
}

// Footer (for actions)
.modal-footer {
  display: flex;
  flex-wrap: wrap;
  flex-shrink: 0;
  align-items: center; // vertically center
  justify-content: flex-end; // Right align buttons with flex property because text-align doesn't work on flex items
  padding: \$modal-inner-padding - \$modal-footer-margin-between / 2;
  border-top: \$modal-footer-border-width solid \$modal-footer-border-color;
  @include border-bottom-radius(\$modal-content-inner-border-radius);

  // Place margin between footer elements
  // This solution is far from ideal because of the universal selector usage,
  // but is needed to fix https://github.com/twbs/bootstrap/issues/24800
  > * {
    margin: \$modal-footer-margin-between / 2;
  }
}

// Scale up the modal
@include media-breakpoint-up(sm) {
  // Automatically set modal's width for larger viewports
  .modal-dialog {
    max-width: \$modal-md;
    margin: \$modal-dialog-margin-y-sm-up auto;
  }

  .modal-dialog-scrollable {
    height: subtract(100%, \$modal-dialog-margin-y-sm-up * 2);
  }

  .modal-dialog-centered {
    min-height: subtract(100%, \$modal-dialog-margin-y-sm-up * 2);
  }

  .modal-content {
    @include box-shadow(\$modal-content-box-shadow-sm-up);
  }

  .modal-sm { max-width: \$modal-sm; }
}

@include media-breakpoint-up(lg) {
  .modal-lg,
  .modal-xl {
    max-width: \$modal-lg;
  }
}

@include media-breakpoint-up(xl) {
  .modal-xl { max-width: \$modal-xl; }
}

// scss-docs-start modal-fullscreen-loop
@each \$breakpoint in map-keys(\$grid-breakpoints) {
  \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);
  \$postfix: if(\$infix != \"\", \$infix + \"-down\", \"\");

  @include media-breakpoint-down(\$breakpoint) {
    .modal-fullscreen#{\$postfix} {
      width: 100vw;
      max-width: none;
      height: 100%;
      margin: 0;

      .modal-content {
        height: 100%;
        border: 0;
        @include border-radius(0);
      }

      .modal-header {
        @include border-radius(0);
      }

      .modal-body {
        overflow-y: auto;
      }

      .modal-footer {
        @include border-radius(0);
      }
    }
  }
}
// scss-docs-end modal-fullscreen-loop
", "scss/bootstrap/scss/_modal.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_modal.scss");
    }
}
