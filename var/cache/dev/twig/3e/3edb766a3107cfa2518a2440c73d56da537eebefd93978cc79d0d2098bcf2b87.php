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

/* scss/bootstrap/scss/mixins/_deprecate.scss */
class __TwigTemplate_5e678d70a07fd90a45f5f335496dba980c8e8aa92813756923f954dd88da2e5b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_deprecate.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_deprecate.scss"));

        // line 1
        echo "// Deprecate mixin
//
// This mixin can be used to deprecate mixins or functions.
// `\$enable-deprecation-messages` is a global variable, `\$ignore-warning` is a variable that can be passed to
// some deprecated mixins to suppress the warning (for example if the mixin is still be used in the current version of Bootstrap)
@mixin deprecate(\$name, \$deprecate-version, \$remove-version, \$ignore-warning: false) {
  @if (\$enable-deprecation-messages != false and \$ignore-warning != true) {
    @warn \"#{\$name} has been deprecated as of #{\$deprecate-version}. It will be removed entirely in #{\$remove-version}.\";
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
        return "scss/bootstrap/scss/mixins/_deprecate.scss";
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
        return new Source("// Deprecate mixin
//
// This mixin can be used to deprecate mixins or functions.
// `\$enable-deprecation-messages` is a global variable, `\$ignore-warning` is a variable that can be passed to
// some deprecated mixins to suppress the warning (for example if the mixin is still be used in the current version of Bootstrap)
@mixin deprecate(\$name, \$deprecate-version, \$remove-version, \$ignore-warning: false) {
  @if (\$enable-deprecation-messages != false and \$ignore-warning != true) {
    @warn \"#{\$name} has been deprecated as of #{\$deprecate-version}. It will be removed entirely in #{\$remove-version}.\";
  }
}
", "scss/bootstrap/scss/mixins/_deprecate.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_deprecate.scss");
    }
}
