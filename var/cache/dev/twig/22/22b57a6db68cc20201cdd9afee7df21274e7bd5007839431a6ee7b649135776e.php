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

/* scss/bootstrap/scss/mixins/_visually-hidden.scss */
class __TwigTemplate_499d0fa9992261bd20a7b05ac834950e6ac90c4056a861df7a2d680abdfcab02 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_visually-hidden.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_visually-hidden.scss"));

        // line 1
        echo "// stylelint-disable declaration-no-important

// Hide content visually while keeping it accessible to assistive technologies
//
// See: https://www.a11yproject.com/posts/2013-01-11-how-to-hide-content/
// See: https://hugogiraudel.com/2016/10/13/css-hide-and-seek/

@mixin visually-hidden() {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important; // Fix for https://github.com/twbs/bootstrap/issues/25686
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

// Use to only display content when it's focused, or one of its child elements is focused
// (i.e. when focus is within the element/container that the class was applied to)
//
// Useful for \"Skip to main content\" links; see https://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1

@mixin visually-hidden-focusable() {
  &:not(:focus):not(:focus-within) {
    @include visually-hidden();
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
        return "scss/bootstrap/scss/mixins/_visually-hidden.scss";
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
        return new Source("// stylelint-disable declaration-no-important

// Hide content visually while keeping it accessible to assistive technologies
//
// See: https://www.a11yproject.com/posts/2013-01-11-how-to-hide-content/
// See: https://hugogiraudel.com/2016/10/13/css-hide-and-seek/

@mixin visually-hidden() {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important; // Fix for https://github.com/twbs/bootstrap/issues/25686
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

// Use to only display content when it's focused, or one of its child elements is focused
// (i.e. when focus is within the element/container that the class was applied to)
//
// Useful for \"Skip to main content\" links; see https://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1

@mixin visually-hidden-focusable() {
  &:not(:focus):not(:focus-within) {
    @include visually-hidden();
  }
}
", "scss/bootstrap/scss/mixins/_visually-hidden.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_visually-hidden.scss");
    }
}
