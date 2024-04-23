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

/* scss/bootstrap/scss/mixins/_table-variants.scss */
class __TwigTemplate_ee6b47ba86c7e1cf68992e2063c80c459855e107dfca5c25f9985b66fcc9c8ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_table-variants.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_table-variants.scss"));

        // line 1
        echo "// scss-docs-start table-variant
@mixin table-variant(\$state, \$background) {
  .table-#{\$state} {
    \$color: color-contrast(opaque(\$body-bg, \$background));
    \$hover-bg: mix(\$color, \$background, percentage(\$table-hover-bg-factor));
    \$striped-bg: mix(\$color, \$background, percentage(\$table-striped-bg-factor));
    \$active-bg: mix(\$color, \$background, percentage(\$table-active-bg-factor));

    --#{\$variable-prefix}table-bg: #{\$background};
    --#{\$variable-prefix}table-striped-bg: #{\$striped-bg};
    --#{\$variable-prefix}table-striped-color: #{color-contrast(\$striped-bg)};
    --#{\$variable-prefix}table-active-bg: #{\$active-bg};
    --#{\$variable-prefix}table-active-color: #{color-contrast(\$active-bg)};
    --#{\$variable-prefix}table-hover-bg: #{\$hover-bg};
    --#{\$variable-prefix}table-hover-color: #{color-contrast(\$hover-bg)};

    color: \$color;
    border-color: mix(\$color, \$background, percentage(\$table-border-factor));
  }
}
// scss-docs-end table-variant
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_table-variants.scss";
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
        return new Source("// scss-docs-start table-variant
@mixin table-variant(\$state, \$background) {
  .table-#{\$state} {
    \$color: color-contrast(opaque(\$body-bg, \$background));
    \$hover-bg: mix(\$color, \$background, percentage(\$table-hover-bg-factor));
    \$striped-bg: mix(\$color, \$background, percentage(\$table-striped-bg-factor));
    \$active-bg: mix(\$color, \$background, percentage(\$table-active-bg-factor));

    --#{\$variable-prefix}table-bg: #{\$background};
    --#{\$variable-prefix}table-striped-bg: #{\$striped-bg};
    --#{\$variable-prefix}table-striped-color: #{color-contrast(\$striped-bg)};
    --#{\$variable-prefix}table-active-bg: #{\$active-bg};
    --#{\$variable-prefix}table-active-color: #{color-contrast(\$active-bg)};
    --#{\$variable-prefix}table-hover-bg: #{\$hover-bg};
    --#{\$variable-prefix}table-hover-color: #{color-contrast(\$hover-bg)};

    color: \$color;
    border-color: mix(\$color, \$background, percentage(\$table-border-factor));
  }
}
// scss-docs-end table-variant
", "scss/bootstrap/scss/mixins/_table-variants.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_table-variants.scss");
    }
}
