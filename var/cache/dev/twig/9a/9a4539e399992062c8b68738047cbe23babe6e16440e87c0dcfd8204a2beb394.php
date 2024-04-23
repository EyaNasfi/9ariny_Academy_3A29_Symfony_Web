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

/* scss/bootstrap/scss/mixins/_list-group.scss */
class __TwigTemplate_11c3c43050a329f3d7dc8f61370825c689d98e17796be1903f4dc0e076cb1852 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_list-group.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_list-group.scss"));

        // line 1
        echo "// List Groups

// scss-docs-start list-group-mixin
@mixin list-group-item-variant(\$state, \$background, \$color) {
  .list-group-item-#{\$state} {
    color: \$color;
    background-color: \$background;

    &.list-group-item-action {
      &:hover,
      &:focus {
        color: \$color;
        background-color: shade-color(\$background, 10%);
      }

      &.active {
        color: \$white;
        background-color: \$color;
        border-color: \$color;
      }
    }
  }
}
// scss-docs-end list-group-mixin
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_list-group.scss";
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
        return new Source("// List Groups

// scss-docs-start list-group-mixin
@mixin list-group-item-variant(\$state, \$background, \$color) {
  .list-group-item-#{\$state} {
    color: \$color;
    background-color: \$background;

    &.list-group-item-action {
      &:hover,
      &:focus {
        color: \$color;
        background-color: shade-color(\$background, 10%);
      }

      &.active {
        color: \$white;
        background-color: \$color;
        border-color: \$color;
      }
    }
  }
}
// scss-docs-end list-group-mixin
", "scss/bootstrap/scss/mixins/_list-group.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_list-group.scss");
    }
}
