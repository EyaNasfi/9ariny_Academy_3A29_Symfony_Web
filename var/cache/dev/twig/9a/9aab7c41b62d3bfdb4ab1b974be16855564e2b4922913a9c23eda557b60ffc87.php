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

/* scss/bootstrap/scss/_badge.scss */
class __TwigTemplate_652384c5caf32d8155bfee4540179762453cb344c3608d62c2862f78c404ce12 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_badge.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_badge.scss"));

        // line 1
        echo "// Base class
//
// Requires one of the contextual, color modifier classes for `color` and
// `background-color`.

.badge {
  display: inline-block;
  padding: \$badge-padding-y \$badge-padding-x;
  @include font-size(\$badge-font-size);
  font-weight: \$badge-font-weight;
  line-height: 1;
  color: \$badge-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  @include border-radius(\$badge-border-radius);
  @include gradient-bg();

  // Empty badges collapse automatically
  &:empty {
    display: none;
  }
}

// Quick fix for badges in buttons
.btn .badge {
  position: relative;
  top: -1px;
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
        return "scss/bootstrap/scss/_badge.scss";
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
// Requires one of the contextual, color modifier classes for `color` and
// `background-color`.

.badge {
  display: inline-block;
  padding: \$badge-padding-y \$badge-padding-x;
  @include font-size(\$badge-font-size);
  font-weight: \$badge-font-weight;
  line-height: 1;
  color: \$badge-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  @include border-radius(\$badge-border-radius);
  @include gradient-bg();

  // Empty badges collapse automatically
  &:empty {
    display: none;
  }
}

// Quick fix for badges in buttons
.btn .badge {
  position: relative;
  top: -1px;
}
", "scss/bootstrap/scss/_badge.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_badge.scss");
    }
}
