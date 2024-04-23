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

/* scss/bootstrap/scss/mixins/_caret.scss */
class __TwigTemplate_5ef67db167fd0c9ce41756da42908566c2914c6762b77722ff248e1ecb08786e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_caret.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_caret.scss"));

        // line 1
        echo "// scss-docs-start caret-mixins
@mixin caret-down {
  border-top: \$caret-width solid;
  border-right: \$caret-width solid transparent;
  border-bottom: 0;
  border-left: \$caret-width solid transparent;
}

@mixin caret-up {
  border-top: 0;
  border-right: \$caret-width solid transparent;
  border-bottom: \$caret-width solid;
  border-left: \$caret-width solid transparent;
}

@mixin caret-end {
  border-top: \$caret-width solid transparent;
  border-right: 0;
  border-bottom: \$caret-width solid transparent;
  border-left: \$caret-width solid;
}

@mixin caret-start {
  border-top: \$caret-width solid transparent;
  border-right: \$caret-width solid;
  border-bottom: \$caret-width solid transparent;
}

@mixin caret(\$direction: down) {
  @if \$enable-caret {
    &::after {
      display: inline-block;
      margin-left: \$caret-spacing;
      vertical-align: \$caret-vertical-align;
      content: \"\";
      @if \$direction == down {
        @include caret-down();
      } @else if \$direction == up {
        @include caret-up();
      } @else if \$direction == end {
        @include caret-end();
      }
    }

    @if \$direction == start {
      &::after {
        display: none;
      }

      &::before {
        display: inline-block;
        margin-right: \$caret-spacing;
        vertical-align: \$caret-vertical-align;
        content: \"\";
        @include caret-start();
      }
    }

    &:empty::after {
      margin-left: 0;
    }
  }
}
// scss-docs-end caret-mixins
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_caret.scss";
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
        return new Source("// scss-docs-start caret-mixins
@mixin caret-down {
  border-top: \$caret-width solid;
  border-right: \$caret-width solid transparent;
  border-bottom: 0;
  border-left: \$caret-width solid transparent;
}

@mixin caret-up {
  border-top: 0;
  border-right: \$caret-width solid transparent;
  border-bottom: \$caret-width solid;
  border-left: \$caret-width solid transparent;
}

@mixin caret-end {
  border-top: \$caret-width solid transparent;
  border-right: 0;
  border-bottom: \$caret-width solid transparent;
  border-left: \$caret-width solid;
}

@mixin caret-start {
  border-top: \$caret-width solid transparent;
  border-right: \$caret-width solid;
  border-bottom: \$caret-width solid transparent;
}

@mixin caret(\$direction: down) {
  @if \$enable-caret {
    &::after {
      display: inline-block;
      margin-left: \$caret-spacing;
      vertical-align: \$caret-vertical-align;
      content: \"\";
      @if \$direction == down {
        @include caret-down();
      } @else if \$direction == up {
        @include caret-up();
      } @else if \$direction == end {
        @include caret-end();
      }
    }

    @if \$direction == start {
      &::after {
        display: none;
      }

      &::before {
        display: inline-block;
        margin-right: \$caret-spacing;
        vertical-align: \$caret-vertical-align;
        content: \"\";
        @include caret-start();
      }
    }

    &:empty::after {
      margin-left: 0;
    }
  }
}
// scss-docs-end caret-mixins
", "scss/bootstrap/scss/mixins/_caret.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_caret.scss");
    }
}
