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

/* scss/bootstrap/scss/_root.scss */
class __TwigTemplate_c5e2a55a6dd040bde1c872b65052bb5c83b288dacb7350306da1a11c8bbc761c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_root.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_root.scss"));

        // line 1
        echo ":root {
  // Custom variable values only support SassScript inside `#{}`.
  @each \$color, \$value in \$colors {
    --#{\$variable-prefix}#{\$color}: #{\$value};
  }

  @each \$color, \$value in \$theme-colors {
    --#{\$variable-prefix}#{\$color}: #{\$value};
  }

  // Use `inspect` for lists so that quoted items keep the quotes.
  // See https://github.com/sass/sass/issues/2383#issuecomment-336349172
  --#{\$variable-prefix}font-sans-serif: #{inspect(\$font-family-sans-serif)};
  --#{\$variable-prefix}font-monospace: #{inspect(\$font-family-monospace)};
  --#{\$variable-prefix}gradient: #{\$gradient};
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
        return "scss/bootstrap/scss/_root.scss";
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
        return new Source(":root {
  // Custom variable values only support SassScript inside `#{}`.
  @each \$color, \$value in \$colors {
    --#{\$variable-prefix}#{\$color}: #{\$value};
  }

  @each \$color, \$value in \$theme-colors {
    --#{\$variable-prefix}#{\$color}: #{\$value};
  }

  // Use `inspect` for lists so that quoted items keep the quotes.
  // See https://github.com/sass/sass/issues/2383#issuecomment-336349172
  --#{\$variable-prefix}font-sans-serif: #{inspect(\$font-family-sans-serif)};
  --#{\$variable-prefix}font-monospace: #{inspect(\$font-family-monospace)};
  --#{\$variable-prefix}gradient: #{\$gradient};
}
", "scss/bootstrap/scss/_root.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_root.scss");
    }
}
