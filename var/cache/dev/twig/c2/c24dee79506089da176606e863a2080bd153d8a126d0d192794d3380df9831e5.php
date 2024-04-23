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

/* scss/bootstrap/scss/_nav.scss */
class __TwigTemplate_188b5482b88caa13b34f9bc2df16e5df04487d132affd2f2809203ba2e85283a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_nav.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_nav.scss"));

        // line 1
        echo "// Base class
//
// Kickstart any navigation component with a set of style resets. Works with
// `<nav>`s, `<ul>`s or `<ol>`s.

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: \$nav-link-padding-y \$nav-link-padding-x;
  @include font-size(\$nav-link-font-size);
  font-weight: \$nav-link-font-weight;
  color: \$nav-link-color;
  text-decoration: if(\$link-decoration == none, null, none);
  @include transition(\$nav-link-transition);

  &:hover,
  &:focus {
    color: \$nav-link-hover-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
  }

  // Disabled state lightens text
  &.disabled {
    color: \$nav-link-disabled-color;
    pointer-events: none;
    cursor: default;
  }
}

//
// Tabs
//

.nav-tabs {
  border-bottom: \$nav-tabs-border-width solid \$nav-tabs-border-color;

  .nav-link {
    margin-bottom: -\$nav-tabs-border-width;
    background: none;
    border: \$nav-tabs-border-width solid transparent;
    @include border-top-radius(\$nav-tabs-border-radius);

    &:hover,
    &:focus {
      border-color: \$nav-tabs-link-hover-border-color;
      // Prevents active .nav-link tab overlapping focus outline of previous/next .nav-link
      isolation: isolate;
    }

    &.disabled {
      color: \$nav-link-disabled-color;
      background-color: transparent;
      border-color: transparent;
    }
  }

  .nav-link.active,
  .nav-item.show .nav-link {
    color: \$nav-tabs-link-active-color;
    background-color: \$nav-tabs-link-active-bg;
    border-color: \$nav-tabs-link-active-border-color;
  }

  .dropdown-menu {
    // Make dropdown border overlap tab border
    margin-top: -\$nav-tabs-border-width;
    // Remove the top rounded corners here since there is a hard edge above the menu
    @include border-top-radius(0);
  }
}


//
// Pills
//

.nav-pills {
  .nav-link {
    background: none;
    border: 0;
    @include border-radius(\$nav-pills-border-radius);
  }

  .nav-link.active,
  .show > .nav-link {
    color: \$nav-pills-link-active-color;
    @include gradient-bg(\$nav-pills-link-active-bg);
  }
}


//
// Justified variants
//

.nav-fill {
  > .nav-link,
  .nav-item {
    flex: 1 1 auto;
    text-align: center;
  }
}

.nav-justified {
  > .nav-link,
  .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center;
  }
}

.nav-fill,
.nav-justified {
  .nav-item .nav-link {
    width: 100%; // Make sure button will grow
  }
}


// Tabbable tabs
//
// Hide tabbable panes to start, show them when `.active`

.tab-content {
  > .tab-pane {
    display: none;
  }
  > .active {
    display: block;
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
        return "scss/bootstrap/scss/_nav.scss";
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
//
// Kickstart any navigation component with a set of style resets. Works with
// `<nav>`s, `<ul>`s or `<ol>`s.

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: \$nav-link-padding-y \$nav-link-padding-x;
  @include font-size(\$nav-link-font-size);
  font-weight: \$nav-link-font-weight;
  color: \$nav-link-color;
  text-decoration: if(\$link-decoration == none, null, none);
  @include transition(\$nav-link-transition);

  &:hover,
  &:focus {
    color: \$nav-link-hover-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
  }

  // Disabled state lightens text
  &.disabled {
    color: \$nav-link-disabled-color;
    pointer-events: none;
    cursor: default;
  }
}

//
// Tabs
//

.nav-tabs {
  border-bottom: \$nav-tabs-border-width solid \$nav-tabs-border-color;

  .nav-link {
    margin-bottom: -\$nav-tabs-border-width;
    background: none;
    border: \$nav-tabs-border-width solid transparent;
    @include border-top-radius(\$nav-tabs-border-radius);

    &:hover,
    &:focus {
      border-color: \$nav-tabs-link-hover-border-color;
      // Prevents active .nav-link tab overlapping focus outline of previous/next .nav-link
      isolation: isolate;
    }

    &.disabled {
      color: \$nav-link-disabled-color;
      background-color: transparent;
      border-color: transparent;
    }
  }

  .nav-link.active,
  .nav-item.show .nav-link {
    color: \$nav-tabs-link-active-color;
    background-color: \$nav-tabs-link-active-bg;
    border-color: \$nav-tabs-link-active-border-color;
  }

  .dropdown-menu {
    // Make dropdown border overlap tab border
    margin-top: -\$nav-tabs-border-width;
    // Remove the top rounded corners here since there is a hard edge above the menu
    @include border-top-radius(0);
  }
}


//
// Pills
//

.nav-pills {
  .nav-link {
    background: none;
    border: 0;
    @include border-radius(\$nav-pills-border-radius);
  }

  .nav-link.active,
  .show > .nav-link {
    color: \$nav-pills-link-active-color;
    @include gradient-bg(\$nav-pills-link-active-bg);
  }
}


//
// Justified variants
//

.nav-fill {
  > .nav-link,
  .nav-item {
    flex: 1 1 auto;
    text-align: center;
  }
}

.nav-justified {
  > .nav-link,
  .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center;
  }
}

.nav-fill,
.nav-justified {
  .nav-item .nav-link {
    width: 100%; // Make sure button will grow
  }
}


// Tabbable tabs
//
// Hide tabbable panes to start, show them when `.active`

.tab-content {
  > .tab-pane {
    display: none;
  }
  > .active {
    display: block;
  }
}
", "scss/bootstrap/scss/_nav.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_nav.scss");
    }
}
