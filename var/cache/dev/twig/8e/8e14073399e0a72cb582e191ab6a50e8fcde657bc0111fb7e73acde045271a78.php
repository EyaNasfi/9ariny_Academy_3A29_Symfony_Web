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

/* scss/bootstrap/scss/_tooltip.scss */
class __TwigTemplate_86adc21ff506293fc524832a16cf35ecaa1d9773444ad9313635c8cfb7c23e9f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_tooltip.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_tooltip.scss"));

        // line 1
        echo "// Base class
.tooltip {
  position: absolute;
  z-index: \$zindex-tooltip;
  display: block;
  margin: \$tooltip-margin;
  // Our parent element can be arbitrary since tooltips are by default inserted as a sibling of their target element.
  // So reset our font and text properties to avoid inheriting weird values.
  @include reset-text();
  @include font-size(\$tooltip-font-size);
  // Allow breaking very long words so they don't overflow the tooltip's bounds
  word-wrap: break-word;
  opacity: 0;

  &.show { opacity: \$tooltip-opacity; }

  .tooltip-arrow {
    position: absolute;
    display: block;
    width: \$tooltip-arrow-width;
    height: \$tooltip-arrow-height;

    &::before {
      position: absolute;
      content: \"\";
      border-color: transparent;
      border-style: solid;
    }
  }
}

.bs-tooltip-top {
  padding: \$tooltip-arrow-height 0;

  .tooltip-arrow {
    bottom: 0;

    &::before {
      top: -1px;
      border-width: \$tooltip-arrow-height (\$tooltip-arrow-width / 2) 0;
      border-top-color: \$tooltip-arrow-color;
    }
  }
}

.bs-tooltip-end {
  padding: 0 \$tooltip-arrow-height;

  .tooltip-arrow {
    left: 0;
    width: \$tooltip-arrow-height;
    height: \$tooltip-arrow-width;

    &::before {
      right: -1px;
      border-width: (\$tooltip-arrow-width / 2) \$tooltip-arrow-height (\$tooltip-arrow-width / 2) 0;
      border-right-color: \$tooltip-arrow-color;
    }
  }
}

.bs-tooltip-bottom {
  padding: \$tooltip-arrow-height 0;

  .tooltip-arrow {
    top: 0;

    &::before {
      bottom: -1px;
      border-width: 0 (\$tooltip-arrow-width / 2) \$tooltip-arrow-height;
      border-bottom-color: \$tooltip-arrow-color;
    }
  }
}

.bs-tooltip-start {
  padding: 0 \$tooltip-arrow-height;

  .tooltip-arrow {
    right: 0;
    width: \$tooltip-arrow-height;
    height: \$tooltip-arrow-width;

    &::before {
      left: -1px;
      border-width: (\$tooltip-arrow-width / 2) 0 (\$tooltip-arrow-width / 2) \$tooltip-arrow-height;
      border-left-color: \$tooltip-arrow-color;
    }
  }
}

.bs-tooltip-auto {
  &[data-popper-placement^=\"top\"] {
    @extend .bs-tooltip-top;
  }
  &[data-popper-placement^=\"right\"] {
    @extend .bs-tooltip-end;
  }
  &[data-popper-placement^=\"bottom\"] {
    @extend .bs-tooltip-bottom;
  }
  &[data-popper-placement^=\"left\"] {
    @extend .bs-tooltip-start;
  }
}

// Wrapper for the tooltip content
.tooltip-inner {
  max-width: \$tooltip-max-width;
  padding: \$tooltip-padding-y \$tooltip-padding-x;
  color: \$tooltip-color;
  text-align: center;
  background-color: \$tooltip-bg;
  @include border-radius(\$tooltip-border-radius);
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
        return "scss/bootstrap/scss/_tooltip.scss";
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
        return new Source("// Base class
.tooltip {
  position: absolute;
  z-index: \$zindex-tooltip;
  display: block;
  margin: \$tooltip-margin;
  // Our parent element can be arbitrary since tooltips are by default inserted as a sibling of their target element.
  // So reset our font and text properties to avoid inheriting weird values.
  @include reset-text();
  @include font-size(\$tooltip-font-size);
  // Allow breaking very long words so they don't overflow the tooltip's bounds
  word-wrap: break-word;
  opacity: 0;

  &.show { opacity: \$tooltip-opacity; }

  .tooltip-arrow {
    position: absolute;
    display: block;
    width: \$tooltip-arrow-width;
    height: \$tooltip-arrow-height;

    &::before {
      position: absolute;
      content: \"\";
      border-color: transparent;
      border-style: solid;
    }
  }
}

.bs-tooltip-top {
  padding: \$tooltip-arrow-height 0;

  .tooltip-arrow {
    bottom: 0;

    &::before {
      top: -1px;
      border-width: \$tooltip-arrow-height (\$tooltip-arrow-width / 2) 0;
      border-top-color: \$tooltip-arrow-color;
    }
  }
}

.bs-tooltip-end {
  padding: 0 \$tooltip-arrow-height;

  .tooltip-arrow {
    left: 0;
    width: \$tooltip-arrow-height;
    height: \$tooltip-arrow-width;

    &::before {
      right: -1px;
      border-width: (\$tooltip-arrow-width / 2) \$tooltip-arrow-height (\$tooltip-arrow-width / 2) 0;
      border-right-color: \$tooltip-arrow-color;
    }
  }
}

.bs-tooltip-bottom {
  padding: \$tooltip-arrow-height 0;

  .tooltip-arrow {
    top: 0;

    &::before {
      bottom: -1px;
      border-width: 0 (\$tooltip-arrow-width / 2) \$tooltip-arrow-height;
      border-bottom-color: \$tooltip-arrow-color;
    }
  }
}

.bs-tooltip-start {
  padding: 0 \$tooltip-arrow-height;

  .tooltip-arrow {
    right: 0;
    width: \$tooltip-arrow-height;
    height: \$tooltip-arrow-width;

    &::before {
      left: -1px;
      border-width: (\$tooltip-arrow-width / 2) 0 (\$tooltip-arrow-width / 2) \$tooltip-arrow-height;
      border-left-color: \$tooltip-arrow-color;
    }
  }
}

.bs-tooltip-auto {
  &[data-popper-placement^=\"top\"] {
    @extend .bs-tooltip-top;
  }
  &[data-popper-placement^=\"right\"] {
    @extend .bs-tooltip-end;
  }
  &[data-popper-placement^=\"bottom\"] {
    @extend .bs-tooltip-bottom;
  }
  &[data-popper-placement^=\"left\"] {
    @extend .bs-tooltip-start;
  }
}

// Wrapper for the tooltip content
.tooltip-inner {
  max-width: \$tooltip-max-width;
  padding: \$tooltip-padding-y \$tooltip-padding-x;
  color: \$tooltip-color;
  text-align: center;
  background-color: \$tooltip-bg;
  @include border-radius(\$tooltip-border-radius);
}
", "scss/bootstrap/scss/_tooltip.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_tooltip.scss");
    }
}
