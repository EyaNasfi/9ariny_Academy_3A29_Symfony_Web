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

/* scss/bootstrap/scss/_close.scss */
class __TwigTemplate_f3eadaca20bec4815468aaa0a8d7f31727a85dda53a27b2e07d9312913b0724a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_close.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_close.scss"));

        // line 1
        echo "// transparent background and border properties included for button version.
// iOS requires the button element instead of an anchor tag.
// If you want the anchor version, it requires `href=\"#\"`.
// See https://developer.mozilla.org/en-US/docs/Web/Events/click#Safari_Mobile

.btn-close {
  box-sizing: content-box;
  width: \$btn-close-width;
  height: \$btn-close-height;
  padding: \$btn-close-padding-y \$btn-close-padding-x;
  color: \$btn-close-color;
  background: transparent escape-svg(\$btn-close-bg) center / \$btn-close-width auto no-repeat; // include transparent for button elements
  border: 0; // for button elements
  @include border-radius();
  opacity: \$btn-close-opacity;

  // Override <a>'s hover style
  &:hover {
    color: \$btn-close-color;
    text-decoration: none;
    opacity: \$btn-close-hover-opacity;
  }

  &:focus {
    outline: 0;
    box-shadow: \$btn-close-focus-shadow;
    opacity: \$btn-close-focus-opacity;
  }

  &:disabled,
  &.disabled {
    pointer-events: none;
    user-select: none;
    opacity: \$btn-close-disabled-opacity;
  }
}

.btn-close-white {
  filter: \$btn-close-white-filter;
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
        return "scss/bootstrap/scss/_close.scss";
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
        return new Source("// transparent background and border properties included for button version.
// iOS requires the button element instead of an anchor tag.
// If you want the anchor version, it requires `href=\"#\"`.
// See https://developer.mozilla.org/en-US/docs/Web/Events/click#Safari_Mobile

.btn-close {
  box-sizing: content-box;
  width: \$btn-close-width;
  height: \$btn-close-height;
  padding: \$btn-close-padding-y \$btn-close-padding-x;
  color: \$btn-close-color;
  background: transparent escape-svg(\$btn-close-bg) center / \$btn-close-width auto no-repeat; // include transparent for button elements
  border: 0; // for button elements
  @include border-radius();
  opacity: \$btn-close-opacity;

  // Override <a>'s hover style
  &:hover {
    color: \$btn-close-color;
    text-decoration: none;
    opacity: \$btn-close-hover-opacity;
  }

  &:focus {
    outline: 0;
    box-shadow: \$btn-close-focus-shadow;
    opacity: \$btn-close-focus-opacity;
  }

  &:disabled,
  &.disabled {
    pointer-events: none;
    user-select: none;
    opacity: \$btn-close-disabled-opacity;
  }
}

.btn-close-white {
  filter: \$btn-close-white-filter;
}
", "scss/bootstrap/scss/_close.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_close.scss");
    }
}
