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

/* scss/bootstrap/scss/_progress.scss */
class __TwigTemplate_8c068dafac189cfd3f77b1bc4c1abe2eb6070ed1d09a1fab635bba03415fb33b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_progress.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_progress.scss"));

        // line 1
        echo "// Disable animation if transitions are disabled

// scss-docs-start progress-keyframes
@if \$enable-transitions {
  @keyframes progress-bar-stripes {
    0% { background-position-x: \$progress-height; }
  }
}
// scss-docs-end progress-keyframes

.progress {
  display: flex;
  height: \$progress-height;
  overflow: hidden; // force rounded corners by cropping it
  @include font-size(\$progress-font-size);
  background-color: \$progress-bg;
  @include border-radius(\$progress-border-radius);
  @include box-shadow(\$progress-box-shadow);
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: \$progress-bar-color;
  text-align: center;
  white-space: nowrap;
  background-color: \$progress-bar-bg;
  @include transition(\$progress-bar-transition);
}

.progress-bar-striped {
  @include gradient-striped();
  background-size: \$progress-height \$progress-height;
}

@if \$enable-transitions {
  .progress-bar-animated {
    animation: \$progress-bar-animation-timing progress-bar-stripes;

    @if \$enable-reduced-motion {
      @media (prefers-reduced-motion: reduce) {
        animation: none;
      }
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
        return "scss/bootstrap/scss/_progress.scss";
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
        return new Source("// Disable animation if transitions are disabled

// scss-docs-start progress-keyframes
@if \$enable-transitions {
  @keyframes progress-bar-stripes {
    0% { background-position-x: \$progress-height; }
  }
}
// scss-docs-end progress-keyframes

.progress {
  display: flex;
  height: \$progress-height;
  overflow: hidden; // force rounded corners by cropping it
  @include font-size(\$progress-font-size);
  background-color: \$progress-bg;
  @include border-radius(\$progress-border-radius);
  @include box-shadow(\$progress-box-shadow);
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: \$progress-bar-color;
  text-align: center;
  white-space: nowrap;
  background-color: \$progress-bar-bg;
  @include transition(\$progress-bar-transition);
}

.progress-bar-striped {
  @include gradient-striped();
  background-size: \$progress-height \$progress-height;
}

@if \$enable-transitions {
  .progress-bar-animated {
    animation: \$progress-bar-animation-timing progress-bar-stripes;

    @if \$enable-reduced-motion {
      @media (prefers-reduced-motion: reduce) {
        animation: none;
      }
    }
  }
}
", "scss/bootstrap/scss/_progress.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_progress.scss");
    }
}
