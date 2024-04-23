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

/* scss/bootstrap/scss/_spinners.scss */
class __TwigTemplate_411b645f7984390244b336befc8382e2c9a0c91b504f314c0f372901e355d29e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_spinners.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_spinners.scss"));

        // line 1
        echo "//
// Rotating border
//

// scss-docs-start spinner-border-keyframes
@keyframes spinner-border {
  to { transform: rotate(360deg) #{\"/* rtl:ignore */\"}; }
}
// scss-docs-end spinner-border-keyframes

.spinner-border {
  display: inline-block;
  width: \$spinner-width;
  height: \$spinner-height;
  vertical-align: \$spinner-vertical-align;
  border: \$spinner-border-width solid currentColor;
  border-right-color: transparent;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  animation: \$spinner-animation-speed linear infinite spinner-border;
}

.spinner-border-sm {
  width: \$spinner-width-sm;
  height: \$spinner-height-sm;
  border-width: \$spinner-border-width-sm;
}

//
// Growing circle
//

// scss-docs-start spinner-grow-keyframes
@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
// scss-docs-end spinner-grow-keyframes

.spinner-grow {
  display: inline-block;
  width: \$spinner-width;
  height: \$spinner-height;
  vertical-align: \$spinner-vertical-align;
  background-color: currentColor;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  opacity: 0;
  animation: \$spinner-animation-speed linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: \$spinner-width-sm;
  height: \$spinner-height-sm;
}

@if \$enable-reduced-motion {
  @media (prefers-reduced-motion: reduce) {
    .spinner-border,
    .spinner-grow {
      animation-duration: \$spinner-animation-speed * 2;
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
        return "scss/bootstrap/scss/_spinners.scss";
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
// Rotating border
//

// scss-docs-start spinner-border-keyframes
@keyframes spinner-border {
  to { transform: rotate(360deg) #{\"/* rtl:ignore */\"}; }
}
// scss-docs-end spinner-border-keyframes

.spinner-border {
  display: inline-block;
  width: \$spinner-width;
  height: \$spinner-height;
  vertical-align: \$spinner-vertical-align;
  border: \$spinner-border-width solid currentColor;
  border-right-color: transparent;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  animation: \$spinner-animation-speed linear infinite spinner-border;
}

.spinner-border-sm {
  width: \$spinner-width-sm;
  height: \$spinner-height-sm;
  border-width: \$spinner-border-width-sm;
}

//
// Growing circle
//

// scss-docs-start spinner-grow-keyframes
@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
// scss-docs-end spinner-grow-keyframes

.spinner-grow {
  display: inline-block;
  width: \$spinner-width;
  height: \$spinner-height;
  vertical-align: \$spinner-vertical-align;
  background-color: currentColor;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  opacity: 0;
  animation: \$spinner-animation-speed linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: \$spinner-width-sm;
  height: \$spinner-height-sm;
}

@if \$enable-reduced-motion {
  @media (prefers-reduced-motion: reduce) {
    .spinner-border,
    .spinner-grow {
      animation-duration: \$spinner-animation-speed * 2;
    }
  }
}
", "scss/bootstrap/scss/_spinners.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_spinners.scss");
    }
}
