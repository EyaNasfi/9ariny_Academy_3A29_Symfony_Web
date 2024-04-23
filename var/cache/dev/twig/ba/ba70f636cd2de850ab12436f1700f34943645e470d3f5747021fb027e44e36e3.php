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

/* scss/bootstrap/scss/_breadcrumb.scss */
class __TwigTemplate_65e05be568701b75691d6d83905e427b4fa4ec609510a2f084ead418b3fdd6f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_breadcrumb.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_breadcrumb.scss"));

        // line 1
        echo ".breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: \$breadcrumb-padding-y \$breadcrumb-padding-x;
  margin-bottom: \$breadcrumb-margin-bottom;
  @include font-size(\$breadcrumb-font-size);
  list-style: none;
  background-color: \$breadcrumb-bg;
  @include border-radius(\$breadcrumb-border-radius);
}

.breadcrumb-item {
  // The separator between breadcrumbs (by default, a forward-slash: \"/\")
  + .breadcrumb-item {
    padding-left: \$breadcrumb-item-padding-x;

    &::before {
      float: left; // Suppress inline spacings and underlining of the separator
      padding-right: \$breadcrumb-item-padding-x;
      color: \$breadcrumb-divider-color;
      content: var(--#{\$variable-prefix}breadcrumb-divider, escape-svg(\$breadcrumb-divider)) #{\"/* rtl:\"} var(--#{\$variable-prefix}breadcrumb-divider, escape-svg(\$breadcrumb-divider-flipped)) #{\"*/\"};
    }
  }

  &.active {
    color: \$breadcrumb-active-color;
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
        return "scss/bootstrap/scss/_breadcrumb.scss";
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
        return new Source(".breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: \$breadcrumb-padding-y \$breadcrumb-padding-x;
  margin-bottom: \$breadcrumb-margin-bottom;
  @include font-size(\$breadcrumb-font-size);
  list-style: none;
  background-color: \$breadcrumb-bg;
  @include border-radius(\$breadcrumb-border-radius);
}

.breadcrumb-item {
  // The separator between breadcrumbs (by default, a forward-slash: \"/\")
  + .breadcrumb-item {
    padding-left: \$breadcrumb-item-padding-x;

    &::before {
      float: left; // Suppress inline spacings and underlining of the separator
      padding-right: \$breadcrumb-item-padding-x;
      color: \$breadcrumb-divider-color;
      content: var(--#{\$variable-prefix}breadcrumb-divider, escape-svg(\$breadcrumb-divider)) #{\"/* rtl:\"} var(--#{\$variable-prefix}breadcrumb-divider, escape-svg(\$breadcrumb-divider-flipped)) #{\"*/\"};
    }
  }

  &.active {
    color: \$breadcrumb-active-color;
  }
}
", "scss/bootstrap/scss/_breadcrumb.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_breadcrumb.scss");
    }
}
