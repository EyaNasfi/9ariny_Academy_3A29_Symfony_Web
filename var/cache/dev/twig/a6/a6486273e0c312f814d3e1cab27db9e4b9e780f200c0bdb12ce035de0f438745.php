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

/* scss/bootstrap/scss/mixins/_border-radius.scss */
class __TwigTemplate_79b5a6b5a2c23ddfba0f788b03d94d0ba1296235fe0b011a877dd36ec0e51702 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_border-radius.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_border-radius.scss"));

        // line 1
        echo "// stylelint-disable property-disallowed-list
// Single side border-radius

// Helper function to replace negative values with 0
@function valid-radius(\$radius) {
  \$return: ();
  @each \$value in \$radius {
    @if type-of(\$value) == number {
      \$return: append(\$return, max(\$value, 0));
    } @else {
      \$return: append(\$return, \$value);
    }
  }
  @return \$return;
}

// scss-docs-start border-radius-mixins
@mixin border-radius(\$radius: \$border-radius, \$fallback-border-radius: false) {
  @if \$enable-rounded {
    border-radius: valid-radius(\$radius);
  }
  @else if \$fallback-border-radius != false {
    border-radius: \$fallback-border-radius;
  }
}

@mixin border-top-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
    border-top-right-radius: valid-radius(\$radius);
  }
}

@mixin border-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-right-radius: valid-radius(\$radius);
    border-bottom-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-right-radius: valid-radius(\$radius);
    border-bottom-left-radius: valid-radius(\$radius);
  }
}

@mixin border-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
    border-bottom-left-radius: valid-radius(\$radius);
  }
}

@mixin border-top-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
  }
}

@mixin border-top-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-left-radius: valid-radius(\$radius);
  }
}
// scss-docs-end border-radius-mixins
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_border-radius.scss";
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
        return new Source("// stylelint-disable property-disallowed-list
// Single side border-radius

// Helper function to replace negative values with 0
@function valid-radius(\$radius) {
  \$return: ();
  @each \$value in \$radius {
    @if type-of(\$value) == number {
      \$return: append(\$return, max(\$value, 0));
    } @else {
      \$return: append(\$return, \$value);
    }
  }
  @return \$return;
}

// scss-docs-start border-radius-mixins
@mixin border-radius(\$radius: \$border-radius, \$fallback-border-radius: false) {
  @if \$enable-rounded {
    border-radius: valid-radius(\$radius);
  }
  @else if \$fallback-border-radius != false {
    border-radius: \$fallback-border-radius;
  }
}

@mixin border-top-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
    border-top-right-radius: valid-radius(\$radius);
  }
}

@mixin border-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-right-radius: valid-radius(\$radius);
    border-bottom-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-right-radius: valid-radius(\$radius);
    border-bottom-left-radius: valid-radius(\$radius);
  }
}

@mixin border-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
    border-bottom-left-radius: valid-radius(\$radius);
  }
}

@mixin border-top-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
  }
}

@mixin border-top-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-left-radius: valid-radius(\$radius);
  }
}
// scss-docs-end border-radius-mixins
", "scss/bootstrap/scss/mixins/_border-radius.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_border-radius.scss");
    }
}
