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

/* scss/bootstrap/scss/_popover.scss */
class __TwigTemplate_8c38905824d815120efdf65b76549c16156a8af780c004a09e7e342f28ce4b5f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_popover.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_popover.scss"));

        // line 1
        echo ".popover {
  position: absolute;
  top: 0;
  left: 0 #{\"/* rtl:ignore */\"};
  z-index: \$zindex-popover;
  display: block;
  max-width: \$popover-max-width;
  // Our parent element can be arbitrary since tooltips are by default inserted as a sibling of their target element.
  // So reset our font and text properties to avoid inheriting weird values.
  @include reset-text();
  @include font-size(\$popover-font-size);
  // Allow breaking very long words so they don't overflow the popover's bounds
  word-wrap: break-word;
  background-color: \$popover-bg;
  background-clip: padding-box;
  border: \$popover-border-width solid \$popover-border-color;
  @include border-radius(\$popover-border-radius);
  @include box-shadow(\$popover-box-shadow);

  .popover-arrow {
    position: absolute;
    display: block;
    width: \$popover-arrow-width;
    height: \$popover-arrow-height;

    &::before,
    &::after {
      position: absolute;
      display: block;
      content: \"\";
      border-color: transparent;
      border-style: solid;
    }
  }
}

.bs-popover-top {
  > .popover-arrow {
    bottom: subtract(-\$popover-arrow-height, \$popover-border-width);

    &::before {
      bottom: 0;
      border-width: \$popover-arrow-height (\$popover-arrow-width / 2) 0;
      border-top-color: \$popover-arrow-outer-color;
    }

    &::after {
      bottom: \$popover-border-width;
      border-width: \$popover-arrow-height (\$popover-arrow-width / 2) 0;
      border-top-color: \$popover-arrow-color;
    }
  }
}

.bs-popover-end {
  > .popover-arrow {
    left: subtract(-\$popover-arrow-height, \$popover-border-width);
    width: \$popover-arrow-height;
    height: \$popover-arrow-width;

    &::before {
      left: 0;
      border-width: (\$popover-arrow-width / 2) \$popover-arrow-height (\$popover-arrow-width / 2) 0;
      border-right-color: \$popover-arrow-outer-color;
    }

    &::after {
      left: \$popover-border-width;
      border-width: (\$popover-arrow-width / 2) \$popover-arrow-height (\$popover-arrow-width / 2) 0;
      border-right-color: \$popover-arrow-color;
    }
  }
}

.bs-popover-bottom {
  > .popover-arrow {
    top: subtract(-\$popover-arrow-height, \$popover-border-width);

    &::before {
      top: 0;
      border-width: 0 (\$popover-arrow-width / 2) \$popover-arrow-height (\$popover-arrow-width / 2);
      border-bottom-color: \$popover-arrow-outer-color;
    }

    &::after {
      top: \$popover-border-width;
      border-width: 0 (\$popover-arrow-width / 2) \$popover-arrow-height (\$popover-arrow-width / 2);
      border-bottom-color: \$popover-arrow-color;
    }
  }

  // This will remove the popover-header's border just below the arrow
  .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: \$popover-arrow-width;
    margin-left: -\$popover-arrow-width / 2;
    content: \"\";
    border-bottom: \$popover-border-width solid \$popover-header-bg;
  }
}

.bs-popover-start {
  > .popover-arrow {
    right: subtract(-\$popover-arrow-height, \$popover-border-width);
    width: \$popover-arrow-height;
    height: \$popover-arrow-width;

    &::before {
      right: 0;
      border-width: (\$popover-arrow-width / 2) 0 (\$popover-arrow-width / 2) \$popover-arrow-height;
      border-left-color: \$popover-arrow-outer-color;
    }

    &::after {
      right: \$popover-border-width;
      border-width: (\$popover-arrow-width / 2) 0 (\$popover-arrow-width / 2) \$popover-arrow-height;
      border-left-color: \$popover-arrow-color;
    }
  }
}

.bs-popover-auto {
  &[data-popper-placement^=\"top\"] {
    @extend .bs-popover-top;
  }
  &[data-popper-placement^=\"right\"] {
    @extend .bs-popover-end;
  }
  &[data-popper-placement^=\"bottom\"] {
    @extend .bs-popover-bottom;
  }
  &[data-popper-placement^=\"left\"] {
    @extend .bs-popover-start;
  }
}

// Offset the popover to account for the popover arrow
.popover-header {
  padding: \$popover-header-padding-y \$popover-header-padding-x;
  margin-bottom: 0; // Reset the default from Reboot
  @include font-size(\$font-size-base);
  color: \$popover-header-color;
  background-color: \$popover-header-bg;
  border-bottom: \$popover-border-width solid shade-color(\$popover-header-bg, 10%);
  @include border-top-radius(\$popover-inner-border-radius);

  &:empty {
    display: none;
  }
}

.popover-body {
  padding: \$popover-body-padding-y \$popover-body-padding-x;
  color: \$popover-body-color;
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
        return "scss/bootstrap/scss/_popover.scss";
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
        return new Source(".popover {
  position: absolute;
  top: 0;
  left: 0 #{\"/* rtl:ignore */\"};
  z-index: \$zindex-popover;
  display: block;
  max-width: \$popover-max-width;
  // Our parent element can be arbitrary since tooltips are by default inserted as a sibling of their target element.
  // So reset our font and text properties to avoid inheriting weird values.
  @include reset-text();
  @include font-size(\$popover-font-size);
  // Allow breaking very long words so they don't overflow the popover's bounds
  word-wrap: break-word;
  background-color: \$popover-bg;
  background-clip: padding-box;
  border: \$popover-border-width solid \$popover-border-color;
  @include border-radius(\$popover-border-radius);
  @include box-shadow(\$popover-box-shadow);

  .popover-arrow {
    position: absolute;
    display: block;
    width: \$popover-arrow-width;
    height: \$popover-arrow-height;

    &::before,
    &::after {
      position: absolute;
      display: block;
      content: \"\";
      border-color: transparent;
      border-style: solid;
    }
  }
}

.bs-popover-top {
  > .popover-arrow {
    bottom: subtract(-\$popover-arrow-height, \$popover-border-width);

    &::before {
      bottom: 0;
      border-width: \$popover-arrow-height (\$popover-arrow-width / 2) 0;
      border-top-color: \$popover-arrow-outer-color;
    }

    &::after {
      bottom: \$popover-border-width;
      border-width: \$popover-arrow-height (\$popover-arrow-width / 2) 0;
      border-top-color: \$popover-arrow-color;
    }
  }
}

.bs-popover-end {
  > .popover-arrow {
    left: subtract(-\$popover-arrow-height, \$popover-border-width);
    width: \$popover-arrow-height;
    height: \$popover-arrow-width;

    &::before {
      left: 0;
      border-width: (\$popover-arrow-width / 2) \$popover-arrow-height (\$popover-arrow-width / 2) 0;
      border-right-color: \$popover-arrow-outer-color;
    }

    &::after {
      left: \$popover-border-width;
      border-width: (\$popover-arrow-width / 2) \$popover-arrow-height (\$popover-arrow-width / 2) 0;
      border-right-color: \$popover-arrow-color;
    }
  }
}

.bs-popover-bottom {
  > .popover-arrow {
    top: subtract(-\$popover-arrow-height, \$popover-border-width);

    &::before {
      top: 0;
      border-width: 0 (\$popover-arrow-width / 2) \$popover-arrow-height (\$popover-arrow-width / 2);
      border-bottom-color: \$popover-arrow-outer-color;
    }

    &::after {
      top: \$popover-border-width;
      border-width: 0 (\$popover-arrow-width / 2) \$popover-arrow-height (\$popover-arrow-width / 2);
      border-bottom-color: \$popover-arrow-color;
    }
  }

  // This will remove the popover-header's border just below the arrow
  .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: \$popover-arrow-width;
    margin-left: -\$popover-arrow-width / 2;
    content: \"\";
    border-bottom: \$popover-border-width solid \$popover-header-bg;
  }
}

.bs-popover-start {
  > .popover-arrow {
    right: subtract(-\$popover-arrow-height, \$popover-border-width);
    width: \$popover-arrow-height;
    height: \$popover-arrow-width;

    &::before {
      right: 0;
      border-width: (\$popover-arrow-width / 2) 0 (\$popover-arrow-width / 2) \$popover-arrow-height;
      border-left-color: \$popover-arrow-outer-color;
    }

    &::after {
      right: \$popover-border-width;
      border-width: (\$popover-arrow-width / 2) 0 (\$popover-arrow-width / 2) \$popover-arrow-height;
      border-left-color: \$popover-arrow-color;
    }
  }
}

.bs-popover-auto {
  &[data-popper-placement^=\"top\"] {
    @extend .bs-popover-top;
  }
  &[data-popper-placement^=\"right\"] {
    @extend .bs-popover-end;
  }
  &[data-popper-placement^=\"bottom\"] {
    @extend .bs-popover-bottom;
  }
  &[data-popper-placement^=\"left\"] {
    @extend .bs-popover-start;
  }
}

// Offset the popover to account for the popover arrow
.popover-header {
  padding: \$popover-header-padding-y \$popover-header-padding-x;
  margin-bottom: 0; // Reset the default from Reboot
  @include font-size(\$font-size-base);
  color: \$popover-header-color;
  background-color: \$popover-header-bg;
  border-bottom: \$popover-border-width solid shade-color(\$popover-header-bg, 10%);
  @include border-top-radius(\$popover-inner-border-radius);

  &:empty {
    display: none;
  }
}

.popover-body {
  padding: \$popover-body-padding-y \$popover-body-padding-x;
  color: \$popover-body-color;
}
", "scss/bootstrap/scss/_popover.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_popover.scss");
    }
}
