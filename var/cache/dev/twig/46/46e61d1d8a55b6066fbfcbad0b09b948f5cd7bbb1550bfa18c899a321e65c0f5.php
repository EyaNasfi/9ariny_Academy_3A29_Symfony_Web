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

/* scss/bootstrap/scss/_offcanvas.scss */
class __TwigTemplate_286788cc74b5df19dbfb2826266afa11db14baab8d85887f50a1926c580ce2f0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_offcanvas.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_offcanvas.scss"));

        // line 1
        echo ".offcanvas {
  position: fixed;
  bottom: 0;
  z-index: \$zindex-offcanvas;
  display: flex;
  flex-direction: column;
  max-width: 100%;
  color: \$offcanvas-color;
  visibility: hidden;
  background-color: \$offcanvas-bg-color;
  background-clip: padding-box;
  outline: 0;
  @include box-shadow(\$offcanvas-box-shadow);
  @include transition(transform \$offcanvas-transition-duration ease-in-out);
}

.offcanvas-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: \$offcanvas-padding-y \$offcanvas-padding-x;

  .btn-close {
    padding: (\$offcanvas-padding-y / 2) (\$offcanvas-padding-x / 2);
    margin: (\$offcanvas-padding-y / -2) (\$offcanvas-padding-x / -2) (\$offcanvas-padding-y / -2) auto;
  }
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: \$offcanvas-title-line-height;
}

.offcanvas-body {
  flex-grow: 1;
  padding: \$offcanvas-padding-y \$offcanvas-padding-x;
  overflow-y: auto;
}

.offcanvas-start {
  top: 0;
  left: 0;
  width: \$offcanvas-horizontal-width;
  border-right: \$offcanvas-border-width solid \$offcanvas-border-color;
  transform: translateX(-100%);
}

.offcanvas-end {
  top: 0;
  right: 0;
  width: \$offcanvas-horizontal-width;
  border-left: \$offcanvas-border-width solid \$offcanvas-border-color;
  transform: translateX(100%);
}

.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: \$offcanvas-vertical-height;
  max-height: 100%;
  border-bottom: \$offcanvas-border-width solid \$offcanvas-border-color;
  transform: translateY(-100%);
}

.offcanvas-bottom {
  right: 0;
  left: 0;
  height: \$offcanvas-vertical-height;
  max-height: 100%;
  border-top: \$offcanvas-border-width solid \$offcanvas-border-color;
  transform: translateY(100%);
}

.offcanvas.show {
  transform: none;
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
        return "scss/bootstrap/scss/_offcanvas.scss";
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
        return new Source(".offcanvas {
  position: fixed;
  bottom: 0;
  z-index: \$zindex-offcanvas;
  display: flex;
  flex-direction: column;
  max-width: 100%;
  color: \$offcanvas-color;
  visibility: hidden;
  background-color: \$offcanvas-bg-color;
  background-clip: padding-box;
  outline: 0;
  @include box-shadow(\$offcanvas-box-shadow);
  @include transition(transform \$offcanvas-transition-duration ease-in-out);
}

.offcanvas-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: \$offcanvas-padding-y \$offcanvas-padding-x;

  .btn-close {
    padding: (\$offcanvas-padding-y / 2) (\$offcanvas-padding-x / 2);
    margin: (\$offcanvas-padding-y / -2) (\$offcanvas-padding-x / -2) (\$offcanvas-padding-y / -2) auto;
  }
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: \$offcanvas-title-line-height;
}

.offcanvas-body {
  flex-grow: 1;
  padding: \$offcanvas-padding-y \$offcanvas-padding-x;
  overflow-y: auto;
}

.offcanvas-start {
  top: 0;
  left: 0;
  width: \$offcanvas-horizontal-width;
  border-right: \$offcanvas-border-width solid \$offcanvas-border-color;
  transform: translateX(-100%);
}

.offcanvas-end {
  top: 0;
  right: 0;
  width: \$offcanvas-horizontal-width;
  border-left: \$offcanvas-border-width solid \$offcanvas-border-color;
  transform: translateX(100%);
}

.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: \$offcanvas-vertical-height;
  max-height: 100%;
  border-bottom: \$offcanvas-border-width solid \$offcanvas-border-color;
  transform: translateY(-100%);
}

.offcanvas-bottom {
  right: 0;
  left: 0;
  height: \$offcanvas-vertical-height;
  max-height: 100%;
  border-top: \$offcanvas-border-width solid \$offcanvas-border-color;
  transform: translateY(100%);
}

.offcanvas.show {
  transform: none;
}
", "scss/bootstrap/scss/_offcanvas.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_offcanvas.scss");
    }
}
