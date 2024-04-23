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

/* scss/bootstrap/scss/bootstrap-grid.scss */
class __TwigTemplate_a3b63dc757c32d8774a795dd5475b0cb7a091551dc23b5f942e0c88b2090e5aa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/bootstrap-grid.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/bootstrap-grid.scss"));

        // line 1
        echo "/*!
 * Bootstrap Grid v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

\$include-column-box-sizing: true !default;

@import \"functions\";
@import \"variables\";

@import \"mixins/lists\";
@import \"mixins/breakpoints\";
@import \"mixins/container\";
@import \"mixins/grid\";
@import \"mixins/utilities\";

@import \"vendor/rfs\";

@import \"containers\";
@import \"grid\";

@import \"utilities\";
// Only use the utilities we need
// stylelint-disable-next-line scss/dollar-variable-default
\$utilities: map-get-multiple(
  \$utilities,
  (
    \"display\",
    \"order\",
    \"flex\",
    \"flex-direction\",
    \"flex-grow\",
    \"flex-shrink\",
    \"flex-wrap\",
    \"justify-content\",
    \"align-items\",
    \"align-content\",
    \"align-self\",
    \"margin\",
    \"margin-x\",
    \"margin-y\",
    \"margin-top\",
    \"margin-end\",
    \"margin-bottom\",
    \"margin-start\",
    \"negative-margin\",
    \"negative-margin-x\",
    \"negative-margin-y\",
    \"negative-margin-top\",
    \"negative-margin-end\",
    \"negative-margin-bottom\",
    \"negative-margin-start\",
    \"padding\",
    \"padding-x\",
    \"padding-y\",
    \"padding-top\",
    \"padding-end\",
    \"padding-bottom\",
    \"padding-start\",
  )
);

@import \"utilities/api\";
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/bootstrap-grid.scss";
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
        return new Source("/*!
 * Bootstrap Grid v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

\$include-column-box-sizing: true !default;

@import \"functions\";
@import \"variables\";

@import \"mixins/lists\";
@import \"mixins/breakpoints\";
@import \"mixins/container\";
@import \"mixins/grid\";
@import \"mixins/utilities\";

@import \"vendor/rfs\";

@import \"containers\";
@import \"grid\";

@import \"utilities\";
// Only use the utilities we need
// stylelint-disable-next-line scss/dollar-variable-default
\$utilities: map-get-multiple(
  \$utilities,
  (
    \"display\",
    \"order\",
    \"flex\",
    \"flex-direction\",
    \"flex-grow\",
    \"flex-shrink\",
    \"flex-wrap\",
    \"justify-content\",
    \"align-items\",
    \"align-content\",
    \"align-self\",
    \"margin\",
    \"margin-x\",
    \"margin-y\",
    \"margin-top\",
    \"margin-end\",
    \"margin-bottom\",
    \"margin-start\",
    \"negative-margin\",
    \"negative-margin-x\",
    \"negative-margin-y\",
    \"negative-margin-top\",
    \"negative-margin-end\",
    \"negative-margin-bottom\",
    \"negative-margin-start\",
    \"padding\",
    \"padding-x\",
    \"padding-y\",
    \"padding-top\",
    \"padding-end\",
    \"padding-bottom\",
    \"padding-start\",
  )
);

@import \"utilities/api\";
", "scss/bootstrap/scss/bootstrap-grid.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\bootstrap-grid.scss");
    }
}
