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

/* scss/bootstrap/scss/mixins/_utilities.scss */
class __TwigTemplate_8f205e828ff3cd17f7b1d891f7eab821efb2506ce3359d8ffb8a50fa226626fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_utilities.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_utilities.scss"));

        // line 1
        echo "// Utility generator
// Used to generate utilities & print utilities
@mixin generate-utility(\$utility, \$infix, \$is-rfs-media-query: false) {
  \$values: map-get(\$utility, values);

  // If the values are a list or string, convert it into a map
  @if type-of(\$values) == \"string\" or type-of(nth(\$values, 1)) != \"list\" {
    \$values: zip(\$values, \$values);
  }

  @each \$key, \$value in \$values {
    \$properties: map-get(\$utility, property);

    // Multiple properties are possible, for example with vertical or horizontal margins or paddings
    @if type-of(\$properties) == \"string\" {
      \$properties: append((), \$properties);
    }

    // Use custom class if present
    \$property-class: if(map-has-key(\$utility, class), map-get(\$utility, class), nth(\$properties, 1));
    \$property-class: if(\$property-class == null, \"\", \$property-class);

    // State params to generate pseudo-classes
    \$state: if(map-has-key(\$utility, state), map-get(\$utility, state), ());

    \$infix: if(\$property-class == \"\" and str-slice(\$infix, 1, 1) == \"-\", str-slice(\$infix, 2), \$infix);

    // Don't prefix if value key is null (eg. with shadow class)
    \$property-class-modifier: if(\$key, if(\$property-class == \"\" and \$infix == \"\", \"\", \"-\") + \$key, \"\");

    @if map-get(\$utility, rfs) {
      // Inside the media query
      @if \$is-rfs-media-query {
        \$val: rfs-value(\$value);

        // Do not render anything if fluid and non fluid values are the same
        \$value: if(\$val == rfs-fluid-value(\$value), null, \$val);
      }
      @else {
        \$value: rfs-fluid-value(\$value);
      }
    }

    \$is-rtl: map-get(\$utility, rtl);

    @if \$value != null {
      @if \$is-rtl == false {
        /* rtl:begin:remove */
      }
      .#{\$property-class + \$infix + \$property-class-modifier} {
        @each \$property in \$properties {
          #{\$property}: \$value if(\$enable-important-utilities, !important, null);
        }
      }

      @each \$pseudo in \$state {
        .#{\$property-class + \$infix + \$property-class-modifier}-#{\$pseudo}:#{\$pseudo} {
          @each \$property in \$properties {
            #{\$property}: \$value if(\$enable-important-utilities, !important, null);
          }
        }
      }
      @if \$is-rtl == false {
        /* rtl:end:remove */
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
        return "scss/bootstrap/scss/mixins/_utilities.scss";
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
        return new Source("// Utility generator
// Used to generate utilities & print utilities
@mixin generate-utility(\$utility, \$infix, \$is-rfs-media-query: false) {
  \$values: map-get(\$utility, values);

  // If the values are a list or string, convert it into a map
  @if type-of(\$values) == \"string\" or type-of(nth(\$values, 1)) != \"list\" {
    \$values: zip(\$values, \$values);
  }

  @each \$key, \$value in \$values {
    \$properties: map-get(\$utility, property);

    // Multiple properties are possible, for example with vertical or horizontal margins or paddings
    @if type-of(\$properties) == \"string\" {
      \$properties: append((), \$properties);
    }

    // Use custom class if present
    \$property-class: if(map-has-key(\$utility, class), map-get(\$utility, class), nth(\$properties, 1));
    \$property-class: if(\$property-class == null, \"\", \$property-class);

    // State params to generate pseudo-classes
    \$state: if(map-has-key(\$utility, state), map-get(\$utility, state), ());

    \$infix: if(\$property-class == \"\" and str-slice(\$infix, 1, 1) == \"-\", str-slice(\$infix, 2), \$infix);

    // Don't prefix if value key is null (eg. with shadow class)
    \$property-class-modifier: if(\$key, if(\$property-class == \"\" and \$infix == \"\", \"\", \"-\") + \$key, \"\");

    @if map-get(\$utility, rfs) {
      // Inside the media query
      @if \$is-rfs-media-query {
        \$val: rfs-value(\$value);

        // Do not render anything if fluid and non fluid values are the same
        \$value: if(\$val == rfs-fluid-value(\$value), null, \$val);
      }
      @else {
        \$value: rfs-fluid-value(\$value);
      }
    }

    \$is-rtl: map-get(\$utility, rtl);

    @if \$value != null {
      @if \$is-rtl == false {
        /* rtl:begin:remove */
      }
      .#{\$property-class + \$infix + \$property-class-modifier} {
        @each \$property in \$properties {
          #{\$property}: \$value if(\$enable-important-utilities, !important, null);
        }
      }

      @each \$pseudo in \$state {
        .#{\$property-class + \$infix + \$property-class-modifier}-#{\$pseudo}:#{\$pseudo} {
          @each \$property in \$properties {
            #{\$property}: \$value if(\$enable-important-utilities, !important, null);
          }
        }
      }
      @if \$is-rtl == false {
        /* rtl:end:remove */
      }
    }
  }
}
", "scss/bootstrap/scss/mixins/_utilities.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_utilities.scss");
    }
}
