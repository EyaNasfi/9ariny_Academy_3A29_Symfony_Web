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

/* scss/bootstrap/scss/bootstrap.scss */
class __TwigTemplate_406398b2332820bb714d278591e26b6570d94c7156b65481c486fc4b3319f805 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/bootstrap.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/bootstrap.scss"));

        // line 1
        echo "/*!
 * Bootstrap v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

// scss-docs-start import-stack
// Configuration
@import \"functions\";
@import \"variables\";
@import \"mixins\";
@import \"utilities\";

// Layout & components
@import \"root\";
@import \"reboot\";
@import \"type\";
@import \"images\";
@import \"containers\";
@import \"grid\";
@import \"tables\";
@import \"forms\";
@import \"buttons\";
@import \"transitions\";
@import \"dropdown\";
@import \"button-group\";
@import \"nav\";
@import \"navbar\";
@import \"card\";
@import \"accordion\";
@import \"breadcrumb\";
@import \"pagination\";
@import \"badge\";
@import \"alert\";
@import \"progress\";
@import \"list-group\";
@import \"close\";
@import \"toasts\";
@import \"modal\";
@import \"tooltip\";
@import \"popover\";
@import \"carousel\";
@import \"spinners\";
@import \"offcanvas\";

// Helpers
@import \"helpers\";

// Utilities
@import \"utilities/api\";
// scss-docs-end import-stack
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/bootstrap.scss";
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
 * Bootstrap v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

// scss-docs-start import-stack
// Configuration
@import \"functions\";
@import \"variables\";
@import \"mixins\";
@import \"utilities\";

// Layout & components
@import \"root\";
@import \"reboot\";
@import \"type\";
@import \"images\";
@import \"containers\";
@import \"grid\";
@import \"tables\";
@import \"forms\";
@import \"buttons\";
@import \"transitions\";
@import \"dropdown\";
@import \"button-group\";
@import \"nav\";
@import \"navbar\";
@import \"card\";
@import \"accordion\";
@import \"breadcrumb\";
@import \"pagination\";
@import \"badge\";
@import \"alert\";
@import \"progress\";
@import \"list-group\";
@import \"close\";
@import \"toasts\";
@import \"modal\";
@import \"tooltip\";
@import \"popover\";
@import \"carousel\";
@import \"spinners\";
@import \"offcanvas\";

// Helpers
@import \"helpers\";

// Utilities
@import \"utilities/api\";
// scss-docs-end import-stack
", "scss/bootstrap/scss/bootstrap.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\bootstrap.scss");
    }
}
